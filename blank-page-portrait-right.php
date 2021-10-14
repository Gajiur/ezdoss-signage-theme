<?php
/**
 * Template Name: Ez Portrait Right
 * Template Post Type: post, page, signage
 */

get_header();
?>
<style>
.rotating-canvas-right{
    transform: rotate(90deg);
    transform-origin:bottom left;
    
    position:absolute;
    top: -100vw;
    left: 0;
    
    height:100vw;
    width:100vh;
    
    overflow:auto;
}
.rotating-canvas-left{
    transform: rotate(-90deg);
    transform-origin:top left;
    
    position:absolute;
    top: 100vh;
    left: 0;
    
    height:100vw;
    width:100vh;
    
    overflow:auto;
}
</style>
    <section id="primary" class="content-area rotating-canvas-right">
        <div id="main" class="site-main" role="main">
            <?php
                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'notitle' );
                endwhile; // End of the loop.
            ?>
        </div><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
