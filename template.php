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

  // Unsetting system styles as they mess up the table styles.
  unset($css[drupal_get_path('module','system').'/system.theme.css']);
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

/**
 * Adds theme hook suggestions.
 *
 * Implements hook_preprocess_node().
 */
function sport_2014_preprocess_node(&$vars) {
  if ($vars['view_mode'] == 'teaser') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['node']->type . '__teaser';
  }

  if (strstr($vars['node']->type, 'short_course')) {
    $vars['theme_hook_suggestions'][] = 'node__short_course__teaser';
  }
}

/**
 * Theme function to render the confirmation message.
 */
function sport_2014_commerce_add_to_cart_confirmation_message($variables) {
  $message = '<p>' . t('Successfully added person to registration') . '</p>';
  $message .= '<div class="btn">' . l(t('Go to checkout'), 'checkout', array('attributes' => array('class' => 'btn btn-success btn-lg pull-left', 'role' => 'button')));
  $message .= ' ' . l(t('Register more'), '', array('attributes' => array('class' => 'btn btn-default btn-lg pull-right', 'role' => 'button'), 'fragment' => 'edit-line-item-fields', 'external' => TRUE)) . '</div>';
  return '<div class="well well-lg">' . $message . '</div>';
}
