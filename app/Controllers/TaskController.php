<?php

namespace App\Controllers;

use App\Entities\Comment;
use App\Entities\Status;
use App\Entities\Task;
use App\Core\Http\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{

    public function createdAction() {
        return $this->render('createdTask', ['title' => "Панель администратора", 'status_list' => $this->getStatusList()]);
    }
    public function saveAction()
    {
        $request = Request::createFromGlobals();
        $task = new Task();
        $task->setTitle($request->query->get('title'));
        $task->setDescription($request->query->get('discription'));
        $task->setStatus(  $request->query->get('status'));
        $task->setAutor( 1);
        $this->em->persist($task);
        $this->em->flush();
        return true;
    }

    public function updateAction($id)
    {
        $task = $this->em->find('App\Entities\Task', $id);
        $commentRepository = $this->em->getRepository(Comment::class);
        $comment = $commentRepository->findBy(['task' => $id], ['date_created' => 'ASC']);

        return $this->render('updateTask', ['title' => "Редактироавние", 'task' => $task, 'comment' => $comment, 'status_list' => $this->getStatusList()]);
    }

    public function getStatusList () {
        $status_list=[];
        $statusRepository = $this->em->getRepository(Status::class);
        $statuses = $statusRepository->findAll();
        foreach ($statuses as $status){
            $status_list[$status->getId()] = $status->getTitle();
        }
        return $status_list;
    }
}