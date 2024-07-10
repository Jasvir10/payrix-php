<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class plans extends BaseResource {
  protected $resourceName = "plans";
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
   * The identifier of the Merchant associated with this Plan.
   */
  public $merchant;

  /**
   * @string
   * The name of this Plan. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Plan. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The schedule that determines when the subscription related to this Plan is triggered.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied. 
   */
  public $scheduleFactor;

  /**
   * @integer
   * The amount to charge with each payment under this Plan. 
   * This field is specified as an integer in cents.
   */
  public $amount;

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
   * @integer
   */
  public $maxFailures;

  /**
   * @string
   * The type of plan.
   */
  public $type;

  /**
   * @string
   * The description of the Txn that will be created through this Plan.
   */
  public $txnDescription;

  /**
   * @string
   * The order of the Txn that will be created through this Plan.
   */
  public $order;

  /**
   * @string
   */
  public $billing;

  /**
   * @string
   */
  public $um;


}

