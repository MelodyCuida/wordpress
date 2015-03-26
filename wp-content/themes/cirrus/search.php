<?php
get_header();
?>

<div class="editable span9 content">
    <h1><?php get_template_part( 'parts/title', 'archive'); ?></h1>
    <div class="clear20"></div>
    <?php 
    if (have_posts()) { 
        while (have_posts()) { 
            the_post(); 
            get_template_part( 'parts/blog', 'content'); 
        }
        get_template_part( 'parts/blog', 'pagination'); 
    } else {
        get_template_part( 'parts/error', 'no_results');
    }
    ?>
</div>
<?php 
get_sidebar(); 
get_footer(); 
?>