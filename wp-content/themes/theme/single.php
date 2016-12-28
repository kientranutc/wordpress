<?php get_header(); ?>

<div class="container">
	
	 <h1><?php echo the_title();?></h1>
             <?php echo getPostViews(get_the_ID()); ?>         
            <?php setPostViews(get_the_ID()); ?>
     <div>
   <?php
    while (have_posts()) :the_post();


   the_content();

    endwhile;

?>
</div>
	</div>
<?php get_footer(); ?>