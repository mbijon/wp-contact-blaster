=== Plugin Name ===
Contributors: mbijon
Donate link: http://www.etchsoftware.com/
Tags: contact, form, mail, send, SquareSend
Requires at least: 3.4
Tested up to: 3.8
Stable tag: 2.1
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Simplest contact forms ever: Enable plugin & click the "Insert Contact Form" button above the editor


== Description ==

Simplest contact forms ever. Two easy ways to use with the SquareSend API:

1. Click the "Insert Contact Form" button above the Post & Page editor. Then edit the link to add your own email/Squaresend address
1. Or the plugin detects & auto-converts mailto: links on any Page, Post or widget into a clean, formatted contact form, thanks to the [SquareSend.com API](http://www.squaresend.com/)

To get started, signup on [www.squaresend.com](http://www.squaresend.com/), register an email address on Squaresend, and use that email address in a mailto: link on your site. There is no wp-admin page or Option Setup for this plugin. It's that simple

PRO TIPS:
* Use WordPress' [antispambot()](http://codex.wordpress.org/Function_Reference/antispambot) method to prevent your emails from being harvested by spammers. In your template HTML: mailto:<?php echo antispambot( 'john.doe@example.com' ); ?>
* Add titles, labels and placeholder text to the form your users see with [Squaresend's Querystring settings](https://squaresend.com/docs#Customization). For example: Customize the title of the form & email '<a href="mailto:john.doe@example.com?sqs_title=Custom+Title+Here">Contact</a>'


== Frequently Asked Questions ==

= Do I need a SquareSend account? =

Yes, you need an account and a registered email address on SquareSend for this plugin to be able to send messages through that service. If you don't have an account on SquareSend your links will just be basic mailto:'s

= Why isn't the contact form working? =

The mailto: link must use the same email address that you activated on SquareSend or the form will not activate.


== Screenshots ==

1. No screenshot yet...


== Changelog ==

= 2.0 =
* Add an above-editor button to auto-gen mailto: links

= 1.0 =
* Initial plugin, basic Suqaresend enabled, no config options or admin-page

