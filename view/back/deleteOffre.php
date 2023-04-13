<?php

include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
$offreC = new OffreC();
if (isset($_GET['id'])){
    $offreC->supprimer_offre($_GET['id']);
    header('Location: ListOffre.php');
}
else {
    header('Location: ListOffre.php');
}
?>
