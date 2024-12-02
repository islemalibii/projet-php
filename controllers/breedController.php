<?php
include_once('../models/breed.php');
include_once('../database/config.php');

class breedController extends Connexion {
    public function __construct() {
        parent::__construct();
    }

    public function insertBreed(breed $b) {
        $query = "INSERT INTO race (namerace) VALUES (?)";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($b->getNamerace()));
    }

    public function getNamerace($namerace) {
        $query = "SELECT * FROM race WHERE namerace = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($namerace));
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public function listRace() {
        $query = "SELECT * FROM race";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifyBreed(breed $b) {
        $sql = "UPDATE race SET namerace = ? WHERE idrace = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute(array($b->getNamerace(), $b->getIdrace()));
    }

    public function delete($idrace) {
        $query = "DELETE FROM race WHERE idrace = ?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idrace));
    }

    public function getBreed($idrace) {
        $query = "SELECT * FROM race WHERE idrace = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idrace));
        return $res->fetch(PDO::FETCH_ASSOC);
    }


}
?>
