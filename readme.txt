=== Plugin Name ===
Contributors: shabbirbhimani
Tags: AWeber, Footer Form, SLideUp
Requires at least: 2.8
Tested up to: 2.9.2
Stable tag: trunk

Footer Slideup Form adds an AWeber Opt-In form into the footer where user's can subscribe to your List.

== Description ==

Footer Slideup Form is one of the best ways to ask your user to subscribe to your list without any interruption or blocking and this plugin does exactly that. It adds an AWeber subscribe form in the footer of your Wordpress blog. <A HREF="http://g4ef.aweber.com">AWeber</A> (Aff Link) is one of the better autoresponders in the market and it allows you to send series of email message to subscribers. You can read my detailed <A HREF="http://imtips.co/aweber-autoresponder-review.html" target="_blank">AWeber Review</A> on my blog.

== Installation ==

Please Follow the exact Steps to install and activate this plugin.

   1. Generate an Inline form using the AWeber Web form Interface.
   2. Grab the HTML code of your AWeber Form and Search for Hidden Div which lists all the hidden form fields for subscription. You will see it just after the <FORM> tag.
   3. Upload the plugin folder aweber-footer-slideup at wp-content/plugins.
   4. Activate the plugin through the 'Plugins' menu in WordPress
   5. Edit Options under the Menu 'AWeber Footer SlideUp'. Paste the hidden div HTML Code generated in Step 2.

== Frequently Asked Questions ==

= How to Edit the Tag Line Subscribe By Email for Weekly Updates? =

Heading Tag Line (Optional) in the admin interface of the plugin. Leaving it blank will show the default tagline.

= What is Tracking Image URL of AWeber Webform (Optional)? = 

AWeber RAW HTML Webform tracks the form views and other stats with an image. If you would like to see how many users submit using the footer form you need to add the unique image url of AWeber into the field value. Just near the form end tag you will see <img src="SomeValue" border="0" />. Just copy the SomeValue from the HTML code and paste it in Tracking Image URL of AWeber Webform. The Image URL will not be any normal jpg/gif like image.

= I installed the plugin with exact steps you mentioned and yet I cannot see the SlideUp. Why? = 

If you have pasted the hidden div HTML Code generated in Step 2 of installation in the Options under the Menu 'AWeber Footer SlideUp' and if still you cannot see the SlideUp in footer the only reason could be that your theme does not support Hooks in header and Footer. Any Wordpress Theme should follow the <a href="http://codex.wordpress.org/Theme_Development">Wordpress Theme Development Guidelines</a> and should have the needed function calls in header and footer. Your theme should have wp_footer() call, to appear just before closing body tag and if it does not have it the plugin may not work as expected.

= I have more Queries, Can you Help? =

Yes I will be more than happy to help. Just post them in comments on my <A href="http://imtips.co/aweber-footer-slideup.html">blog</a>.

== Screenshots ==

1. How AWeber Footer Slideup Looks. 

== Changelog ==

= 0.91 =
* Blank tracking image bug solved.

= 0.9 =
* Upgraded to Latest JQuery

= 0.7 =
* Added Few more FAQ's.

= 0.7 =
* Fix for z-index issues with some of the themes.

= 0.6 =
* Fix for the jQuery Variable Conflicts with other version of jQuery used on same page.

= 0.5 =
* On some web servers filenames with ".cookie" in them is a problem and so now the file is renamed.

= 0.4 =
* Tracking Image Settings Bug Removed.

= 0.3 =
* Do not Show the Form if Required Fields are not Filled.

= 0.2 =
* Basic Working Version of AWeber Footer Slideup with Admin Options Now Added.

= 0.1 =
* Basic Working Version of AWeber Footer Slideup

== Upgrade Notice ==

= 0.9 =
Just Replace the content of the plugins folder with the new content and re-activate the plugin.
