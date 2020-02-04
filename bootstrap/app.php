<?php

define("BASEPATH",dirname(__DIR__));

$app = \App\Core\App::getInstance(BASEPATH);
$config = new  \App\Config\Config('config');
$config->addConfig('database.yaml');

$app->add('config', $config);
return $app;