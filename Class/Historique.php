<?php

class Historique
{
  public $numeroSalle;
  public $dateReservation;
  public $heure_deb;
  public $heure_fin;
  public $email;

  public function __construct($numeroSalle, $dateReservation, $heure_deb, $heure_fin, $email){
    $this->numeroSalle  = $numeroSalle;
    $this->dateReservation = $dateReservation ;
    $this->heure_deb = $heure_deb;
    $this->heure_fin = $heure_fin;
    $this->email = $email;
  }

}
