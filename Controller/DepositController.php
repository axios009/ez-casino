<?php

@session_start();

$app->map(['POST'], $cVersion . '/Deposit/Form2Fill', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Check/WaitApprove', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "i_bank_agent" => $r['i_bank_agent'],
        "s_username" => $_SESSION["PROFILE"]->username,
        "turnover" => ($util->isEmptyDDL($r['prmId']) ? 1 : 0 ),
        "credit" => $r['amountDeposit'],
        "s_prm_code" => ($util->isEmptyDDL($r['prmId']) ? '' : $r['prmCode'] ),
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Form2Fill', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

$app->map(['GET'], $cVersion . '/Deposit/Check/WaitApprove', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Check/WaitApprove', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

$app->map(['GET'], $cVersion . '/Deposit/Inquiry/type', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Check/PlayerPromotion', $req);
    $resp->data->type = $_SESSION["PROFILE"]->info->configCash->s_type;
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['GET'], $cVersion . '/Deposit/Check/PlayerPromotion', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Check/PlayerPromotion', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $resp->data));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Deposit/Promotion/Select', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "s_type" => $r->s_type,
        "s_prm_code" => ($util->isEmptyDDL($r->key) ? '' : $r->key ),
        "i_ip" => '1.1.1.1',
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Promotion/Select', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Deposit/UploadSlip', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $r = (object) $r;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "qrcode" => $r->qr,
        "i_bank_agent" => $util->decrypt($r->i_bank_agent),
        "s_prm_code" => ($util->isEmptyDDL($r->s_prm_code) ? '' : $r->s_prm_code ),
        "i_ip" => $util->get_ip(),
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Deposit/Slip', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

