<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;


class LivreController extends AbstractController
{
    public function Livre()
    {
        $livres = Model::getInstance()->readAll('livre');
        $this->render('livres','MES LIVRES',['livres' => $livres]);
      
    }

    public function AddLivre()
    {

        if(isset($_POST[
            'titre',
            'auteur',
            'id_genre',
            ])
        );


        $livres = Model::getInstance()->save('livre', []);  
        $this->render('livres','MES LIVRES',['livres' => $livres]);
    }
}

