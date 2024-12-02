<?php

class vet {
    private $nameVet, $emailVet, $phone, $adresse;
    function __construct($nameVet = "", $emailVet = "", $phone = "", $adresse = "") {
        $this->nameVet = $nameVet;
        $this->emailVet = $emailVet;
        $this->phone = $phone;
        $this->adresse = $adresse;
    }
    public function getIdvet(){
        return $this->idVet;
    }
    public function setIdvet($idVet){
        $this->idVet = $idVet;
    }
    public function getNamevet(){
        return $this->nameVet;
    }
    public function setNamevet($nameVet){
        $this->nameVet = $nameVet;
    }
    public function getEmailVet(){
        return $this->emailVet;
    }
    public function setEmailVet($emailVet){
        $this->emailVet = $emailVet;
    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
         $this->phone = $phone;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
         $this->adresse = $adresse;
    }



}

?>