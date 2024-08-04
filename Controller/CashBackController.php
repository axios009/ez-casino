<?php

@session_start();

$app->map(['GET'], $cVersion . '/Cashback/History', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Cashback/History', $req);

    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['GET'], $cVersion . '/Cashback/Receive', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "f_amount" => $_SESSION['PROFILE']->balance->cashback,
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    if ($_SESSION['PROFILE']->balance->cashback <= 0) {
        $response->getBody()->write($util->resp(2083, L::Err_2083));
        return $response;
    }

    $resp = $util->post('/Cashback/Receive', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->balance = $resp->data;
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);
