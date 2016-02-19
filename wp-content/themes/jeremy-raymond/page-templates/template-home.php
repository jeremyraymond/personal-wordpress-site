<?php
/**
 * Template Name: Home
 *
 * This template displays the homepage content.
 *
 * @package some_like_it_neat
 */

get_header(); ?>

<div id="primary" class="content-area post-<?php the_ID(); ?>">

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'page-templates/template-parts/home-parts/aboutme', 'home' ); ?>
        <?php get_template_part( 'page-templates/template-parts/home-parts/mywork', 'home' ); ?>

    <?php endwhile; // end of the loop. ?>

</div><!-- #primary -->

<?php get_footer(); ?>
