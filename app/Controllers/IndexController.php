<?php

namespace App\Controllers;

use App\Entities\Comment;
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
//        dd($user);
//        $this->em->persist($user);

//        $status = new Status();
//        $status->setTitle("do");
//        $status->setActivity(true);
//        $this->em->persist($status);
//        dd($status);

//        $statuses = $this->em->find('App\Entities\Status', 1);
//        dd($statuses->getId());


        $task = new Task();
        $task->setTitle("Добавить новое");
        $task->setDescription("Текст описания задачи");
        $task->setStatus( 1);
        $task->setAutor( 1);
//        $this->em->persist($task);
////                dd($task);
//        dd($this->em->find('App\Entities\Task', 3));


        $comment = new Comment();
        $comment->task = 1;
        $comment->text = "Текст коментария к задаче";
        $comment->autor = 1;
        $this->em->persist($comment);
////        dd($comment);
        $this->em->flush();

        return $this->render('indexIndex', ['title' => "Главная страница"]);
    }
}