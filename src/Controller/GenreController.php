<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class GenreController extends AbstractController
{

    public function Genre()
    {
        $genres = Model::getInstance()->readAll('genre');
        $this->render('genres', 'Mes genres', ['genres' => $genres]);
    }

    public function displayGenre()
    {

        $genre = Model::getInstance()->getById('genre', $_GET['id']);
        $livresParGenre = Model::getInstance()->getByAttribute('livre', ['id_genre' => $_GET['id']]);

        $variables = [
            'livres' => $livresParGenre,
        ];

        $this->render('genre', 'Livre par genres', $variables);
    }


}

