<?php
/**
 * The template used for displaying page content in home.php
 *
 * @package some_like_it_neat
 */
?>
<article id="aboutme" class="section" itemscope itemType="http://schema.org/WebPage">
    <div class="sub-section"
        <div class="entry-content" itemprop="mainContentOfPage">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
            the_content();

            $resume_id = get_post_meta(get_the_ID(), 'resume');
            $resume_url = wp_get_attachment_url( $resume_id[0] );
            ?>
            <a id="resume-link" href="<?php echo $resume_url; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.png">
                <span>DOWNLOAD MY RESUME</span>
            </a>

            <a id="aboutme-link" class="nav-link" href="#mywork">
                <span>MY SKILLS</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-i-do-grey.png">
            </a>

        </div><!-- .entry-content -->
    </div>

</article><!-- #post-## -->
