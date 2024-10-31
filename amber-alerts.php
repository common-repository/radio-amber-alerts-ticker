<?php /*
Plugin Name: Amber Alerts Ticker
Plugin URI: http://radioamber.net/
Description: Amber Alerts Plugin
Author: Paul Philbeck
Version: 1.0
Author URI: http://radioamber.net/
-----------------------------------------------------
Copyright 2010  Paul Philbeck  (email : admin@radioamber.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/
function amberalerts()
{
  echo require("ts.php");
}
 
function widget_amberalerts($args) {
  extract($args);
  echo $before_widget;
  echo $before_title;?>Amber Alerts<?php echo $after_title;
  amberalerts();
  echo $after_widget;
}
 
function amberalerts_init()
{
  register_sidebar_widget(__('Amber Alerts Ticker'), 'widget_amberalerts');
}
add_action("plugins_loaded", "amberalerts_init");
 ?>
