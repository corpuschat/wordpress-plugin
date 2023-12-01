<?php
/*
Plugin Name: Corpus Chatbot Widget
Plugin URI: https://wordpress.org/plugins/corpus-chatbot-widget/
Description: Corpus is a cutting-edge, ChatGPT-powered chatbot, that's engineered to revolutionize your customer service operations, offering instant resolutions to over half of all customer inquiries, 24/7.
Version: 1.0
Author: Corpus.Chat
Author URI: https://corpus.chat/?utm_source=wp-plugin&utm_medium=link&utm_campaign=wp-plugin
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!defined('CORPUS_SLUG')) define('CORPUS_SLUG', basename(dirname(__FILE__)));
if (!defined('CORPUS_VERSION')) define('CORPUS_VERSION', '1.0');

// Plugin code goes here
function corpus_add_admin_menu()
{
    add_menu_page(
        'Corpus Chat',
        'Corpus Chat',
        'manage_options',
        CORPUS_SLUG,
        'corpus_admin_page',
        plugins_url('corpus-icon.svg', __FILE__) // Replace with the path to your icon
    );
}
add_action('admin_menu', 'corpus_add_admin_menu');

function corpus_admin_menu_styles()
{
    echo '<style>
    .wp-menu-image.svg, .wp-menu-image.dashicons-before > img {
          margin-top: -1px;
          width: 18px;
          height: 18px;
      }
  </style>';
}
add_action('admin_head', 'corpus_admin_menu_styles');

function corpus_add_action_links($links)
{
    $mylinks = array(
        '<a href="https://app.corpus.chat/auth/signup?plan=free" target="_blank" style="font-weight:bold;white-space: nowrap;">Your Account</a>',
        '<a href="./admin.php?page='.CORPUS_SLUG.'">Settings</a>'
    );
    return array_merge($mylinks, $links);
}
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'corpus_add_action_links');

function corpus_plugin_links($links, $file)
{
    if ($file === plugin_basename(__FILE__)) {
        // $links[] = '<a href="https://app.corpus.chat/auth/signup?plan=free" target="_blank" style="font-weight:bold;white-space: nowrap;">Your Account</a>';
        $links[] = '<a target="_blank" href="https://corpus.chat/docs/widget/install/wordpress" title="Click here to lean how to use this plugin on our knowledge base">Documentation</a>';
        $links[] = '<a style="white-space: nowrap;" target="_blank" href="https://wordpress.org/support/plugin/' . CORPUS_SLUG . '/reviews/?rate=5#new-post" title="Click here to rate and review this plugin on WordPress.org">Rate this plugin &raquo;</a>';
    }

    return $links;
}
add_filter('plugin_row_meta', 'corpus_plugin_links', 10, 2);

function corpus_admin_page()
{
    require_once plugin_dir_path(__FILE__) .'settings.php';
    return;
    ?>
  <div class="wrap">
      <h1>Corpus Chatbot Widget</h1>
      <a href="https://app.corpus.chat/auth/signup?plan=free" target="_blank" style="font-weight:bold;white-space: nowrap;">Your Account</a>
      <p>Welcome to the Custom JS Injector! Enhance your website with dynamic JavaScript functionalities.</p>
      <p>If you don't already have a parameter from Corpus Chat, you can easily obtain one by signing up. This parameter will allow you to integrate specialized JavaScript files into your site, offering a range of additional features.</p>
      <a href="https://corpus.chat" target="_blank" class="button button-primary">Get Your Parameter from Corpus Chat</a>
      <hr>
      <form method="post" action="options.php" onsubmit="alert(123)">
    <?php
    settings_fields('corpus_chatbot_id');
    do_settings_sections('corpus_chatbot_id');
    submit_button('Save Parameter');
    ?>
      </form>
  </div>
  <?php
}

function corpus_register_settings()
{
    register_setting('corpus_chatbot_id', 'corpus_chatbot_id');
    add_settings_section('corpus_plugin_main', null, null, 'corpus_chatbot_id');
    add_settings_field('corpus_chatbot_id', 'Corpus Chatbot ID', 'corpus_chatbot_id_callback', 'corpus_chatbot_id', 'corpus_plugin_main');
}
add_action('admin_init', 'corpus_register_settings');

function corpus_chatbot_id_callback()
{
    $value = get_option('corpus_chatbot_id');
    echo '<input type="text" name="corpus_chatbot_id" value="' . esc_attr($value) . '"/>';
}

function corpus_add_script_to_page()
{
    $parameter = get_option('corpus_chatbot_id');
    if (!empty($parameter)) {
        echo '<!-- Start Corpus Widget (corpus.chat) -->';
        echo '<script> !function(n,c){var t=n.Corpus||function(){var n=arguments;try{t[n[0]](n)}catch(n){}};t.i=!1,t.js=function(n,t){var o=c.createElement("script"),n=(o.type="text/javascript",o.async=!0,o.src=n,c.getElementsByTagName("script")[0]);n.parentNode.insertBefore(o,n),o.onload=t||function(){}},t.load=function(n){t.id=n[1],t.i||t.js("https://corpus.gocdn.io/launcher.js?id="+n[1],function(){t.i=!0})},window.Corpus=t}(window,document); </script>';
        echo '<script> Corpus("load", "' . esc_js($parameter) . '"); </script>';
        echo '<!-- End Corpus Widget (corpus.chat) -->';
    }
}
// add_action('wp_head', 'corpus_add_script_to_page');
add_action('wp_footer', 'corpus_add_script_to_page');
