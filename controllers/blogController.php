<?php
include_once('../models/blog.php');
include_once('../database/config.php');

class blogController extends Connexion {
    public function __construct() {
        parent::__construct();
    }

    public function insert(blog $bl) {
        $query = "INSERT INTO blog (title, descrip , image) VALUES (?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($bl->getTitle(), $bl->getDescrip(), $bl->getImage());
        return $res->execute($aryy);
    }



    public function listPosts() {
        $query = "SELECT * FROM blog";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }





}
?>