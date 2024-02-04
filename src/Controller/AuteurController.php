<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class AuteurController extends AbstractController{

    public function Auteurs()
{
    $auteurs = Model::getInstance()->readAll('auteur');
    $this->render('auteurs', 'Mes Auteurs', ['auteurs' => $auteurs]);
}

}