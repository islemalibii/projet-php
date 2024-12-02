<?php

class blog {
    private $idStatus, $title, $descrip , $image;
    function __construct($title = "", $descrip = "", $image = "") {


        $this->title = $title;
        $this->descrip = $descrip;
        $this->image = $image;
    }
    public function getIdstatus(){
        return $this->idStatus;
    }
    public function setIdstatus($idStatus){
        $this->idStatus = $idStatus;
    }




    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getDescrip(){
        return $this->descrip;
    }
    public function setDescrip($descrip){
        $this->descrip = $descrip;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage($image){
         $this->image = $image;
    }


}

?>