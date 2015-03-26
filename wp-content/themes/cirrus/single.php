<?php
$post_meta = nimbus_get_option('post_meta_single');
get_header();
?>
<div class="editable span9 content">
    <div class="inner_restrict_right">
    <?php 
    if (have_posts()) { 
        while (have_posts()) { 
            the_post(); 
            get_template_part( 'parts/image', '800_315'); 
            if ($post_meta['title'] == 1) { 
            ?>
                <h1><?php get_template_part( 'parts/title', 'post'); ?></h1>
            <?php 
            } 
            get_template_part( 'parts/blog', 'post_meta');
            the_content(); 
            echo "<div class='clear20'></div>";
            get_template_part( 'parts/wp_link_pages');
            get_template_part( 'parts/tags');
            get_template_part( 'parts/bio'); 
            comments_template(); 
            get_template_part( 'parts/blog', 'single_post_nav');
        } 
    } else { 
        get_template_part( 'parts/error', 'no_results');
    } 
    ?>
    </div>
</div>
<?php 
get_sidebar(); 
get_footer(); 
?>