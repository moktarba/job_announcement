<?php

namespace Drupal\as_candidatures\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'AnnouncesBlock' block.
 *
 * @Block(
 *  id = "announces_block",
 *  admin_label = @Translation("candidater à ce poste"),
 * )
 */
class AnnouncesBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
/*
    $form = \Drupal::formBuilder()
    ->getForm('Drupal\as_candidatures\Form\AnnouncesForm'); //kint($form); die();
     $form['form_id']['#value'] = '';
     */
    $form = \Drupal::formBuilder()->getForm('Drupal\as_candidatures\Form\PostulerForm'); //kint($form); die();
     $form['form_id']['#value'] = '';

    $build = [];
    $build['announces_block'] = $form;

    return $build;
  }



}
