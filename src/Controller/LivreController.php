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

        $message = '';
        if (isset($_POST['titre']) && isset($_POST['auteur']) && isset($_POST['id_genre'])) 
        {
            Model::getInstance()->save('livre', $_POST);
            header('location: ?controller=LivreController&method=livre');
        }
       
    }
    public function afficherNomGenre()
    {
        $this->render('livres', 'Mes livres', ['livres' => $livres]);
    }
}