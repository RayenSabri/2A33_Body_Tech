<?php
	class admin{
		private int $cin;
		private string $nom;
		private string $prenom;
		private float  $salaire;
		private string $email;
		private string $tel;
		private string $password;

		
		
		function __construct($cin, $nom,$prenom, $salaire, $email, $tel, $password){
			$this->cin=$cin;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->salaire=$salaire;
			$this->email=$email;
			$this->tel=$tel;
			$this->password=$password;
		}
		function getcin(){
			return $this->cin;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getsalaire(){
			return $this->salaire;
		}
		function getemail(){
			return $this->email;
		}
		function gettel(){
			return $this->tel;
		}
		function getpassword(){
			return $this->password;
		}
		function setcin(int $cin){
			$this->cin=$cin;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setsalaire(string $salaire){
			$this->salaire=$salaire;
		}
		function setemail(string $email){
			$this->email=$email;
		}
		function settel(string $tel){
			$this->tel=$tel;
		}
		function setpassword(string $password){
			$this->password=$password;
		}
	}


?>