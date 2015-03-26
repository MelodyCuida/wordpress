<?php
$top_scripts = nimbus_get_option('top_scripts_multi');
$bottom_scripts = nimbus_get_option('bottom_scripts_multi');
$post_meta = nimbus_get_option('post_meta_blog');
$reminder_images = trim(nimbus_get_option('reminder_images'));
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('row-fluid home_post'); ?>>
    <?php if ($post_meta['date'] == 1) { ?>
        <div class="span1">
            <span class="home_month hidden-phone"><span><?php the_time('M'); ?></span></span>
            <span class="home_day hidden-phone"><span><?php the_time('j'); ?></span></span>
            <p class="mobile_date visible-phone"><span><?php the_time('F j, Y'); ?></span></p>
        </div>
    <?php } ?>
    <div class="<?php if ($post_meta['date'] == 1) { ?>span11 include_side_line<?php } else { ?>span12<?php } ?>">
        <?php 
        if ($post_meta['date'] == 1) { 
        ?>
            <div class="inner_restrict">
        <?php 
        } 
        ?>
        <a href="<?php the_permalink(); ?>">
        <?php
        get_template_part( 'parts/image', '140_137');
        ?>
        </a>
        <?php
        if ($post_meta['title'] == 1) { ?>
            <h2><a href="<?php the_permalink(); ?>"><?php get_template_part( 'parts/title', 'post'); ?></a></h2>
        <?php 
        } 
        if (nimbus_get_option('nimbus_blog_content_toggle') == "full") {
            the_content();
        } else {
            the_excerpt();
        }  
        ?>
        <div class="clear"></div>
        <?php if ($post_meta['categories'] || $post_meta['author'] == 1) { ?><p class="blog_date"><?php } ?>	
        <?php if ($post_meta['categories'] == 1) { ?><?php _e('Posted in', 'nimbus'); ?> <?php the_category(', '); ?><?php } ?> 
        <?php if ($post_meta['categories'] && $post_meta['author'] == 1) { ?>|<?php } ?> 
        <?php if ($post_meta['author'] == 1) { ?><?php _e('By', 'nimbus'); ?> <?php the_author_posts_link(); ?><?php } ?>
        <?php if ($post_meta['categories'] || $post_meta['author'] == 1) { ?></p><?php } ?>	
        <p class="blog_comment_link"><?php comments_popup_link(__('Leave a Comment', 'nimbus'), __('1 Comment', 'nimbus'), __('% Comments', 'nimbus'), __('comments-link', 'nimbus'), __('', 'nimbus')); ?></p>
        <div class="clear5"></div>   
        <?php 
        if ($post_meta['date'] == 1) { 
        ?>
            </div>
        <?php 
        } 
        ?>   
    </div>
</div>
