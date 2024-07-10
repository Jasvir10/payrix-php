<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class decisions extends BaseResource {
  protected $resourceName = "decisions";
  /**
   * @string
   * The ID of this resource.
   */
  public $id;

  /**
   * @string
   * The date and time at which this resource was created.
   */
  public $created;

  /**
   * @string
   * The date and time at which this resource was modified.
   */
  public $modified;

  /**
   * @string
   * The identifier of the Login that created this resource.
   */
  public $creator;

  /**
   * @string
   * The identifier of the Login that last modified this resource.
   */
  public $modifier;

  /**
   * @string
   * The identifier of the Login that owns this decisions resource.
   */
  public $login;

  /**
   * @string
   * If this decision resource relates to an Org, then this field stores the identifier of the Org.
   */
  public $org;

  /**
   * @string
   * If this decision resource relates to an Entity, then this field stores the identifier of the Entity.
   */
  public $entity;

  /**
   * @string
   * The identifier of a linked decision resource that acts in coordination with this decision. When you define a decision attribute here, the referenced decision becomes the 'parent' resource. The action field set on the 'parent' resource determines the action that occurs if all of the linked decisions fail.
   */
  public $decision;

  /**
   * @string
   * The type of check to perform.
   */
  public $type;

  /**
   * @string
   * The target that this decision should apply at.
   */
  public $target;

  /**
   * @integer
   * The action to take when this check fails.
   */
  public $action;

  /**
   * @integer
   * A sequence number to use when applying multiple linked decisions. 
   * When two or more decisions are linked using their 'decision' fields, the checks with lower 'sequence' numbers are applied first. 
   * This field is specified as an integer.
   */
  public $sequence;

  /**
   * @integer
   * The minimum value that the Transaction must be to target this decision. 
   * The unit of measure is determined by the type of check.
   */
  public $amount;

  /**
   * @string
   * The amount that the associated Transaction should be compared against. The units for this field depend on the type of check. 
   * For checks that are based on a ratio, specify the amount as a percentage in basis points. 
   * For checks that are based on a dollar amount, specify the amount in cents. 
   * For checks that are based on a count, specify the exact value as an integer.
   */
  public $value;

  /**
   * @string
   * A date indicator that determines how far back in time time-based checks should be checked. This field works in conjunction with the 'periodFactor' field, which multiplies this basic period.
   */
  public $period;

  /**
   * @integer
   * A multiplier that you can use to adjust the basic date range set in the 'period' field, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied.
   */
  public $periodFactor;

  /**
   * @integer
   * A lower cut-off value for the score in this decision. 
   * The check fails if the score is equal to or below this value.
   */
  public $low;

  /**
   * @integer
   * An upper cut-off value for the score in this decision. 
   * The check fails if the score is equal to or above this value.
   */
  public $high;

  /**
   * @integer
   * Whether this resource is marked as inactive.
   */
  public $inactive;

  /**
   * @integer
   * Whether this resource is marked as frozen.
   */
  public $frozen;

  /**
   * @string
   */
  public $division;

  /**
   * @string
   * Where the action defined by this DecisionAction should apply
   */
  public $application;

  /**
   * @integer
   * The options for the Verification. 
   * This field is specified as a sum of the desired options.
   */
  public $options;

  /**
   * @string
   * The error message for the decision. 
   * If the field is null the error message will be a generic failure message, if the field is empty the error message will be a specific error message, if the field is set to a string the error message will be that string.
   */
  public $errorMessage;

  /**
   * @string
   * The reason for the decision. 
   * If the field is null the error message will be a generic message, 
   * if the field is set to a string the reason message will be that string.
   */
  public $reason;

  /**
   * @integer
   * The additionalOptions for the Verification. 
   * This field is specified as a sum of the desired options.
   */
  public $additionalOptions;

  /**
   * @string
   */
  public $level;

  /**
   * @string
   * The schedule that determines when this Decision is triggered to check entities.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, if it is set to a duration-based trigger, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied.
   */
  public $scheduleFactor;

  /**
   * @integer
   * The date on which checking of the Decision should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future, or the present date.
   */
  public $start;

  /**
   * @integer
   * The date on which checking of the Decision should end. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future.
   */
  public $finish;

  /**
   * @integer
   * Whether to check for and use existing Verifications and Verification Results for this decision
   */
  public $useCache;

  /**
   * @integer
   * The time caching limit to check for existing verification
   */
  public $cacheTime;


}

