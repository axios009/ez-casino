<?php

@session_start();

$app->map(['POST'], $cVersion . '/Coupon/Save', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "s_code" => $r->s_coupon_code,
        "i_ip" => $util->get_real_ip(),
        "actionBy" => $_SESSION["PROFILE"]->username
    );

    $resp = $util->post('/Coupon/Receive', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->balance = $resp->data;
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);
