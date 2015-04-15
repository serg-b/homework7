<?php
/**
 * The Template for displaying slide post type
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
    <div id="content">
        <div class="text-center">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail( 'full', array ('class'=>'center-block')); ?>
         </div>
     </div>
<?php
get_footer();
