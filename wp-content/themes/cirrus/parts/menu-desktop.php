<div class="navbar hidden-phone main_menu_wrap">
<div class="navbar-inner main_menu">
    <div class="container">
        <?php
            $args = array(
                'theme_location' => 'top-bar',
                'depth'		 => 0,
                'container'	 => false,
                'menu_class'	 => 'nav',
                'fallback_cb'     => 'BootstrapNavMenuWalker::fallback',
                'walker'	 => new BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
        ?>
        </div>
    </div>
</div>