<?php
include_once 'C:/xampp/htdocs/projet/Controller/inscriptionC.php';
include_once 'C:/xampp/htdocs/projet/model/inscription.php';
$inscriptionC = new InscriptionC();

if (isset($_GET['id'])){
    $inscriptionEdit = $inscriptionC->getInscriptionById($_GET['id']);
}

if(isset($_POST['id']) &&
    isset($_POST['id_of']) &&
    isset($_POST['id_ur']) &&
    isset($_POST['date_debut']) &&
    isset($_POST['date_fin']) &&
    isset($_POST['motif'])
) {
    $inscription = new Inscription($_POST['id'], $_POST['id_of'], $_POST['id_ur'], $_POST['date_debut'], $_POST['date_fin'], $_POST['motif']);
    $inscriptionC->modifier_inscription($inscription, $_POST['id']);
    header('Location: ListInscription.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php require_once ('side-bar.php');?>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="C:/Users/RayenSabri/Downloads/133049554_2814237995465545_5083519601373988266_n (1).jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Offres </h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <!--<div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Basic Tables <small>basic table subtitle</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>


                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Stripped table <small>Stripped table subtitle</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>-->

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Modification d'une inscription</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <input class="form-control" name="id" value="<?php echo $inscriptionEdit['id'] ?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>ID Offre</label>
                                                <input type="text" class="form-control" name="id_of" value="<?php echo $inscriptionEdit['id_of'];?>" readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>ID Utilisateur</label>
                                                <input type="text" class="form-control" name="id_ur"  value="<?php echo $inscriptionEdit['id_ur'];?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Date de début</label>
                                                <input type="date"   class="form-control" name="date_debut" value="<?php echo $inscriptionEdit['date_debut'];?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Date de fin</label>
                                                <input type="date" class="form-control" name="date_fin" value="<?php echo $inscriptionEdit['date_fin'];?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Motif</label>
                                                <input type="text" class="form-control" name="motif" value="<?php echo $inscriptionEdit['motif'];?>"/>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">modifier</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <!--<div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Boardered table <small>Bordered table subtitle</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>

                        </div>
                      </div>
                    </div>-->

                    <div class="clearfix"></div>

                    <!--<div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Table design <small>Custom design</small></h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                          <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                          <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                              <thead>
                                <tr class="headings">
                                  <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                  </th>
                                  <th class="column-title">Invoice </th>
                                  <th class="column-title">Invoice Date </th>
                                  <th class="column-title">Order </th>
                                  <th class="column-title">Bill to Name </th>
                                  <th class="column-title">Status </th>
                                  <th class="column-title">Amount </th>
                                  <th class="column-title no-link last"><span class="nobr">Action</span>
                                  </th>
                                  <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                  </th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000040</td>
                                  <td class=" ">May 23, 2014 11:47:56 PM </td>
                                  <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$7.45</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="odd pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000039</td>
                                  <td class=" ">May 23, 2014 11:30:12 PM</td>
                                  <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                                  </td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$741.20</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000038</td>
                                  <td class=" ">May 24, 2014 10:55:33 PM</td>
                                  <td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
                                  </td>
                                  <td class=" ">Mike Smith</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$432.26</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="odd pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000037</td>
                                  <td class=" ">May 24, 2014 10:52:44 PM</td>
                                  <td class=" ">121000204</td>
                                  <td class=" ">Mike Smith</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$333.21</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000040</td>
                                  <td class=" ">May 24, 2014 11:47:56 PM </td>
                                  <td class=" ">121000210</td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$7.45</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="odd pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000039</td>
                                  <td class=" ">May 26, 2014 11:30:12 PM</td>
                                  <td class=" ">121000208 <i class="error fa fa-long-arrow-down"></i>
                                  </td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$741.20</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000038</td>
                                  <td class=" ">May 26, 2014 10:55:33 PM</td>
                                  <td class=" ">121000203</td>
                                  <td class=" ">Mike Smith</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$432.26</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="odd pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000037</td>
                                  <td class=" ">May 26, 2014 10:52:44 PM</td>
                                  <td class=" ">121000204</td>
                                  <td class=" ">Mike Smith</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$333.21</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>

                                <tr class="even pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000040</td>
                                  <td class=" ">May 27, 2014 11:47:56 PM </td>
                                  <td class=" ">121000210</td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$7.45</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                                <tr class="odd pointer">
                                  <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                  </td>
                                  <td class=" ">121000039</td>
                                  <td class=" ">May 28, 2014 11:30:12 PM</td>
                                  <td class=" ">121000208</td>
                                  <td class=" ">John Blank L</td>
                                  <td class=" ">Paid</td>
                                  <td class="a-right a-right ">$741.20</td>
                                  <td class=" last"><a href="#">View</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>


                        </div>
                      </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="build/js/custom.min.js"></script>
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
        var id_ur = document.getElementById('id_ur').value;
        var date_debut = document.getElementById('date_debut').value;
        var date_fin = document.getElementById('date_fin').value;
        var motif = document.getElementById('motif').value;

        var ok = true;




        <!--if (!/^[A-Z0-9]+$/.test(date_fin)) {
            alert("Le code promo doit contenir seulement des lettres majuscules et des chiffres.");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (!/^[A-Za-z]+$/.test(id-ur)) {
            alert("Le id-ur contient d'autres caractères en plus des lettres");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }
        if (!!/^[A-Za-z0-9!@#$%^&*]+$/.test(date_debut)) {
            alert("La date_debut doit contenir des lettres et des symboles.");
            document.getElementById("msgDiv12").innerHTML = "id doit etre positive! ";
            preventdefault();
            returnToPreviousPage();
            return false;
        }-->
        if (id_ur === '' || date_debut === '' || date_fin === '' || motif === '') {
            alert('Veuillez remplir tous les champs');
            return false;
        } else {
            document.getElementById('form').submit();
        }

        return true;

    }
</script>
