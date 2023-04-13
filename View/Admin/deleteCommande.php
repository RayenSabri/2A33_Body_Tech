<?PHP
	include '../../Controller/CommandesC.php';

	$commandesC = new CommandesC();

	
	if (isset($_POST["numC"])){
		$commandesC->deleteCommandes($_POST["numC"]);
		header('Location:index.php');
	}

?>