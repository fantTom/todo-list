<?php

namespace App\Controllers;

use App\Core\Http\Controller;

class IndexController extends Controller {
    public function indexAction()
    {
        return $this->render('index', ['title' => "Главная страница"]);
    }
}