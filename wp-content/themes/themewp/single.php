    <?php get_header(); ?>


     <h1><?php echo the_title();?></h1>
 
                     
     <div>
   <?php
    while (have_posts()) :the_post(); 
   
   the_content();
    endwhile;
?>
     </div>
            
     <?php get_footer(); ?>