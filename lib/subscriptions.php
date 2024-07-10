<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class subscriptions extends BaseResource {
  protected $resourceName = "subscriptions";
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
   * The identifier of the Plan that this Subscription is associated with. 
   * The Plan determines the frequency and amount of each payment.
   */
  public $plan;

  /**
   * @integer
   * The date on which the Subscription should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future.
   */
  public $start;

  /**
   * @integer
   * The date on which the Subscription should finish. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future.
   */
  public $finish;

  /**
   * @integer
   * The amount of the total sum of this Subscription that is made up of tax. 
   * This field is specified as an integer in cents.
   */
  public $tax;

  /**
   * @string
   * The descriptor used in this Subscription. 
   * This field is stored as a text string and must be between 1 and 50 characters long. If a value is not set, an attempt is made to set a default value from the merchant information.
   */
  public $descriptor;

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
  public $failures;

  /**
   * @integer
   */
  public $maxFailures;

  /**
   * @integer
   * The origin of the Txn that will be created through this Subscription.
   */
  public $origin;

  /**
   * @string
   * The identification of the first transaction processed through this subscription. 
   * This is used internally to process subsequent transactions.
   */
  public $firstTxn;

  /**
   * @string
   * The description of the Txn that will be created through this Subscription.
   */
  public $txnDescription;

  /**
   * @string
   * The order of the Txn that will be created through this Subscription.
   */
  public $order;

  /**
   * @string
   */
  public $authentication;

  /**
   * @string
   */
  public $authenticationId;

  /**
   * @string
   */
  public $statementEntity;


}

