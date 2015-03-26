<?php if (nimbus_get_option('nimbus_display_social_buttons') == 1) { ?>
    <p id="social_buttons" class="text-right">
        <?php
        $social_type = array("fa-facebook" => "nimbus_facebook_url", "fa-linkedin" => "nimbus_linkedin_url", "fa-envelope" => "nimbus_mail_url");
        foreach ($social_type as $key => $id) {
            $$id = trim(nimbus_get_option($id));
            $mailto = ($key == 'fa-envelope') ? 'mailto:' : '';
            if (empty($$id)) {
                if (nimbus_get_option('nimbus_example_content') == "on") {
                    $id = "#";
                } else {
                    $id = "";
                }
            } else {
                $id = $$id;
            }
            if (!empty($id)) {
            ?>
                <a href="<?php echo $mailto; ?><?php echo $id; ?>"><i class="fa <?php echo $key; ?> fa-socialcircle" style="color:#fff;"></i></a>
            <?php
            }
        }
        if (nimbus_get_option('nimbus_hide_rss_icon') == 0) {
        ?>
            <a href="<?php echo get_bloginfo('rss2_url'); ?>"><i class="fa fa-rss fa-socialcircle" style="color:#fff;"></i></a>
        <?php
        }
        ?>
    </p>
<?php 
} else { 
} 
?>
<div class="clear"></div>