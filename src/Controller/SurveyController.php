<?php
/**
 * @file
 * HellaSimple Survey controller.
 */
namespace Drupal\hellasimple_survey\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
 * Returns responses for HellaSimple Survey routes.
 */
class SurveyController extends ControllerBase {
  /**
   * Returns the settings page.
   *
   * @return array
   *   Renderable array.
   *
   * @todo Implement settings form.
   */
  public function settingsForm() {
    $element = [
      '#markup' => 'The HellaSimple Survey settings form is not implemented yet.',
    ];
    return $element;
  }
}
