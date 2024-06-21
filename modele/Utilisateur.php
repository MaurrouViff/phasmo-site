<?php

class Utilisateur extends Database {
    public function getUtilisateur() {
        try {
            $cnx = $this->getConnection();
            $req = $cnx->prepare('SELECT * FROM utilisateur');
            $req->execute();

            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    public function setUtilisateur() {

    }

    public function getUtilisateurByMailU($mailU) {
        try {
            $cnx = $this->getConnection();
            $req = $cnx->prepare('SELECT * FROM utilisateur WHERE mailU = :mailU');
            $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
            $req->execute();

            $result = $req->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

    public function setAdmin($mailU, $pseudoU, $passwordU) {
        try {
            $cnx = $this->getConnection();
            $req = $cnx->prepare('UPDATE utilisateur');
            $req->bindValue(':mailU', $mailU, PDO::PARAM_STR);
            $req->bindValue(':pseudoU', $pseudoU, PDO::PARAM_STR);
            $req->bindValue(':passwordU', $passwordU, PDO::PARAM_STR);

            $result = $req->execute();
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        return $result;
    }

}