<?php
namespace App\Core\Http;

use App\Core\Interfaces\ControllerInterface;
use App\Core\View\View;
use Symfony\Component\HttpFoundation\Response;


abstract class Controller implements ControllerInterface
{

    protected $view;

    public function render($path, $data = [])
    {
        return new Response($this->view->make($path, $data));
    }

    public function __construct()
    {
        $this->view = new View();
    }
}