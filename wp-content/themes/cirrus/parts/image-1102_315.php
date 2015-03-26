<?php
if (get_post_meta($post->ID, 'include_image_on_page', true) != "hide" ) {
    if (has_post_thumbnail()) {
        the_post_thumbnail('nimbus_1102_315', array('class' => 'nimbus_1102_315'));
    } else {
        if (nimbus_get_option('reminder_images') == "on"  || (in_the_loop() == false) ) {
        ?>
            <img class="nimbus_1102_315" src="<?php echo get_template_directory_uri(); ?>/images/preview/nimbus_1102_315_<?php echo rand(1,3); ?>.jpg" alt="<?php the_title(); ?>" />
        <?php
        }
    }
}
?>