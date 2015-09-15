<?php
/**
 * @file
 * Provide views data and handlers for Flexviews module.
 */

/**
 * Implements hook_views_plugins().
 */
function flexviews_views_plugins() {
  return array(
    'style' => array(
      'flexviews' => array(
        'title' => t('Flexviews'),
        'handler' => 'views_plugin_style_flexviews',
        'help' => t("Display content in a CSS3 Flexbox"),
        'theme' => 'views_view_flexviews',
        'type' => 'normal',
        'path' => backdrop_get_path('module', 'flexviews'),
        'theme path' => backdrop_get_path('module', 'flexviews'),
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses grouping' => FALSE,
        'uses options' => TRUE,
      ),
    ),
  );
}

