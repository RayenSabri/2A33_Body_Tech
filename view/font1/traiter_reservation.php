<?php
// Récupérer les données de réservation envoyées par la requête Ajax
$idOffre = $_POST['id_offre'];
$dateDebut = $_POST['date_debut'];
$dateFin = $_POST['date_fin'];


include_once 'C:/xampp/htdocs/projet/Controller/inscriptionC.php';
require_once 'C:/xampp/htdocs/projet/model/inscription.php';
$inscriptionC = new InscriptionC();
$inscription = new Inscription(0,$idOffre,1,$dateDebut,$dateFin,"pending");
$inscriptionC->ajouter_inscription($inscription);


$response = array();
$response['success'] = true; // Mettre à false en cas d'échec de la réservation
$response['message'] = 'Réservation effectuée avec succès !'; // Message de succès ou d'erreur

// Envoyer la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
