<?php

class adopt {
    private $idAdopt, $userId, $idCat , $adresse, $phone , $why;
    function __construct($userId = "", $idCat = "", $adresse = "", $phone = "", $why = "") {
        $this->userId = $userId;
        $this->idCat = $idCat;
        $this->adresse = $adresse;
        $this->phone = $phone;
        $this->why = $why;
    }
    public function getIdadopt(){
        return $this->idAdopt;
    }
    public function setIdadopt($idAdopt){
        $this->idAdopt = $idAdopt;
    }

    public function getIduser(){
        return $this->userId;
    }
    public function setIduser($userId){
        $this->userId = $userId;
    }

    public function getIdcat(){
        return $this->idCat;
    }
    public function setIdcat($idCat){
        $this->idCat = $idCat;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }

    public function getWhy(){
        return $this->why;
    }
    public function setWhy($why){
         $this->why = $why;
    }


}

?>