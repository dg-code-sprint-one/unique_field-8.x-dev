<?php
// Note: file is saved in location: modules/contrib/unique_field/src/Plugin/Validation/Constraint/EvenNumberConstraintValidator.php
/**
 * @file
 * Contains \Drupal\unique_field\Plugin\Validation\Constraint\samefieldValidator.
 */
namespace Drupal\unique_field\Plugin\Validation\Constraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
/**
 * Validates the samefield constraint.
 */
class samefieldConstraintValidator extends ConstraintValidator {
  /**
   * {@inheritdoc}
   */
  public function validate($field, Constraint $constraint) {
    $value = $field->getValue()[0]['value'];
    //print_r($field->getValue()[0]['value']);
    kint($field);
    die;
    /*if (!isset($value)) {
      return NULL;
    }*/

 
      /*foreach ($field as $key => $item) {
        kint($);
        $violation = $this->validateString($item->value, $constraint);
        if ($violation instanceof ConstraintViolationBuilderInterface) {
          $violation->atPath('title')->addViolation();
        }
      }*/
     
    

    // Verify that given value is even.
    
  }


}