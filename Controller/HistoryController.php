<?php

@session_start();

//<editor-fold defaultstate="collapsed" desc="/Member/History/Financ">
$app->map(['GET'], $cVersion . '/Member/History/Finance', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Member/History/Finance', $req);

    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }

    $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
    return $response;
})->add($sessionExpire);
//</editor-fold>