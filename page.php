<?php get_header()?>
<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail('medium') ;?>
<p><?php the_content(); ?></p>
<?php get_footer()?>