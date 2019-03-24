<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="description" content="" /> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	     <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/hover-min.css" media="all">
    <title><?php bloginfo ('title'); ?></title>
	 
	  
  </head>
  <body>
<!--1.Top navigation---->
	<header> 
 <!--1.Top navigation---->
		

	
  <nav class="navbar navbar-dark navbar-expand-lg mynavbar">
  <div class="container-fluid">
  
      <!------a.Logo-->
     <div class="logo navbar-brand d-inline-block align-top ml-3">
        
         <a href="home.html"><img src="<?php bloginfo('template_url')?>/images/logo.jpg" height="30" alt="logonicolai" ></a>
         <?php
		 if ( function_exists( 'the_custom_logo' ) ) {
    	the_custom_logo();
		 }
		?>
  
	
	  </div>  
    
     <!------b.Toggler button-->
<div class="navbar-header mr-2">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="navbar-toggler-icon"></span>
	   
   </button>
   </div>
   
    
 <!------c.mobile Nav list-->
	 
 <div class="mynavbar navbar-collapse collapse justify-content-end" id="mainNav">
   
		    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	  
   
	  </div>
	  </div> 
  </nav>
		 
 
		 </header>

