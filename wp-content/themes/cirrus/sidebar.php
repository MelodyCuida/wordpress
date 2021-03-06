<div id="sidebar" class="span3 sidebar_editable">
    <?php
    global $wp_query;
    $i = 1;
    if (is_404()) {
        
    } else if ( is_page() || is_single()) {
        $postid = $wp_query->post->ID;
        if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) != "") {
            while ($i <= 20) {
                if (trim(get_post_meta($postid, 'alt_sidebar_select', true)) == $i) {
                    if (is_active_sidebar( "sidebar_" . $i )) {   
                        dynamic_sidebar( "sidebar_" . $i );
                    }
                }
                $i++;
            }
        } else if ((trim(get_post_meta($postid, 'alt_sidebar_select', true)) == "") && is_page()) {
            if (is_active_sidebar( "sidebar_pages" )) {
                dynamic_sidebar( "sidebar_pages" );
            } else { 
                if (nimbus_get_option('example_widgets') == "on") {
                    get_template_part( 'parts/sidebar', 'example_widgets'); 
                }
            }
        } else if ((trim(get_post_meta($postid, 'alt_sidebar_select', true)) == "") && is_single()) {
            if (is_active_sidebar( "sidebar_blog" )) {
                dynamic_sidebar( "sidebar_blog" );   
            } else { 
                if (nimbus_get_option('example_widgets') == "on") {
                    get_template_part( 'parts/sidebar', 'example_widgets');  
                }
            }
        }
    } else if (is_front_page()) {
        if (is_active_sidebar( "sidebar_frontpage" )) {
            dynamic_sidebar( "sidebar_frontpage" );   
        } else { 
            if (nimbus_get_option('example_widgets') == "on") {
                get_template_part( 'parts/sidebar', 'example_widgets');  
            }
        } 
    }
    ?>
</div>