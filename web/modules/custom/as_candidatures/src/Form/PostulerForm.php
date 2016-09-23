<?php

namespace Drupal\as_candidatures\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class PostulerForm.
 *
 * @package Drupal\as_candidatures\Form
 */
class PostulerForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'postuler_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['submit'] = [
        '#type' => 'submit',
        '#value' => t('candidater'),
    ];

  
    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
