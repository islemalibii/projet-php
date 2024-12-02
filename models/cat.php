<?php

class cat {
    private $idCat, $idrace, $nameCat, $ageCat, $desCat, $imgCat;
    function __construct($idrace = "", $nameCat = "", $ageCat = "", $desCat = "", $imgCat = "") {
        $this->idrace = $idrace;
        $this->nameCat = $nameCat;
        $this->ageCat = $ageCat;
        $this->desCat = $desCat;
        $this->imgCat = $imgCat;

    }
    public function getIdcat(){
        return $this->idCat;
    }
    public function setIdcat($idCat){
        $this->idCat = $idCat;
    }
    public function getIdrace(){
        return $this->idrace;
    }
    public function setIdrace($idrace){
        $this->idrace = $idrace;
    }
    public function getNamecat(){
        return $this->nameCat;
    }
    public function setNamecat($nameCat){
        $this->nameCat = $nameCat;
    }

    public function getAgecat(){
        return $this->ageCat;
    }
    public function setAgecat($ageCat){
        $this->ageCat = $ageCat;
    }

    public function getDescat(){
        return $this->desCat;
    }
    public function setDescat($desCat){
        $this->desCat = $desCat;
    }

    public function getImgcat(){
        return $this->imgCat;
    }
    public function setImgcat($imgCat){
         $this->imgCat = $imgCat;
    }


}

?>