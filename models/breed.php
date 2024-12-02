<?php

class breed {
    private  $namerace;
    function __construct($namerace = "") {

        $this->namerace = $namerace;
    }
    public function getIdrace(){
        return $this->idrace;
    }
    public function setIdrace($id){
        $this->idrace = $id;
    }
    
    public function getNamerace(){
        return $this->namerace;
    }
    public function setNamerace($namerace){
        $this->namerace = $namerace;
    }


}

?>