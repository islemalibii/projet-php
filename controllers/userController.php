<?php
include_once('../models/user.php') ;
include_once('../database/config.php');
class userController extends Connexion{
    function __construct() {
        parent::__construct();
    }

    function insert(user $u){

    $query="insert into user(name,email,password)values(?, ?, ?)";
    $res=$this->pdo->prepare($query);
    $aryy =array($u->getName(),$u->getEmail(),$u->getPassword()) ;
    return $res->execute($aryy);

    }
    function getName($name) {
        $query = "SELECT * FROM user WHERE name = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($name));
        $array = $res->fetch();
        return $array;
    }

    function verify($name,$password) {
        $query = "SELECT * FROM user where name = '$name' and password = '$password' ";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    function delete($userId) {
        $query = "delete from user where userId=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($userId));
    }
    function listUser(){
        $query = "select * from user";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function getUser($userId){
        $query="SELECT * FROM user WHERE userId = ? ";
        $res = $this->pdo->prepare($query);
        $res->execute(array($userId));
        $array= $res->fetch(PDO::FETCH_ASSOC);
        return $array;
    }
   
    function modifyUser(user $u)
    {
    $sql = "UPDATE user SET  name=? , email=?  WHERE userId=?";
    $stmt= $this->pdo->prepare($sql);
    $stmt->execute(array($u->getName(),$u->getEmail(), $u->getId()));
    }





 
}

?>
