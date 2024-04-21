=== No Self Ping ===
Contributors: mdawaffe, dartiss
Donate link: https://artiss.blog/donate
Tags: pingback, ping, trackback
Requires at least: 4.6
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Keeps WordPress from sending pings to your own site.

== Description ==

Some people really like that WordPress sends pings from your own site to your own site when you write posts; it gives them a trail of related posts.

Some people do not like this behavior; it clutters up their comments.

This plugin disables intra-blog pinging.

Once activated, there's nothing for you to do. However, head to Settings -> Discussion and you'll find a field in which you can, if you wish, specify more domains that won't be pinged. Why? Well, maybe you often refer to other sites that you maintain or, particularly, you run a multi-site and don't want each blog pinging the other - specify a list here and you're sorted.

This plugin was originally developed by the awesome [Michael D. Adams](https://profiles.wordpress.org/mdawaffe/) and the iconography is courtesy of the very talented [Janki Rathod](https://www.fiverr.com/jankirathore).

**Please visit the [Github page](https://github.com/dartiss/no-self-ping "Github") for the latest code development, planned enhancements and known issues**

== Installation ==

No Self Ping can be found and installed via the Plugin menu within WordPress administration (Plugins -> Add New). Alternatively, it can be downloaded from WordPress.org and installed manually...

1. Upload the entire `no-self-ping` folder to your `wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress administration.

It's now ready to go.

== Screenshots ==

1. Option to specify additional URLs, as found in Settings -> Discussion.

== Changelog ==

This plugin uses semantic versioning, with the first release being 0.1.

= 1.2 =
* Enhancement: Code quality improvements
* Enhancement: Because the code size was getting a little spicy, I've split into smaller, more manageable, files
* Maintenance: I've been really inconsistent with my naming, and that may have been causing some issues - I've now corrected all references of `no-self-pings` to `no-self-ping` (except for the setting database name, which hasn't been corrected).

= 1.1.5 =
* Bug: Oh boy. Ever have one of those Thursdays? I restored the settings description in the last release but then managed to break some of the content of that sentence. It's now... fixed. I hope

= 1.1.4 =
* Bug: Fixed some missing output on the settings screen. Oopsie

= 1.1.3 =
* Enhancement: Improved plugin meta
* Maintenance: Beefed up code quality even more

= 1.1.2 =
* Enhancement: Because minimum VIP standards are just not enough, it now follows their hard-as-snails, full-strength standards. Because your code is worth it
* Enhancement: Improved accessibility where we've added the new field to the admin settings, so it's now WCAG 2.0 compliant

= 1.1.1 =
* Enhancement: Code quality enhancements to bring it in line with WordPress.com VIP coding standards

= 1.1 =
* Enhancement: A second update in the same month? It's like all our Christmas' come at once. Well, I've now added an (optional) field to the Discussion settings so that you can specify even more domains that should't be pinged. You're welcome.
* Enhancement: Added additional security - escape all the things!

= 1.0 =
* Enhancement: Now using `home_url()` instead of `get_option( 'home' )`, as it's more SSL friendly
* Enhancement: Added plugin meta

= 0.2 =
* Enhancement: Argument removed

= 0.1 =
* Initial release

== Upgrade Notice ==

= 1.2 =
* A load of code quality improvements