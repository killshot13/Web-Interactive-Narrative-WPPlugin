<?php
   /*
   * Plugin Name: Interactive Narrative Web Export Plugin For Wordpress
   * Plugin URI: https://github.com/MythicalC/Web-Interactive-Narrative-WPPlugin
   * description: A plugin created to allow you to upload any html based Interactive Narrative web exports into wordpress. This plugin does not embed the narrative but instead opens up a new window. This plugin works with Inkle's Ink and Twine, as long as your Story sits in its own folder and starts with an index.html See the README for more details.
   * Author: MythicalC (Anna Tito)
   * Author URI:https://www.annatito.com/
   * License: Expat License 
   * Licence URI: https://opensource.org/licenses/MIT
   */


add_action( 'init', 'web_narratives_init');

function web_narratives_init(){
  add_shortcode('list-web-narratives', 'get_web_narratives');
}

function get_web_narratives(){
  $path = plugin_dir_path( __FILE__ ) . "ExportedNarratives/";
  $filelist = scandir( $path);

  if(empty($filelist))
  {
    echo "Sorry there are no stories to load.";
  }

  $return_string = "<ul>";
  foreach ( $filelist as $file ) {
    if (strncmp($file, ".", 1) !== 0)
    {
      $trimmedPath = strstr($path, 'wp-content');
      $storyPath = $trimmedPath . $file;
      define($file, $storyPath);
      $return_string = $return_string . '<li><a href="/'. $storyPath .'/index.html" target="_blank">'. $file .'</a></li>';
    }
  }
  $return_string = $return_string ."</ul>";

  return $return_string;
}



