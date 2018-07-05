<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo base_url('/public/img/logo7irasa.png'); ?>" />
    <title><?php echo $title; ?></title>
    <link href="<?php echo base_url('/public/css/bootstrap.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/public/font/css/font-awesome.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('/public/css/custom.css'); ?>" rel="stylesheet" />
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
                <a class="navbar-brand" href="<?php echo base_url('Pages');?>">HIRASSA</a> 
            </div>
        <div style="color: white;
              padding: 15px 50px 5px 50px;
              float: right;
              font-size: 16px;">Dernier accès: 30 mai 2014 &nbsp; 
              <a href="#" class="btn btn-primary square-btn-adjust"><span class="fa fa-sign-out"> </span>Déconnexion</a> 
        </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url('/public/img/logo7irassa.png'); ?>" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="<?php if($this->uri->segment(1) == 'Pages' && $this->uri->segment(2) == '') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages');?>"><i class="fa fa-tachometer fa-3x"></i> Tableau de bord</a>
                    </li>
                      <li>
                        <a class="<?php if($this->uri->segment(2) == 'Prof' || $this->uri->segment(1) == 'Prof') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Prof');?>"><i class="fa fa-graduation-cap fa-3x"></i> Professeur</a>
                    </li>
                    <li>
                        <a class="<?php if($this->uri->segment(2) == 'Exam' || $this->uri->segment(1) == 'Exam') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Exam');?>"><i class="fa fa-qrcode fa-3x"></i> Les Examens & Planification</a>
                    </li>	            
                    <li>
                        <a><i class="fa fa-university fa-3x"></i> École<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'Ecole' || $this->uri->segment(1) == 'Ecole') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Ecole');?>"> L'École</a>
                            </li>
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'Prefect' || $this->uri->segment(1) == 'Prefect') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Prefect');?>"> La Préfecture</a>
                            </li>
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'Villes' || $this->uri->segment(1) == 'Villes') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Villes');?>"> les Villes</a>
                            </li>
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'Salle' || $this->uri->segment(1) == 'Salle') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Salle');?>"> Les Salles</a>
                            </li>
                            <li>
                                <a class="<?php if($this->uri->segment(2) == 'Matieres' || $this->uri->segment(1) == 'matiere') echo 'active-menu'; else echo ''; ?>" href="<?php echo base_url('Pages/Matieres');?>"> Les Matières</a>
                            </li>
                        </ul>
                      </li>  
                    <li>
                        <a class="<?php if($this->uri->segment(2) == 'Admin' || $this->uri->segment(1) == 'Admin') echo 'active-menu'; else echo ''; ?>"  href="<?php echo base_url('Pages/Admin');?>"><i class="fa fa-address-card fa-3x"></i> Administration</a>
                    </li>	
            </ul>
               
    </div>
            
</nav>  