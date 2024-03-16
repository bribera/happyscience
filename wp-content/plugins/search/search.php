<?php

/**
 * @package Search
 * @version 1.0.0
 */
/*
Plugin Name: Search
Plugin URI: https://www.google.com
Description: Search for Word is using for do a personalize search
Author: Jordana ACCROMBESSY
Author URI: https://www.google.com

Version: 1.0.0
Text Domain: search
*/

// Include mfp-functions.php, use require_once to stop the script if po-functions.php is not found
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';

global $variables;
global $wpdb;


$variables['word_table']                              = $wpdb->prefix . 'word';
$variables['stopword_table']                        = $wpdb->prefix . 'word_stopwords';
$variables['log_table']                             = $wpdb->prefix . 'word_log';
$variables['content_boost_default']                 = 1;
$variables['title_boost_default']                   = 5;
$variables['comment_boost_default']                 = 1;
$variables['post_type_weight_defaults']['post_tag'] = 1;
$variables['post_type_weight_defaults']['category'] = 1;
$variables['post_type_index_defaults']              = array( 'post', 'page' );
// $variables['database_version']                      = 6;
$variables['file']                                  = __FILE__;
$variables['plugin_dir']                            = plugin_dir_path( __FILE__ );
$variables['plugin_basename']                       = plugin_basename( __FILE__ );
$variables['plugin_version']                        = '1.0.0';

?>