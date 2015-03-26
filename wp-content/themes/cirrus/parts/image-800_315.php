<?php
if (get_post_meta($post->ID, 'include_image_on_page', true) != "hide" ) {
    if (has_post_thumbnail()) {
        the_post_thumbnail('nimbus_800_315', array('class' => 'nimbus_800_315'));
    } else {
        if (nimbus_get_option('reminder_images') == "on"  || (in_the_loop() == false) ) {
        ?>
            <img class="nimbus_800_315" src="<?php echo get_template_directory_uri(); ?>/images/preview/cirrus<?php echo rand(1,6); ?>md.jpg" alt="<?php the_title(); ?>" />
        <?php
        }
    }
}
?>