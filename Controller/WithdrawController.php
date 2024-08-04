<?php

@session_start();

$app->map(['GET'], $cVersion . '/Withdraw/Check/WaitApprove', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $amount = 0;
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $info = $util->post('/UpdateInfo', $req);
    if (!$util->statusError($resp)) {
        $_SESSION["PROFILE"]->info = $info->data;
    }
    if ($_SESSION['PROFILE']->info->configWithdraw->s_withdraw_all == 'Y') {
        $resp = $util->post('/Member/Balance', $req);
        if ($util->statusError($resp)) {
            $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
            return $response;
        }
        $amount = $resp->data->amount;
    }


    $resp = $util->post('/Withdraw/Check/WaitApprove', $req);
    $data['amount'] = $amount;
    $data['s_withdraw_all'] = $_SESSION['PROFILE']->info->configWithdraw->s_withdraw_all;
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $data));
    return $response;
})->add($sessionExpire);

$app->map(['POST'], $cVersion . '/Withdraw/CreateTransaction', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $r = $request->getParsedBody();
    $bank = $_SESSION['PROFILE']->info->bankList[0];

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Withdraw/Check/WaitApprove', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }

    if ($_SESSION['PROFILE']->info->configWithdraw->s_withdraw_all == 'Y') {
        $req = array(
            "s_agent_code" => $_SESSION["PROFILE"]->agent,
            "s_username" => $_SESSION["PROFILE"]->username
        );
        $resp = $util->post('/Member/Balance', $req);
        if ($util->statusError($resp)) {
            $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
            return $response;
        }

        if (number_format($r['credit'], 2) != number_format($resp->data->amount, 2)) {
            $response->getBody()->write($util->resp(2082, L::Err_2082));
            return $response;
        }
    }




    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "f_amount" => $r['credit'],
        "i_bank" => $bank->id,
        "i_ip" => $util->get_real_ip(),
        "actionBy" => $_SESSION["PROFILE"]->username
    );
    $resp = $util->post('/Withdraw/CreateTransaction', $req);
    $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    return $response;
})->add($sessionExpire);

