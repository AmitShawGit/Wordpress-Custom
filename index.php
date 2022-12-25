<?php get_header() ?>
 

     
            <div class="container">
            <div class="row">
            <?php
                    while(have_posts()) {the_post()
                
                 ?>

                 <div class="col-lg-6">
                     <div class="title"> <?php the_title(); ?> </div>
                      <?php $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail');?>
                   <div class="pimg"><img src="<?php echo $imagepath[0]?>" class="img-fluid" alt=""></div>
                 </div>
                   <div class="col-lg-6">
                     <p><?php the_content(); ?></p>
                     <a href="<?php the_permalink(); ?>" type="button" class="btn btn-primary">Read more</a>
                   </div>
                  <?php } ?>
             <!--row ends-->
            </div>
            <!--Container Ends-->
        </div> 

<?php get_footer() ?>
