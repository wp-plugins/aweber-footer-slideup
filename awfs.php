<?php
/*
	Plugin Name: AWeber Footer SlideUp
	Plugin URI: http://wordpress.org/extend/plugins/aweber-footer-slideup/
	Description: Footer Slideup Form is one of the best ways to ask your user to subscribe to your list without any interruption or blocking and this plugin does exactly that. It adds an AWeber subscribe form in the footer of your Wordpress blog. <A HREF="http://g4ef.aweber.com">AWeber</A> (Aff Link) is one of the better autoresponders in the market and it allows you to send series of email message to subscribers. You can read my detailed <A HREF="http://imtips.co/aweber-autoresponder-review.html" target="_blank">AWeber Review</A> on my blog.
	Author: Shabbir Bhimani
	Version: 0.9
	Author URI: http://imtips.co/
 */
if ( ! defined( 'WP_CONTENT_URL' ) )
    define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
if ( ! defined( 'WP_CONTENT_DIR' ) )
    define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
if ( ! defined( 'WP_PLUGIN_URL' ) )
    define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
if ( ! defined( 'WP_PLUGIN_DIR' ) )
    define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
function awfs_header_elements()
{
$plugin_abs_url = WP_PLUGIN_URL.'/aweber-footer-slideup';
?>
<link rel="stylesheet" href="<?php echo $plugin_abs_url; ?>/style.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery-cookie.js"></script>
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery-libs.js"></script>
<?php
}

function awfs_form()  {
$awfs_hiddenfields = get_option('awfs_hiddenfields');
if($awfs_hiddenfields =='') return;
?>
<div id="footerform">
	<div class="close">
		<div id="closefornow"> <a href="#" onclick="slidedown(); return false;">Close for now.</a></div>
	    <div id="dontshowanymore"><a href="#" onclick="slidedown(); return false;">Never show again.</a></div>
	</div>

	<div class="tagline"><?php $awfs_tagline=get_option('awfs_tagline'); echo $awfs_tagline==''?'Subscribe By Email for Weekly Updates.':$awfs_tagline; ?></div>

	<form method="post" action="http://www.aweber.com/scripts/addlead.pl" target="_new">
		<?php echo $awfs_hiddenfields ?>
		<input type="text" name="name" class="formInputfooter formInputNamefooter" value="What is your first name?" size="20" />
		<input type="text" name="from" class="formInputfooter formInputEmailfooter" value="What is your email?" size="20" />
		<input type="submit" name="submit" class="formInputSubmitfooter" value="Subscribe Now !!!">
	</form>
<?php $awfs_formstatstracking= get_option('awfs_formstatstracking'); if(awfs_formstatstracking!='') echo "<img src='$awfs_formstatstracking' border='0' />"; ?>
</div>
<?
}
add_action ( 'wp_footer', 'awfs_form');
add_action ( 'wp_head', 'awfs_header_elements');
add_action ( 'admin_menu', 'awfs_plugin_menu');

function awfs_plugin_menu() {

	add_options_page('My Plugin Options', 'AWeber Footer SlideUp', 'manage_options', 'awfs', 'awfs_plugin_options');
	add_action( 'admin_init', 'register_awfs_settings' );
}

function register_awfs_settings() {
	//register settings
	register_setting( 'awfs-settings-group', 'awfs_tagline' );
	register_setting( 'awfs-settings-group', 'awfs_hiddenfields' );
	register_setting( 'awfs-settings-group', 'awfs_formstatstracking' );
}


function awfs_plugin_options() {
?>
<div class="wrap">
<p>Footer Slideup Form is one of the best ways to ask your user to subscribe to your list without any interruption or blocking and this plugin does exactly that. It adds an AWeber subscribe form in the footer of your Wordpress blog. <A HREF="http://g4ef.aweber.com">AWeber</A> (Aff Link) is one of the better autoresponders in the market and it allows you to send series of email message to subscribers. You can read my detailed <A HREF="http://imtips.co/aweber-autoresponder-review.html" target="_blank">AWeber Review</A> on my blog.</p>
<p>If you are still not using AWeber for your blog and thinking of purchase you can use my affiliate <A HREF="http://g4ef.aweber.com/">link</A>.</p>
<p>For all your queries, help and support for plugin please post them in comments <A HREF="http://imtips.co/aweber-footer-slideup/" target="_blank">at my blog</A>. I will be actively supporting the plugin.</p>

<form method="post" action="options.php">
<?php settings_fields( 'awfs-settings-group' ); ?>
<table class="form-table">
<tr valign="top">
<th scope="row">Heading Tag Line (Optional)</th>
<td><input type="text" name="awfs_tagline" value="<?php echo get_option('awfs_tagline'); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Tracking Image URL of AWeber Webform (Optional)</th>
<td><input type="text" name="awfs_formstatstracking" value="<?php echo get_option('awfs_formstatstracking'); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Hidden AWeber Form Fields (Required)
<div style="font-weight:bold;color:red;padding-top:10px;">Generate an Inline form using the AWeber WebForm Interface. Grab the HTML code of your AWeber Form and Search for Hidden Div which lists all the hidden form fields. You will see it just after after the <FORM> tag.
</div></th>
<td>
<textarea name="awfs_hiddenfields" id="awfs_hiddenfields" rows="15" cols="90"  ><?php echo get_option('awfs_hiddenfields'); ?></textarea>
</td>
</tr>
</table>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="awfs_formstatstracking, awfs_tagline,awfs_hiddenfields" />
<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>
</form>
</div>
<?
}
?>
