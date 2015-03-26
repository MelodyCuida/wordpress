<?php

/* * *************************************************************************************************** */
// Global Options Array
/* * *************************************************************************************************** */


global $NIMBUS_OPTIONS_ARR;

$NIMBUS_OPTIONS_ARR = array();

/* **************************************************************************************************** */
// Membership
/* **************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["membership_tab"] = array("name" => __('Nimbus Membership', 'nimbus'),
    "id" => "membership_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "membership",
    "icon" => "fa-star",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array( "tab" => "membership",
    "html" => "
        <div id='membership_tab'>
            <h1>" . __('Nimbus Membership', 'nimbus') . "</h1>
            <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('Join Nimbus and start building awesome sites today!', 'nimbus') . "</h2>
            <img src='" . OPTIONS_PATH . "images/themes-join2.jpg' style='width:100%;height:auto;' />
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div style='text-align:center;'>
            <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=cirrus&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=cirrus'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=cirrus&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=cirrus'>" . __('Get ALL Themes', 'nimbus') . "</a>
            </div>
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div class='option_wrapper'>
                <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('With your purchase you will get:', 'nimbus') . "</h2>
                <div class='clear'></div>
                <ul>
                    <li>
                        <h3 style='color:#ca0088;'>" . __('Unlimited Support For Theme Features', 'nimbus') . "</h3>
                        <p>" . __('If you\'ve got questions, we\'ve got answers. It\'s our commitment to you that we\'ll provide the most positive support anywhere on the web!', 'nimbus') . "</p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Frontpage Slideshows', 'nimbus') . "</h3>
                        <p>" . __('Create your website\'s front page by choosing one of several slidshow layouts and designs.', 'nimbus') . "</p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Responsive, Custom CSS Options', 'nimbus') . "</h3>
                        <p>" . __('Polish your site down to the minute detail with responsive, custom CSS. Your site can look different on every browser size!', 'nimbus') . "</p>
                    </li>
                    <li>
                        <h3 style='color:#ca0088;'>" . __('Powerful SEO Tools', 'nimbus') . "</h3>
                        <p>" . __('Get powerful SEO tools that give you maximum control of your theme\'s placement on Google. Add custom titles, descriptions and keywords to each page or choose defaults for ease of use.', 'nimbus') . "</p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Hundreds of Shortcodes', 'nimbus') . "</h3>
                        <p>" . __('Style your website with custom buttons, images, lists, typography, tables, columns, and more... all brought to you by our vast library of shortcodes. View all your shortcode options here:', 'nimbus') . " <a  target='_blank' href='http://demo.nimbusthemes.com/cirrus/shortcodes/' target='_blank'>" . __('Cirrus Shortcodes', 'nimbus') . "</a></p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Extended Social Media Integration', 'nimbus') . "</h3>
                        <p>" . __('Take advantage of additional social network integrations and increase the reach of your website.', 'nimbus') . "</p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Multiple Frontpages', 'nimbus') . "</h3>
                        <p>" . __('Use a custom page template to apply the frontpage layout to as many pages as you want!', 'nimbus') . "</p>
                    </li>
                    <li><h3 style='color:#ca0088;'>" . __('Custom Widgets', 'nimbus') . "</h3>
                        <p>" . __('Use custom widgets to quickly and easily populate your website with profesionally designed content.', 'nimbus') . "</p>
                    </li>
                    
                    <li><h3 style='color:#ca0088;'>" . __('Whitelist Dozens of MIME Types', 'nimbus') . "</h3>
                        <p>" . __('Stop running into those frustrating WordPress uploader errors when loading unusual file types. Choose from our long list of additional file types to whiltelist as approved.', 'nimbus') . "</p>
                    </li>
                    
                    <li><h3 style='color:#ca0088;'>" . __('Demo Content Loader', 'nimbus') . "</h3>
                        <p>" . __('Make setting up your website easy by loading demo content with the click of a button.', 'nimbus') . "</p>
                    </li>
                    
                    <li><h3 style='color:#ca0088;'>" . __('Additional Script Integration', 'nimbus') . "</h3>
                        <p>" . __('Use in-page script locations to embed buttons and widgets from your favorite third-party services.', 'nimbus') . "</p>
                    </li>
                <ul>
            
                <div class='clear25'></div>
                <div class='clear15'></div>
                <div style='text-align:center;'>
                <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=cirrus&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=cirrus'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=cirrus&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=cirrus'>" . __('Get ALL Themes', 'nimbus') . "</a>
                <div class='clear25'></div>
                </div>
            </div>
            <div class='clear25'></div>
        </div>
    <div class='clear30'></div>

  ",
  "type" => "html");    
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


// Setup

$NIMBUS_OPTIONS_ARR["setup_tab"] = array("name" => __('Theme Setup', 'nimbus'),
    "id" => "setup_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "setup",
    "icon" => "fa-cog",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array( "tab" => "setup",
    "html" => "
    <h1>" . __('Set Up Your ', 'nimbus') . THEME_NAME . __(' Theme', 'nimbus') . "</h1>
    <p><strong>" . __('We realize there\'s a lot going on with this theme, so we\'ve tried to make setup as simple as possible.', 'nimbus') . "</strong></p>
    <p>" . __('There are a few initial steps that will put you on track to creating the fully operational website of your dreams:', 'nimbus') . "</p>
    <div class='option_wrapper'>
            <input style='float:right; margin:20px 0 20px 20px;' type='submit' class='nimbus_button_sm_gray' name='loaddemo' onclick='return confirm( \"This action will create several new pages, posts and portfolio items on your website and set one of these pages as the frontpage. Please confirm that you would like to proceed.\" );' value='" . __('Load', 'nimbus') . "' />
            <p class='option_name'><span class='option_number'>1</span>. LOAD DEMO CONTENT</p>
            <p>" . __('If you are starting from scratch, then you\'ll want to load some example content by clicking the button below.', 'nimbus') . "</p>
            <div class='clear'></div>
            
    </div>
    <div class='option_wrapper'>
            <a style='float:right; margin:40px 0 20px 20px;' class='nimbus_button_sm_blue' target='_blank' href='" . GUIDEURL . "'>" . __('Download', 'nimbus') . "</a>
            <p class='option_name'><span class='option_number'>2</span>. DOWNLOAD THE USER GUIDE</p>
            <p>" . __('Once you\'ve loaded the demo content, you\'re going to want to learn how to make changes to your website and use the Nimbus Panel. We\'ve provided an extensive user guide PDF that you\'ll want to read through as you\'re learning your way around:', 'nimbus') . "</p>
            
    </div>
    <h1>" . __('Example Content', 'nimbus') . "</h1>
  ",
  "type" => "html"); 
  
  $NIMBUS_OPTIONS_ARR["reminder_images"] = array("name" => __('Reminder Images', 'nimbus'),
    "desc" => __('Reminder images are the placholder images shown arouns the site when you\'ve not added a featured image to a post or page. When you\'re comfortable with loading featured images and working with the ' . THEME_NAME . ' Theme, you may want to turn off all reminder images.', 'nimbus'),
    "id" => "reminder_images",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => "On","off" => "Off"));
    
$NIMBUS_OPTIONS_ARR["example_widgets"] = array("name" => __('Example Widgets', 'nimbus'),
    "desc" => __('Example widgetsa are the widgets that show by default if you\'ve not added your own. When you\'re comfortable working with the ' . THEME_NAME . ' Theme, you may want to turn off all example widgets.', 'nimbus'),
    "id" => "example_widgets",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => "On","off" => "Off"));
    
$NIMBUS_OPTIONS_ARR["nimbus_example_content"] = array("name" => __('Example Content', 'nimbus'),
    "desc" => __('When you\'re comfortable working with the theme, you may want to turn off all example content.', 'nimbus'),
    "id" => "nimbus_example_content",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus'),"off" => __('Off', 'nimbus')));        
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);

    
    
// General	

$NIMBUS_OPTIONS_ARR["general_tab"] = array("name" => __('General Settings', 'nimbus'),
    "id" => "general_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "general",
    "icon" => "fa-cogs",
    "type" => "tab");
   
$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "general",
    "html" => "
    <h1>" . __('General Settings', 'nimbus') . "</h1>",
    "type" => "html"
);

$NIMBUS_OPTIONS_ARR["image_logo"] = array("name" => __('Image Logo', 'nimbus'),
    "desc" => __('Upload a logo image. Click the info icon to left for more information.', 'nimbus'),
    "id" => "image_logo",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["text_logo"] = array("name" => __('Text Logo', 'nimbus'),
    "desc" => __('If no image logo is loaded, a text logo will be displayed. You can style this text on the <strong>Typogaphy</strong> tab.', 'nimbus'),
    "id" => "text_logo",
    "default" => get_bloginfo('name'),
    "type" => "text",
    "tab" => "general",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["favicon"] = array("name" => __('Favicon', 'nimbus'),
    "desc" => __('Upload a favicon image.', 'nimbus'),
    "id" => "favicon",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["gravatar"] = array("name" => __('Default Gravatar', 'nimbus'),
    "desc" => __('There is already a default gravatar that ships with WordPress, but you can change it here. Upload a default gravatar that will be displayed when a commenter has not signed up for a personalized gravatar. After loading your new gravatar here you will then need to navigate to Setting >> Discussion >> select your new gravatar.', 'nimbus'),
    "id" => "gravatar",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "image");

$NIMBUS_OPTIONS_ARR["copyright"] = array("name" => __('Copyright Text', 'nimbus'),
    "desc" => __('This text wil be displayed in the footer of your website. ', 'nimbus'),
    "id" => "copyright",
    "tab" => "general",
    "default" => "&copy; " . date('o') . ", " . get_bloginfo('name') . ".",
    "type" => "textarea");    
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);
  
// Frontpage

$NIMBUS_OPTIONS_ARR["frontpage_tab"] = array("name" => __('Frontpage', 'nimbus'),
    "id" => "frontpage_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage",
    "icon" => "fa-file",
    "type" => "tab"); 
    
$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "frontpage",
    "html" => "
    <h1>" . __('Frontpage Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
    
$NIMBUS_OPTIONS_ARR["nimbus_banner_option"] = array(
    "name" => __('Banner Options', 'nimbus'),
    "desc" => __('Select which banner layout you would like to display on the frontpage. <span style="color:#ca0088;">To choose a slideshow option please upgrade to the full version availible with a <a href="' . SALESPAGEURL . '?utm_source=cirrus&utm_medium=theme&utm_content=panel_link&utm_campaign=cirrus"  target="_blank">Nimbus Membership</a>.</span>', 'nimbus'),
    "id" => "nimbus_banner_option",
    "default" => "static_banner",
    "tab" => "frontpage",
    "type" => "radio",
    "options" => array( "static_banner" => __('Full Width Banner', 'nimbus'))
    );    
  
$NIMBUS_OPTIONS_ARR["banner_image"] = array("name" => __('Banner Image (1170 x 315px)', 'nimbus'),
    "desc" => __('Upload a banner image. Be sure to select the full size option and click the insert into post button.', 'nimbus'),
    "id" => "banner_image",
    "default" => "",
    "tab" => "frontpage",
    "classes" => "",
    "type" => "image");    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Featured Page Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_toggle_featured"] = array("name" => __('Display Featured Pages', 'nimbus'),
    "desc" => __('Check here to display three featured pages under the banner on the frontpage.', 'nimbus'),
    "id" => "nimbus_toggle_featured",
    "tab" => "frontpage",
    "default" => "1",
    "label" => "Show Featured",
    "type" => "checkbox");
    
    
$NIMBUS_OPTIONS_ARR["nimbus_left_featured"] = array("name" => __('Left Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the left feature column on the frontpage.', 'nimbus'),
    "id" => "nimbus_left_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    

$NIMBUS_OPTIONS_ARR["nimbus_left_featured_icon"] = array("name" => __('Choose a Display Icon', 'nimbus'),
    "desc" => __('Choose an icon from the dropdown. <span style="color:#ca0088;">Members can choose from 439 icon options', 'nimbus') . ". <a style='color:#ca0088;' href='" . SALESPAGEURL . "?utm_source=" . THEME_SLUG . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_SLUG . "'>" . __('Upgrade today', 'nimbus') . "</a></span>",
    "id" => "nimbus_left_featured_icon",
    "tab" => "frontpage",
    "default" => "fa-bomb",
    "type" => "select",
    "options" => nimbus_fontawesome()); 
    
$NIMBUS_OPTIONS_ARR["nimbus_left_featured_icon_color"] = array("name" => __('Icon Color', 'nimbus'),
    "desc" => __('Set the color of the icon.', 'nimbus'),
    "id" => "nimbus_left_featured_icon_color",
    "tab" => "frontpage",
    "default" => '#9a9a48',
    "type" => "color");    

$NIMBUS_OPTIONS_ARR["nimbus_center_featured"] = array("name" => __('Center Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the center feature column on the frontpage.', 'nimbus'),
    "id" => "nimbus_center_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    
$NIMBUS_OPTIONS_ARR["nimbus_center_featured_icon"] = array("name" => __('Choose a Display Icon', 'nimbus'),
    "desc" => __('Choose an icon from the dropdown. <span style="color:#ca0088;">Members can choose from 439 icon options', 'nimbus') . ". <a style='color:#ca0088;' href='" . SALESPAGEURL . "?utm_source=" . THEME_SLUG . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_SLUG . "'>" . __('Upgrade today', 'nimbus') . "</a></span>",
    "id" => "nimbus_center_featured_icon",
    "tab" => "frontpage",
    "default" => "fa-wordpress",
    "type" => "select",
    "options" => nimbus_fontawesome());   
    
$NIMBUS_OPTIONS_ARR["nimbus_center_featured_icon_color"] = array("name" => __('Icon Color', 'nimbus'),
    "desc" => __('Set the color of the icon.', 'nimbus'),
    "id" => "nimbus_center_featured_icon_color",
    "tab" => "frontpage",
    "default" => '#9a9a48',
    "type" => "color");     

$NIMBUS_OPTIONS_ARR["nimbus_right_featured"] = array("name" => __('Right Feature Column', 'nimbus'),
    "desc" => __('Set the page to display in the right feature column on the frontpage. ', 'nimbus'),
    "id" => "nimbus_right_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    
$NIMBUS_OPTIONS_ARR["nimbus_right_featured_icon"] = array("name" => __('Choose a Display Icon', 'nimbus'),
    "desc" => __('Choose an icon from the dropdown. <span style="color:#ca0088;">Members can choose from 439 icon options', 'nimbus') . ". <a style='color:#ca0088;' href='" . SALESPAGEURL . "?utm_source=" . THEME_SLUG . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_SLUG . "'>" . __('Upgrade today', 'nimbus') . "</a></span>",
    "id" => "nimbus_right_featured_icon",
    "tab" => "frontpage",
    "default" => "fa-bolt",
    "type" => "select",
    "options" => nimbus_fontawesome());  
 
$NIMBUS_OPTIONS_ARR["nimbus_right_featured_icon_color"] = array("name" => __('Icon Color', 'nimbus'),
    "desc" => __('Set the color of the icon.', 'nimbus'),
    "id" => "nimbus_right_featured_icon_color",
    "tab" => "frontpage",
    "default" => '#9a9a48',
    "type" => "color");       
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);
    
    
/* * *************************************************************************************************** */
// Social
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["social_tab"] = array("name" => __('Social Media', 'nimbus'),
    "id" => "social_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "social",
    "icon" => "fa-thumbs-up",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "social",
    "html" => "
    <h1>" . __('Social Media Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
  
$NIMBUS_OPTIONS_ARR["nimbus_facebook_url"] = array("name" => __('Facebook Page URL', 'nimbus'),
    "desc" => __('Full URL for your Facebook page. Like: https://www.facebook.com/profile.php?id=1138181505 ', 'nimbus'),
    "id" => "nimbus_facebook_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_twitter_url"] = array("name" => __('Twitter Page URL', 'nimbus'),
    "desc" => __('Full URL for your Twitter page. Like: http://twitter.com/#!/nimbusthemes ', 'nimbus'),
    "id" => "nimbus_twitter_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_linkedin_url"] = array("name" => __('LinkedIn Page URL', 'nimbus'),
    "desc" => __('Full URL to your LinkedIn page. Like: http://www.linkedin.com/profile/view?id=41331545', 'nimbus'),
    "id" => "nimbus_linkedin_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_youtube_url"] = array("name" => __('YouTube Page URL', 'nimbus'),
    "desc" => __('Enter the URL for your YouTube page. Leave blank to dispay none.', 'nimbus'),
    "id" => "nimbus_youtube_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["nimbus_google_plus_url"] = array("name" => __('Google+ Page URL', 'nimbus'),
    "desc" => __('Full URL to your Google+ page. Like: https://plus.google.com/113799555397172215948#113799555397172215948/posts', 'nimbus'),
    "id" => "nimbus_google_plus_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_vimeo_url"] = array("name" => __('Vimeo Channel URL', 'nimbus'),
    "desc" => __('Full URL to your Vimeo Channel', 'nimbus'),
    "id" => "nimbus_vimeo_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_flickr_url"] = array("name" => __('Flickr Web Address URL', 'nimbus'),
    "desc" => __('Full URL to your Flickr Page', 'nimbus'),
    "id" => "nimbus_flickr_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_wpcom_url"] = array("name" => __('WordPress.com Blog URL', 'nimbus'),
    "desc" => __('Full URL to your WordPress.com blog', 'nimbus'),
    "id" => "nimbus_wpcom_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_pinterest_url"] = array("name" => __('Pinterest Board URL', 'nimbus'),
    "desc" => __('Full URL to your Pinterest Board', 'nimbus'),
    "id" => "nimbus_pinterest_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_amazon_url"] = array("name" => __('Amazon URL', 'nimbus'),
    "desc" => __('Full URL to your Amazon public profile or wishlist', 'nimbus'),
    "id" => "nimbus_amazon_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_instagram_url"] = array("name" => __('Instagram URL', 'nimbus'),
    "desc" => __('Full URL to your Instagram public profile', 'nimbus'),
    "id" => "nimbus_instagram_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_tumblr_url"] = array("name" => __('Tumblr URL', 'nimbus'),
    "desc" => __('Full URL to your Tumblr public profile', 'nimbus'),
    "id" => "nimbus_tumblr_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_mail_url"] = array("name" => __('Email Contact', 'nimbus'),
    "desc" => __('Email address you would like to have visitors contact you through', 'nimbus'),
    "id" => "nimbus_mail_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_hide_rss_icon"] = array("name" => __('Hide RSS Feed Button', 'nimbus'),
    "desc" => __('Check here to hide the RSS Feed icon in the social media icon section', 'nimbus'),
    "id" => "nimbus_hide_rss_icon",
    "tab" => "social",
    "default" => "0",
    "label" => "Hide RSS Icon",
    "info" => "<p>" . __('Make sure this box is checked in order for your social media icons to be displayed in the footer.', 'nimbus') . "</p>",
    "type" => "checkbox");

$NIMBUS_OPTIONS_ARR["nimbus_display_social_buttons"] = array("name" => __('Display Social Media Buttons', 'nimbus'),
    "desc" => __('Check here to display social media buttons in the sidebar', 'nimbus'),
    "id" => "nimbus_display_social_buttons",
    "tab" => "social",
    "default" => "1",
    "label" => "Display Buttons",
    "info" => "<p>" . __('Make sure this box is checked in order for your social media icons to be displayed in the footer.', 'nimbus') . "</p>",
    "type" => "checkbox");       
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
); 
    
    
      
    
// Contact	

