=== Widget Name ===

Contributors: jjunyent, Mike Koepke, Cinefilo
Donate link: http://projectes.junyent.org
Tags: archives, past, last year, years ago
Requires at least: 3.7
Tested up to: 4.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

It shows entries/posts around today's date in the past (if they exist). It is highly customizable.

== Description ==

Notas en castellano en la web ]  [  Notes en català a la web ]

It shows around this date entries/posts in the past (if they exist). It is highly customizable. By default it retrieves a week around the current day 1 year ago.


== Installation ==

This section describes how to install the plugin and get it working.

1. Install and activate it through the plugin management screen.
2. Go to "Themes" > "Sidebar Widgets" and drag and drop the widgets wherever you want to show them and. Display parameters are inside each widget.

== Frequently Asked Questions ==

= How can I customize the display =

In addition to the options available from the widget control panel you can highly customize the appearance of the output by using CSS. These are the classes available:
*	ul.atd-list {} // base list container.
*	li.atd-year {} // Yearly headers.
*	atd-yXXXX {} //yearly based class, eg. atd-y2006, atd-y2005 ...
*	ul.atd-yearlylist {} // list container for each year around this date posts.
*	li.atd-entry {} // list items containing each around this date posts.
*	atd-yXXXX {} //yearly based class, eg. atd-y2006, atd-y2005 ...
*	atd-mXX {} //montly based class, eg. atd-m01, atd-m02 ... atd-m12.
*	atd-dXX {} //dayly based class, eg. adt-d01, atd-d02 ... atd-d31.
*	atd-XXXXXXXX {} //date based class, eg. atd-20061205, atd-20050304 ...
*	li.atd-noentries {} // list item when there are no entries
*	a.atd-entry-title {} // Link to the post.
*	.atd-entry-date {} // span containing the date, if $showdate enabled.
*	.atd-entry-excerpt {} // span containing the excerpt, if $showexcerpt enabled.

= What means parameter X =

== Configuration parameters ==

The plugin makes use of the following variables

*	$before = Code will show before links. Defaults to 'This week last year…: '
*	$after = Code will show after links. Defaults to ''
*	$daysbefore = Days' posts that will show before one year ago. By default '3' (3 days before)
*	$daysafter = Days' posts that will show after one year ago. By default '3' (3 days after)
*	$yearsago = It shows “X” years ago posts. By default '1' (1 year). ONLY IN WIDGET "X YEARS AGO".
*	$lastxyears = It shows posts for the last "X" years. By default '1' (1 year). ONLY IN WIDGET "LAST X YEARS".
*	$sinceyear = It shows posts since the year "X". By default '2005' (since year 2005). ONLY IN WIDGET "SINCE YEAR X".
*	$limit = Number of posts to retrieve. By default '4'.
*	$none = Text shown when there are no posts. By default 'none'.
*	$showdate = Show dates next to the links. By default unchecked.
*	$dateformat = Format of the date displayed next to the links (if checked). See http://www.php.net/date
*	$showexcerpt = Show the excerpt next to the links. By default unchecked.

== Screenshots ==

1. Admin view of widget "X years ago".
2. Admin view of widget "last X years".
3. Admin view of widget "since year X".
4. Public view

== Changelog ==

= 1.0 =
* Complete code refactoring using using modern date querys and updated WordPress standard practices

= 0.9 =
* Code refactoring
* Fixed bug in dashboard widget

= 0.8 =
* Added a dashboard widget (WP 2.7+)

= 0.7.7 =
* Bugfixing release. Show excerpts when present, now for real :)
* Remove the [caption] tags if present on the excerpt
* Remove &quotes; in titles

= 0.7.6 = *XHTML validation

= 0.7.5 =
* $limit variable now works again
* Adapted the Database query to the new $wpdb->prepare structure

= 0.7.3 =
* Added atd-noentries class

= 0.7.2 =
* Bugfixing release. Changes contributed by Mike Koepke.
* Ordering in SQL statement wasn't specify which column to order on
* Added post_type qualifier to SQL statement as pages would be pulled as well
* Added new year subtitle display option to hide the year sublist text
* PostExcerpt and Date weren't working correctly
* Code cleanup.
* Cosmetic changes in output

= 0.7.1 =
* Bugfixing release. Changes contributed by Mike Koepke.
* New options weren't initialized correctly when upgrading.
* Control Screen cleaned up.

= v0.7 =
* All displayed in a single list with yearly sublists.
* NEW Feature: display date and/or excerpt.
* NEW Feature: added CSS markup to allow maximum flexibility on display.

= 0.6.3 =
* Fixed a bug when calling get_old_posts().

= 0.6.2 =
* Fixed a bug when having  &amp; in post's title. Isolated repetitive code in its own function. Changes contributed by Mike Koepke.

= 0.6.1 =
* Fixed a bug when having quotes in post's title. Thanks to Mike Koepke for bug reporting and helping with fixing.

= 0.6 =
* Added 2 new modes, last X years and since year X.
* Corrected bug in $start_ago and $end_ago.

= 0.5.2 =
* XHTML valid. Thanks to to Luis Pérez

= 0.5.1 =
* Added the $daysbefore and $daysafter parameters.

= 0.5.01 =
* Now the limit option works, for real ;)

= 0.5 =
* First release. I decided to start on version 0.5 because of preserving version relation with “One year ago” plugin.


== Credits and Acknowledgments ==

This plugin is based on:
	* One year ago plugin released by Borja Fernandez.  [  http://www.lamateporunyogur.net/wp-plugins/one-year-ago/  ]  [  http://www.lamateporunyogur.net  ]
	* Wayback plugin released by Chris Goringe.  [  http://code.goringe.net/WordPress/ ]  [  http://tis.goringe.net  ]
	* Wayback Widget released by Sven Weidauer. [ http://dergraf.net/computer/wordpress/wayback-widget/  ] [ http://dergraf.net/  ]
	* My plugin Around this date in the past. [ http://www.junyent.org/blog/arxius/2006/05/20/around-this-date-in-the-past-wordpress-plugin/  ]

Thanks to Borja Fernandez, Chris Goringe and Sven Weidauer for writing their plugins and to Luis Pérez and Mike Koepke for their contributions.

== License ==

	This plugin is free software; you can redistribute it and/or modify it under the terms of the GPL License (don't remove credits to author, please)
	See license.txt for details

== ToDo ==

Nothing else planed by now.
