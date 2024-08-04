<?php

@session_start();


$app->map(['POST'], $cVersion . '/LuckyWheel/Inquiry', function ($request, $response) use ($util, $renderer, $templateConfig) {

  $req = array (
    "s_agent_code" => $_SESSION["PROFILE"]->agent,
    "s_username" => $_SESSION["PROFILE"]->username
  );

  $resp = $util->post('/LuckyWheel/Inquiry', $req);
  $item = array ();
  if ($resp != NULL) {
    if ($resp->statusCode == 0) {
      $eventCode = $resp->data[0]->eventCode;
      foreach ($resp->data[0]->eventItem as $k => $v) {
        array_push($item, array ("value" => $v->s_name, "imageUrl" => $v->s_path, "encrypt" => $util->encrypt($v->id)));
      }
      $bean['i_per_day'] = $resp->data[0]->i_per_day;
      $bean['i_max'] = $resp->data[0]->i_max;
      $bean['times'] = $resp->data[0]->times;
      $bean['point'] = $resp->data[0]->point;
      $bean['day'] = $resp->data[0]->day;
      $bean['all'] = $resp->data[0]->all;
      $bean['eventCode'] = $eventCode;
      $bean['Item'] = $item;
      $response->getBody()->write($util->resp(0, L::Success_0, $bean));
      return $response;
    } else {
      $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
      return $response;
    }
  } else {
    $response->getBody()->write($util->resp(0, L::Success_0, $resp->data));
    return $response;
  }
})->add($sessionExpire);

$app->map(['GET', 'POST'], $cVersion . '/LuckyWheel/RandomPrize', function ($request, $response) use ($util, $renderer, $templateConfig) {
  $r = $request->getParsedBody();
  $req = array (
    "s_agent_code" => $_SESSION["PROFILE"]->agent,
    "s_username" => $_SESSION["PROFILE"]->username,
    "eventCode" => $r['eventCode']
  );

  $resp = $util->post('/LuckyWheel/RandomPrize', $req);
  $item = array ();
  $_SESSION["PROFILE"]->balance->cevent = $resp->data->currentPoint;
  $item['all'] = $resp->data->all;
  $item['day'] = $resp->data->day;
  $item['currentPoint'] = $resp->data->currentPoint;
  $item['id'] = $util->encrypt($resp->data->id);
  if ($resp != NULL) {
    if ($resp->statusCode == 0) {
      $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc, $item));
      return $response;
    } else {
      $response->getBody()->write($util->resp($resp->statusCode, $resp->statusDesc));
    }
  } else {
    $response->getBody()->write($util->resp(2001, L::Err_2001));
  }
  return $response;
})->add($sessionExpire);