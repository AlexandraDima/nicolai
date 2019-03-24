<div class="blog">
<?php 
get_header(); ?>
</div>

<div class="container-fluid p-5">
	
<div class="row">
  <div class="leftcolumn">
    <div class="card">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <?php the_title(); ?>
 <?php the_content(); ?>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
    </div>
  </div>
  <div class="rightcolumn">
    <?php get_sidebar(); ?>
  </div>
</div>
	</div>


<?php get_footer(); ?>
	  
