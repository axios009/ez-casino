<?php

@session_start();

$app->map(['GET'], '/Lobby', function ($request, $response) use ($util, $renderer, $templateConfig) {


    $_SESSION["PROFILE"]->info->slide = $util->CreateSlide($_SESSION["PROFILE"]->agent, $_SESSION["PROFILE"]->info->slide);
    $_SESSION["PROFILE"]->info->promotionList = $util->CreatePromotion($_SESSION["PROFILE"]->agent, $_SESSION["PROFILE"]->info->promotionList);
//    if ($_SESSION["NEWS"]) {
//        $_SESSION['PROFILE']->info->news->newsImg = $util->CreateNewsImg($_SESSION["PROFILE"]->agent, $_SESSION['PROFILE']->info->news);
//    }
    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
    );
    $resp = $util->post('/Member/Balance', $req);
    if ($util->statusError($resp)) {
        $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
        return $response;
    }
    $_SESSION["PROFILE"]->balance = $resp->data;
    $resp = $util->post('/Game/Brand/List', $req);
    if (!$util->statusError($resp)) {
        $_SESSION["PROFILE"]->info->brandList = $resp->data;
    }
    $news = $_SESSION["NEWS"];
    $_SESSION["NEWS"] = false;
    $ListBrand = NULL;
    $ListBrand = $resp->data;
    $Hothit = $resp->data->HOTHIT;
    $FAVORITE = $resp->data->FAVORITE;
    $Hothit = $util->randomPercen($Hothit); //$ListGame = $util->randomPercen($ListGame);
    $FAVORITE = $util->randomPercen($FAVORITE);
    $ListBrand->FISHING = $util->randomPercen($ListBrand->FISHING);
    $templateConfig['ListBrand'] = $ListBrand;
    $templateConfig['HothitBrand'] = $Hothit;
    $templateConfig['FAVORITE'] = $FAVORITE;
    $templateConfig['NEWSMODAL'] = $news;
    $renderer->setLayout('body.php');
    return $renderer->render($response, "../module/page/lobby.php", $templateConfig);
})->add($sessionExpire);

$app->map(['GET'], '/Game/{game}', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $game = $request->getAttribute('game');
    $r = (object) $r;

    $brand = $_SESSION["PROFILE"]->info->brandList;
    $ListBrand = array_merge($brand->CASINO, $brand->SLOT, $brand->SPORT);
    $brandCode = "";
    $gameType = "";
    foreach ($ListBrand as $k => $v) {
        if ($v->s_pbrand_code == $game) {
            $brandCode = $v->s_brand_code;
            $gameType = $v->s_type;
            break;
        }
    }
    if ($gameType != 'CASINO' && $gameType != 'SPORT') {

        $req = array(
            "s_agent_code" => $_SESSION["PROFILE"]->agent,
            "s_username" => $_SESSION["PROFILE"]->username,
            "s_brand_code" => $brandCode,
            "ip_client" => $util->get_real_ip(),
            "isMobile" => ($_SESSION['mobile'] ? "true" : "false")
        );
        $resp = $util->post('/Game/ListGame', $req);
        $ListGame = NULL;
        $ListGame = $resp->data;
        $_SESSION['PAGEGAME'] = $ListGame;
        $ListGame = $util->randomPercen($ListGame);
        if ($search != NULL) {
            $ListGame = $util->SearchDataInArray($search, $ListGame, 's_game_name');
        }
        $templateConfig['ListGame'] = $ListGame;
        $templateConfig['BrandCode'] = $brandCode;
        $templateConfig['BrandGame'] = $game;
        $templateConfig['gameBtn'] = $gameType;
        $renderer->setLayout('body.php');
        return $renderer->render($response, "../module/page/lobbyGame.php", $templateConfig);
    } else if ($gameType == 'CASINO') {

        $req = array(
            "s_brand_code" => $v->s_brand_code,
            "s_agent_code" => $_SESSION["PROFILE"]->agent,
            "s_username" => $_SESSION["PROFILE"]->username,
            "s_game_code" => 'lobby',
            "s_lang" => $_SESSION["lang"],
            "ip_client" => $util->get_real_ip(),
            "isMobile" => ($_SESSION['mobile'] ? "true" : "false")
        );
        $resp = $util->post('/Game/Access', $req);
        if ($resp->url != NULL && $resp->statusCode == 0) {
            return $response->withStatus(302)->withHeader('Location', $resp->url);
        } else {
            $templateConfig['error'] = $resp->statusDesc;
            $renderer->setLayout('body.php');
            return $renderer->render($response, "../error/game_403.php", $templateConfig);
        }
    } else if ($gameType == 'SPORT') {
        $req = array(
            "s_brand_code" => $v->s_brand_code,
            "s_agent_code" => $_SESSION["PROFILE"]->agent,
            "s_username" => $_SESSION["PROFILE"]->username,
            "s_game_code" => 'lobby',
            "s_lang" => $_SESSION["lang"],
            "ip_client" => $util->get_real_ip(),
            "isMobile" => ($_SESSION['mobile'] ? "true" : "false")
        );
        $resp = $util->post('/Game/Access', $req);
        if ($resp->url != NULL && $resp->statusCode == 0) {
            return $response->withStatus(302)->withHeader('Location', $resp->url);
        } else {
            $templateConfig['error'] = $resp->statusDesc;
            $renderer->setLayout('body.php');
            return $renderer->render($response, "../error/game_403.php", $templateConfig);
        }
    } else {
        return $renderer->render($response, "error/404.php");
    }
})->add($sessionExpire);

$app->map(['GET'], '/GameLobby', function ($request, $response) use ($util, $renderer, $templateConfig) {

    $req = array(
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "gameCode" => '',
    );
    $resp = $util->post('/Game/Access', $req);
    return $response->withStatus(302)->withHeader('Location', $resp->url);
})->add($sessionExpire);

$app->map(['GET'], '/AccessGamePage/{brandCode}/{gameCode}', function ($request, $response) use ($util, $renderer, $templateConfig) {
    $brandCode = $request->getAttribute('brandCode');
    $gameCode = $request->getAttribute('gameCode');

    $req = array(
        "s_brand_code" => $brandCode,
        "s_agent_code" => $_SESSION["PROFILE"]->agent,
        "s_username" => $_SESSION["PROFILE"]->username,
        "s_game_code" => ($gameCode == NULL ? 'lobby' : $gameCode),
        "ip_client" => $util->get_real_ip(),
        "s_lang" => $_SESSION["lang"]
    );
    $resp = $util->post('/Game/Access', $req);
    if ($resp == NULL) {
        $renderer->setLayout('body.php');
        return $renderer->render($response, "../error/game_403.php", $templateConfig);
    } else {
        if ($brandCode == 'B006' && $resp->code == 0 && $resp->res_html != NULL) {
            echo $resp->res_html;
        } else if ($resp->url != NULL && $resp->statusCode == 0) {
            return $response->withStatus(302)->withHeader('Location', $resp->url);
        } else {
            $templateConfig['error'] = $resp->statusDesc;
            $renderer->setLayout('body.php');
            return $renderer->render($response, "../error/game_403.php", $templateConfig);
        }
    }
})->add($sessionExpire);
