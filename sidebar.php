


    <div class="card">
		
      <h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
    </div>
    <div class="card">
		<h4>Archives</h4>
	<ol class="list-unstyled">
	<?php wp_get_archives( 'type=monthly' ); ?>
	</ol>
      <h3>Popular Post</h3>
		 <?php
                if(is_active_sidebar('recentpost')){
                dynamic_sidebar('recentpost');
                }
                ?>
    
       
		            
      <div class="fakeimg">
		  
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=2' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		  <?php the_post_thumbnail('thumbnail'); ?>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		
		</div>

    </div>
    <div class="card">
      <h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="https://www.facebook.com/nicolaikultur/" target="blank">Facebook</a></li>
			<li><a href="https://www.instagram.com/nicolaikultur/?hl=en" target="blank">Instagram</a></li>
		</ol>
    </div>
 

		



	  
	  
	  
	  
	