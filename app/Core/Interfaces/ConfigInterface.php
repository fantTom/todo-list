<?php

namespace App\Core\Interfaces;

interface ConfigInterface
{

    public function addConfig($file);

    public function get($keyValue);
}
