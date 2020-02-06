<?php


namespace App\Controllers;

use App\Entities\Task;
use App\Entities\Status;
use App\Core\Http\Controller;

class ApiController extends Controller
{
    public function getAction()
    {
        $arrJson = [];
        $statusRepository = $this->em->getRepository(Status::class);
        $statuses = $statusRepository->findAll();
        $taskRepository = $this->em->getRepository(Task::class);

        foreach ($statuses as $status) {
            $statusId = $status->getId();
            if ($status->getActivity()) {
                $tasks = $taskRepository->findBy(['status' => $statusId], ['date_created' => 'DESC']);
                $taskArr = [];
                foreach ($tasks as $task) {
                    $taskArr[$task->getId()] = $task->toApi();
                }
                $arrJson[$status->getTitle()] = $taskArr;
            }
        }

        return $this->render('getApi', ['json' => json_encode($arrJson, JSON_UNESCAPED_UNICODE)]);
    }
}