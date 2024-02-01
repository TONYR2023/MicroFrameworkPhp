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

    public function displayLivre()
    {
        $livre = Model::getInstance()->getById('livre', $_GET['id']);
        $auteur = Model::getInstance()->getByAttribute('livre', ['auteur' => $livre->getAuteur()]);
        $this->render('livre', 'Recherche par livres', ['livres' => $livre,
            'auteur' => $auteur[0]
    ]);


    /*    if (empty($auteur)) {
            echo "pas d'auteur pour ce livre";
        } else {
            $this->render('livre', $livre->getTitre(), [
                'livre' => $livre,
                'auteur' => $auteur[0],
            ]);
        }
    */
    
    }
    
    


    public function formulaireLivre()
{
    $genres = Model::getInstance()->readAll('genre');
    $this->render('formulaireLivre', 'Ajouter un nouveau livre', ['genres' => $genres]);
}

    public function addLivre()
    {
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