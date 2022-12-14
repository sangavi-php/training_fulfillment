<?php

/**
 * @file
 * Contains feedback.page.inc.
 *
 * Page callback for feedback entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for feedback templates.
 *
 * Default template: feedback.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_feedback(array &$variables) {
  // Fetch feedback Entity Object.
  $feedback = $variables['elements']['#feedback'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
