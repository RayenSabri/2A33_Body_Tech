<?PHP
	include '../../Controller/produitsP.php';

	$produitsP = new produitsP();

	
	if (isset($_POST["id"])){
		$produitsP->deleteproduits($_POST["id"]);
		header('Location:indexP.php');
	}

?>