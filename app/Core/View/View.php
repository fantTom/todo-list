<?php

namespace App\Core\View;

use App\Core\Interfaces\ViewInterface;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;


class View implements ViewInterface
{
    private $templating;

    public function __construct()
    {
        $filesystemLoader = new FilesystemLoader(BASEPATH . '/resources/views/%name%.php');
        $this->templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
    }

    public function make($path, $data = [])
    {
        return $this->templating->render($path, $data);
    }
}
