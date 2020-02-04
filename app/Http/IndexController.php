<?php

namespace App\Http;

class IndexController extends Controller {
    public function indexAction()
    {
        dd(app()->get("config")->get('database.dbname'));
        return $this->render('index', ['title' => "Главная страница"]);
    }
}