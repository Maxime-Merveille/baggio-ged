<?php
require_once 'config.local.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'on');

spl_autoload_register(function ($className) {
    require_once __DIR__.'/lib/'.$className.'.php';
});
