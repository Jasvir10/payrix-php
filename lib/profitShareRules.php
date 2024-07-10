<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class profitShareRules extends BaseResource {
  protected $resourceName = "profitShareRules";
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
   * The identifier of the ProfitShare that this ProfitShare Rule applies to.
   */
  public $profitShare;

  /**
   * @string
   * The name of this ProfitShare Rule. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   */
  public $description;

  /**
   * @string
   * The type of logic to apply with this ProfitShare Rule.
   */
  public $type;

  /**
   * @string
   * The value to compare against when evaluating this ProfitShare Rule.
   */
  public $value;

  /**
   * @string
   * A name for a group of rules to be applied in conjunction when evaluating this ProfitShare Rule. 
   * When grouping is used the ProfitShare will be allowed to be processed if at least one of the rules are matched.
   */
  public $grouping;

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


}

