<?php
	include_once 'C:\xampp\htdocs\body tech/Controller/adminC.php';
    
	$adminC=new adminC();
	$adminC->supprimeradmin($_GET["cin"]);
	header('Location:afficheA.php');
?>