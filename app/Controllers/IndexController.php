<?php

namespace App\Controllers;

use App\Entities\User;
use App\Entities\Task;
use App\Entities\Status;
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

//        $user = new User();
//        $user->name = "do";
//        $user->lastName = "to";
//        $user->nickName = "go";
////        dd($user);
//        $this->em->persist($user);
//        $this->em->flush();

//        $status = new Status();
//        $status->setTitle("do");
//        $status->setActivity(true);
//        $this->em->persist($status);
//        dd($status);
//        $this->em->flush();

//        $statuses = $this->em->find('App\Entities\Status', 1);
//        dd($statuses->getId());


        $task = new Task();
        $task->title = "Добавить новое";
        $task->description = "Текст описания задачи";
        $task->status = 1;
        $this->em->persist($task);
//                dd($task);
//        $this->em->flush();
        dd( $this->em->find('App\Entities\Task', 8));

        return $this->render('index', ['title' => "Главная страница"]);
    }
}