<?php
include '../config.php';
include_once '../Model/admin.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer les informations d'identification saisies par l'utilisateur
  $cin = $_POST["username"];
  $password = $_POST["password"];

  try {
    $conn = new PDO("mysql:host=localhost;dbname=gestion des utilisateurs", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
  }
  

  // Rechercher l'utilisateur dans la base de données
  $query = $conn->prepare("SELECT type FROM admin WHERE cin = :cin AND password = :password");
  $query->bindParam(":cin", $cin);
  $query->bindParam(":password", $password);
  $query->execute();
  $result = $query->fetch();

  // Vérifier si l'utilisateur a été trouvé dans la base de données
  if ($result) {
    // Démarrer une session pour l'utilisateur
    session_start();
    $_SESSION["type"] = $result["type"];

    // Rediriger vers la page appropriée en fonction du type d'utilisateur
    if ($_SESSION["type"] == "admin") {
      $_SESSION["username"]=$_POST['username'];

      header("Location: index1.php");
      exit();
    } else if ($_SESSION["type"] == "client") {
      $_SESSION["username"]=$_POST['username'];
      header("Location: test.php");

    }
  } else {
  
    // Afficher un message d'erreur si les informations d'identification sont invalides
   
    header('location: index.php?error');
  }
}

?>
<script>
 // alert("test")
			const bouton=document.getElementById("mybtn");
     bouton.addEventListener("click",passValidation)
     function passValidation()
     {
        const password1 = document.getElementById("username").value;
  const password2 = document.getElementById("password").value;

  // Vérifier si les deux mots de passe sont identiques
  if (password1.length!=0 && password2.length!=0) {
    // Les mots de passe sont identiques, renvoyer true
    alert("erreur");
     
   
  } }
			
		</script>