<?php

namespace Drupal\tfm_training_list_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "list_block",
 *   admin_label = @Translation("Training List Block"),
 *   category = @Translation("Training List Block"),
 * )
 */
class ListBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $data= " ";   
    $tid = 'Training Form';
    $aid = 'Assessment Form'; 
    $data .= '<a href="/training_fulfillment9314/training/add">'.$tid.'</a>'.'<br>';    
    $data .= '<a href="/training_fulfillment9314/assessment/add">'.$aid.'</a>'.'<br>';     
    $build = [
        '#markup' =>  $data,
    ];      
    return $build; 
    
  }
  
}