<?php
// Note: file is saved in location: modules/custom/entity_validation/src/Plugin/Validation/Constraint/EvenNumberConstraint.php
/**
 * @file
 * Contains \Drupal\entity_validation\Plugin\Validation\Constraint\EvenNumberConstraint.
 */
namespace Drupal\unique_field\Plugin\Validation\Constraint;
use Symfony\Component\Validator\Constraint;
/**
 * Checks that a given number is even.
 *
 * @Constraint(
 *   id = "samefield",
 *   label = @Translation("same field", context = "Validation"),
 * )
 */
class samefieldConstraint extends Constraint {

  public $UniqueErrorMessage = 'Fields are unique.';
}