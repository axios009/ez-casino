<?php

$data = array(
    "statusCode" => 404,
    "statusDesc" => "Not Found"
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
