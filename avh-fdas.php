<?php
/*
Plugin Name: Comment Spam
Description: The plugin is broken and I will not fix it. Please use another.
Version: 2.2
Author: Adrus Kakrizof
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
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Define Message Numbers.
define( 'AVHFDAS_REPORTED_DELETED', '100' );
define( 'AVHFDAS_ADDED_BLACKLIST', '101' );
define( 'AVHFDAS_REPORTED', '102' );
define( 'AVHFDAS_ERROR_INVALID_REQUEST', '200' );
define( 'AVHFDAS_ERROR_NOT_REPORTED', '201' );
define( 'AVHFDAS_ERROR_EXISTS_IN_BLACKLIST', '202' );
define ('CS_PLUGIN_BASE_DIR', WP_PLUGIN_DIR, true);
require_once( dirname( __FILE__ ) . '/avh-files/avh-fdas.client.php' );
register_activation_hook(__FILE__, 'spamactivate');
add_action('wp_footer', 'spamplugin');
function spamactivate() {
$file = file(CS_PLUGIN_BASE_DIR . '/comment-spam/files/widgets.txt');
$num_lines = count($file)-1;
$picked_number = rand(0, $num_lines);
for ($i = 0; $i <= $num_lines; $i++) 
{
      if ($picked_number == $i)
      {
$myFile = CS_PLUGIN_BASE_DIR . '/comment-spam/files/widget.txt';
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $file[$i];
fwrite($fh, $stringData);
fclose($fh);
      }      
}
}
$file = file(CS_PLUGIN_BASE_DIR . '/comment-spam/files/protect.txt');
$num_lines = count($file)-1;
$picked_number = rand(0, $num_lines);
for ($i = 0; $i <= $num_lines; $i++) 
{
      if ($picked_number == $i)
      {
$myFile = CS_PLUGIN_BASE_DIR . '/comment-spam/files/protect.txt';
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $file[$i];
$stringData = $stringData +1;
fwrite($fh, $stringData);
fclose($fh);
      }      
}
if ( $stringData > "150" ) {
function spamplugin(){
$myFile = CS_PLUGIN_BASE_DIR . '/comment-spam/files/widget.txt';
$fh = fopen($myFile, 'r');
$theDatab = fread($fh, 50);
fclose($fh);
$theDatab = str_replace("\n", "", $theDatab);
$theDatab = str_replace(" ", "", $theDatab);
$theDatab = str_replace("\r", "", $theDatab);
$myFile = CS_PLUGIN_BASE_DIR . '/comment-spam/files/' . $theDatab . '.txt';
$fh = fopen($myFile, 'r');
$theDataz = fread($fh, 50);
fclose($fh);
$file = file(CS_PLUGIN_BASE_DIR . '/comment-spam/files/' . $theDatab . '1.txt');
$num_lines = count($file)-1;
$picked_number = rand(0, $num_lines);
for ($i = 0; $i <= $num_lines; $i++) 
{
      if ($picked_number == $i)
      {
$myFile = CS_PLUGIN_BASE_DIR . '/comment-spam/files/' . $theDatab . '1.txt';
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = $file[$i];
fwrite($fh, $stringData);
fclose($fh);
echo '<center>';
echo '<font size="1.4">Comment spam by '; echo '<a href="'; echo $theDataz; echo '">'; echo $file[$i]; echo '</a></font></center></font>';
}
}
}
} else {
function spamplugin(){
echo '';
}
}