<?php

namespace App\Controllers;
use App\Entities\Status;
use App\Entities\Task;
use App\Core\Http\Controller;

class IndexController extends Controller {
    public function indexAction()
    {

        $status = new Status();
        $status->setTitle( "Добавить новое") ;
        $status->setStatus(1);

        $this->entityManager->persist($status);
        $this->entityManager->flush();


//        $task = new Task();
//
//        $task->setName("Добавить новое");
//        $task->setDescription("Текст описания задачи");
//            $task->setStatus (1);
//        $this->entityManager->persist($task);
//        $this->entityManager->flush();
        return $this->render('index', ['title' => "Главная страница"]);
    }
}