<?php

namespace Drupal\as_candidatures\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AnnouncesForm.
 *
 * @package Drupal\as_candidatures\Form
 */
class AnnouncesForm extends FormBase {


  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'announces_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['postuler'] = [
      '#type' => 'submit',
      '#title' => $this->t('postuler'),
      '#value' => $this->t('postuler'),
      '#description' => $this->t("Cliquer pour postuler à l'annonce"),
    ];
    $form['hidden'] = [
      '#type' => 'hidden',
      '#title' => $this->t('hidden'),
      '#description' => $this->t('Id annonce'),
    ];

    return $form;
  }

  /**
    * {@inheritdoc}
    */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
    die();
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

die();
    // Display result.
    foreach ($form_state->getValues() as $key => $value) {
        drupal_set_message($key . ': ' . $value);
    }

  }

}
