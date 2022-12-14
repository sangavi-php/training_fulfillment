<?php

namespace Drupal\tfm_assessment\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Assessment edit forms.
 *
 * @ingroup tfm_assessment
 */
class AssessmentForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\tfm_assessment\Entity\Assessment */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = &$this->entity;
    $status = parent::save($form, $form_state);    
    
    switch ($status) {
      case SAVED_NEW:
        /*drupal_set_message($this->t('Created the %label Assessment.', [
          '%label' => $entity->label(),
        ]));*/
        \Drupal::messenger()->addMessage($this->t('Created the %label Assessment.', [
          '%label' => $entity->label()]));        
        break;

      default:
        /*drupal_set_message($this->t('Saved the %label Assessment.', [
          '%label' => $entity->label(),
        ]));*/
        \Drupal::messenger()->addMessage($this->t('Saved the %label Assessment.', [
          '%label' => $entity->label()]));         
    }
    $form_state->setRedirect('entity.assessment.canonical', ['assessment' => $entity->id()]);
  }

}
