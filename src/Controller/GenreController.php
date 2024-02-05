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

    public function displayGenre()
    {
    $genre = Model::getInstance()->getById('genre', $_GET['id']);
    $livresParGenre = Model::getInstance()->getByAttribute('livre', ['id_genre' => $_GET['id']]);

    $variables = [
        'livres' => $livresParGenre,
    ];

    $this->render('genre', 'Livre par genres', $variables);

}
    public function formulaireGenre()
    {
        $genres = Model::getInstance()->readAll('genre');
        $this->render('formulaireGenre', 'Ajouter un nouveau genre', ['genres' => $genres]);
    }

    public function addGenre()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nomGenre = $_POST['titre'] ?? '';
        if (!empty($nomGenre)) {
            Model::getInstance()->save('genre', ['nom' => $nomGenre]);
            $genres = Model::getInstance()->readAll('genre');

            $this->render('genres', 'Ajouter un nouveau genre', ['genres' => $genres]);
        } else {
            $messageErreur = "Le nom du genre ne peut pas être vide.";
            $this->render('formulaire', 'Ajouter un nouveau genre', ['messageErreur' => $messageErreur]);
        }
    } else {
        $messageErreur = "La requête n'est pas une requête POST.";
        $this->render('formulaire', 'Ajouter un nouveau genre', ['messageErreur' => $messageErreur]);
    }
}


    
}