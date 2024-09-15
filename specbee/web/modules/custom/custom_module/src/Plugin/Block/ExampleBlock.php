<?php

namespace Drupal\custom_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\views\Views;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "custom_module_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("custom module")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    
    $view = Views::getView('featured_conferences');
    $view->setDisplay('block_1');
    $view->preExecute();
    $view->execute();
    $block1 = $view->buildRenderable('block_1');

    $view = Views::getView('recommended_conferences');
    $view->setDisplay('block_1');
    $view->preExecute();
    $view->execute();
    $block2= $view->buildRenderable('block_1');

    $view = Views::getView('past_conferences');
    $view->setDisplay('block_1');
    $view->preExecute();
    $view->execute();
    $block3 = $view->buildRenderable('block_1');

    $build['#theme'] = 'example_block';
    $build['#data']['block1'] = $block1;
    $build['#data']['block2'] = $block2;
    $build['#data']['block3'] = $block3;
    return $build;
  }

}
