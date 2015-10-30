=== Storefront Sticky Add to Cart ===
Contributors: jameskoster, woothemes
Tags: woocommerce, ecommerce, storefront, sticky
Requires at least: 4.0
Tested up to: 4.3.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Storefront Sticky Add to Cart adds a convenient bar which sticks to the top of your product pages so that visitors can easily find and click the add to cart button.

== Description ==

Product pages can be long. Some products have long descriptions, lots of reviews, galleries, you name it. By the time a visitor has read all of the product content and decided to commit to purchasing the product, the add to cart button is often hidden way off screen at the top of the page. Not any more! The Storefront Sticky Add to Cart plugin reveals a small content bar at the top of the browser window which includes the product name, price, stock status and the all-important add to cart button. It subtly slides into view once the standard add-to-cart button has scrolled out of view. Now when your customers decide they want to buy your product they no longer have to go hunting to add it to their cart!

[youtube https://youtu.be/v3daZU1kWJs]

As the name suggests this plugin has been designed to work with our [Storefront](http://wordpress.org/themes/storefront/) theme. The add-to-cart bar colors will be lifted from your Storefront configuration in the Customizer. The main background color is applied to the background, the main text color applied to the text and the main link color applied to links. If you want to use this plugin with another theme you'll have to build your own integration. More info in the FAQ.

== Installation ==

1. Upload `storefront-sticky-add-to-cart` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Done!

== Frequently Asked Questions ==

= I only see the add-to-cart bar on simple products, why? =

Because grouped and variable products require additional input before they can be added to the cart reducing the effectiveness of this feature. I might look at including the variable product selectors in a future version.

= I want to integrate with a theme other than Storefront, how do I do it? =

It's very simple, most of the core styles are loaded regardless. You'll just need to apply a background color to the content bar like so; `.ssatc-sticky-add-to-cart { background-color: white; }`.

== Screenshots ==

1. The sticky add to cart bar in action.

== Changelog ==

= 1.0.0 - 10.30.2015 =
Initial release.