<?php

namespace Poo\Project\Entity;

class Genre
{

    private int $id;
    private string $nom;


/**
 * Get la valeur de l'id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set la valeur de l'id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get la valeur du nom
 */ 
public function getNom()
{
return $this->nom;
}

/**
 * Set la valeur du nom
 *
 * @return  self
 */ 
public function setNom($nom)
{
$this->nom = $nom;

return $this;
}
}