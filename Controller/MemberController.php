<?php

@session_start();

//<editor-fold defaultstate="collapsed" desc="/Member/Balance">
$app->map(['GET'], $cVersion . '/Member/Balance', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
    );
    $resp = $util->post('/Member/Balance', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $resp = (array) $resp;
    $resp['updatetime'] = date('Y-m-d h:i:s');
    $resp = (Object) $resp;
    $_SESSION["PROFILE"]->balance = $resp->data;
    $response->getBody()->write($util->respFromAPI($resp));
    return $response;
})->add($sessionExpire);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Member/ChangePassword">
$app->map(['POST'], $cVersion . '/Member/ChangePassword', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $r = (Object) $request->getParsedBody();

    if ($util->isEmpty($r->passwordOld)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_passwordOld, L::Err_2002)));
        return $response;
    } else if (md5($r->passwordOld) != $_SESSION["PROFILE"]->info->login->s_password) {
        $response->getBody()->write($util->resp(2004, $util->setMsg(L::lb_passwordOld, L::Err_2004)));
        return $response;
    }

    if ($util->isEmpty($r->passwordNew)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_passwordNew, L::Err_2002)));
        return $response;
    } else if ($util->detectCharacter($r->passwordNew, 8, 20)) {
        $response->getBody()->write($util->resp(2013, $util->setMsg(L::lb_passwordNew, L::Err_2013, '8 - 20')));
        return $response;
    }

    if ($util->isEmpty($r->passwordConfirm)) {
        $response->getBody()->write($util->resp(2002, $util->setMsg(L::lb_passwordConfirm, L::Err_2002)));
        return $response;
    }

    if ($r->passwordNew != $r->passwordConfirm) {
        $response->getBody()->write($util->resp(2012, $util->setMsg(L::lb_password, L::Err_2012)));
        return $response;
    }

    $req = array(
        "token" => $_SESSION["PROFILE"]->token,
        "agentCode" => $_SESSION["PROFILE"]->agent,
        "username" => $_SESSION["PROFILE"]->username,
        "password" => md5($r->passwordNew),
        "password_original" => $r->passwordNew,
        "actionBy" => $_SESSION["PROFILE"]->username,
    );
    $resp = $util->post('/Authen/ResetPassword', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->info->login->s_password = md5($r->passwordNew);
    $_SESSION["PROFILE"]->info->login->s_password_decode = $r->passwordNew;
    $response->getBody()->write($util->resp(0, L::Success_0, $r->passwordNew));
    return $response;
})->add($sessionExpire);
//</editor-fold>
//<editor-fold defaultstate="collapsed" desc="/Member/Balance">
$app->map(['GET'], $cVersion . '/Member/ClearTurnOver', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
    );
    $resp = $util->post('/Member/ClearTurnOver', $req);

    $response->getBody()->write($util->resp(0, L::Success_0));
    return $response;
})->add($sessionExpire);
//</editor-fold>