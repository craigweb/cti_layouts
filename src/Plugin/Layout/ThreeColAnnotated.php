<?php

/**
 * @file
 * Contains \Drupal\cti_layouts\Plugin\Layout\ThreeColAnnotated
 */

namespace Drupal\cti_layouts\Plugin\Layout;

use Drupal\layout_plugin\Plugin\Layout\LayoutBase;

/**
 * Example of using annotations to define a layout.
 *
 * @Layout(
 *   id = "cti_three_col_annotated",
 *   label = @Translation("Three column (annotated)"),
 *   category = @Translation("CTI Layouts"),
 *   template = "templates/three-column-annotated",
 *   regions = {
 *     "main" = {
 *       "label" = @Translation("Main content"),
 *     },
 *     "sidebar_first" = {
 *       "label" = @Translation("Sidebar first"),
 *     },
 *     "sidebar_second" = {
 *       "label" = @Translation("Sidebar second"),
 *     }
 *   }
 * )
 */
class ThreeColAnnotated extends LayoutBase {
  // Class overrides...
}
