<?php
include '../../config.php';

include './Model/Commandes.php';


class CommandesC
{
    public function listeCommandes()
    {
        $sql = "SELECT * FROM commandes";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteCommandes($numC)
    {
        $sql = "DELETE FROM commandes WHERE numC = :numC";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':numC', $numC);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addCommandes($commandes)
    {
        $sql = "INSERT INTO commandes  
        VALUES (NULL, :nom,:prenom, :adresse,:numTel, :id_produit)";
        $db = config::getConnexion();
        try {
            print_r($commandes->getnumtel());
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $commandes->getnom(),
                'prenom' => $commandes->getprenom(),
                'adresse' => $commandes->getadresse(),
                'numTel' => $commandes->getnumTel(),
                'id_produit' => $commandes->getIdProduit()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateCommande($commandes, $numC)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commandes SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    adresse = :adresse, 
                    numTel = :numTel
                WHERE numC= :numC'
            );
            $query->execute([
                'numC' => $numC,
                'nom' => $commandes->getnom(),
                'prenom' => $commandes->getprenom(),
                'adresse' => $commandes->getadresse(),
                'numTel' => $commandes->getnumTel()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showCommandes($numC)
    {
        $sql = "SELECT * from commandes where numC = $numC";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $commandes = $query->fetch();
            return $commandes;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
