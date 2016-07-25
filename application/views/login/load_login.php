
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freakpixels.com/portfolio/brio/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2016 14:39:39 GMT -->
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login System</title>

	<meta name="description" content="">
	<meta name="author" content="Akshay Kumar">

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?=base_url('public')?>/assets/css/bootstrap/bootstrap.css" /> 

    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Base Styling  -->
    <link rel="stylesheet" href="<?=base_url('public')?>/assets/css/app/app.v1.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>var URL ="<?=base_url()?>"</script>
</head>
<body>	
    
	
    <div class="container">
    	<div class="row">
    	<div class="col-lg-4 col-lg-offset-4">
        	<h3 class="text-center">Sistema</h3>
            <p class="text-center">Ingreso al Sistema</p>
            <hr class="clean">
        	<form role="form">
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input id="username" name="username" type="text" class="form-control"  placeholder="Usuario">
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input id="password"  name="password" type="text" class="form-control"  placeholder="Password">
              </div>
            
        	  <button type="submit" class="btn btn-purple btn-block" id="btnLogin">Login</button>
            </form>
        </div>
        </div>
    </div>
    
    
    
    <!-- JQuery v1.9.1 -->
	<script src="<?=base_url('public')?>/assets/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?=base_url('public')?>/assets/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url('public')?>/assets/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="<?=base_url('public')?>/assets/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="<?=base_url('public')?>/assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
	
    
    
    <!-- Custom JQuery -->
	<script src="<?=base_url('public')?>/assets/js/app/custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url('public/js/bootbox.js')?>"></script>
    <script src="<?=base_url('public/js/master/login.js')?>" type="text/javascript"></script>
    

    
</body>
</html>
