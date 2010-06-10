=== Plugin Name ===
Contributors: shabbirbhimani
Tags: AWeber, Footer Form, SLideUp
Requires at least: 2.9
Tested up to: 2.9.2
Stable tag: trunk

Footer Slideup Form adds an AWeber form into the footer and user can subscribe to it.

== Description ==

Footer Slideup Form is one of the best way to ask your user to subscribe to your list without any interruption or blocking and this plugin does exactly that. It adds an AWeber form into the footer and user has couple of options apart from subscribing and that is either close the plugin for the current session or for rest of his life. The information is stored in browser cookies and if user clears them he will see the form again.

== Installation ==

Please Follow the exact Steps to Install this plugin.

e.g.
1. Download aweber-footer-slideup Plugin to your Local PC.
1. Generate an AWeber Inline form using the AWeber Web Form Interface. Use any basic theme as the theme you select in AWeber will not be used.
1. Grab the HTML code of your AWeber Form and Search for Hidden Div which lists all the hidden form fields. You will see it after the <FORM> tag.
1. Open the file aweber-footer-slideup/awfs-hiddenfields.php in notepad and copy the hidden Div and paste into the file. Save the file now.
1. Upload `aweber-footer-slideup` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How to Edit the Tag Line Subscribe By Email for Weekly Updates? =

I have kept it to simple file edit aweber-footer-slideup\awfs-tagline.php as of now but soon I will be adding admin interface into the plugin.

== Screenshots ==

1. How AWeber Footer Slideup Looks. 

== Changelog ==

= 0.1 =
* Basic Working Version of AWeber Footer Slideup

== Upgrade Notice ==

= 0.1 =
This is the initial version and so there is nothing to upgrade.
