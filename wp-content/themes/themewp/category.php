<?php get_header(); ?>
<div id="category">

 <h1><?php single_cat_title();?></h1>
 
 <?php 


 // WP_Query arguments


// The Query
 if(have_posts()):
 while(have_posts()) : the_post();
   ?>

                            <article class="blog-entry">                        
                                        <div class="img-cat">
                                            <a href="<?php the_permalink();?>" title="<?php echo cuttitle(the_title());?>">
                                                <?php the_post_thumbnail('thumb_252x140');?>
                                            </a>
                                    
                                         </div>
                              
                                        <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="post-title"><?php the_title();?></a>
        
                                    </div>
                                </div>
                             </article>
                            <?php endwhile;?>
                             <?php
                             if(paginate_links()!='') {?>
                                <div class="quatrang">
                                    <?php
                                    global $wp_query;
                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'prev_text'    => __('« Mới hơn'),
                                        'next_text'    => __('Tiếp theo »'),
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $wp_query->max_num_pages
                                        ) );
                                    ?>
                                </div>
                            <?php } ?>

                             <?php
                            else:
                              get_template_part("content","none");
                                endif;

                            ?>


</div>

<?php get_footer(); ?>