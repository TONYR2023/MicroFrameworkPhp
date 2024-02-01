<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class LivreController extends AbstractController
{
    public function Livre()
    {
        $livres = Model::getInstance()->readAll('livre');
        $this->render('livres', 'Mes livres', ['livres' => $livres]);
    }

    public function addLivre()
    {
        if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['id_genre'])) {
            Model::getInstance()->save('livre', $_POST);
            $livres = Model::getInstance()->readAll('livre');
            $this->render('livres', 'Mes livres', ['livres' => $livres]);
        }
    }

   
}