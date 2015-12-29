<?php
/*
Plugin Name: Around this date in the past... - Widget Edition
Plugin URI: http://www.junyent.org/blog/2006/05/20/around-this-date-in-the-past-wordpress-widget/
Description: Widget that shows entries/posts around this date in the past (if they exist)
Version: 1.0
Author: Joan Junyent Tarrida
Author URI: http://projectes.junyent.org
Author Email: joan@junyent.org
Contributors: jjunyent, Mike Koepke, Cinefilo
Text Domain: around-this-date-widget-edition
Domain Path: /lang/
Network: false
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2007 (joan@junyent.org)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include( plugin_dir_path( __FILE__ ) . 'around-this-date-x-years-ago-widget.php' );
include( plugin_dir_path( __FILE__ ) . 'around-this-date-last-x-years-widget.php' );
include( plugin_dir_path( __FILE__ ) . 'around-this-date-since-year-x-widget.php' );
