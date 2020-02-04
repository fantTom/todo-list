<?php

namespace App\Core\Interfaces;

interface ViewInterface
{
    public function make($path, $data = []);
}