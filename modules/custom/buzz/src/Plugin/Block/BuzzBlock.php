<?php

/**
 * @file
 * Contains \Drupal\article\Plugin\Block\XaiBlock.
 */

namespace Drupal\buzz\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Core\Form\FormStateInterface;


/**
 * Provides a 'article' block.
 *
 * @Block(
 *   id = "buzz_block",
 *   admin_label = @Translation("Buzz block"),
 *   category = @Translation("Custom buzz block example")
 * )
 */
class BuzzBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    /* return array(
      '#type' => 'markup',
      '#markup' => 'This block list the article.',
      );
     */

   $form = \Drupal::formBuilder()->getForm('Drupal\buzz\Form\workForm');
   return $form;
  }

}
