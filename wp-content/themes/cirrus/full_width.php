<?php
/*
  Template Name: Full Width
 */

get_header();
?>

<div class="editable span12 content">
    <div class="full_width_restrict">
        <?php 
        if (have_posts()) {
            while (have_posts()) { 
                the_post(); 
                get_template_part( 'parts/image', '1102_315');  
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
get_footer(); 
?>