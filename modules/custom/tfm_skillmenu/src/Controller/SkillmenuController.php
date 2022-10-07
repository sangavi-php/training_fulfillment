<?php

namespace Drupal\tfm_skillmenu\Controller;

use Drupal\Core\Controller\ControllerBase; 

class SkillmenuController extends ControllerBase {

 /**
   * Display.
   *
   * @return string
   *   Return   string.
   */
  public function index() {
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Im Default function in Skillmenu Controller Im done my job.')
    ];
     
  } 
   
}
 