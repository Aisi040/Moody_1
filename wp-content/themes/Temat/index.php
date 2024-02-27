<?php
// Get header
get_header();

// Start the loop
if ( have_posts() ) : while ( have_posts() ) : the_post();

// Your loop code

endwhile; endif;

// Get footer
get_footer();
?>
