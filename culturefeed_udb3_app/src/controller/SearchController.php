<?php
/**
 * @file
 * Contains Drupal\culturefeed_udb3_app\Controller\SearchController.
 */

namespace Drupal\culturefeed_udb3_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;

class SearchController extends ControllerBase implements ContainerInjectionInterface {

  public function search() {

    $baseTag = [
      '#type' => 'html_tag',
      '#tag' => 'base',
      '#attributes' => ['href' => '/']
    ];

    $renderArray = [
      '#theme' => 'udb3_search',
      '#content' => Array('Hello', 'world'),
      '#attached' => [
        'library' => [
          'culturefeed_udb3_app/udb3-angular'
        ]
      ]
    ];
    
    return $renderArray;

  }

}