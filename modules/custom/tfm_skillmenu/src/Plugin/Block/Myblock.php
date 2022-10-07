<?php

namespace Drupal\tfm_skillmenu\Plugin\Block;

use Drupal\Core\Block\BlockBase; 
use Drupal\taxonomy\Entity\Term;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "my_block_example",
 *   admin_label = @Translation("Myblock"),
 *   category = @Translation("Myblock"),
 * )
 */
class MyBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {  
    $build = []; 
    $data= "";
    $vid = 'primary_skill';
    $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);  
     
       foreach ($terms as $term) {   
        $data .= '<a href="/training_fulfillment9314/adobe/'.$term->tid.'">'.$term->name.'</a>'.'<br>';    
      }
    
    $build =[
      '#markup' => $data,
    ];          
    return $build;     
  }     
 
}