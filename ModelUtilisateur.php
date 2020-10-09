<?php

class ModelUtilisateur
{
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $motDePasse;
  private $droit;

//
//  Constructeur
//
  public function ModelUtilisateur($id, $nom, $prenom, $email, $motDePasse, $droit)
  {
    $this->id           = $id;
    $this->nom          = $nom;
    $this->prenom       = $prenom;
    $this->email        = $email;
    $this->motDePasse   = $motDePasse;
    $this->droit        = $droit;
  }

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
    $this->id           = $id;
  }

  public function setNom($nom){
    $this->nom          = $nom;
  }

  public function setId($prenom){
    $this->prenom       = $prenom;
  }

  public function setId($email){
    $this->email        = $email;
  }

  public function setId($motDePasse){
    $this->motDePasse   = $motDePasse;
  }

  public function setId($droit){
    $this->droit        = $droit;
  }

}
