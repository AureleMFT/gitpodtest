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
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works '.($name ?$name :'').' !'),
    ];

    return $build;
  }

}
