<?php

namespace Poo\Project\Entity;
use Poo\Project\Kernel\Model;

class Livre
{
    private int $id;

    private string $auteur;
    private string $titre;
    private string $id_genre;

   /**
     * Get la valeur de l'id
     *
     * @return  self
     */ 
    public function getId():int
    {

        return $this->id;
    }
    

    /**
     * Get la valeur de l'auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set la valeur de l'auteur
     *
     * @return  self
     */ 
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get la valeur du titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set la valeur du titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get la valeur de l'id_genre
     */ 
    public function getId_genre()
    {
        return $this->id_genre;
    }

    /**
     * Set la valeur de l'id_genre
     *
     * @return  self
     */ 
    public function setId_genre($id_genre)
    {
        $this->id_genre = $id_genre;

        return $this;
    }

    public function getGenre() : Genre
    {
        return Model::getInstance()->getById('genre', $this->id_genre);
    }


}