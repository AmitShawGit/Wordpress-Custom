<?php get_header() ?>

<div class="container">
    <br>
    <div class="row justify-content-around">
            <div class="col-md-6">
                <!--DynamicPost Published-->
<?php
while(have_posts())
{the_post();
    ?>
<div class="title">
    <?php
    the_title();
    ?>
</div>
<?php
}

?>   
<?php
$imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'thumbnail');?>
<div class="pimg"><img src="<?php echo $imagepath[0]?>" class="img-fluid" alt=""></div>

            </div>
            <div class="col-md-6">
                <?php the_post();?>
                <div class="about-content"><?php the_content(); ?>
            </div>
            <?php comments_template()?>
</div>
    </div>
</div>
      

<?php get_footer() ?>