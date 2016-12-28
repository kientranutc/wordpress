<?php get_header();?>
    <div id="main">

        <section id="primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bc">
                            <div class="row">
                                <div class="col-xs-12">
                                <?php if ( function_exists('yoast_breadcrumb') ) {
                                  yoast_breadcrumb('<p id="breadcrumbs"><a class="home" href="'.home_url().'" title="'.get_bloginfo('name').'"></a>','</p>');
                                } ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-sm-12 col-xs-12">
                        <header class="post-title">
                            <h1>
                                <?php printf( 'Từ khóa tìm kiếm: %s', get_search_query() );?>
                            </h1>
                        </header>
                        <div class="list-post">
                            <?php while(have_posts()) : the_post();?>
                            <article class="blog-entry">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="thumb">
                                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                                                <?php the_post_thumbnail('thumb_295x210');?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="post-title"><?php the_title();?></a>
                                        <footer>
                                            <a class="readmore" href="<?php the_permalink();?>" title="<?php the_title();?>" rel="nofollow"><i class="fa fa-hand-o-right"></i> Xem tiếp</a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile;wp_reset_query();?>
                        </div>
                      
                    </div>
                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer()?>