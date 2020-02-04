<?php

namespace App\Controllers;

use App\Core\Http\Controller;

class PageController extends Controller
{
    public function showAction($alias) {
        return $this->render("page",['alias'=>$alias]);
    }
}