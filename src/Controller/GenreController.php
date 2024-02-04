<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class GenreController extends AbstractController{
 // affichage des genres
 /*
 public function displayGenres()
 {
     $model = Model::getInstance();
     $result = $model->readAll('genre');
     $genreResult = ['genres' => $result];
     $this->render('genres', 'Nos livres par Genres', $genreResult);

 }
*/

    public function Genre()
    {
        $genres = Model::getInstance()->readAll('genre');
        $this->render('genres', 'Mes genres', ['genres' => $genres]);
    }


}