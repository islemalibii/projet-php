<?php

class user {
    private $name, $email, $password;
    function __construct($name = "", $email = "", $password = "") {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    public function getId(){
        return $this->userId;
    }
    public function setId($id){
        $this->userId = $id;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
         $this->password = $password;
    }


}

?>