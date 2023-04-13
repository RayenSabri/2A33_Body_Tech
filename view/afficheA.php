<?php
	include_once 'C:\xampp\htdocs\body tech/Controller/adminC.php';
	$adminC=new adminC();
	$listeadmin=$adminC->afficheradmin(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="addA.php">Ajouter un admin</a></button>
		<center><h1>Liste des admin</h1></center>
		<table border="1" align="center">
			<tr>
				<th>cin</th>
				<th>nom</th>
				<th>prenom</th>
				<th>salaire</th>
				<th>email</th>
				<th>tel</th>
				<th>password</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeadmin as $admin){
			?>
			<tr>
				<td><?php echo $admin['cin']; ?></td>
				<td><?php echo $admin['nom']; ?></td>
				<td><?php echo $admin['prenom']; ?></td>
				<td><?php echo $admin['salaire']; ?></td>
				<td><?php echo $admin['email']; ?></td>
				<td><?php echo $admin['tel']; ?></td>
				<td><?php echo $admin['password']; ?></td>
				<td>
					<form method="POST" action="modifierA.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $admin['cin']; ?> name="cin">
					</form>
				</td>
				<td>
					<a href="supprimerA.php?cin=<?php echo $admin['cin']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
