<?php
if (nimbus_get_option('example_widgets') == "on") {
    the_widget('WP_Widget_Calendar');
    echo"<div class='sidebar_widget'>";
    the_widget('WP_Widget_Categories');
    echo"</div>";
    echo"<div class='sidebar_widget'>";
    the_widget( 'WP_Widget_Meta' );
    echo"</div>";
}
?>