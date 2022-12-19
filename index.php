<?php get_header() ?>
 

        <div class="container">
            <br>
            <div class="row">
                <!--Image Section-->
                <div class="col-md-6">
                   
                <?php
            while(have_posts()) {the_post()
                 ?>
             <div class="title"> <?php the_title(); ?> </div>
              <?php $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail');?>
               <div class="pimg"><img src="<?php echo $imagepath[0]?>" class="img-fluid" alt=""></div>
              
              <?php
               }
                ?>

             </div>
                <!-- Content Section -->
                <div class="col-md-6">
              <?php while(have_posts()) {the_post()
              ?>
              <br><br><br><br>
                <div class="about-content"></a><?php the_content(); ?><a href="<?php the_permalink(); ?>"><input type="button" name="" id="" value="Read more">
                </div>
               <?php } ?>

                </div>

                <!--Row Ends-->
            </div>
            <!--Container Ends-->
        </div> 

<?php get_footer() ?>