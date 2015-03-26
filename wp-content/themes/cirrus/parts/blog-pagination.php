<?php
if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} else {
?>
    <div class="clear30"></div>
    <div class="feed_pagination row-fluid">
        <div class="span6">
            <?php next_posts_link(__('&laquo; Older Entries', 'nimbus')) ?>
        </div>    
        <div class="span6 text-right">
            <?php previous_posts_link(__('Newer Entries &raquo;', 'nimbus')) ?>
        </div>
    </div>
<?php
}
?>