<?php

$data = array(
    "statusCode" => -1,
    "statusDesc" => "Invalid hash token"
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
