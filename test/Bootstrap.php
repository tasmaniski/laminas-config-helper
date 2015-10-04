<?php

error_reporting(E_ALL | E_STRICT);
chdir(dirname(__DIR__));


require_once 'vendor/autoload.php';

$conf = array('modules' => array('ConfigHelper'), 'module_listener_options' => array());

ConfigHelperTest\Integration\Util\Bootstrap::setConfig($conf);