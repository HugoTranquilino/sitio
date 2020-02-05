<!DOCTYPE html>
<html>
<head>
	
	<title>Obarmed</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/gallery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/social.js"></script>

</head>
<body class="hm-gradient">
	<div class="conteinder-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark static-top">
			<div class="container">
				<a class="navbar-brand" href="#">
	      			<img src="assets/images/logo.jpg" class="imglogo">
	    		</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="	navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	      			<span class="navbar-toggler-icon"></span>
	    		</button>
    			<div class="collapse navbar-collapse" id="navbarResponsive">
      				<ul class="navbar-nav ml-auto">
        				<li class="nav-item active">
          					<a class="nav-link" href="#somos">¿Quiénes Somos?
                				<span class="sr-only">(current)</span>
              				</a>
        				</li>
        				<li class="nav-item">
          					<a class="nav-link" href="#galeria">Galería</a>
        				</li>
				        <li class="nav-item">
				          <a class="nav-link" href="#informacion">Información</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#noticias">Noticias</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#contactame">Contáctame</a>
				        </li>
      				</ul>
    			</div>
			</div>
		</nav>
	</div>
		 <aside class="">
        <?php echo $content; ?>
    </aside>