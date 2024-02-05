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

    
        $titre = $livre->getTitre();
        $auteur = $livre->getAuteur();
        $genre = $livre->getGenre();

        $this->render('livre', 'Recherche par titre', [
            'livre' => $livre,
            'titre' => $titre,
            'auteur' => $auteur,
            'genre' => $genre,
        ]);
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