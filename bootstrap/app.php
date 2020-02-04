<?php

define("BASEPATH", dirname(__DIR__));

$app = \App\Core\App::getInstance(BASEPATH);
$config = new  \App\Core\Config\Config('config');
$config->addConfig('database.yaml');

$app->add('config', $config);

$orm = new \App\Core\Database\Orm(config('database'));
$app->add('orm', $orm);

return $app;