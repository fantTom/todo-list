<?php

namespace App\Controllers;

use http\Client\Curl;
use App\Entities\Task;
use App\Core\Http\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $url= $_SERVER['HTTP_HOST']."/api";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);
        $tasks = json_decode($result, true);

        return $this->render('indexAdmin', ['title' => "Панель администратора", 'tasks' => $tasks]);
    }

}