<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navgurukul</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" />
  <?php wp_head(); ?>
</head>
<body>

  <!-- Navbar -->
   <?php $logoImage = get_header_image();  ?>
  <nav class="navbar">
    <div class="logo">
      <a href="<?php site_url(); ?>">
        <img src="<?php echo $logoImage ?>" alt="">
      </a>
    </div>
    <ul>
      <?php wp_nav_menu(array(
        'theme_location'=>'primary_menu',
        'menu_class' => 'nav', 
      'container' => false   
      )) ?>
    </ul>
  </nav>
