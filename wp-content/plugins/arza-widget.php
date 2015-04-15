<?php
/*
Plugin Name: ARZAMATH WIDGET
Plugin URI: NO URL
Description: Random Post Widget for displaying posts
Author: Sergey Lexx
Version: 1
Author URI:
*/


class RandomPostWidget extends WP_Widget
{
    function RandomPostWidget()
    {
        $widget_ops = array('classname' => 'RandomPostWidget', 'description' => 'Вивід слайдів' );
        $this->WP_Widget('RandomPostWidget', 'Вивід слайдів', $widget_ops);
    }

    function form($instance)
    {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
        $title = $instance['title'];
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
    <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args, EXTR_SKIP);

        echo $before_widget;
        $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);

        if (!empty($title))
            echo $before_title . $title . $after_title;;

        // WIDGET CODE GOES HERE
        query_posts('post_type=slide');
        if (have_posts()) :
            echo "<ul class='sliderlist'>";
            while (have_posts()) : the_post();?>
                <li class="text-center"><h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title().'</a></h3>' ;?>
                <?php echo the_post_thumbnail( array( 'class' => 'img-circle'));?>
                <p><a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read more</a></p>
                <?php echo "</li>";

            endwhile;
            echo "</ul>";

        endif;
        wp_reset_query();

        echo $after_widget;
    }

}
add_action( 'widgets_init', create_function('', 'return register_widget("RandomPostWidget");') );?>