<?php

namespace App\Controllers;

use App\Core\Http\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {

//        try {
//            $this->entityManager->getConnection()->connect();
//        } catch (\Exception $e) {
//            dd($e);
//        }

        return $this->render('indexIndex', ['title' => "Главная страница"]);
    }
}