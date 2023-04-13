<?php
include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
$offreC = new OffreC();
$liste = $offreC->afficher_offre(); // appel fonction d'affichage

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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



<div id="wrapper">
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
                    <a href="ListOffre.php"><i class="fa fa-table "></i>gestion des offres  </a>
                </li>
                
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Afficher les offres</h2>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h5>Ajouter une nouvelle offre</h5>
                    <tr>
                        <td>
                        <a href="addOffre.php" class="btn btn-warning">Ajouter</a>
                        </td>
                    </tr>
                    
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>titre</th>
                            <th>Description</th>
                            <th>CodePromo</th>
                            <th>date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($liste as $offre){
                            ?>
                            <tr>
                                <td><?php echo $offre['id']; ?></td>
                                <td><?php echo $offre['titre']; ?></td>
                                <td><?php echo $offre['description']; ?></td>
                                <td><?php echo $offre['codePromo']; ?></td>
                                <td><?php echo $offre['date']; ?></td>
                                <td>
                                    <a href="deleteOffre.php?id=<?php echo $offre['id']; ?>" class="btn btn-danger">Supprimer</a>
                                    <a href="updateOffre.php?id=<?php echo $offre['id']; ?>" class="btn btn-warning">modifier</a>                    
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>

                </div>

            </div>

            <!-- /. ROW  -->
            <hr />

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
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
