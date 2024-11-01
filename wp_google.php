<?php
/*
Plugin Name: Wordpress Google Search
Plugin URI: http://myfreeweb.ru
Description: Виджет Google поиска в этом блоге.
Version: 1.0
Author: lol2Fast4U
Author URI: http://myfreeweb.ru
*/

/*
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
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
function wp_google_widget() {
?>
<h2 class="widgettitle">Поиск Google по этому блогу</h2>
<input type="text" id="q" size="10"/>
<button onclick="javascript: self.parent.location = 'http://google.ru/search?q=site:myfreeweb.ru ' + document.getElementById('q').value;">Google it!</button>
<?php
}
function wp_google_init()
{
register_sidebar_widget(__('Google по этому блогу!'), 'wp_google_widget');
}
add_action("plugins_loaded", "wp_google_init");
?>