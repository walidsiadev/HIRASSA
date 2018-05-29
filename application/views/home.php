<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Le Site | HIRASSA</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="font/css/font-awesome.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">HIRASSA</a> 
            </div>
        <div style="color: white;
              padding: 15px 50px 5px 50px;
              float: right;
              font-size: 16px;">Dernier accès: 30 mai 2014 &nbsp; 
              <a href="#" class="btn btn-danger square-btn-adjust"><span class="fa fa-sign-out"> </span>Déconnexion</a> 
        </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/logo7irassa.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  href="#"><i class="fa fa-tachometer fa-3x"></i> Tableau de bord</a>
                    </li>
                      <li>
                        <a  href="#"><i class="fa fa-graduation-cap fa-3x"></i> Professeur</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-qrcode fa-3x"></i> Les Examens & Planification</a>
                    </li>
						   <li  >
                        <a  href="#"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	            
                    <li>
                        <a href="#"><i class="fa fa-university fa-3x"></i> École<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> L'École</a>
                            </li>
                            <li>
                                <a href="#"> La Préfecture</a>
                            </li>
                            <li>
                                <a href="#"> les Villes</a>
                            </li>
                            <li>
                                <a href="#"> Les Salle</a>
                            </li>
                            <li>
                                <a href="#"> les Matières</a>
                            </li>
                        </ul>
                      </li>  
                    <li>
                        <a class="active-menu"  href="blank.html"><i class="fa fa-address-card fa-3x"></i> Administration</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                    <div class="row">
                            <div class="col-md-12">
                             <h2>Blank Page</h2>   
                                <h5>Welcome Jhon Deo , Love to see you back. </h5>
                               
                            </div>
                    </div>
                 <!-- /. ROW  -->
                 <hr />
               
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>