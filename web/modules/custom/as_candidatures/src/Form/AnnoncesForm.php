<?php

namespace Drupal\as_candidatures\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AnnoncesForm.
 *
 * @package Drupal\as_candidatures\Form
 */
class AnnoncesForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'as_candidatures.Annonces',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'annonces_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('as_candidatures.Annonces');
    return parent::buildForm($form, $form_state);
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
    parent::submitForm($form, $form_state);

    $this->config('as_candidatures.Annonces')
      ->save();
  }

}
