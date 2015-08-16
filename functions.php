<?php

add_action('admin_menu', 'muc_add_appearance_menu');

function muc_add_appearance_menu() {
     add_submenu_page( 'themes.php', 'Theme Options', 'Theme Options', '', 'options', 'muc_theme_options'); 
}

function muc_theme_options() {
    ?>
	    <div class="wrap">
	    <h1>Theme Options</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php
}

function display_image_element() {
	?>
   	<input type="text" name="image_url" id="image_url" value="<?php echo get_option('image_url'); ?>" />
	<?php
}

function display_sitename_element() {
	?>
   	<input type="text" name="sitename" id="sitename" value="<?php echo get_option('sitename'); ?>" />
    <?php
	
}

function display_body_heading_element() {
	?>
   	<input type="text" name="heading" id="heading" value="<?php echo get_option('heading'); ?>" />
	<?php
}

function display_description_element() {
	?>
	<textarea name="description" id="description" rows="5" cols="40"><?php echo get_option('description'); ?></textarea>
	<?php
}

function display_copyright_owner_element() {
	?>
   	<input type="text" name="owner" id="owner" value="<?php echo get_option('owner'); ?>" />
	<?php
}

function display_copyright_owner_link_element() {
	?>
   	<input type="text" name="ownerlink" id="ownerlink" value="<?php echo get_option('ownerlink'); ?>" />
	<?php
}

function display_mailchimp_element() {
	?>
   	<input type="text" name="mailchimp" id="mailchimp" value="<?php echo get_option('mailchimp'); ?>" />
	<?php
}

function display_googleplus_element() {
	?>
	<input type="text" name="googleplus_url" id="googleplus_url" value="<?php echo get_option('googleplus_url'); ?>" />
	<?php	
}

function display_twitter_element() {
	?>
    <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element() {
	?>
    <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
	<?php
}

function display_email_element() {
	?>
    <input type="text" name="email_url" id="email_url" value="<?php echo get_option('email_url'); ?>" />
	<?php
}

function display_youtube_element() {
	?>
    <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
	<?php
}

function display_pinterest_element() {
	?>
    <input type="text" name="pinterest_url" id="pinterest_url" value="<?php echo get_option('pinterest_url'); ?>" />
	<?php
}


function display_theme_panel_fields()
{
	add_settings_section("section", "Settings", null, "theme-options");
	
	add_settings_field("sitename", "Site Name", "display_sitename_element", "theme-options", "section");
	add_settings_field("image_url", "Image URL", "display_image_element", "theme-options", "section");
	add_settings_field("heading", "Heading", "display_body_heading_element", "theme-options", "section");
	add_settings_field("description", "Description", "display_description_element", "theme-options", "section");
	add_settings_field("owner", "Copyright Owner Name", "display_copyright_owner_element", "theme-options", "section");
	add_settings_field("ownerlink", "Copyright Owner Link", "display_copyright_owner_link_element", "theme-options", "section");
	add_settings_field("mailchimp", "Mailchimp Link to General List", "display_mailchimp_element", "theme-options", "section");
	
	add_settings_field("googleplus_url", "Google+ Url", "display_googleplus_element", "theme-options", "section");
	add_settings_field("twitter_url", "Twitter Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("email_url", "Email", "display_email_element", "theme-options", "section");
    add_settings_field("youtube_url", "Youtube Url", "display_youtube_element", "theme-options", "section");
    add_settings_field("pinterest_url", "PInterest Url", "display_pinterest_element", "theme-options", "section");

	register_setting("section", "sitename");
	register_setting("section", "image_url");
	register_setting("section", "heading");
	register_setting("section", "description");
	register_setting("section", "owner");
	register_setting("section", "ownerlink");
	register_setting("section", "mailchimp");
	
	register_setting("section", "googleplus_url");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "email_url");
    register_setting("section", "youtube_url");
    register_setting("section", "pinterest_url");
}

add_action("admin_init", "display_theme_panel_fields");

?>