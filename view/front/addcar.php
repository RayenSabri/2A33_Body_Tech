<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CARRENT - Car Rental HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <p>User name</p>
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">CARRENT</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">OPTIONS</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="car.php" class="dropdown-item">Mes voitures</a>
                                <a href="detail.php" class="dropdown-item">Mes voitures</a>
                            </div>
                        </div>
                        
                        <a href="add_carContact.html" class="nav-item nav-link active">Ajout Voiture</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


   
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">ajouter votre voiture </h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">add_car</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h6 class="text-uppercase text-body m-0">veuiller entrer les informations de votre voiture :</h6>
            <div class="row">
                <div class="col-lg-7 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="post" action="mailing.php" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="matricule" class="form-control p-4" placeholder="la matricule du voiture" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="marque" class="form-control p-4" placeholder="la marque du voiture" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="text" name="etat" class="form-control p-4" placeholder="l'etat du voiture " required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="kilometrage" class="form-control p-4" placeholder="kilometrage du voiture" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" name="prix" class="form-control p-4" placeholder="prix" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" name="consomation" class="form-control p-4" placeholder="consomation" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" name="transmission" class="form-control p-4" placeholder="transmission" required="required">
                            </div>
                            <div class="form-group">
                                <input required type="file" class="form-control" id="fileToUpload" name="fileToUpload">
                            </div>
                        
                            <div>
                                <button class="btn btn-primary py-3 px-5" name="submit" type="submit">ajouter la voiture</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-2">
                    <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Notre Office</h5>
                                <p>Ariana Soghra</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Le Branche De Notre Office</h5>
                                <p>Ariana Soghra</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Service Client</h5>
                                <p>carrent@yandex.com</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                            <div class="mt-n1">
                                <h5 class="text-light">Pour Tout ajout voiture </h5>
                                <p class="m-0">mohamedlouay.hamrouni@esprit.tn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <tbody>
                        <?php
                        foreach ($liste as $voiture){
                            ?>
                            <tr>
                                <td><?php echo $voiture['matricule']; ?></td>
                                <td><?php echo $voiture['marque']; ?></td>
                                <td><?php echo $voiture['etat']; ?></td>
                                <td><?php echo $voiture['killometrage']; ?></td>
                                <td><?php echo $voiture['prix']; ?></td>
                                <td><?php echo $voiture['consommation']; ?></td>
                                <td><?php echo $voiture['transmission']; ?></td>
                                <td><?php echo $voiture['id_categorie']; ?></td>
                                <td><?php echo $voiture['photo']; ?></td>
                               
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>carrent@yandex.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Private Policy</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Term & Conditions</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>New Member Registration</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Affiliate Programme</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Return & Refund</a>
                    <a class="text-body" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Help & FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Car Gallery</h4>
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-1.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-2.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-3.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-4.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-5.jpg" alt=""></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" src="img/gallery-6.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
                <i>Lorem sit sed elitr sed kasd et</i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">&copy; <a href="#">CARRENT</a>. All Rights Reserved.</p>
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

<script>
    function allLetter(word) {
        var letters = /^[A-Za-z]+$/;
        if (word.match(letters)) {
            return true;
        } else {
            return false;

        }
    }

    function startsWithCapital(word) {
        if (/[A-Z]/.test(word[0])) {
            return true;
        } else {
            return false;

        }
    }

    function verif() {
        var matricule = document.getElementById("matricule").value;
        var marque = document.getElementById("marque").value;
        var etat = document.getElementById("etat").value;
        var kilometrage = document.getElementById("kilometrage").value;
        var prix = document.getElementById("prix").value;
        var consommation = document.getElementById("consommation").value;
        var transmission = document.getElementById("transmission").value;

        var ok = true;


         if (startsWithCapital(marque) == false) {
           alert("le premier lettre du marque en majiscule!");
           document.getElementById("msgDiv12").innerHTML = "le premier lettre du titre doit etre en majiscule! ";
           preventdefault();
           returnToPreviousPage();
           return false;
         }

        if (matricule.length < 6) {
            alert("matricule invalide");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (marque < 0) {
            alert("id commande doit etre positive");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }

        if(allLetter(etat)== false){
            alert("etat doit etre en tout lettres");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }

        if(allLetter(transmission)== false){
            alert("transmission doit etre en tout lettres");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }







        document.forms["form"].submit();

        return true;

    }
</script>

</html>