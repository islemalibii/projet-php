<?php

class admin {
    private $adminname, $email, $password;
    function __construct($adminname = "", $email = "", $password = "") {
        $this->adminname = $adminname;
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
        return $this->adminname;
    }
    public function setName($adminname){
        $this->name = $adminname;
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