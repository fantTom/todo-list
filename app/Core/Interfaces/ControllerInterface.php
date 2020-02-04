<?php

namespace App\Core\Interfaces;

interface ControllerInterface
{
    public function render($path, $data = []);
}