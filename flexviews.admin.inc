<?php

/**
 * @file
 * Provide administration of Flexviews module.
 */

function flexviews_settings_form() {
  $config = config('flexviews.settings');

  $form = array();

  return $form;
}

/**
 * Submit handler for flexviews_settings_form().
 */
function flexviews_settings_form_submit($form, &$form_state) {
  $config = config('flexviews.settings');
  // $config->save();
  backdrop_set_message(t('Flexviews configuration has been saved.'));
}
