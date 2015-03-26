<?php 
$post_meta = nimbus_get_option('post_meta_single');
if ($post_meta['tags'] == 1) { 
    if (has_tag()) { 
    ?>
        <div id="tags_wrap">
            <?php the_tags('TAGS: ', ', ', ''); ?> 
        </div>
        <div class="clear20"></div>
    <?php 
    } 	
}
?>

