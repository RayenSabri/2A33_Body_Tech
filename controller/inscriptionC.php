<?php

include_once 'C:/xampp/htdocs/projet/config.php';
require_once 'C:/xampp/htdocs/projet/model/inscription.php';

class InscriptionC{
    // CRUD
    public function afficher_inscription(){
        $sql="SELECT i.* , o.titre , o.description FROM inscriptions i JOIN offre o ON i.id_of=o.id" ;
        $db = config::getConnexion() ;
        try {
            $liste = $db->query($sql) ;
            return $liste ;
        }
        catch(Exception $e) {
            die('Erreur:' .$e->getMessage()) ;
        }
    }

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

    function ajouter_inscription(Inscription $inscription){
        $sql="INSERT INTO inscriptions (id_of, id_ur, date_debut, date_fin, motif) 
				VALUES (:id_of, :id_ur, :date_debut, :date_fin, :motif)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'id_of' => $inscription->getId_of(),
                'id_ur' => $inscription->getId_ur(),
                'date_debut' => $inscription->getDate_debut(),
                'date_fin' => $inscription->getDate_fin(),
                'motif' => $inscription->getMotif()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function ajouter_inscriptionAJAX(Inscription $inscription){
        $sql="INSERT INTO inscriptions (id_of, id_ur, date_debut, date_fin, motif) 
				VALUES (:id_of, :id_ur, :date_debut, :date_fin, :motif)";
        $db = config::getConnexion();

            $query = $db->prepare($sql);

            $query->execute([
                'id_of' => $inscription->getId_of(),
                'id_ur' => $inscription->getId_ur(),
                'date_debut' => $inscription->getDate_debut(),
                'date_fin' => $inscription->getDate_fin(),
                'motif' => $inscription->getMotif()
            ]);

    }

    function supprimer_inscription($id){
        $sql="DELETE FROM inscriptions WHERE id= :id";
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

    function modifier_inscription(Inscription $inscription, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE inscriptions SET 
                id_of = :id_of, 
                id_ur = :id_ur, 
                date_debut = :date_debut,
                date_fin = :date_fin,
                motif = :motif
            WHERE id = :id"
            );

            $query->execute([
                'id_of' => $inscription->getId_of(),
                'id_ur' => $inscription->getId_ur(),
                'date_debut' => $inscription->getDate_debut(),
                'date_fin' => $inscription->getDate_fin(),
                'motif' => $inscription->getMotif(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function getInscriptionById($id)
    {
        $requete = "select * from inscriptions where id= '".$id."'";
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

}
?>
