<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;
use Poo\Project\Kernel\Model;

class SearchController extends AbstractController
{
    public function index()
    {
        $genres = Model::getInstance()->readAll('genre');
        $livres = Model::getInstance()->readAll('livre');
        $this->render('search/index', 'Accueil', ['genres' => $genres, 'livres' => $livres]);
    }
    public function searchByTitre()
    {
        $titre = $_POST['titre'] ?? null;
        if (!empty($titre)) {
            $livres = Model::getInstance()->getByAttributeLike('livre', 'titre', ['titre' => $titre]);
            $this->render('search/searchTitre', 'Résultats de la recherche par titre', ['livres' => $livres]);
        } else {
            // Redirigez vers la page d'accueil ou affichez un message d'erreur
            header('Location: ?controller=IndexController&method=index');
            exit();
        }
    }
    
    public function searchByAuteur()
    {
        $author = $_POST['author'] ?? null;
        if (!empty($author)) {
            $books = Model::getInstance()->getByAttribute('livre', ['auteur' => $author]);
            $this->render('search/results', 'Résultats de la recherche par auteur', ['books' => $books]);
        } else {
            // Redirigez vers la page d'accueil ou affichez un message d'erreur
            header('Location: ?controller=SearchController&method=index');
            exit();
        }
    }
    
    public function searchByGenre()
    {
        $genre = $_POST['genre'] ?? null;
        if (!empty($genre)) {
            $books = Model::getInstance()->getByAttribute('livre', ['id_genre' => $genre]);
            $this->render('search/results', 'Résultats de la recherche par genre', ['books' => $books]);
        } else {
            // Redirigez vers la page d'accueil ou affichez un message d'erreur
            header('Location: ?controller=SearchController&method=index');
            exit();
        }
    }
}