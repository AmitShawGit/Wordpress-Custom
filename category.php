<?php get_header(); ?>

<div class="blog">

                        <?php if(have_posts()):while(have_posts()):the_post();?>
                            <div class="imageblog">
                               <img  width="100" src="<?php echo get_the_post_thumbnail_url();?>" class="embed-responsive" alt="blogimage" title="blog1" loading="lazy">
                               <p class="date"><?php the_date("m-d-y"); ?> <?php the_time(); ?></p>
                            </div>
               
                           <div class="contant-blog">
                               <div class="d-flex title-part">
                                <h3><?php the_title();?></h3>
                                 <span><?php the_author();?></span>
                               </div>
                             
                               <p><?php the_content();?></p>
                           </div>
                           <?php endwhile;endif;?>
                           
<?php get_footer(); ?>