<?php

include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
$offreC = new OffreC();
if (isset($_GET['id'])){
    $offreC->supprimer_offre($_GET['id']);
    echo '<script>alert("Offre supprimée avec succès!"); window.location.href="ListOffre.php";</script>';
}
else {
    header('Location: ListOffre.php');
}
?>
