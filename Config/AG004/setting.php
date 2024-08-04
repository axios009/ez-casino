<?php

define('DOMAIN_PAGE', 'www.betboy888.com');
define('LOGO', './Config/' . AGENT . '/image/logo.png');
define('LOGOICON', './Config/' . AGENT . '/image/logo-icon.png');

$original_json = file_get_contents('./Config/' . AGENT . '/config.json');
$config = json_decode($original_json);
define('LINEAT', $config->line);
define('TITLE', $config->title);
