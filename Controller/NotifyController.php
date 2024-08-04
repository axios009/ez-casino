<?php

@session_start();

$app->map(['POST'], $cVersion . '/Notification', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );

    $resp = $util->post('/Notification', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, (array)$resp->data));
    return $response;
})->add($sessionExpire);



