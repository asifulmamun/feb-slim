<?php

/**
 * Template Name: Cart Page
 *
 * @package WordPress
 * @subpackage feb-slim
 * @since Feb-Slim 1.0.0
 */

get_header();
?>

<div class="container">
    <div class="row">
    
        <div class="col-12">
            <main id="primary" class="site-main">
                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', 'home');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </main><!-- #main -->
        </div>

        <?php
        // get_sidebar();
        get_footer();
        ?>

    </div><!-- row -->
</div><!-- container -->