<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class GenreController extends AbstractController{

    public function Genre()
    {
        $genres = Model::getInstance()->readAll('genre');
        $this->render('genres', 'Mes genres', ['genres' => $genres]);
    }


}