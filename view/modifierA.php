<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BodyTech - Acceuil</title>

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
          <a class="navbar-brand" href="index.html"><h2>Body <em>Tech</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Acceuil
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Nos produits</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="panier.html.html">panier</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Bienvenue</h4>
            <h2>Prends soin de ton corps</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>flash offres</h4>
            <h2>Les meilleurs produits</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Regimes Ideales</h4>
            <h2>Pour une meilleure santé</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           
          </div>
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            
          </div>
          <div class="col-md-4">
            
            </div>
          </div>
          <div class="col-md-4">
           
          </div>
          <div class="col-md-4">
            
          </div>
        </div>
      </div>
    </div>

    



    <div>
        


<?php
    include_once '../Model/admin.php';
    include_once '../Controller/adminC.php';

    $error = "";

    // create deplacement
    $admin = null;

    // create an instance of the controller
    $adminC = new adminC();
    if (
        isset($_POST["cin"]) &&
        isset($_POST["nom"]) &&        
        isset($_POST["prenom"]) &&
        isset($_POST["salaire"]) && 
        isset($_POST["email"]) && 
        isset($_POST["tel"]) && // fixed missing comma
        isset($_POST["password"])
    ) {
        if (
            !empty($_POST["cin"]) && 
            !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
            !empty($_POST["salaire"]) && 
            !empty($_POST["email"]) && 
            !empty($_POST["tel"]) && // fixed missing comma
            !empty($_POST["password"])
        ) {
            $admin = new admin(
                $_POST['cin'],
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['salaire'],
                $_POST['email'],
                $_POST['tel'], // fixed missing comma
                $_POST['password']
            );
            $adminC->modifier_admin($admin, $_POST["cin"]);
            header('Location:afficherA.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
    <button><a href="afficheA.php">Retour à la liste des deplacement</a></button>
    <hr>
        
    <div id="error">
        <?php echo $error; ?>
    </div>
            
    <?php
        if (isset($_POST['cin'])){
            $cin = $_POST['cin'];
            $admin = $adminC->recupererA($cin);
            
    ?>
        
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="cin">cin :
                    </label>
                </td>
                <td><input type="text" name="cin" id="cin" value="<?php echo $admin['cin']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="nom"> nom:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $admin['nom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="prenom">prenom:
                    </label>
                </td>
                <td><input type="text" name="prenom" id="prenom" value="<?php echo $admin['prenom']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="salaire">salaire:
                    </label>
                </td>
                <td>
                        <input type="text" name="type" value="<?php echo $admin['type']; ?>" id="type">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">email:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo $admin['email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tel">tel:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tel" id="tel" value="<?php echo $admin['tel']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td>
                        <label for="password">password:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" value="<?php echo $admin['password']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>
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


  </body>

</html>
