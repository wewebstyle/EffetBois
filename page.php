<?php get_header(); ?>

<div class="container margin">

    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?> >

    <?php 

    if ( have_posts() ) :

    // Debut Boucle
    while ( have_posts() ) : the_post();
        
        if ( has_post_thumbnail() ) {
            echo '<div class="post-media">';
			    the_post_thumbnail('effet-thumbnail');
			echo '</div>';
        }

        if ( get_the_title() !== '' ) {
            echo '<header class="post-header">';
                echo '<h1 class="page-title text-center">'. get_the_title() .'</h1>';
            echo '</header>';
        }

        echo '<div class="post-content">';
			the_content('');

            // Post Pagination
            $defaults = array(
                'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'effet' ),
                'after' => '</p>'
            );
            wp_link_pages( $defaults );
		echo '</div>';


    endwhile; // Fin Boucle

    endif;

    ?>

    </article>

</div>

<?php get_footer(); ?>