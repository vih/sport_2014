<?php
/**
 * @file
 * Theme functions
 */

require_once dirname(__FILE__) . '/includes/structure.inc';
require_once dirname(__FILE__) . '/includes/comment.inc';
require_once dirname(__FILE__) . '/includes/form.inc';
require_once dirname(__FILE__) . '/includes/menu.inc';
require_once dirname(__FILE__) . '/includes/node.inc';
require_once dirname(__FILE__) . '/includes/panel.inc';
require_once dirname(__FILE__) . '/includes/user.inc';
require_once dirname(__FILE__) . '/includes/view.inc';

/**
 * Implements hook_css_alter().
 */
function sport_2014_css_alter(&$css) {
  $radix_path = drupal_get_path('theme', 'radix');

  // Radix now includes compiled stylesheets for demo purposes.
  // We remove these from our subtheme since they are already included 
  // in compass_radix.
  unset($css[$radix_path . '/assets/stylesheets/radix-style.css']);
  unset($css[$radix_path . '/assets/stylesheets/radix-print.css']);
}

/**
 * Replace Panopoly Layouts with the Radix pendants.
 *
 * Implements hook_ctools_plugin_post_alter().
 */
function sport_2014_ctools_plugin_post_alter(&$plugin, &$info) {
  if (($info['type'] == 'layouts') && ($plugin['module'] == 'panopoly_theme')) {
    if (strpos($plugin['theme'], 'radix_') === FALSE) {
      $plugin['theme'] = 'radix_' . $plugin['theme'];
      unset($plugin['css']);
    }
  }
}
