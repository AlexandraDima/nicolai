<?php get_header(); ?>
	  <!-- FOOTER ---------------------------->
   <section class="footer">
   	<div class="container-fluid">
		
		<div class="container">

            <div class="row">
	
                <div class="infofooter col-lg-4 col-md-4 col-sm-12">
               
                <?php
                if(is_active_sidebar('footer-1')){
                dynamic_sidebar('footer-1');
                }
                ?>
                </div>

                <div class="infofooter col-lg-4 col-md-4 col-sm-12">

                <?php
                if(is_active_sidebar('footer-2')){
                dynamic_sidebar('footer-2');
                }
                ?>
                    <ul class="follow">
		<li>Address:Skolegade 2B,6000 Kolding   </li>
		<li>Phone:79791031 </li>
		<li>Email:nicolai@kolding.dk </li>
		<li>
                    <a href="https://www.facebook.com/nicolaikultur/" target="blank"><i class="hvr-grow fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/nicolaikultur/?hl=en" target="blank"><i class="hvr-grow fab fa-instagram fa-2x"></i></a>
                </li>
		
		</ul>
                </div>

                <div class="infofooter col-lg-4 col-md-4 col-sm-12">

                <?php
                if(is_active_sidebar('footer-3')){
                dynamic_sidebar('footer-3');
                }
                ?>
                
                </div>

                </div>
			
        </div>
        </div>  
   </div>
   
   <a id="scrollUp" href="#"></a>
   
    </section>
	
	  
          <script src="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css"></script>
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-2.0.3.min.js" integrity="sha256-sTy1mJ4I/LAjFCCdEB4RAvPSmRCb3CU7YqodohyeOLo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/javascript.js"></script>

  </body>
</html>