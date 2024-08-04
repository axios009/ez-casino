<?php

define('tb_agent', 'tb_agent');


R::ext('xdispense', function ($type) {
    return R::getRedBean()->dispense($type);
});
