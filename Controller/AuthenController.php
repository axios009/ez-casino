<?php

@session_start();

$app->map(['GET'], '', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $renderer->setLayout('body-login.php');
    return $renderer->render($response, "../module/authen/login.php", $templateConfig);
});
$app->map(['GET'], '/', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $renderer->setLayout('body-login.php');
    return $renderer->render($response, "../module/authen/login.php", $templateConfig);
});
$app->map(['GET'], '/login', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $renderer->setLayout('body-login.php');
    $templateConfig['action'] = 'login';
    return $renderer->render($response, "../module/authen/login.php", $templateConfig);
});
$app->map(['GET'], '/register', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $renderer->setLayout('body-login.php');
    $templateConfig['action'] = 'register';
    return $renderer->render($response, "../module/authen/login.php", $templateConfig);
});
$app->map(['GET'], '/affiliate', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $ref = $request->getQueryParams()['ref'];
    $renderer->setLayout('body-login.php');
    $templateConfig['ref'] = $ref;
    $templateConfig['action'] = 'affiliate';
    return $renderer->render($response, "../module/authen/login.php", $templateConfig);
});
$app->map(['GET'], '/Register/{ref}', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $ref = $request->getAttribute('ref');
    $templateConfig['ref'] = $ref;
    return $renderer->render($response, "../module/authen/shortUrl.php", $templateConfig);
});

$app->map(['GET'], '/resetPassword', function ($request, $response) use ($util, $renderer, $templateConfig) {
    return $renderer->render($response, "../module/authen/resetPassword.php", $templateConfig);
})->add($sessionExpire);

//<editor-fold defaultstate="collapsed" desc="/Authen/Token">
$app->map(['GET'], $cVersion . '/Authen/Token/{token}', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $tokens = $request->getAttribute('token');
    $token = explode($util->_keyPipe, $tokens);
    $agentCode = base64_decode(base64_decode(base64_decode($token[0])));
    $username = base64_decode(base64_decode(base64_decode($token[1])));
    $password = base64_decode(base64_decode(base64_decode($token[2])));

    $r = (Object) $r;
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];
    $req = array(
        "agentCode" => $agentCode,
        "username" => $username,
        "password" => md5($password),
        "ip" => $util->get_real_ip()
    );
    $resp = $util->post('/Authen/Login', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }


    $_SESSION["PROFILE"] = $resp->data;
    $_SESSION["MASTER"] = array(
        "BANK" => $util->BankMaster()
    );

    $_SESSION["NEWS"] = ($_SESSION['PROFILE']->info->news->s_news != NULL ? TRUE : FALSE);
    $contextPath = '/Lobby';
    return $response->withStatus(302)->withHeader('Location', $_SESSION['BasePath'] . $contextPath);
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Authen/Login">
$app->map(['POST'], $cVersion . '/Authen/Login', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $r = (Object) $request->getParsedBody();
    // ถ้ากรณีที่ต้องการให้เป็น Object เวลาเรียกใช้ตัวแปล ex. $r->username;
    // $r = $request->getParsedBody(); //ถ้ากรณีที่เป็น array ปกติ เวลาเรียกใช้ตัวแปล ex. $r['username'];



    if (isset($_COOKIE['pwd'])) {
        if ($r->password === $_COOKIE['pwd']) {
            $r->password = base64_decode(base64_decode(base64_decode($r->password)));
        } else {
            $r->password = $r->password;
        }
    } else {
        $r->password = $r->password;
    }

    $req = array(
        "agentCode" => $r->agentCode,
        "username" => $r->username,
        "password" => md5($r->password),
        "ip" => $util->get_real_ip()
    );
    $resp = $util->post('/Authen/Login', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }


    $_SESSION["PROFILE"] = $resp->data;
    $_SESSION["MASTER"] = array(
        "BANK" => $util->BankMaster()
    );
    $_SESSION["NEWS"] = ($_SESSION['PROFILE']->info->news != NULL ? TRUE : FALSE);
    $contextPath = '/Lobby';
    if ($r->remember == 'Y' && $r->remember != NULL) {
        setcookie('userName', $r->username, time() + (10 * 365 * 24 * 60 * 60), '/');
        setcookie('pwd', base64_encode(base64_encode(base64_encode($r->password))), time() + (10 * 365 * 24 * 60 * 60), '/');
    } else {
        if (isset($_COOKIE['userName'])) {
            setcookie('userName', '', 0, '/');
        }
        if (isset($_COOKIE['pwd'])) {
            setcookie('pwd', '', 0, '/');
        }
    }
    $response->getBody()->write($util->resp(0, L::Success_0, $contextPath));
    return $response;
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Authen/ResetPassword">
$app->map(['POST'], $cVersion . '/Authen/ResetPassword', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $r = (Object) $request->getParsedBody();
    if ($util->isEmpty($r->password_new)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_passwordNew, L::Err_2002)));
        return $response;
    } else if ($util->detectCharacter($r->password_new, 8, 20)) {
        $response->getBody()->write($util->resp(2013, $util->setMsg(L::lb_passwordNew, L::Err_2013, '8 - 20')));
        return $response;
    }

    if ($util->isEmpty($r->password_confirm)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_passwordConfirm, L::Err_2002)));
        return $response;
    }

    if ($r->password_new != $r->password_confirm) {
        $response->getBody()->write($util->resp(2012, $util->setMsg(L::lb_password, L::Err_2012)));
        return $response;
    }

    $req = array(
        "token" => $_SESSION["PROFILE"]->token,
        "agentCode" => $_SESSION["PROFILE"]->agent,
        "username" => $_SESSION["PROFILE"]->username,
        "password" => md5($r->password_new),
        "password_original" => $r->password_new,
        "actionBy" => $_SESSION["PROFILE"]->username,
    );
    $resp = $util->post('/Authen/ResetPassword', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->info->login->s_reset_pass = 'N';
    $contextPath = '/Lobby';
    $response->getBody()->write($util->resp(0, L::Success_0, $contextPath));
    return $response;
})->add($sessionExpire);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Logout">
$app->map(['GET'], '/Logout', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $link_logout = $_SESSION["PROFILE"]->info->configLobby->s_link_logout;
    unset($_SESSION["PROFILE"]);
    session_start();
    session_destroy();
    //$link_logout = "login";
    $url = ($link_logout != null ? $link_logout : "login");
    return $response->withStatus(302)->withHeader('Location', $url);
});
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="Encrypt & Decrypt">
$app->map(['POST'], $cVersion . '/ConvertToJSON', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $r = $request->getParsedBody();

    $response->getBody()->write(json_encode($r));
    return $response;
});

$app->map(['POST'], $cVersion . '/Encrypt', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = (Object) $request->getParsedBody();
    $enc = $util->encrypt($r->data);
    $resp = array(
        "original" => $r->data,
        "encrypt" => $enc
    );
    $response->getBody()->write(json_encode($resp));
    return $response;
});

$app->map(['POST'], $cVersion . '/Decrypt', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = (Object) $request->getParsedBody();
    $dec = $util->decrypt($r->data);
    $resp = array(
        "original" => $r->data,
        "decrypt" => $dec
    );
    $response->getBody()->write(json_encode($resp));
    return $response;
});

$app->map(['GET'], '/IP', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = (Object) $request->getParsedBody();

    $resp = array(
        "ip" => $util->get_real_ip(),
    );
    $response->getBody()->write(json_encode($resp));
    return $response;
});

//</editor-fold>