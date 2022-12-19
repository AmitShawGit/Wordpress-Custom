<?php wp_head() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap CDN CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="files/style.css">
    
</head>
<body>
    <!--Logo and Advertising Section-->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
               <a href="" class="img-fluid"> <?php if(function_exists('the_custom_logo')){the_custom_logo();} ?></a>
            </div>
            <div class="col-md-9">
                <img src="<?php echo get_template_directory_uri(); ?>/files/wow.gif" class="img-fluid">
            </div>
        </div>
    
<!--XX Logo and Advertising Section Ends XX-->

    <!--Navbar Section -->
    <nav class="navbar navbar-expand-lg bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php wp_nav_menu(array('theme_location'=>'header-menu',"container"=>"ul","menu_class"=>"navbar-nav", "depth"=> 2 , 'walker' => new WP_Bootstrap_Navwalker()));?>
    </ul>
  </div>
</nav>

</div>
