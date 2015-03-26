<?php
get_header();
?>

<div class="editable span9 content">
    <div class="inner_restrict_right">
    <?php 
    if (have_posts()) {
        while (have_posts()) { 
            the_post(); 
            get_template_part( 'parts/image', '800_315');  
            ?>
            <h1><?php get_template_part( 'parts/title', 'page'); ?></h1>
            <div class="clear"></div>
            <?php the_content(); ?>
            <div class="clear"></div>
            <?php 
            wp_link_pages(); 
            comments_template(); 
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