<?php
include_once '../../config.php';

include '../Model/produits.php';


class produitsP
{
    public function listeproduits()
    {
        $sql = "SELECT * FROM produits";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteproduits($id)
    {
        $sql = "DELETE FROM produits WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addproduits($produits)
    {
        $sql = "INSERT INTO produits  
        VALUES (NULL, :nom,:quantite,:prix)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $produits->getnom(),
                'quantite' => $produits->getquantite(),
                'prix' => $produits->getprix(),
                
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    

    function updateProduit($produits, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE produits SET 
                    nom = :nom, 
                    quantite = :quantite, 
                    prix = :prix    
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'nom' => $produits->getnom(),
                'quantite' => $produits->getquantite(),
                'prix' => $produits->getprix(),
                
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showproduits($id)
    {
        $sql = "SELECT * from produits where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $produits = $query->fetch();
            return $produits;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }


    function getproduits($id)
    {
        $sql = "SELECT * from produits where idproduits = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $course = $query->fetch();
            return $course;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
