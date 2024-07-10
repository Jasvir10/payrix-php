<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class feeRules extends BaseResource {
  protected $resourceName = "feeRules";
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
   * The identifier of the Fee that this Fee Rule applies.
   */
  public $fee;

  /**
   * @string
   * The name of this Fee Rule. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * The description of this Fee Rule.
   */
  public $description;

  /**
   * @string
   * The type of logic to apply with this Fee Rule.
   */
  public $type;

  /**
   * @string
   * Where the feeRule should apply.
   */
  public $application;

  /**
   * @string
   * The value to compare against when evaluating this Fee Rule.
   */
  public $value;

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
   * A name for a group of rules to be applied in conjunction when evaluating this Fee Rule. 
   * When grouping is used the Fee will be allowed to be processed if at least one of the rules are matched.
   */
  public $grouping;


}

