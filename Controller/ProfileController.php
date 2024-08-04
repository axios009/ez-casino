<?php

@session_start();

$app->map(['POST'], $cVersion . '/UpdateInfo', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/UpdateInfo', $req);
    if (!$util->statusError($resp)) {
        $_SESSION["PROFILE"]->info = $resp->data;
    }
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Member/Bank/Default', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "id" => $r->key,
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Member/Bank/Default', $req);
    if (!$util->statusError($resp)) {
        $_SESSION["PROFILE"]->info->bankList = $resp->data;
    }
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);
