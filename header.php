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
  <nav class="navbar">
    <div class="logo">Navgurukul</div>
    <ul>
      <?php wp_nav_menu(array(
        'theme_location'=>'primary_menu',
        'menu_class' => 'nav', // This applies the 'nav' class to the <ul>
      'container' => false   // Rem
      )) ?>
    </ul>
  </nav>
