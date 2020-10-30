<?php

class Reserver
{
  private $id;
  private $dateReservation;
  private $idCreneau;
  private $idUtilisateur;
  private $idSalle;


  //
  //  Getters
  //
  public function getId(){
    return $this->id;
  }

  public function getDateRéservation(){
    return $this->dateReservation;
  }

  public function getIdCreneau(){
    return $this->idCreneau;
  }

  public function getIdUtilisateur(){
    return $this->idUtilisateur;
  }

  public function getIdSalle(){
    return $this->idSalle;
  }

  //
  //  Setters
  //
  public function setId($id){
    if(is_int($id))
      $this->id = $id;
    else
      $this->id = ERR_INT; //si $id n'est pas un entier, il vaut -1
  }

  public function setDateReservation($dateReservation){
    $this->dateReservation = $dateReservation;
  }

  public function setIdCreneau($dateReservation){
    $this->dateReservation = $dateReservation;
  }

  public function setIdUtilisateur($idUtilisateur){
    $this->idUtilisateur = $idUtilisateur;
  }

  public function setIdSalle($idSalle){
    $this->idSalle = $idSalle;
  }
}
