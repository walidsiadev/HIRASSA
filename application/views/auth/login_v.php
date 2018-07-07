<!DOCTYPE html>
<html lang="fr">
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
<style>
body {
	background: #020202 !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

</style>	
<div class="wrapper">
    <form class="form-signin" action="<?php echo base_url('Login/login_validation');?>" method="post">       
      <h2 class="form-signin-heading">Authentification pour HIRASSA</h2>
      <input type="text" class="form-control" name="username" placeholder="Le Nom de l'utilasateur" required="" autofocus="" />
      </br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="Login">Login</button>   
    </form>
</div>

    
<script src="<?php echo base_url('/public/js/jquery-1.10.2.js'); ?>"></script>
<script src="<?php echo base_url('/public/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('/public/js/jquery.metisMenu.js'); ?>"></script>
</body>
</html>