<?php get_header(); ?>
<div id="category">
  <div class="container">
    <div id="cat-title">
<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>   </div>
   <div id="content-cat">
     <?php 
     if(have_posts()):
       while(have_posts()) : the_post();
     ?>                       <article class="cat-item">
     <div class="cat-left">
      <a href="<?php the_permalink();?>" title="<?php echo cuttitle(the_title());?>">
        <?php the_post_thumbnail('thumb_252x140');?>
      </a>
    </div>
    <div class="cat-right">
      <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="post-title"><?php the_title();?></a>
    </div>

  </article>
<?php endwhile;?>


<?php

else:
  get_template_part("content","none");
endif;

?>
</div>
<div id="panagition">
  
  <?php pagination(); ?>
</div>

</div>
</div>

<?php get_footer(); ?>