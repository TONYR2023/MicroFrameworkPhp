<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class IndexController extends AbstractController
{
    public function index()
    {
        $this->render('index', 'Accueil', []);
    }
}
