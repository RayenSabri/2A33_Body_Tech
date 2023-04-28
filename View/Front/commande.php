<?php

include '../../Controller/CommandesC.php';
include '../../Controller/produitsP.php';
include '../../Model/produits.php';
include '../../Model/Commandes.php';

$error = "";

// create commande
$id_produit = $_GET['id_produit'];
$commandes = null;
$produitsP = new produitsP();
$produits = $produitsP->listeproduits();

// create an instance of the controller
$commandesC = new CommandesC();

if(isset($_POST["submit"])) {
  // create an instance of the controller
  $commandesC = new CommandesC();

  // create commande
  $commande = new Commandes(
    null,
    $_POST['nom'],
    $_POST['prenom'],
    $_POST['adresse'],
    $_POST['numTel'],
    $_POST['id_produit']
  );

  $commandesC->addCommandes($commande);
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing - panier Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Acceuil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">nos produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">A propos </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="panier.html">panier</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading panier-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>panier</h4>
              <h2>let’s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


   

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>passez votre commande</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="panier-form">
            <form method="post" action="">
  <div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>
  <div class="form-group">
    <label for="prenom">Prenom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom" required>
  </div>
  <div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" class="form-control" id="adresse" name="adresse" required>
  </div>
  <div class="form-group">
    <label for="numTel">Numéro de téléphone:</label>
    <input type="tel" class="form-control" id="numTel" name="numTel" required>
  </div>
  <div class="form-group">
    <label for="id_produit">Produit ID:</label>
    <input type="number" class="form-control" id="id_produit" name="id_produit" value="<?php echo $id_produit; ?>" readonly>
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: #AF3535;" name="submit">Ajouter Commande</button>
</form>
            </div>
          </div>
          

  
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


<!--
<script>
        function verif(){

            var ch2 = document.getElementById("nom").value ;
            for (i = 0; i < ch2.length; i++) {
            if ((ch2.charAt(i).toUpperCase() < 'A') || (ch2.charAt(i).toUpperCase() > 'Z')) {
            alert("Le nom doit etre alphabetique seulement!!");
            return false;
        }
    }   
            var ch1 = document.getElementById("prenom").value ;
                for (i = 0; i < ch1.length; i++) {
                if ((ch1.charAt(i).toUpperCase() < 'A') || (ch1.charAt(i).toUpperCase() > 'Z')) {
                alert("le prenom doit etre alphabetique seulement !!");
            return false;
         }
        }
        
            num = document.getElementById("numTel").value ;
           if ((num.length!= 😎 || (isNaN(num))){
                alert("le numero de telehpone doit etre numerique et contient obligatoirement 8 chiffre !!");
                return false ;
            }
          

            
            
            
            


        }
    </script>-->



  </body>

</html>
