<?php

@session_start();

$app->map(['GET'], $cVersion . '/Affiliate/History', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Affiliate/History', $req);

    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['GET'], $cVersion . '/Affiliate/Receive', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "f_amount" => $_SESSION['PROFILE']->balance->affiliate,
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    if ($_SESSION['PROFILE']->balance->affiliate <= 0) {
        $response->getBody()->write($util->resp(2083, L::Err_2083));
        return $response;
    }

    $resp = $util->post('/Affiliate/Receive', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->balance = $resp->data;
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Affiliate/Inquiry/Register', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "d_date" => $r->d_date,
        "page_start" => $r->page_start,
    );
    $resp = $util->post('/Affiliate/Inquiry/Register', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Affiliate/Inquiry/RegisterByYear', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "d_year" => $r->d_year,
        "page_start" => $r->page_start,
    );
    $resp = $util->post('/Affiliate/Inquiry/RegisterByYear', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Affiliate/Inquiry/Income', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "d_start" => $r->d_start,
        "d_end" => $r->d_end,
        "page_start" => $r->page_start,
    );
    $resp = $util->post('/Affiliate/Inquiry/Income', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
    return $response;
})->add($sessionExpire);

