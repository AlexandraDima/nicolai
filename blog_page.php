<!---
Template name: Template blog
-->
<div class="blog">
<?php 
get_header(); ?>
  <div class="animation col-lg-12 d-none d-lg-inline">
			
			  <div class="col-lg-12 text">
				  <p class="introblog animate-pop-in">News</p>
				
		</div>
 

			  </div>
 
</div>

<!---header blog-->


<div class="container-fluid p-5">
	
<div class="row">
  <div class="leftcolumn">
    <div class="card">
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
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
  <div class="rightcolumn">
    <?php get_sidebar(); ?>
  </div>
</div>
	</div>



<?php get_footer(); ?>
	  
	  
	  
	  
	