<?php

@session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Slim\Psr7\Response as ResponsePsr7;

require './vendor/autoload.php';
require './RedBean/rb.php';
require './Autoloader.php';
$pathConfigStandAlone = './config_standalone.php';
if (file_exists($pathConfigStandAlone)) {
    require './config_standalone.php';
} else {
    require './Config/config_standalone.php';
}
require './Config/'.AGENT.'/setting.php';
header('Access-Control-Allow-Origin: *');
date_default_timezone_set("Asia/Bangkok");
if (isset($_GET['lang']) && $_GET['lang'] == 'en') {
    $_SESSION["lang"] = 'en';
} else if (isset($_GET['lang']) && $_GET['lang'] == 'th') {
    $_SESSION["lang"] = 'th';
} else {
    if ($_SESSION["lang"] == NULL || $_SESSION["lang"] == "") {
        $_SESSION["lang"] = 'th';
    }
}


//$_SESSION["lang"] = 'th';
//Environment Configulation #Production:PROD , #Develop:DEV 


$_SESSION["lang"] = ($_SESSION["lang"] == NULL ? "th" : $_SESSION["lang"]);
$i18n = new i18n('./lang/lang_' . $_SESSION["lang"] . '.json', './langcache/', 'th');
$i18n->init();
$util = new Utility();

// Instantiate App
$cVersion = '/api/v1';
$rootApp = ($_SERVER['SERVER_NAME'] == 'localhost' ? 'ez-casino' : '');
$_SESSION['BasePath'] = ($_SERVER['SERVER_NAME'] == 'localhost' ? 'http' : 'https') . '://' . $_SERVER['SERVER_NAME'] . '' . ($_SERVER['SERVER_NAME'] == 'localhost' ? "/$rootApp" : '');
$_SESSION['cVersion'] = $cVersion;
$_SESSION['contextPathApi'] = $_SESSION['BasePath'] . $_SESSION['cVersion'];
$_SESSION['contextMin'] = ".min"; //".min"
$_SESSION['version'] = "2.6.60";

$app = AppFactory::create();
$app->setBasePath(($_SERVER['SERVER_NAME'] == 'localhost' ? "/$rootApp" : '') . '');
$renderer = new PhpRenderer(__DIR__ . '/templated');
// Add error middleware
$app->addErrorMiddleware(true, true, true);
$app->addBodyParsingMiddleware();

//Set Render Page Only
$templateConfig = [
    "title" => "Title",
    "contextMin" => ""
];

$app->add(function (Request $request, RequestHandler $handler) use ($util, $renderer, $templateConfig, $cVersion, $rootApp) {


    if ($util->validateScript($request)) {
        $response = new ResponsePsr7();
        $renderer->setLayout('');
        return $renderer->render($response, "error/404.php");
    }




    $pathUrl = str_replace('/' . $rootApp, '', $request->getUri()->getPath());

    if (
        $pathUrl === '/' ||
        strpos($request->getUri()->getPath(), '') !== false ||
        strpos($request->getUri()->getPath(), '/Register') !== false ||
        strpos($request->getUri()->getPath(), '/IP') !== false ||
        strpos($request->getUri()->getPath(), $cVersion . '/Authen/Login') !== false ||
        strpos($request->getUri()->getPath(), $cVersion . '/Authen/Token') !== false ||
        strpos($request->getUri()->getPath(), $cVersion . '/Authen/ResetPassword') !== false
    ) {
        $response = $handler->handle($request);
        if ($response->getStatusCode() == "404") {
            $response = new ResponsePsr7();
            $renderer->setLayout('');
            return $renderer->render($response, "error/404.php");
        }
        return $response;
    } else if ($util->isBadRequest()) {
        $response = new ResponsePsr7();
        $renderer->setLayout('');
        return $renderer->render($response, "error/403.php");
    } else if ($util->authenSessionExpire()) {
        $util->DeleteSession();
        $response = new ResponsePsr7();
        $renderer->setLayout('');
        return $renderer->render($response, "error/403.php");
    } else if ($util->isResetPass()) {
        if (strpos($request->getUri(), '/resetPassword') !== false) {
            $response = $handler->handle($request);
            return $response;
        }
        $response = new ResponsePsr7();
        return $response->withStatus(302)->withHeader('Location', 'resetPassword');
    } else {
        $response = $handler->handle($request);
        if ($response->getStatusCode() == "404") {
            $response = new ResponsePsr7();
            $renderer->setLayout('');
            return $renderer->render($response, "error/404.php");
        }
        return $response;
    }
});

$sessionExpire = function ($request, $handler) use ($util, $renderer, $templateConfig, $cVersion) {
    if ($_SESSION["PROFILE"] != NULL) {
        $util->updateSessionExpire();
        $response = $handler->handle($request);
        return $response;
    } else {
        $response = new ResponsePsr7();
        $renderer->setLayout('');
        return $renderer->render($response, "error/403.php");
    }
};

require_once ('./Controller/AuthenController.php');
require_once ('./Controller/RegisterController.php');
require_once ('./Controller/LobbyController.php');
require_once ('./Controller/MemberController.php');
require_once ('./Controller/HistoryController.php');
require_once ('./Controller/WithdrawController.php');
require_once ('./Controller/DepositController.php');
require_once ('./Controller/CouponController.php');
require_once ('./Controller/CashBackController.php');
require_once ('./Controller/NotifyController.php');
require_once ('./Controller/ProfileController.php');
require_once ('./Controller/AffiliateController.php');
require_once ('./Controller/LuckyWheelController.php');

try {
    $app->run();
} catch (Exception $e) {
    die(json_encode(array("status" => "failed", "message" => "This action is not allowed")));
}