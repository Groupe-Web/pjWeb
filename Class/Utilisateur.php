<?php

class Utilisateur
{
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $motDePasse;
  private $droit;

  const ERR_INT = -1;
  const ERR_STR = "ERROR";

  //
  //  Getters
  //
  public function getId(){
    return $this->id;
  }

  public function getNom(){
    return $this->nom;
  }

  public function getPrenom(){
    return $this->prenom;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getMotDePasse(){
    return $this->motdePasse;
  }

  public function getDroit(){
    return $this->droit;
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

  public function setNom($nom){
    $this->nom = $nom;
  }

  public function setPrenom($prenom){
    $this->prenom = $prenom;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setMotDePasse($motDePasse){
    $this->motDePasse = $motDePasse;
  }

  public function setDroit($droit){
    $this->droit = $droit;
  }

}
