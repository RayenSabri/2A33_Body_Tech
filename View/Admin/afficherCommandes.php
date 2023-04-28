<?php
	include '../Controller/CommandesC.php';
	$commandesC=new commandesC();
	$listecommandes=$commandesC->listCommandes(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="index.html">Ajouter Commandes</a></button>
		<center><h1>Liste des commandes</h1></center>
		<table border="1" align="center">
			<tr>
				<th>nom</th>
				<th>prenom</th>
				<th>numero de tel</th>
				<th>adresse</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listecommandes as $commandes){
			?>
			<tr>
				
				<td><?php echo $commandes['nom']; ?></td>
				<td><?php echo $commandes['prenom']; ?></td>
				<td><?php echo $commandes['numdero de tel']; ?></td>
				<td><?php echo $commandes['adresse']; ?></td>
			
				
				
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>