<?php
$post_meta = nimbus_get_option('post_meta_single');
if (($post_meta['date'] == 1) || ($post_meta['categories'] == 1)) { 
?>
    <p class="blog_date">
<?php
}
if ($post_meta['date'] == 1) { 
    the_time(get_option( 'date_format')); 
} 
if ($post_meta['categories'] && $post_meta['date'] == 1) { 
?>|<?php 
} 
if ($post_meta['categories'] == 1) { 
    _e('Posted in: ', 'nimbus'); 
    the_category(', '); 
} 
 if (($post_meta['date'] == 1) || ($post_meta['categories'] == 1)) { 
?>
    </p>
<?php
}
?>
<p class="blog_comment_link"><?php comments_popup_link(__('Leave a Comment', 'nimbus'), __('1 Comment', 'nimbus'), __('% Comments', 'nimbus')); ?></p>
<div class="clear5"></div>