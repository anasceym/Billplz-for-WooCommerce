=== Billplz for WooCommerce ===
Contributors: wanzulnet
Tags: billplz,paymentgateway,fpx,malaysia
Tested up to: 4.8
Stable tag: 3.15
Donate link: https://www.billplz.com/hpojtffm3
Requires at least: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Accept Internet Banking Payment by using Billplz. 

== Description ==
Install this plugin to accept payment using Billplz (Maybank2u, CIMB Clicks, Bank Islam, FPX). 

For Installation Instruction, please refer to:
[How to Install](http://bit.ly/1SwkWJL)

== Upgrade Notice == 

WARNING! THIS UPDATE MAY BREAK YOUR SITE!

Please re-configure the plugin after updating to version 3.15
1. Make sure your PHP Version is : 5.6/7.0/7.1
2. Set X Signature Key

== Screenshots ==
* Will available soon

== Changelog ==

= 3.15 =
* NEW: Implemented API Calls by using Billplz-API-Class (GitHub.com/wzul)
* NEW: API Calls now will made by using GuzzleHttp 6.0
* REMOVED: Option for Mode are removed. Automatic detection by API Key

= 3.14 =
* NEW: Instruction added after payment
* IMPROVED: PHP 5.3 Compatibility

= 3.13 =
* IMPROVED: Callback/Return response handling
* IMPROVED: Plugin workaround
* REMOVED: IPN Option. Will be Both by default

= 3.12 =

* NEW: Logging feature
* NEW: Clear cart option on checkout
* CHANGED: Corrected Plugin URL
* IMPROVED: Plugin file structure

= 3.11 =
* SECURITY: Amount spoofing issue has been fixed. 

= 3.10 =
* REMOVED: Backwards compatible checks are removed
* REMOVED: Auto Submit option. No longer supported by API
* IMPROVED: Receipt URL can now easily tracked by cliking on it
* IMPROVED: Billplz API Call using WordPress Library (wp_safe_remote_post)
* NEW: Compatible with Windows-Based Server hosting
* NEW: Option to choose type of payment validation

== Installation ==

For Installation Instruction, please refer to:
[How to Install](http://bit.ly/1SwkWJL)

== Frequently Asked Questions ==

= Where can I get Collection ID? =

You can the Collection ID at your Billplz Billing. Login to http://www.billplz.com


= Troubleshooting =

If you get infinite loop or JSON-like error:
1. Ensure the correct API Key and Collection ID has been set up
2. Contact us at sales@wanzul-hosting.com

== Links ==
[Wanzul Hosting](http://wanzul-hosting.com/) is the most reliable, cheap, recommended by the most web master around the world.

== Thanks ==
Special thanks to Akhie Joe for designing the button/banner and all donators! Thank You so much!