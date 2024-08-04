<?php

$data = array(
    "statusCode" => 403,
    "statusDesc" => "Permission denied"
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
