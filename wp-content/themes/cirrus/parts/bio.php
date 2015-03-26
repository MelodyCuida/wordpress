<?php 
if (nimbus_get_option('display_bio') == 1) { 
?>				
    <div class="bio_wrap">
        <?php echo get_avatar(get_the_author_meta('email'), '105'); ?>
        <h3><?php the_author_posts_link(); ?></h3>
        <p><?php the_author_meta('description'); ?></p>
        <div class="clear"></div>
    </div>	
<?php 
}
?>

