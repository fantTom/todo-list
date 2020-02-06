<?php


namespace App\Controllers;

use App\Core\Http\Controller;
use App\Entities\Comment;
use DateTime;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    public function createdAction($task)
    {
        return $this->render('createdComment', ['title' => "Панель администратора", 'task' => $task]);
    }

    public function updateAction($id)
    {
        $comment = $this->em->find('App\Entities\Comment', $id);
        return $this->render('updateComment', ['title' => "Редактироавние", 'comment' => $comment]);
    }

    public function saveAction()
    {
        $request = Request::createFromGlobals();
        $comment = new Comment();
        $comment->setTask($request->query->get('task'));
        $comment->setText($request->query->get('text'));
        $comment->setAutor(1);
        $comment->setDateCreated(new DateTime('NOW'));
        $this->em->persist($comment);
        $this->em->flush();
        return true;
    }

    public function saveIdAction($id)
    {
            $request = Request::createFromGlobals();
            $comment = $this->em->getRepository(Comment::class)->find($id);
            if (!$comment) {
                return false;
            }
            $comment->setText($request->query->get('text'));
            $this->em->flush();
            return true;
    }

}