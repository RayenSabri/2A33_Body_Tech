<?php

include_once 'C:/xampp/htdocs/projet/Controller/inscriptionC.php';
$inscriptionC = new InscriptionC();
if (isset($_GET['id'])){
    $inscriptionC->supprimer_inscription($_GET['id']);
    echo '<script>window.Notification && Notification.requestPermission().then(function(permission) { if (permission === "granted") { new Notification("Inscription modifiée avec succès!"); } }); window.location.href="ListInscription.php";</script>';
}
else {
    header('Location: ListInscription.php');
}
?>