$NIMBUS_OPTIONS_ARR["contact_tab"] = array("name" => __('Contact Info', 'nimbus'),
    "id" => "contact_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "contact",
    "icon" => "fa-user",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "contact",
    "html" => "
    <h1>" . __('Contact Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
 
$NIMBUS_OPTIONS_ARR["public_phone"] = array("name" => __('Public Phone Number', 'nimbus'),
    "desc" => __('Enter the phone number that may be displayed. Leave blank to dispay none.', 'nimbus'),
    "id" => "public_phone",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["public_email"] = array("name" => __('Public Email', 'nimbus'),
    "desc" => __('Enter the email address that may be displayed. Leave blank to dispay none.', 'nimbus'),
    "id" => "public_email",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["public_fax"] = array("name" => __('Public Fax', 'nimbus'),
    "desc" => __('Enter the fax number that may be displayed. Leave blank to dispay none.', 'nimbus'),
    "id" => "public_fax",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["address"] = array("name" => __('Public Address', 'nimbus'),
    "desc" => __('Enter the physical address that may be displayed. Leave blank to dispay none. ', 'nimbus'),
    "id" => "address",
    "tab" => "contact",
    "default" => "",
    "type" => "textarea");      
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
); 
    
// Blog

$NIMBUS_OPTIONS_ARR["blog_tab"] = array("name" => "Blog",
    "id" => "blog_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "blog",
    "icon" => "fa-quote-left",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "blog",
    "html" => "
    <h1>" . __('Blog Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
 
$NIMBUS_OPTIONS_ARR["nimbus_blog_content_toggle"] = array(
    "name" => __('Blog Display', 'nimbus'),
    "desc" => __('Choose between excerpts or full content on blog pages.', 'nimbus'),
    "id" => "nimbus_blog_content_toggle",
    "default" => "excerpt",
    "tab" => "blog",
    "type" => "radio",
    "options" => array( "excerpt" => __('Excerpt', 'nimbus'), "full" => __('Full Content', 'nimbus'))
    );     

$NIMBUS_OPTIONS_ARR["post_meta_single"] = array("name" => "Display Meta Information on Posts",
    "desc" => "Select the following information you would like to have displayed on post pages.",
    "id" => "post_meta_single",
    "tab" => "blog",
    "default" => array("title" => "1", "post_thumb" => "1", "author" => "1", "date" => "1", "categories" => "1", "tags" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_post_meta());

$NIMBUS_OPTIONS_ARR["post_meta_blog"] = array("name" => "Display Meta Information on Home and Archive",
    "desc" => "Select the folllowing information you would like to have displayed on blog and archive pages.",
    "id" => "post_meta_blog",
    "tab" => "blog",
    "default" => array("title" => "1", "author" => "1", "date" => "1", "categories" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_blog_meta());

$NIMBUS_OPTIONS_ARR["display_bio"] = array("name" => "Display Author Bio",
    "desc" => "Select to display the author's bio at the bottom of the post.",
    "id" => "display_bio",
    "tab" => "blog",
    "default" => "1",
    "label" => "Display Bio",
    "info" => "<p>The author bio will be displayed at the bottom of the post. This information is coming from the <strong>Profile</strong> page located under <strong>Users >> Your Profile</strong>.</p>",
    "type" => "checkbox");    
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);
    
// Design

$NIMBUS_OPTIONS_ARR["design_tab"] = array("name" => __('Design', 'nimbus'),
    "id" => "design_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "design",
    "icon" => "fa-pencil-square-o",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "design",
    "html" => "
    <h1>" . __('Design Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
 
$NIMBUS_OPTIONS_ARR["body_bg_color"] = array("name" => __('Body Background Color', 'nimbus'),
    "desc" => __('Set the background color for your website.', 'nimbus'),
    "id" => "body_bg_color",
    "html" => "<p>Please use the WordPress core <a href='" . admin_url() . "themes.php?page=custom-background'>Background</a> setting under Appearance >> Background.</p>",
    "tab" => "design",
    "type" => "item_html");
    
$NIMBUS_OPTIONS_ARR["body_background_pattern"] = array("name" => __('Body Background Pattern Overlay', 'nimbus'),
    "desc" => __('Set the pattern overlay you for the background of your website.', 'nimbus'),
    "id" => "body_background_pattern",
    "default" => "stripes.png",
    "tab" => "design",
    "type" => "select",
    "class" => "",
    "options" => nimbus_patterns());    
    
$NIMBUS_OPTIONS_ARR["main_bg_color"] = array("name" => __('Content Column Background Color', 'nimbus'),
    "desc" => __('Set the background color for the main content column.', 'nimbus'),
    "id" => "main_bg_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR["header_bg_color"] = array("name" => __('Header Background Color', 'nimbus'),
    "desc" => __('Set the background color for the Header.', 'nimbus'),
    "id" => "header_bg_color",
    "tab" => "design",
    "default" => '#dde1dd',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR["header_bottom_border_color"] = array("name" => __('Header Bottom Border Color', 'nimbus'),
    "desc" => __('Set the bottom border color for the Header.', 'nimbus'),
    "id" => "header_bottom_border_color",
    "tab" => "design",
    "default" => '#c8ccc8',
    "type" => "color");    

    
$NIMBUS_OPTIONS_ARR["menu_bg_color"] = array("name" => __('Menu Background Color', 'nimbus'),
    "desc" => __('Set the background color for the Menu.', 'nimbus'),
    "id" => "menu_bg_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR["buttons_bg_color"] = array("name" => __('Button Background Color', 'nimbus'),
    "desc" => __('Set the background color for the Buttons.', 'nimbus'),
    "id" => "buttons_bg_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["buttons_stroke_color"] = array("name" => __('Buttons Stroke Color', 'nimbus'),
    "desc" => __('Set the stroke color for the buttons.', 'nimbus'),
    "id" => "buttons_stroke_color",
    "tab" => "design",
    "default" => '#aeaeae',
    "type" => "color");  


$NIMBUS_OPTIONS_ARR["image_border_thickness"] = array( 	"name" => __('Image Border Thickness', 'nimbus'),
  "desc" => __('Set the thickness of borders (in pixals) that suround all images within the content area of your website. Set to zero for no border.', 'nimbus'),
  "id" => "image_border_thickness",
  "default" => "1",
  "type" => "text",
  "tab" => "design",
  "classes" => "minitext");

  $NIMBUS_OPTIONS_ARR["image_padding_thickness"] = array( 	"name" => __('Image Padding', 'nimbus'),
  "desc" => __('Set the padding for all images in content area. Set to zero for no padding.', 'nimbus'),
  "id" => "image_padding_thickness",
  "default" => "4",
  "type" => "text",
  "tab" => "design",
  "classes" => "minitext"); 
  
$NIMBUS_OPTIONS_ARR["image_stroke_color"] = array("name" => __('Image Stroke Color', 'nimbus'),
    "desc" => __('Set the one pixel stroke color for theme images in the content area.', 'nimbus'),
    "id" => "image_stroke_color",
    "tab" => "design",
    "default" => '#b6b6b6',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["image_border_color"] = array("name" => __('Image Border Color', 'nimbus'),
    "desc" => __('Set the four pixel border color for theme images in the content area.', 'nimbus'),
    "id" => "image_border_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["image_border_type"] = array("name" => __('Image Border Type', 'nimbus'),
    "desc" => __('Set the boder type for theme images in the content area', 'nimbus'),
    "id" => "image_border_type",
    "default" => "solid",
    "tab" => "design",
    "type" => "select",
    "class" => "",
    "options" => nimbus_image_border_types());
    
$NIMBUS_OPTIONS_ARR["widget_stroke_color"] = array("name" => __('Sidebar Widget Stroke Color', 'nimbus'),
    "desc" => __('Set the one pixel stroke color for widget areas.', 'nimbus'),
    "id" => "widget_stroke_color",
    "tab" => "design",
    "default" => '#aeaeae',
    "type" => "color");       
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
); 
    

// Typography

$NIMBUS_OPTIONS_ARR["typography_tab"] = array("name" => __('Typography', 'nimbus'),
    "id" => "typography_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "typography",
    "icon" => "fa-font",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "typography",
    "html" => "
    <h1>" . __('Typography Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
 
$NIMBUS_OPTIONS_ARR["body_style"] = array("name" => __('Body Settings', 'nimbus'),
    "desc" => __('Set <strong>Body</strong> font style. This is the default font that will be used in most instances on your website.', 'nimbus'),
    "id" => "body_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.4em", "face" => "PT Sans", "style" => "400", "color" => "#303030", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["link_color"] = array("name" => __('Link Color', 'nimbus'),
    "desc" => __('Set the default link color.', 'nimbus'),
    "id" => "link_color",
    "tab" => "typography",
    "default" => '#727225',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["link_hover_color"] = array("name" => __('Link Hover Color', 'nimbus'),
    "desc" => __('Set link hover color.', 'nimbus'),
    "id" => "link_hover_color",
    "tab" => "typography",
    "default" => '#9a9a48',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["logo_style"] = array("name" => __('Default Logo Typography', 'nimbus'),
    "desc" => __('Set typography preferences for the text logo that is displayed when no image logo exists.', 'nimbus'),
    "id" => "logo_style",
    "tab" => "typography",
    "default" => array("size" => "36px", "line" => "1em", "face" => "PT Sans", "style" => "700", "color" => "#727225", "fonttrans" => "none"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["logo_text_shadow"] = array("name" => __('Default Logo Text Shadow Color', 'nimbus'),
    "desc" => __('Text shadow color on the default logo.', 'nimbus'),
    "id" => "logo_text_shadow",
    "tab" => "typography",
    "default" => '#ffffff',
    "type" => "color");    

$NIMBUS_OPTIONS_ARR["main_menu_style"] = array("name" => __('Navigation Font', 'nimbus'),
    "desc" => __('Set the navigation menu font style will be default on all monitors larger then 1200px', 'nimbus'),
    "id" => "main_menu_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1em", "face" => "PT Sans", "style" => "600", "color" => "#8c8c8c", "fonttrans" => "uppercase"),
    "type" => "typography");
    
    
$NIMBUS_OPTIONS_ARR["main_menu_size_large"] = array(
    "name" => __('Navigation Font at 980px - 1200px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 980px - 1200px width monitors', 'nimbus'),
    "id" => "main_menu_size_large",
    "default" => "100",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );    
    
$NIMBUS_OPTIONS_ARR["main_menu_size_mid"] = array(
    "name" => __('Navigation Font at 768px-979px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 768px-979px width monitors', 'nimbus'),
    "id" => "main_menu_size_mid",
    "default" => "100",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );    
    
$NIMBUS_OPTIONS_ARR["main_menu_hover"] = array(
    "name" => __('Navigation Font Hover Color', 'nimbus'),
    "desc" => __('Set the hover color for the main menu items', 'nimbus'),
    "id" => "main_menu_hover",
    "tab" => "typography",
    "default" => '#727225',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR["main_menu_current"] = array(
    "name" => __('Navigation Font Current Page Color', 'nimbus'),
    "desc" => __('Set the current page color for the main menu items', 'nimbus'),
    "id" => "main_menu_current",
    "tab" => "typography",
    "default" => '#303030',
    "type" => "color");   
    
    
$NIMBUS_OPTIONS_ARR["sub_menu_style"] = array("name" => __('Sub Navigation Font', 'nimbus'),
    "desc" => __('Set the sub navigation menu font style', 'nimbus'),
    "id" => "sub_menu_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.2em", "face" => "PT Sans", "style" => "600", "color" => "#8c8c8c", "fonttrans" => "none"),
    "type" => "typography"); 


$NIMBUS_OPTIONS_ARR["nimbus_blog_meta_style"] = array("name" => __('Blog Meta Font', 'nimbus'),
    "desc" => __('Set the font styles for the Blog Meta line that includes the categories and author information', 'nimbus'),
    "id" => "nimbus_blog_meta_style",
    "tab" => "typography",
    "default" => array("size" => "11px", "line" => "1.2em", "face" => "PT Sans", "style" => "400", "color" => "#6c6c6c", "fonttrans" => "none"),
    "type" => "typography");
    

$NIMBUS_OPTIONS_ARR["h1_style"] = array("name" => __('H1 Settings', 'nimbus'),
    "desc" => __('Set H1 style.', 'nimbus'),
    "id" => "h1_style",
    "tab" => "typography",
    "default" => array("size" => "36px", "line" => "1.3em", "face" => "PT Sans", "style" => "600", "color" => "#303030", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h2_style"] = array("name" => __('H2 Settings', 'nimbus'),
    "desc" => __('Set H2 style.', 'nimbus'),
    "id" => "h2_style",
    "tab" => "typography",
    "default" => array("size" => "24px", "line" => "1.3em", "face" => "PT Sans", "style" => "600", "color" => "#303030", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h3_style"] = array("name" => __('H3 Settings', 'nimbus'),
    "desc" => __('Set H3 style.', 'nimbus'),
    "id" => "h3_style",
    "tab" => "typography",
    "default" => array("size" => "24px", "line" => "1.3em", "face" => "PT Sans", "style" => "600", "color" => "#303030", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["h3_sidebar_style"] = array("name" => __('H3 (Sidebar Title) Settings', 'nimbus'),
    "desc" => __('Set H3 style.', 'nimbus'),
    "id" => "h3_sidebar_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "PT Sans", "style" => "600", "color" => "#656565", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h4_style"] = array("name" => __('H4 Settings', 'nimbus'),
    "desc" => __('Set H4 style.', 'nimbus'),
    "id" => "h4_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.3em", "face" => "PT Sans", "style" => "400", "color" => "#313131", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h5_style"] = array("name" => __('H5 Settings', 'nimbus'),
    "desc" => __('Set H5 style.', 'nimbus'),
    "id" => "h5_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.3em", "face" => "PT Sans", "style" => "400", "color" => "#313131", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h6_style"] = array("name" => __('H6 Settings', 'nimbus'),
    "desc" => __('Set H6 style.', 'nimbus'),
    "id" => "h6_style",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.3em", "face" => "PT Sans", "style" => "400", "color" => "#313131", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["h_title_text_shadow"] = array("name" => __('H1-H6 Title Text-Shadow color', 'nimbus'),
    "desc" => __('Set the title text-shadow color.', 'nimbus'),
    "id" => "h_title_text_shadow",
    "tab" => "typography",
    "default" => '#ffffff',
    "type" => "color"); 
    
$NIMBUS_OPTIONS_ARR["default_button_style"] = array("name" => __('Default Button Font', 'nimbus'),
    "desc" => __('Set button style', 'nimbus'),
    "id" => "default_button_style",
    "tab" => "typography",
    "default" => array("size" => "26px", "line" => "1em", "face" => "PT Sans", "style" => "600", "color" => "#9a9a48", "fonttrans" => "uppercase"),
    "type" => "typography");    
    
$NIMBUS_OPTIONS_ARR["home_month"] = array("name" => __('Homepage/Blog Month', 'nimbus'),
    "desc" => __('Abreviated month on left side of posts on the homepage or blog.', 'nimbus'),
    "id" => "home_month",
    "tab" => "typography",
    "default" => array("size" => "24px", "line" => "1em", "face" => "PT Sans", "style" => "400", "color" => "#303030", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["home_month_size_large"] = array(
    "name" => __('Homepage/Blog Month at 980px - 1200px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 980px - 1200px width monitors', 'nimbus'),
    "id" => "home_month_size_large",
    "default" => "75",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );    
    
$NIMBUS_OPTIONS_ARR["home_month_size_mid"] = array(
    "name" => __('Homepage/Blog Month at 768px-979px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 768px-979px width monitors', 'nimbus'),
    "id" => "home_month_size_mid",
    "default" => "70",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );  

$NIMBUS_OPTIONS_ARR["home_day"] = array("name" => __('Homepage/Blog Day', 'nimbus'),
    "desc" => __('Numeric date on left side of posts on the homepage or blog.', 'nimbus'),
    "id" => "home_day",
    "tab" => "typography",
    "default" => array("size" => "42px", "line" => "1em", "face" => "PT Sans", "style" => "600", "color" => "#9a9a48", "fonttrans" => "none"),
    "type" => "typography");   

$NIMBUS_OPTIONS_ARR["home_day_size_large"] = array(
    "name" => __('Homepage/Blog Day at 980px - 1200px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 980px - 1200px width monitors', 'nimbus'),
    "id" => "home_day_size_large",
    "default" => "75",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );    
    
$NIMBUS_OPTIONS_ARR["home_day_size_mid"] = array(
    "name" => __('Homepage/Blog Day at 768px-979px', 'nimbus'),
    "desc" => __('Set the degrade in font-size at 768px-979px width monitors', 'nimbus'),
    "id" => "home_day_size_mid",
    "default" => "70",
    "tab" => "typography",
    "type" => "select",
    "class" => "minitext",
    "options" => nimbus_percent_of_parent()
    );     
    
$NIMBUS_OPTIONS_ARR["date_text_shadow"] = array("name" => __('Month/Day Text-Shadow color', 'nimbus'),
    "desc" => __('Set the Date text-shadow color.', 'nimbus'),
    "id" => "date_text_shadow",
    "tab" => "typography",
    "default" => '#ffffff',
    "type" => "color");    

$NIMBUS_OPTIONS_ARR["blockquote_style"] = array("name" => __('Blockquote Settings', 'nimbus'),
    "desc" => __('Set blockquote tag style and the typographic style for the [nimbus_quote] shortcode.', 'nimbus'),
    "id" => "blockquote_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.4em", "face" => "PT Sans", "style" => "600 italic", "color" => "#454545", "fonttrans" => "uppercase"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["pullquote_style"] = array("name" => __('Pullquote Settings', 'nimbus'),
    "desc" => __('Set typographic style for the [nimbus_pullquote_left] and [nimbus_pullquote_right] shortcodes.', 'nimbus'),
    "id" => "pullquote_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.2em", "face" => "Arial", "style" => "400", "color" => "#9a9a48", "fonttrans" => "none"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["code_style"] = array("name" => __('Code/Pre Settings', 'nimbus'),
    "desc" => __('Set Code/Pre style.', 'nimbus'),
    "id" => "code_style",
    "tab" => "typography",
    "default" => array('face' => 'Courier New', 'color' => '#535353'),
    "type" => "font");

$NIMBUS_OPTIONS_ARR["th_style"] = array("name" => __('TH Settings', 'nimbus'),
    "desc" => __('Set TH (Table Heading) style.', 'nimbus'),
    "id" => "th_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "PT Sans", "style" => "700", "color" => "#9a9a48", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["td_style"] = array("name" => __('TD Settings', 'nimbus'),
    "desc" => __('Set TD (Table Data) style.', 'nimbus'),
    "id" => "td_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.4em", "face" => "PT Sans", "style" => "400", "color" => "#535353", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["tc_style"] = array("name" => __('Table Caption Settings', 'nimbus'),
    "desc" => __('Set Table Caption style.', 'nimbus'),
    "id" => "tc_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "PT Sans", "style" => "700 italic", "color" => "#535353", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["footer_text_style"] = array("name" => __('Footer Copyright/Credit Text', 'nimbus'),
    "desc" => __('Set the default font that will be used for footer text.', 'nimbus'),
    "id" => "footer_text_style",
    "tab" => "typography",
    "default" => array("size" => "12px", "line" => "1.3em", "face" => "PT Sans", "style" => "400", "color" => "#727225", "fonttrans" => "none"),
    "type" => "typography");      
    
$NIMBUS_OPTIONS_ARR["sidebar_text_style"] = array("name" => __('Sidebar Text', 'nimbus'),
    "desc" => __('Set the default font for sidebar text.', 'nimbus'),
    "id" => "sidebar_text_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "PT Sans", "style" => "400", "color" => "#808080", "fonttrans" => "none"),
    "type" => "typography");     
    
$NIMBUS_OPTIONS_ARR["nimbus_typography_one"] = array("name" => __('Font for [nimbus_typography_one] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_one] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_one",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_typography_two"] = array("name" => __('Font for [nimbus_typography_two] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_two] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_two",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_typography_three"] = array("name" => __('Font for [nimbus_typography_three] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_three] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_three",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["button_style"] = array("name" => __('Button Shortcodes', 'nimbus'),
    "desc" => __('Set the font that will be used for all button shortcodes.', 'nimbus'),
    "id" => "button_style",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");        
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


// Scripts and Tracking

$NIMBUS_OPTIONS_ARR["scripts_tab"] = array("name" => __('Scripts &amp; Tracking', 'nimbus'),
    "id" => "scripts_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "scripts",
    "icon" => "fa-file-text",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "scripts",
    "html" => "
    <h1>" . __('Scripts Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
 
$NIMBUS_OPTIONS_ARR["scripts_multicheck"] = array("name" => __('Include Site-wide JS Libraries ', 'nimbus'),
    "desc" => __('Select the JS libraries you would like to have included in the <strong>head</strong> section of your site on all pages and posts. Jquery and jQuery UI are automatically included. (* indicates it is hosted by Google).', 'nimbus'),
    "id" => "scripts_multicheck",
    "tab" => "scripts",
    "default" => array("mootools" => "0", "prototype" => "0", "scriptaculous" => "0", "dojo" => "0"),
    "type" => "multicheck",
    "options" => nimbus_include_scripts_in_head());

$NIMBUS_OPTIONS_ARR["scripts_head"] = array("name" => __('Add Scripts to Head', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/head&gt; tag.', 'nimbus'),
    "id" => "scripts_head",
    "classes" => "code",
    "tab" => "scripts",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["scripts_top_content"] = array("name" => __('Add Scripts to Top of Content', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before start of the content on post/pages.', 'nimbus'),
    "id" => "scripts_top_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["top_scripts_multi"] = array("name" => __('Include "Top of Content Scripts"', 'nimbus'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus'),
    "id" => "top_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "blog" => "0", "posts" => "0", "portfolio" => "0", "portfolio_item" => "0"),
    "type" => "pro",
    "options" => array("home" => "Home", "pages" => "Pages", "blog" => "Blog Page", "posts" => "Posts"));

$NIMBUS_OPTIONS_ARR["scripts_bottom_content"] = array("name" => __('Add Scripts to Bottom of Content', 'nimbus'),
    "desc" => __('Add any scripts you would like to add directly after the content on post/pages.', 'nimbus'),
    "id" => "scripts_bottom_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["bottom_scripts_multi"] = array("name" => __('Include "Bottom of Content Scripts"', 'nimbus'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus'),
    "id" => "bottom_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "blog" => "0", "posts" => "0", "portfolio" => "0", "portfolio_item" => "0"),
    "type" => "pro",
    "options" => array("home" => "Home", "pages" => "Pages", "blog" => "Blog Page", "posts" => "Posts"));

$NIMBUS_OPTIONS_ARR["scripts_foot"] = array("name" => __('Add Scripts to Footer', 'nimbus'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/body&gt; tag.', 'nimbus'),
    "id" => "scripts_foot",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "textarea");    
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);
    
    
    
/* * *************************************************************************************************** */
// CSS
/* * *************************************************************************************************** */	

$NIMBUS_OPTIONS_ARR["css_tab"] = array("name" => __('Custom CSS', 'nimbus'),
    "id" => "css_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "css",
    "icon" => "fa-code",
    "type" => "tab");    

$NIMBUS_OPTIONS_ARR[] = array( 
    "tab" => "css",
    "html" => "
    <h1>" . __('CSS Settings', 'nimbus') . "</h1>",
    "type" => "html"
);    
  
$NIMBUS_OPTIONS_ARR["custom_css"] = array("name" => __('Custom CSS', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css",
    "tab" => "css",
    "default" => "",
    "type" => "textarea");    
    
$NIMBUS_OPTIONS_ARR["custom_css_less_767"] = array("name" => __('Responsive CSS: Browsers Less Than 767px', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css_less_767",
    "tab" => "css",
    "default" => "",
    "type" => "pro"); 
    
$NIMBUS_OPTIONS_ARR["custom_css_768_979"] = array("name" => __('Responsive CSS: Browsers Between 768px and 979px', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css_768_979",
    "tab" => "css",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_980_1200"] = array("name" => __('Responsive CSS: Browsers Between 980px and 1200px', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css_980_1200",
    "tab" => "css",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_more_1200"] = array("name" => __('Responsive CSS: Browsers Larger Than 1200px', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css_more_1200",
    "tab" => "css",
    "default" => "",
    "type" => "pro");         
    
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);  
    

/* * *************************************************************************************************** */
// Pages
/* * *************************************************************************************************** */

function nimbus_pages_arr() {

    $pages = array();
    $get_pages = get_pages('sort_column=post_parent,menu_order');
    foreach ($get_pages as $page) {
        $pages[$page->ID] = $page->post_title;
    }
    return $pages;
}

function nimbus_random_page(){ 
    $get_pages = get_pages();
    if(!empty($get_pages)) {    
        shuffle($get_pages);
        $page = $get_pages[0]->ID; 
    } else {
        $page = "";
    }
    return $page; 

} 

/* * *************************************************************************************************** */
// Scripts
/* * *************************************************************************************************** */

function nimbus_include_scripts_in_head() {

    $scripts_in_head = array("mootools" => "MooTools*",
        "dojo" => "Dojo*",
        "prototype" => "Prototype*",
        "scriptaculous" => "script.aculo.us*");
    return $scripts_in_head;
}

/* * *************************************************************************************************** */

// Meta Info
/* * *************************************************************************************************** */

function nimbus_include_post_meta() {

    $post_meta = array("title" => "Post Title",
        "post_thumb" => "Post Thumbnail Image",
        "author" => "Author",
        "date" => "Date",
        "categories" => "Categories",
        "tags" => "Tags");
    return $post_meta;
}

function nimbus_include_blog_meta() {

    $post_meta = array("title" => "Post Title",
        "author" => "Author",
        "date" => "Date",
        "categories" => "Categories");
    return $post_meta;
}

/* * *************************************************************************************************** */
// Border Types
/* * *************************************************************************************************** */

function nimbus_image_border_types() {

    $border_types = array("solid" => __('Solid', 'nimbus'),
        "double" => __('Double', 'nimbus'),
        "grooved" => __('Grooved', 'nimbus'),
        "dotted" => __('Dotted', 'nimbus'),
        "inset" => __('Inset', 'nimbus'),
        "outset" => __('Outset', 'nimbus'),
        "ridged" => __('Ridged', 'nimbus'),
        "dashed" => __('Dashed', 'nimbus'));
    return $border_types;
}


/* * *************************************************************************************************** */
// Font fonttrans Options
/* * *************************************************************************************************** */

function nimbus_fontawesome() {

    $i = array("fa-heart" => __('Heart', 'nimbus'),
        "fa-bomb" => __('Bomb', 'nimbus'),
        "fa-paper-plane" => __('Paper Plane', 'nimbus'),
        "fa-wordpress" => __('WordPress', 'nimbus'),
        "fa-arrow-right" => __('Arrow Right', 'nimbus'),
        "fa-arrow-left" => __('Arrow Left', 'nimbus'),
        "fa-bolt" => __('Bolt', 'nimbus'),
        "fa-cloud" => __('Cloud', 'nimbus'),
        "fa-coffee" => __('Coffee', 'nimbus'),
        "fa-bullseye" => __('Bullseye', 'nimbus'),
        "fa-key" => __('Key', 'nimbus')        
        );
    return $i;
}

/* * *************************************************************************************************** */
// Default Title Configs
/* * *************************************************************************************************** */

function nimbus_default_title_config() {

    $title_configs = array("post-site" => __('Post Title | Site Title', 'nimbus'),
        "site-post" => __('Site Title | Post Title', 'nimbus'),
        "site" => __('Site Title', 'nimbus'),
        "post" => __('Post Title', 'nimbus'));
    return $title_configs;
}

/* * *************************************************************************************************** */
// Font fonttrans Options
/* * *************************************************************************************************** */

function nimbus_font_transform() {

    $font_transform = array("none" => __('Normal', 'nimbus'),
        "capitalize" => __('Capitalize', 'nimbus'),
        "uppercase" => __('Uppercase', 'nimbus'),
        "lowercase" => __('Lowercase', 'nimbus'));
    return $font_transform;
}

/* * *************************************************************************************************** */
// Font Percent of Parnent
/* * *************************************************************************************************** */

function nimbus_percent_of_parent() {

    $nimbus_percent_of_parent = array();
        $i = 1;
        while ($i <= 100) {
            $nimbus_percent_of_parent[$i] = $i . "%";
            $i++;
        }
        
    return $nimbus_percent_of_parent;
}



/* * *************************************************************************************************** */
// Fonts Styles
/* * *************************************************************************************************** */

function nimbus_font_styles() {

    $default = array("200" => "200 (light)",
        "200 italic" => "200 (light) Italic",
        "300" => "300 (book)",
        "300 italic" => "300 (book) Italic",
        "400" => "400 (normal)",
        "400 italic" => "400 (normal) Italic",
        "500" => "500 (semi-bold)",
        "500 italic" => "500 (semi-bold) Italic",
        "600" => "600(bold)",
        "600 italic" => "600(bold) Italic",
        "700" => "700 (bolder)",
        "700 italic" => "700 (bolder) Italic",
        "800" => "800(extra-bold)",
        "800 italic" => "800(extra-bold) Italic");

    return $default;
}

/* * *************************************************************************************************** */
// Patterns
/* * *************************************************************************************************** */

function nimbus_patterns() {

    $default = array(
        "stripes.png" => "stripes.png",
        "45degreee_fabric.png" => "45degreee_fabric.png",
        "60degree_gray.png" => "60degree_gray.png",
        "beige_paper.png" => "beige_paper.png",
        "bgnoise_lg.png" => "bgnoise_lg.png",
        "black-Linen.png" => "black-Linen.png",
        "black_denim.png" => "black_denim.png",
        "broken_noise.png" => "broken_noise.png",
        "brushed_alu.png" => "brushed_alu.png",
        "concrete_wall_2.png" => "concrete_wall_2.png",
        "cork_1.png" => "cork_1.png",
        "dark_stripes.png" => "dark_stripes.png",
        "darkdenim3.png" => "darkdenim3.png",
        "darth_stripe.png" => "darth_stripe.png",
        "diagonal-noise.png" => "diagonal-noise.png",
        "exclusive_paper.png" => "exclusive_paper.png",
        "fabric_1.png" => "fabric_1.png",
        "fabric_plaid.png" => "fabric_plaid.png",
        "fake_brick.png" => "fake_brick.png",
        "gray_sand.png" => "gray_sand.png",
        "groovepaper.png" => "groovepaper.png",
        "grunge_wall.png" => "grunge_wall.png",
        "irongrip.png" => "irongrip.png",
        "lghtmesh.png" => "lghtmesh.png",
        "light_alu.png" => "light_alu.png",
        "noise_pattern_with_crosslines.png" => "noise_pattern_with_crosslines.png",
        "old_mathematics.png" => "old_mathematics.png",
        "old_wall.png" => "old_wall.png",
        "paper_1.png" => "paper_1.png",
        "paper_2.png" => "paper_2.png",
        "paper_3.png" => "paper_3.png",
        "px_by_Gre3g.png" => "px_by_Gre3g.png",
        "ricepaper.png" => "ricepaper.png",
        "ricepaper2.png" => "ricepaper2.png",
        "rockywall.png" => "rockywall.png",
        "roughcloth.png" => "roughcloth.png",
        "soft_wallpaper.png" => "soft_wallpaper.png",
        "stripes.png" => "stripes.png",
        "stucco.png" => "stucco.png",
        "subtle_freckles.png" => "subtle_freckles.png",
        "subtle_orange_emboss.png" => "subtle_orange_emboss.png",
        "texturetastic_gray.png" => "texturetastic_gray.png",
        "vertical_cloth.png" => "vertical_cloth.png",
        "white_texture.png" => "white_texture.png",
        "whitey.png" => "whitey.png",
        "wood_1.png" => "wood_1.png",
        "worn_dots.png" => "worn_dots.png",
        "none" => "none"
        );

    return $default;
}


/* * *************************************************************************************************** */
// Font faces
/* * *************************************************************************************************** */

global $NIMBUS_FONT_FACES;

$NIMBUS_FONT_FACES = array();

$NIMBUS_FONT_FACES = array("Droid Sans" => array("name" => "Droid Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Sans', sans-serif"),
    "Open Sans" => array("name" => "Open Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans', sans-serif"),
    "Oswald" => array("name" => "Oswald*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />",
        "fam" => "'Oswald', sans-serif"),
    "Droid Serif" => array("name" => "Droid Serif*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Serif', serif"),
    "PT Sans" => array("name" => "PT Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans', sans-serif"),
    "Lobster" => array("name" => "Lobster*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />",
        "fam" => "'Lobster', cursive"),
    "Yanone Kaffeesatz" => array("name" => "Yanone Kaffeesatz*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Yanone Kaffeesatz', sans-serif"),
    "Arvo" => array("name" => "Arvo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arvo', serif"),
    "Ubuntu" => array("name" => "Ubuntu*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Ubuntu', sans-serif"),
    "The Girl Next Door" => array("name" => "The Girl Next Door*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css' />",
        "fam" => "'The Girl Next Door', cursive"),
    "Calligraffitti" => array("name" => "Calligraffitti*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css' />",
        "fam" => "'Calligraffitti', cursive"),
    "Cabin" => array("name" => "Cabin*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Cabin', sans-serif"),
    "Dancing Script" => array("name" => "Dancing Script*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Dancing Script', cursive"),
    "Josefin Sans" => array("name" => "Josefin Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Josefin Sans', sans-serif"),
    "Nobile" => array("name" => "Nobile*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Nobile', sans-serif"),
    "Molengo" => array("name" => "Molengo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />",
        "fam" => "'Molengo', sans-serif"),
    "PT Sans Narrow" => array("name" => "PT Sans Narrow*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans Narrow', sans-serif"),
    "Cuprum" => array("name" => "Cuprum*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />",
        "fam" => "'Cuprum', sans-serif"),
    "Josefin Slab" => array("name" => "Josefin Slab*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Josefin Slab', serif"),
    "Arimo" => array("name" => "Arimo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arimo', sans-serif"),
    "Cantarell" => array("name" => "Cantarell*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,700italic,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cantarell', sans-serif"),
    "Signika Negative" => array("name" => "Signika Negative*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Signika+Negative:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika Negative', sans-serif"),
    "Open Sans Condensed" => array("name" => "Open Sans Condensed*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans Condensed', sans-serif"),
    "Six Caps" => array("name" => "Six Caps*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>",
        "fam" => "'Six Caps', sans-serif"),
    "Lato" => array("name" => "Lato*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lato', sans-serif"),
    "Signika" => array("name" => "Signika*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Signika:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika', sans-serif"),
    "Abel" => array("name" => "Abel*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>",
        "fam" => "'Abel', sans-serif"),
    "Terminal Dosis" => array("name" => "Terminal Dosis*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Terminal Dosis', sans-serif"),
    "Gudea" => array("name" => "Gudea*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Gudea', sans-serif"),
    "Telex" => array("name" => "Telex*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>",
        "fam" => "'Telex', sans-serif"),
    "Ruda" => array("name" => "Ruda*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ruda:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Ruda', sans-serif"),
    "Duru Sans" => array("name" => "Duru Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Duru Sans', sans-serif"),
    "Asul" => array("name" => "Asul*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Asul:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Asul', sans-serif"),
    "Tenor Sans" => array("name" => "Tenor Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Tenor+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Tenor Sans', sans-serif"),
    "Nunito" => array("name" => "Nunito*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nunito:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Nunito', sans-serif"),
    "Michroma" => array("name" => "Michroma*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>",
        "fam" => "'Michroma', sans-serif"),
    "Quattrocento Sans" => array("name" => "Quattrocento Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Quattrocento Sans', sans-serif"),
    "Chivo" => array("name" => "Chivo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Chivo:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Chivo', sans-serif"),
    "Maven Pro" => array("name" => "Maven Pro*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Maven Pro', sans-serif"),
    "Federo" => array("name" => "Federo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>",
        "fam" => "'Federo', sans-serif"),
    "Andika" => array("name" => "Andika*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>",
        "fam" => "Andika', sans-serif"),
    "Varela" => array("name" => "Varela*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela', sans-serif"),
    "Amaranth" => array("name" => "Amaranth*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Amaranth', sans-serif"),
    "Inder" => array("name" => "Inder*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>",
        "fam" => "'Inder', sans-serif"),
    "Muli" => array("name" => "Muli*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Muli:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Muli', sans-serif"),
    "Istok Web" => array("name" => "Istok Web*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Istok Web', sans-serif"),
    "Snippet" => array("name" => "Snippet*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Snippet' rel='stylesheet' type='text/css'>",
        "fam" => "'Snippet', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Mako" => array("name" => "Mako*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css'>",
        "fam" => "'Mako', sans-serif"),
    "Droid Sans Mono" => array("name" => "Droid Sans Mono*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>",
        "fam" => "'Droid Sans Mono', sans-serif"),
    "Numans" => array("name" => "Numans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>",
        "fam" => "'Numans', sans-serif"),
    "Questrial" => array("name" => "Questrial*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>",
        "fam" => "'Questrial', sans-serif"),
    "Shanti" => array("name" => "Shanti*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css'>",
        "fam" => "'Shanti', sans-serif"),
    "Basic" => array("name" => "Basic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Basic' rel='stylesheet' type='text/css'>",
        "fam" => "'Basic', sans-serif"),
    "Varela Round" => array("name" => "Varela Round*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela Round', sans-serif"),
    "Antic" => array("name" => "Antic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>",
        "fam" => "'Antic', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Actor" => array("name" => "Actor*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Actor', sans-serif"),
    "Cabin Condensed" => array("name" => "Cabin Condensed*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Cabin Condensed', sans-serif"),
    "Ropa Sans" => array("name" => "Ropa Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Ropa Sans', cursive"),
    "Trochut" => array("name" => "Trochut*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Trochut:400,400italic,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Trochut', cursive"),
    "Port Lligat Sans" => array("name" => "Port Lligat Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Port+Lligat+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Port Lligat Sans', cursive"),
    "Flamenco" => array("name" => "Flamenco*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Flamenco' rel='stylesheet' type='text/css'>",
        "fam" => "'Flamenco', cursive"),
    "Metamorphous" => array("name" => "Metamorphous*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>",
        "fam" => "'Metamorphous', cursive"),
    "Fredericka the Great" => array("name" => "Fredericka the Great*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>",
        "fam" => "'Fredericka the Great', cursive"),
    "Nixie One" => array("name" => "Nixie One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Nixie One', cursive"),
    "Sancreek" => array("name" => "Sancreek*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>",
        "fam" => "'Sancreek', cursive"),
    "Vast Shadow" => array("name" => "Vast Shadow*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>",
        "fam" => "'Vast Shadow', cursive"),
    "Monoton" => array("name" => "Monoton*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>",
        "fam" => "'Monoton', cursive"),
    "Raleway" => array("name" => "Raleway*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>",
        "fam" => "'Raleway', cursive"),
    "Geostar" => array("name" => "Geostar*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Geostar' rel='stylesheet' type='text/css'>",
        "fam" => "'Geostar', cursive"),
    "Buda" => array("name" => "Buda*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>",
        "fam" => "'Buda', cursive"),
    "Forum" => array("name" => "Forum*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>",
        "fam" => "'Forum', cursive"),
    "Mr Bedfort" => array("name" => "Mr Bedfort*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mr+Bedfort' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr Bedfort', cursive"),
    "Rouge Script" => array("name" => "Rouge Script*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'>",
        "fam" => "'Rouge Script', cursive"),
    "Rochester" => array("name" => "Rochester*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>",
        "fam" => "'Rochester', cursive"),
    "Habibi" => array("name" => "Habibi*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>",
        "fam" => "'Habibi', serif"),
    "Lora" => array("name" => "Lora*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lora', serif"),
    "Playfair Display" => array("name" => "Playfair Display*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Playfair Display', serif"),
    "Arapey" => array("name" => "Arapey*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arapey:400italic,400' rel='stylesheet' type='text/css'>",
        "fam" => "'Arapey', serif"),
    "Brawler" => array("name" => "Brawler*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Brawler' rel='stylesheet' type='text/css'>",
        "fam" => "'Brawler', serif"),
    "Caudex" => array("name" => "Caudex*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Caudex:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Caudex', serif"),
    "Cambo" => array("name" => "Cambo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>",
        "fam" => "'Cambo', serif"),
    "Esteban" => array("name" => "Esteban*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Esteban' rel='stylesheet' type='text/css'>",
        "fam" => "'Esteban', serif"),
    "Alegreya SC" => array("name" => "Alegreya SC*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:400,700italic,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Alegreya SC', serif"),
    "Lustria" => array("name" => "Lustria*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>",
        "fam" => "'Lustria', serif"),
    "Amethysta" => array("name" => "Amethysta*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>",
        "fam" => "'Amethysta', serif"),
    "Junge" => array("name" => "Junge*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>",
        "fam" => "'Junge', serif"),
    "Glegoo" => array("name" => "Glegoo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>",
        "fam" => "'Glegoo', serif"),
    "Mr De Haviland" => array("name" => "Mr De Haviland*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr De Haviland', cursive"),
    "Herr Von Muellerhoff" => array("name" => "Herr Von Muellerhoff*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>",
        "fam" => "'Herr Von Muellerhoff', cursive"),
    "Sofia" => array("name" => "Sofia*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>",
        "fam" => "'Sofia', cursive"),
    "Arial" => array("name" => "Arial, Helvetica",
        "import" => "",
        "fam" => "Arial, Helvetica, sans-serif"),
    "Arial Black" => array("name" => "Arial Black, Gadget",
        "import" => "",
        "fam" => "Arial Black, Gadget, sans-serif"),
    "Comic Sans MS" => array("name" => "Comic Sans MS",
        "import" => "",
        "fam" => "'Comic Sans MS', cursive, sans-serif"),
    "Lucida Sans Unicode" => array("name" => "Lucida Sans Unicode",
        "import" => "",
        "fam" => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif"),
    "Tahoma" => array("name" => "Tahoma",
        "import" => "",
        "fam" => "Tahoma, Geneva, sans-serif"),
    "Trebuchet MS" => array("name" => "Trebuchet MS",
        "import" => "",
        "fam" => "'Trebuchet MS', Helvetica, sans-serif"),
    "Verdana" => array("name" => "Verdana",
        "import" => "",
        "fam" => "Verdana, Geneva, sans-serif"),
    "Georgia" => array("name" => "Georgia",
        "import" => "",
        "fam" => "Georgia, serif"),
    "Palatino Linotype" => array("name" => "Palatino Linotype",
        "import" => "",
        "fam" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif"),
    "Times New Roman" => array("name" => "Times New Roman",
        "import" => "",
        "fam" => "'Times New Roman', Times, serif"),
    "Courier New" => array("name" => "Courier New",
        "import" => "",
        "fam" => "'Courier New', Courier, monospace"),
    "Lucida Console" => array("name" => "Lucida Console",
        "import" => "",
        "fam" => "'Lucida Console', Monaco, monospace"),
    "Bebas" => array("name" => "Bebas**",
        "import" => "<style type='text/css'>@font-face { font-family: 'BebasRegular'; src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot'); src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot?#iefix') format('embedded-opentype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.woff') format('woff'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.ttf') format('truetype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.svg#BebasRegular') format('svg'); font-weight: normal; font-style: normal; }</style>",
        "fam" => "'BebasRegular'")
);



