<?php get_header(); ?>

<section id="search-page">
<div class="container">
   <?php 
    if(have_posts()):
?>

			<div class="list-post">
                            <?php while(have_posts()) : the_post();?>
                            <article class="search-page-content">
                                
                                        <div class="thumb">
                                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                                <?php the_post_thumbnail('thumb_295x210');?>
                                            </a>
                                        </div>
                                    
                                    <div class="col-xs-7">
                                        <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="post-title"><?php the_title();?></a>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile;wp_reset_query();
                    
                           else:
                           	get_template_part("content", "none" );

                             endif;
                            ?>
                        </div>
                        <div id="phantrang">
	<?php         pagination(); ?>
                          </div>
</div>

</section>


   
  
<?php get_footer(); ?>