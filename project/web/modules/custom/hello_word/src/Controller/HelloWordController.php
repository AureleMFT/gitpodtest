<?php

namespace Drupal\hello_word\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Hello word routes.
 */
class HelloWordController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build($name = Null) {
    $out = 'It works '.($name?$name:'').' !';

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t($out),
    ];

    return $build;
  }

}
