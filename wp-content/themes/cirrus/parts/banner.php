<?php
$reminder_images = trim(nimbus_get_option('reminder_images'));
?>

<div class="banner">
    <?php 
    if (is_front_page()) {
        if (nimbus_get_option('nimbus_banner_option') == 'static_banner') {
            ?>
            <!--  modify it using my own style -->
            <div class="welcome">
                <p>Welcome to My Blog!</p>
            </div>
            <?php                                     
        } 
    } else {
        // No layout
    }
    ?>
</div>