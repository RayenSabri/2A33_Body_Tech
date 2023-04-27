<?php
include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
include_once 'C:/xampp/htdocs/projet/model/Offre.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php
$offreC = new OffreC();
$liste = $offreC->afficher_offre();
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Body Tech -Nos Offres</title>

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
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include SweetAlert2 library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

    <style>
        #formulaireDates {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: #f8f8f8;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            z-index: 9999;
        }


        #formulaireDates input[type="date"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #formulaireDates input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>

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
            <a class="navbar-brand" href="index.html"><h2>BODY <em>TECH</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Acceuil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="products.html">Nos produits</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="offres1.php">Nos Offres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">panier</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>les nouveautés</h4>
                    <h2>Nos produits</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="numbers">
    <div class="numbers-section">
        <div class="container">
            <!-- Code HTML pour le formulaire de dates (initialement caché) -->
            <div id="formulaireDates" style="display:none;">
                <form id="formulaireInscription">
                    <!-- Champs de dates -->
                    <input type="date" id="dateDebut" name="date_debut">
                    <input type="date" id="dateFin" name="date_fin">
                    <!-- Bouton de soumission du formulaire -->
                    <input type="submit" value="Inscrir">
                </form>
            </div>
        </div>
    </div>
    <div class="numbers-section">
        <div class="container">
            <div class="row">
                <?php
                foreach ($liste as $offre) {
                ?>

                    <div class="col-md-4"> <!-- Modifier la classe col-md-12 en col-md-4 pour afficher les offres horizontalement -->
                        <div class="product-content text-center">
                            <img src="../front/images/offre.png" height="200" width="200" class="center" />
                            <h4 class="title"><a href="#"><?php echo $offre['titre'] ?></a></h4>
                            <p><?php echo $offre['prix'] ?></p>
                            <p><?php echo $offre['description'] ?></p>
                            <p><p>Offre valable jusqu'au</p><?php echo $offre['date'] ?></p>
                            <br>
                            <a class="btn btn-primary" href="#" onclick="afficherFormulaire('<?php echo $offre['id'] ?>')">Inscrir</a>
                        </div>
                    </div>

                <?php  }?>
            </div>
        </div>

    </div>

    </div>
</section>




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

<script>
    //import Swal from "../back/vendors/echarts/dist/echarts";

    function afficherFormulaire(idOffre) {
        // Afficher le formulaire de dates
        document.getElementById('formulaireDates').style.display = 'block';

        // Lorsque le formulaire est soumis
        document.getElementById('formulaireInscription').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêcher la soumission du formulaire
            event.preventDefault(); // Empêcher la soumission du formulaire

            // Récupérer les valeurs des champs de date
            var dateDebut = document.getElementById('dateDebut').value;
            var dateFin = document.getElementById('dateFin').value;
            if (dateDebut > dateFin){
                document.getElementById('formulaireDates').style.display = 'none';
                Swal.fire({
                    icon: 'error',
                    title: 'Inscription failed',
                    text: 'Periode!',
                });
                return
            }

            // Envoyer la requête Ajax pour traiter la réservation
            $.ajax({
                type: 'POST',
                url: 'traiter_reservation.php',
                data: {
                    id_offre: idOffre, // Update with the appropriate data to send
                    date_debut: dateDebut, // Example of date start value
                    date_fin: dateFin // Example of date end value
                },
                success: function(response) {
                    // Show a success popup with a green tick and a "Reservation succeeded" text
                    Swal.fire({
                        icon: 'success',
                        title: 'Reservation Succeeded',
                        text: 'Votre lien de paiement a été envoyé a votre email!',
                    });
                    document.getElementById('formulaireDates').style.display = 'none';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle any errors that may occur during the Ajax request
                    console.error('Error:', textStatus, errorThrown);
                }
            });

        });
    }
</script>


</body>

</html>
