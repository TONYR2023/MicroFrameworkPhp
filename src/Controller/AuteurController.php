<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class AuteurController extends AbstractController{

    public function Auteurs()
{
    $auteurs = Model::getInstance()->readAll('livre');
    $this->render('auteurs', 'Mes Auteurs', ['auteurs' => $auteurs]);
}



public function displayAuteur()
{
    $livre = Model::getInstance()->getById('livre', $_GET['id']);


    $titre = $livre->getTitre();
    $auteur = $livre->getAuteur();
    $genre = $livre->getGenre();

    $this->render('auteur', 'Recherche par titre', [
        'livre' => $livre,
        'titre' => $titre,
        'auteur' => $auteur,
        'genre' => $genre,
    ]);
}
}