<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('', true); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php 
        wp_head();
        ?>
    </head>
    <body <?php body_class(); ?>>
        <?php 
        get_template_part( 'parts/menu', 'mobile');
        ?>
    	<header>
            <div class="container">
            	<div class="row">
                	<div class="span12">
                    	<?php 
                        get_template_part( 'parts/logo'); 
                        get_template_part( 'parts/social'); 
                        ?>
                    </div>
            	</div>
                <?php 
                get_template_part( 'parts/menu', 'desktop'); 
                ?>
            </div>
        </header>
        <div class="container main">
            <?php 
            get_template_part( 'parts/banner'); 
            get_template_part( 'parts/featured');
            ?>
            <div class="main_restrict">
                <div class="row-fluid">