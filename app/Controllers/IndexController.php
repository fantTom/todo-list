<?php

namespace App\Controllers;

use App\Core\Http\Controller;

class IndexController extends Controller {
    public function indexAction()
    {

        dd($this->entityManager);
        return $this->render('index', ['title' => "Главная страница"]);
    }
}