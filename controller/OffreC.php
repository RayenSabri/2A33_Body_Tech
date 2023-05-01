<?php

include_once 'C:/xampp/htdocs/projet/config.php';
require_once 'C:/xampp/htdocs/projet/model/Offre.php';

class OffreC{
    // CRUD
    public function afficher_offre(){
        $sql="SELECT * FROM offre" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

    function ajouter_offre(Offre $offre){
        $sql="INSERT INTO offre (titre, description, prix, date) 
				VALUES (:titre, :description, :prix, :date)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $offre->getTitre(),
                'description' => $offre->getDescription(),
                'prix' => $offre->getPrix(),
                'date' => $offre->getDate()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimer_offre($id){
        $sql="DELETE FROM offre WHERE id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifier_offre(Offre $offre, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE offre SET 
						titre = :titre, 
						description = :description, 
						prix = :prix,
                        date = :date
					WHERE id = :id"
            );

            $query->execute([
                'titre' => $offre->getTitre(),
                'description' => $offre->getDescription(),
                'prix' => $offre->getPrix(),
                'date' => $offre->getDate(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function getOffreById($id)
    {
        $requete = "select * from offre where id= '".$id."'";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetch();
            return $result ;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    function rechercheOffre($recherche){
        $sql="SELECT * FROM offre WHERE titre LIKE :recherche OR description LIKE :recherche";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':recherche', '%' . $recherche . '%');
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function trier_offres_par_prix(){
        $sql = "SELECT * FROM offre ORDER BY prix ASC";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);
            $result = $query->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo 'Erreur: '.$e->getMessage();
        }
    }





}

?>
