<?php

class Creneau
{
  private $id;
  private $heure_deb;
  private $heure_fin;

  public function getId(){
    return $this->id;
  }

  public function getHeure_deb(){
    return $this->heure_deb;
  }

  public function getHeure_fin(){
    return $this->heure_fin;
  }

}
