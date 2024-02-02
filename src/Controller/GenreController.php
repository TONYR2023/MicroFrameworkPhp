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


    public function LivresParGenres($genreId)
    {

        $livres = Model::getInstance()->readAll('livre', ['genre_id' => $genreId]);
        $genre = Model::getInstance()->getByAttribute('genre', $genreId);
        $this->render('livres_par_genres', 'Livres par genre', ['livres' => $livres, 'genre' => $genre]);
    
    }

    
}
