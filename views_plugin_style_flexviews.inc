<?php

/**
 * @file
 * Contains the Flexviews style plugin.
 */

class views_plugin_style_flexviews extends views_plugin_style {

  /**
   * Set default options
   */
  // function options(&$options) {
    // parent::options($options);


function option_definition() {
    $options = parent::option_definition();

    $options['childwidth'] = array('default' => '32');
    $options['flexdirection'] = array('default' => 'row');
    $options['flexwrap'] = array('default' => 'nowrap');
    $options['justifycontent'] = array('default' => 'flex-start');
    $options['alignitems'] = array('default' => 'stretch');
    $options['aligncontent'] = array('default' => 'stretch');

    return $options;
  }

  /**
   * Render the given style.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);

    $form['childwidth'] = array(
      '#type' => 'number',
      '#title' => t('Width percentage of child rows'),
      '#default_value' => $this->options['childwidth'],
      '#required' => TRUE,
      '#min' => 1,
      '#step' => 1,
    );

    $form['flexdirection'] = array(
      '#type' => 'radios',
      '#title' => t('Flex Direction'),
      '#options' => array('row' => t('row'), 'row-reverse' => t('row-reverse'), 'column' => t('column'), 'column-reverse' => t('column-reverse')),
      '#default_value' => $this->options['flexdirection'],
      '#description' => t('Flex Direction'),
    );

    $form['flexwrap'] = array(
      '#type' => 'radios',
      '#title' => t('Flex Wrap'),
      '#options' => array('nowrap' => t('nowrap'), 'wrap' => t('wrap'), 'wrap-reverse' => t('wrap-reverse')),
      '#default_value' => $this->options['flexwrap'],
      '#description' => t('Flex Wrap'),
    );

    $form['justifycontent'] = array(
      '#type' => 'radios',
      '#title' => t('Justify Content'),
      '#options' => array('flex-start' => t('flex-start'), 'flex-end' => t('flex-end'), 'center' => t('center'), 'space-between' => t('space-between'), 'space-around' => t('space-around')),
      '#default_value' => $this->options['justifycontent'],
      '#description' => t('Flex Direction'),
    );

    $form['alignitems'] = array(
      '#type' => 'radios',
      '#title' => t('Align Items'),
      '#options' => array('stretch' => t('stretch'), 'flex-start' => t('flex-start'), 'flex-end' => t('flex-end'), 'center' => t('center'), 'baseline' => t('baseline')),
      '#default_value' => $this->options['alignitems'],
      '#description' => t('Align Items'),
    );

    $form['aligncontent'] = array(
      '#type' => 'radios',
      '#title' => t('Align Content'),
      '#options' => array('stretch' => t('stretch'), 'flex-start' => t('flex-start'), 'flex-end' => t('flex-end'), 'center' => t('center'), 'space-between' => t('space-between'), 'space-around' => t('space-around')),
      '#default_value' => $this->options['aligncontent'],
      '#description' => t('Align Content'),
    );
  }



}
