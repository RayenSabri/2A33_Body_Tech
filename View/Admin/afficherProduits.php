<?php
	include '../Controller/prduitsP.php';
	$produitsP=new produitsP();
	$listeproduits=$produitsP->listproduits(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="indexp.html">Ajouter produits</a></button>
		<center><h1>Liste des produits</h1></center>
		<table border="1" align="center">
			<tr>
				<th>nom</th>
				<th>quantite</th>
				<th>prix</th>
				<th>numC</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeproduits as $produits){
			?>
			<tr>
				
				<td><?php echo $produits['nom']; ?></td>
				<td><?php echo $produits['quantite']; ?></td>
				<td><?php echo $produits['prix']; ?></td>
				<td><?php echo $produits['numC']; ?></td>
			
			
				
				
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>