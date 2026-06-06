<?php
// Redirect to front page if accessed directly
if ( is_home() || is_front_page() ) {
    get_template_part( 'front-page' );
} else {
    get_header('course');
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    get_footer();
}
