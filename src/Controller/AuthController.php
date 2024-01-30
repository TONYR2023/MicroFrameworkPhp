<?php

namespace Poo\Project\Controller;

use Poo\Project\Kernel\AbstractController;

class AuthController extends AbstractController
{

    public function login()
    {
        // Vous devez créer le fichier login.php et implémenter un formulaire de connexion
        // attention, le formulaire doit être sécurisé contre les failles XSS et injections SQL
        // si la connexion est réussie, vous devez rediriger l'utilisateur vers la page d'accueil
        // si la connexion échoue, vous devez afficher un message d'erreur
        // vous devez également afficher les erreurs de validation du formulaire

        // Utilisez la class Model pour vérifier les informations de connexion voir @php-poo\src\Kernel\Model.php


        // Grace a la methode render de la classe AbstractController, vous pouvez afficher la vue login.php
        $this->render('auth/login', 'Connexion', []);
    }

    public function register()
    {
        // Vous devez créer le fichier register.php et implémenter un formulaire d'inscription
        // attention, le formulaire doit être sécurisé contre les failles XSS et injections SQL
        // vous devez également vérifier que l'adresse email n'est pas déjà utilisée
        // si l'inscription est réussie, vous devez rediriger l'utilisateur vers la page de connexion
        // si l'inscription échoue, vous devez afficher un message d'erreur
        // vous devez également afficher les erreurs de validation du formulaire
        $this->render('auth/register', 'Inscription', []);
    }

    public function logout()
    {
        // Vous devez créer le fichier logout.php et implémenter un formulaire de déconnexion
        // si la déconnexion est réussie, vous devez rediriger l'utilisateur vers la page d'accueil
        // si la déconnexion échoue, vous devez afficher un message d'erreur
        // vous devez également afficher les erreurs de validation du formulaire
        $this->render('auth/logout', 'Déconnexion', []);
    }

}