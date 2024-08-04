<?php

$data = array(
    "statusCode" => -2,
    "statusDesc" => "Invalid token Header"
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
