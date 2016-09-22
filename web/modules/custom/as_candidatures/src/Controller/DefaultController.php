<?php

namespace Drupal\as_candidatures\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\as_candidatures\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Listing.
   *
   * @return string
   *   Return Hello string.
   */


  public function listing() {

      $query = \Drupal::entityQuery('node');
      $query ->condition('type','machiniste', '=');
      $query ->condition('status',1);
      $query ->range(0, 10);
      $query ->sort('created','DESC');
      $nids = $query->execute();

      $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);

      foreach ($nodes as $node) {
          $annonces[] = node_view($node,  'teaser');
      }
    //  Kint($annonces);
      return [
        '#theme' => 'annonces_list',
        'annonces' => $annonces,
      ];
    }
  }
