=== Plugin Name ===
Contributors: mbijon
Donate link: http://www.etchsoftware.com/
Tags: contact form, SquareSend, contact form, contact form plugin, contact forms, contact us, feedback form, form, web form, mail, contact, mailto, shortcodes
Requires at least: 3.4
Tested up to: 3.7.1
Stable tag: 2.0.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simplest contact forms ever: Enable plugin & click the "Insert Contact Form" button above the editor

== Description ==

Simplest contact forms ever. Two easy ways to use:

1. Click the "Insert Contact Form" button above the Post & Page editor. Then edit the link to add your own email/Squaresend address
1. Or the plugin detects & auto-converts mailto: links on any Page, Post or widget into a clean, formatted contact form, thanks to the [SquareSend.com API](http://www.squaresend.com/)

To get started, signup on [www.squaresend.com](http://www.squaresend.com/), register an email address on Squaresend, and use that email address in a mailto: link on your site. There is no wp-admin page or Option Setup for this plugin. It's that simple

PRO TIPS:
* Use WordPress' [antispambot()](http://codex.wordpress.org/Function_Reference/antispambot) method to prevent your emails from being harvested by spammers. In your template HTML: mailto:<?php echo antispambot( 'john.doe@example.com' ); ?>
* Add titles, labels and placeholder text to the form your users see with [Squaresend's Querystring settings](https://squaresend.com/docs#Customization). For example: Customize the title of the form & email '<a href="mailto:john.doe@example.com?sqs_title=Custom+Title+Here">Contact</a>'


== Installation ==

1. Make sure you have an account & registered email address on Squaresend.com
1. Upload the `contact-blaster` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress -- Note, there is *no wp-admin page* for this plugin. It's that simple
1. Use the "Insert Contact Form" button or create a mailto link on a public page using the same email address you registered at Squaresend, like: "mailto:email@example.com"

== Frequently Asked Questions ==

= Do I need a SquareSend account? =

Yes, you need an account and a registered email address on SquareSend for this plugin to be able to send messages.

= Why isn't the contact form working? =

The mailto: link must use the same email address that you activated on SquareSend or the form will not activate.


== Screenshots ==

1. The default contact form with this plugin enabled. Just add a mailto:john.doe@example.com link to any Post or Page ... and the form automagically builds itself!


== Changelog ==

= 2.0 =
* Add an above-editor button to auto-gen mailto: links

= 1.0 =
* Initial plugin, basic Suqaresend enabled, no config options or admin-page

