<?php
// Basic WordPress Loop
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content();
    endwhile; 
else : 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>

