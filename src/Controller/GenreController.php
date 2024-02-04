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
     $genreAll = ['genres' => $genres];
     $this->render('genres', 'Mes genres', $genreAll);
 }
 

 // affichage des livres par genre
 public function displayGenre()
 {
     $model = Model::getInstance();
     $genre = $model->getById('genre', $_GET['id']);
     $livresParGenre = $model->getByAttribute('livre', ['id_genre' => $_GET['id']]);

     $variables = [
         // 'genre' => $genre,
         'livres' => $livresParGenre,
     ];

     $this->render('genre', $genre->getNom(), $variables);
 }

 /*
public function displayGenre()
 {
     $genre = Model::getInstance()->getById('genre', $_GET['id']);
     $livresParGenre = Model::getInstance()->getByAttribute('livre', ['id_genre' => $_GET['id']]);
    
     $variables = [
         'livres' => $livresParGenre,
     ];

     $this->render('genre', $genre->getNom(), $variables);
 }
 */
   

    public function addGenre()
    {
        if (isset($_POST['nom']))
        {
            
            $data = [
                'nom' => $_POST['nom'],
            
            ];

            
            Model::getInstance()->save('genre', $data);

        
            header('location: ?controller=GenreController&method=displayGenres');
            exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        }
    }
       
}

/*
public function createGenre()
{
    $message = '';
    if (isset($_POST['submit'])) {

        $message = Validate::valideName($_POST['nom'], "le champ 'Nom' contient des caracteres incorrects<br>", "le champ 'Nom' est vide<br>");

        if ($message === '') {
            $nom = $_POST['nom'];
            Model::getInstance()->save('genre', ['nom' => $nom]);
            $message = "le nouveau " . $nom . " a bien été enregistré";
        }
    }

    $this->render('genres', 'Nouveau Genre', ['message' => $message]);
}
    
    */
