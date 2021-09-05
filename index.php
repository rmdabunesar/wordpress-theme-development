<?php
/**
 * Main template file
 * 
 * @package Apex
 */

?>

<?php get_header(); ?>
        
<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php 
            if ( have_posts() ) {
            ?>
                <div class="container">
                    <?php 
                        while ( have_posts() ) : the_post();
                        echo '<h1>';  the_title();  echo '</h1>';
                        the_content();
                        endwhile
                    ?>
                </div>
            <?php
            }
        ?>
    </main>
</div>

<?php get_footer(); ?>
