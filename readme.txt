=== Plugin Name ===
Contributors: sellfisch
Donate link: http://mob.fish
Tags: vrview, 360 video, 360 player, panorama, panorama video
Requires at least: 3.0.1
Tested up to: 4.5.3
Stable tag: 1.1.3
License: Apache License 2.0
License URI: https://gitlab.com/sell/vrview/blob/master/LICENSE

VRView makes it easy to embedd Googles VRView into your WordPress installation.

== Description ==

VRView makes it easy to embedd Googles VRView into your WordPress installation.
Embed 360° Videos and VR Videos as Well as panorama photos into your Wordpress-Installation.

See player description on Google VR Page:
https://developers.google.com/vr/concepts/vrview

## Usage

[vrview]VideoUrl[/vrview]

You can use the following attributes within the shortcode

Attribute | Default | Description
--- | --- | ---
width | 100% | Width of the player
height | 300px | Height of the player
allowfullscreen | allowfullscreen | Set fullscreen function
frameborder | 0 | Border of the embedding iframe
is_stereo | false | Set true if the video supports VR (top to bottom)
start_yaw | 0 | Initial yaw of viewer, in degrees. 
is_yaw_only | false | true if motion is restricted to yaw only

== Installation ==


1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Do i need to add specific meta information to the video / image? =

Not, needed. Every video/image is treated as VR-Shot

= How can i use stereo? =

Set the attribute is_stereo to true

== Screenshots ==

1. VR-Video shown on the website
2. Use the shortcode [vrview] to embed vr images

== Changelog ==

= 1.1.3 =
* Store description

= 1.1.2 =
* Store description

= 1.1 =
* Support for Attributes


= 1.0 =
* First Release

== Upgrade Notice ==

= 1.0 =

There is nothing, you have to take care of

