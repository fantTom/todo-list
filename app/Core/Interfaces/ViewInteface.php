<?php

namespace App\Core\Interfaces;

interface ViewInteface
{
    public function make($path, $data = []);
}