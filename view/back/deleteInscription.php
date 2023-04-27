<?php

include_once 'C:/xampp/htdocs/projet/Controller/inscriptionC.php';
$inscriptionC = new InscriptionC();
if (isset($_GET['id'])){
    $inscriptionC->supprimer_inscription($_GET['id']);
    header('Location: ListInscription.php');
}
else {
    header('Location: ListInscription.php');
}
?>
