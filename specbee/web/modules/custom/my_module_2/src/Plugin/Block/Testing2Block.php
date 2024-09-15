<?php

declare(strict_types=1);

namespace Drupal\my_module_2\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a testing 2 block.
 */
#[Block(
  id: 'my_module_2_testing_2',
  admin_label: new TranslatableMarkup('testing 2'),
  category: new TranslatableMarkup('Custom'),
)]
final class Testing2Block extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
