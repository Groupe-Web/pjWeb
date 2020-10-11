<?php

class Salle
{
  private $numero;
  private $nbplace;
}

const ERR_INT = -1;

public function __construct($numero, $nbPlace){
  $this->numero  = $numero;
  $this->nbPlace = $nbPlace;
}

//
//  Getters
//
public function getNumero(){
  return $this->numero;
}

public function getNbPlace(){
  return $this->nbPlace;
}

//
//  Setters
//
public function setNumero($numero){
  if(is_int($numero))
    $this->numero = $numero;
  else
  $this->numero = ERREUR_ENTIER; //si $id n'est pas un entier, il vaut -1
}

public function setNbPlace($nbPlace){
  if(is_int(nbPlace))
    $this->nbPlace = nbPlace;
  else
  $this->nbPlace = ERREUR_ENTIER; //si $id n'est pas un entier, il vaut -1
}