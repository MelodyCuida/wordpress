                    </div>
                    <div class="clear"></div>	
                </div>
            </div>
            <footer>
                <div id="footer" class="container">
                    <div id="footer_widgets_wrap">
                        <div class="row">
                            <div id="footer_widget_left" class="span4">
                                <?php 
                                if (is_active_sidebar( 'Footer Left' )) { 
                                    dynamic_sidebar( 'Footer Left' );
                                } else {   
                                    if (nimbus_get_option('example_widgets') == "on") {
                                    ?>
                                        <div class="footer_widget sidebar sidebar_editable">
                                            <?php
                                            the_widget('WP_Widget_Recent_Posts');
                                            ?>
                                        </div>
                                    <?php    
                                    } 
                                } 
                                ?>
                            </div>			
                            <div id="footer_widget_center" class="span4">
                                <?php 
                                if (is_active_sidebar( 'Footer Center' )) { 
                                    dynamic_sidebar( 'Footer Center' );
                                } else {   
                                    if (nimbus_get_option('example_widgets') == "on") {
                                    ?>
                                        <div class="footer_widget sidebar sidebar_editable">
                                            <?php
                                                $rss_options = array( 
                                                    'title' => 'WordPress News Feed',  
                                                    'url' => 'http://wordpress.org/news/feed/', 
                                                    'items' => 7
                                                );
                                                the_widget('WP_Widget_RSS', $rss_options); 
                                            ?>
                                        </div>
                                    <?php    
                                    } 
                                }
                                ?>
                            </div>			
                            <div id="footer_widget_right" class="span4">
                                <?php 
                                if (is_active_sidebar( 'Footer Right' )) { 
                                    dynamic_sidebar( 'Footer Right' );
                                } else {    
                                    if (nimbus_get_option('example_widgets') == "on") {
                                    ?>
                                        <div class="footer_widget sidebar sidebar_editable">
                                            <?php
                                            the_widget( 'WP_Widget_Tag_Cloud'); 
                                            ?>
                                        </div>
                                    <?php    
                                    } 
                                } 
                                ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>    
                </div>            
                <div class="container copy_credit">
                    <div class="row">
                        <div class="span8 copy"><?php echo nimbus_get_option('copyright') ?></div>
                        <div class="span4 credit"><a href="http://www.nimbusthemes.com/wordpress-themes/cirrus/">Cirrus Theme</a> Powered by <a href="http://www.wordpress.org" target="_blank" >WordPress</div>
                    </div>
                </div>
            </footer>
        <?php 
        wp_footer(); 
        ?>	
    </body>
</html>
