<?php
include_once 'C:/xampp/htdocs/projet/Controller/OffreC.php';
include_once 'C:/xampp/htdocs/projet/model/Offre.php'; ?>

<!DOCTYPE html>
<html>
<?php
$offreC = new OffreC();
$liste = $offreC->afficher_offre();
?>
    <head>
        <title>
            BODYTECH
        </title>
        <meta charset="utf-8">
        <!--CSS-->
        
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    </head>
    <body>
       <header class="header" id="HOME">
                 <!-- Navigation -->
            
            <nav class="navbar navbar-default navbar-fixed-top">
              
                
                <div class="container">
                  
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#loso-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">
                          <!-- small size logo -->
                          <img src="images/logo1.png" alt="logo">

                        </a>
                    </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="loso-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="#HOME" class="nav-item">HOME</a></li>
                        <li><a href="#about" class="nav-item">ABOUT</a></li>
                        <li><a href="#numbers" class="nav-item">OFFRES</a></li>
                        <li><a href="#contact-us" class="nav-item">CONTACT</a></li>
                  </ul>
                 
                 
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
</nav>
          
          
          
           <div class="header-overlay">
               <div class="container">
                   <div class="row">
                    <div class="col-md-12">
                        <!--Logo-->
                        <div class="logo text-center">
                            <img src="images/logo1.png" height="80px" width="80px" class="logoimg" />
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8 wow bounceIn">
                        <div class="header-text">
                            <h1>BODYTECH</h1>
                            <p>Sorry, there’s no magic bullet. You gotta eat healthy and live healthy to be healthy and look healthy. End of story </p>
                        </div>
                        <div class="header-btns">
                          <a href="#about">
                              <i class="fa fa-angle-down wow bounceInUp"></i>
                          </a>
                        
                      </div>
                    </div>
                    <div class="col-md-4">
                       <div class="header-col">
                        
                         <form role="form" class="header-form">
                            <h2>Meet The Champions</h2>
                             <div class="form-group">
                                 <input type="text" placeholder="First Name" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <input type="text" placeholder="Last Name" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <input type="text" placeholder="E- Mail Address" class="form-control input-3x">
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-3x">SIGN UP <span> <i class="fa fa-angle-double-right"></i> </span></button>
                             </div>
                         </form>
                       </div>
                        
                    </div>
                </div>
                </div>
                   <div class="row"></div>
               </div>
           </div>
       </header>
       <!--Section About-->

        <section id="numbers">
            <div class="numbers-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="section-title">NOS OFFRES</h2>
                        </div>
                    </div>
                </div>
               <div>
                   <?php
    foreach ($liste as $offre) {
        ?>

                           <div class="product-content text-center">
                               <img src="../front/images/offre.png" height="200" width="200" class="center"/>
                               <h4 class="title"><a href=#><?php echo $offre['titre'] ?></a></h4>
                               <p><?php echo $offre['codePromo'] ?></p>
                               <p><?php echo $offre['description'] ?></p>
                               <p><p>Offre valable jusqu'au</p><?php  echo $offre['date'] ?></p>
                               <br>
                               </a>
                           </div>
                       </div>
                   </div><?php  }?>

               </div>
            </div>
        </section>
        <section id="contact-us">
            <div class="contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 wow bounceInDown">
                            <h2 class="section-title">Leave Your Feedback</h2>
                            <p class="under-heading">Feel Free to text us</p>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper">
                    <div class="container">
                        <form role="form">
                            <div class="row">
                            <div class="col-md-6 wow bounceInLeft">

                                    <div class="form-group">
                                        <input type="text" placeholder="Your Name" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Your E - Mail" class="form-control input-lg">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Subjet" class="form-control input-lg">
                                    </div>

                            </div>
                            <div class="col-md-6 wow bounceInRight">
                               <div class="form-group">
                                <textarea placeholder="Your Message" class="form-control "></textarea>
                               </div>
                               <button class="btn btn-primary btn-block input-lg">SEND MESSAGE</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-icons wow slideInDown">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus fa-3x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="footer">
            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="footer-text" >Copyright <span class="copyright"> &copy;</span>2017</p>
                        </div>
                        <div class="col-md-4">
                            <p class="footer-text">Biking Theme</p>
                        </div>
                        <div class="col-md-4">
                            <p class="footer-text">Brought to you by <span class="usama"><a href="https://www.facebook.com/UsamaElsayed90">Usama Elsayed</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="loading-overlay">
       <div class="sk-cube-grid">
        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
       </div>
       </section>
       
       
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>
    </body>
</html>