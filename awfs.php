<?php
/*
	Plugin Name: AWeber Footer SlideUp
	Plugin URI: http://wordpress.org/extend/plugins/aweber-footer-slideup/
	Description: Installs AWeber Footer Form
	Author: Shabbir Bhimani
	Version: 0.1-alpha
	Author URI: http://www.codeitwell.com/
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
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery.include.js"></script>
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $plugin_abs_url; ?>/js/jquery-libs.js"></script>
<?php
}

function awfs_form()  {
$plugin_abs_path = WP_PLUGIN_DIR.'/aweber-footer-slideup';
?>
<div id="footerform">
	<div class="close">
		<div id="closefornow"> <a href="#" onclick="slidedown(); return false;">Close for now.</a></div>
	    <div id="dontshowanymore"><a href="#" onclick="slidedown(); return false;">Never show again.</a></div>
	</div>

	<div class="tagline"><?php include ($plugin_abs_path . '/awfs-tagline.php') ?></div>

	<form method="post" action="http://www.aweber.com/scripts/addlead.pl" target="_new">
		<?php include ($plugin_abs_path . '/awfs-hiddenfields.php') ?>
		<input type="text" name="name" class="formInputfooter formInputNamefooter" value="What is your first name?" size="20" />
		<input type="text" name="from" class="formInputfooter formInputEmailfooter" value="What is your email?" size="20" />
		<input type="submit" name="submit" class="formInputSubmitfooter" value="Subscribe Now !!!">
	</form>

	<img src="http://forms.aweber.com/form/displays.htm?id=LMxsHAwcDKys" border="0" />
</div>
<?
}
add_action ( 'wp_footer', 'awfs_form');
add_action ( 'wp_head', 'awfs_header_elements');
?>
