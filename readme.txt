=== Wordpress RSS Shortcode ===
Contributors: pepijndevos
Donate link: http://pepijndevos.nl/donate/
Tags: rss, atom, shortcode
Requires at least: 2.5
Tested up to: 3.0
Stable tag: trunk

A shortcode to render an RSS feed in a post/page

== Description ==

A snippet of code packed in a plugin to render the Wordpress RSS widget as a shortcode.

This allows you to display external or related content on its own page.

In combination with Yahoo! Pipes, or another RSS magic service, you can create nice collections of articles for your readers on a separate page.

This plugin does not create WordPress posts from feed items.

== Installation ==

1. Upload `wordpress-rss-shortcode.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `[rsstag url=http://example.com/feed/]` in your posts

== Frequently Asked Questions ==

= Can I display the date, author or content of an entry? =

Yes, add either show_summary=1, show_date=1 or show_author=1 to the tag.

= I get an error with my RSS feed! =

It seems this is an issue with the RSS code in WordPress, rather than with my plugin.

Make sure your url is valid, contains no spaces, and is properly html-encoded(if you use the HTML editor).

A temporary solutions is to pass your feed through FeedBurner, which does seem to work.
