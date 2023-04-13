<?php
include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
require_once 'C:/xampp/htdocs/projet/model/Offre.php';
$offreC = new OffreC();
if(isset($_POST['titre']) &&
    isset($_POST['description']) &&
    isset($_POST['codePromo']) &&
    isset($_POST['date'])
) {
    $offre = new Offre(0,$_POST['titre'],$_POST['description'],$_POST['codePromo'],$_POST['date']);
    $offreC->ajouter_offre($offre);
    header('Location: ListOffre.php');
}



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Offre</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



<div <div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo1.png" />
                </a>
            </div>


        </div>
    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="ListOffre.php"><i class="fa fa-table "></i>gestion des offres </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Ajouter Offre</h2>
                </div>
            </div>
            <form method="post" action="" id="form" onsubmit="event.preventDefault(); verif();">

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Titre</label>
                            <input class="form-control" name="titre" id="titre" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description" id="description" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>CodePromo</label>
                            <input type="text" class="form-control" name="codePromo" id="codePromo" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>date</label>
                            <input type="date" class="form-control" name="date" id="date" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a href="ListOffre.php" class="btn btn-danger">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"  target="_blank">www.binarytheme.com</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


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
        var titre = document.getElementById('titre').value;
        var description = document.getElementById('description').value;
        var codePromo = document.getElementById('codePromo').value;
        var date = document.getElementById('date').value;

        var ok = true;




        if (!/^[A-Z0-9]+$/.test(codePromo)) {
            alert("Le code promo doit contenir seulement des lettres majuscules et des chiffres.");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (!/^[A-Za-z]+$/.test(titre)) {
            alert("Le titre contient d'autres caractères en plus des lettres");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (!!/^[A-Za-z0-9!@#$%^&*]+$/.test(description)) {
            alert("La description doit contenir des lettres et des symboles.");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (titre === '' || description === '' || codePromo === '' || date === '') {
            alert('Veuillez remplir tous les champs');
            return false;
        } else {
            document.getElementById('form').submit();
        }

        return true;

    }
</script>
