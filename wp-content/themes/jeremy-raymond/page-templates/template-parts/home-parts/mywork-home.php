<article id="mywork" class="section" itemscope itemType="http://schema.org/WebPage">
    <div class="sub-section">
        <div class="entry-content" itemprop="mainContentOfPage">

            <div class="mywork-columns">
                <h4>MY SKILLS</h4>
                <?php
                $my_skills = get_post_meta(get_the_ID(), 'my_skills');
                echo $my_skills[0];
                ?>
            </div>
            <div class="mywork-columns">
                <h4>WORK EXAMPLES</h4>
                <?php
                $work_examples = get_post_meta(get_the_ID(), 'work_examples');
                echo $work_examples[0];
                ?>
            </div>
        </div><!-- .entry-content -->
        <a id="mywork-link" class="nav-link" href="#contactme">
            <span>GET IN TOUCH</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-i-do-grey.png">
        </a>
    </div>
</article><!-- #post-## -->