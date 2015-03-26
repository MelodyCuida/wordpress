<?php
if (has_post_thumbnail()) {
    the_post_thumbnail('nimbus_140_137', array('class' => 'nimbus_140_137'));
} else {
    if (nimbus_get_option('reminder_images') == "on"  || (in_the_loop() == false) ) {
    ?>
        <img class="nimbus_140_137" src="<?php echo get_template_directory_uri(); ?>/images/preview/cirrus<?php echo rand(1,6); ?>sm.jpg" alt="<?php the_title(); ?>" />
    <?php
    }
}
?>