<?php
	include '../config.php';

	include_once '../Model/admin.php';
	class adminC {
		function afficheradmin(){
			$sql="SELECT * FROM admin";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimeradmin($cin){
			$sql="DELETE FROM admin WHERE cin=:cin";
			$db = config::getConnexion();
			
			$req=$db->prepare($sql);
			$req->bindValue(':cin', $cin);
			
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouteradmin($admin){
			$sql="INSERT INTO admin (cin, nom, prenom, salaire, email,tel, password) 
			VALUES (:cin,:nom,:prenom, :salaire,:email,:tel, :password)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'cin' => $admin->getcin(),
					'nom' => $admin->getnom(),
					'prenom' => $admin->getprenom(),
					'salaire' => $admin->getsalaire(),
					'email' => $admin->getemail(),
					'tel' => $admin->gettel(),
					'password' => $admin->getpassword(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererA($cin){
			$sql="SELECT * from admin where cin=$cin";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$admin=$query->fetch();
				return $admin;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifier_admin($admin, $cin){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE admin SET 
						nom= :nom, 
						prenom= :prenom, 
						salaire= :salaire, 
						email= :email, 
						tel= :tel,
						password= :password
					WHERE cin= :cin'
				);
				$query->execute([
					'nom' => $admin->getnom(),
					'prenom' => $admin->getprenom(),
					'salaire' => $admin->getsalaire(),
					'email' => $admin->getemail(),
					'tel' => $admin->gettel(),
					'password' => $admin->getpassword(),
					'cin' => $cin
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				echo $e->getMessage(); // afficher l'erreur pour déboguer
			}
		}
	}
		
?>