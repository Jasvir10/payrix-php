<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class fees extends BaseResource {
  protected $resourceName = "fees";
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
   * The identifier of the Entity that will charge this Fee.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this Fee applies for.
   */
  public $forentity;

  /**
   * @string
   * The identifier of the Org who should pay this Fee on behalf of the Entity identified in the value of the 'forentity' field. 
   * This field is optional. If it is set, then the Fee is charged to this Org instead.
   */
  public $org;

  /**
   * @integer
   * The type of the fee.
   */
  public $type;

  /**
   * @string
   * The name of this Fee. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Fee. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The schedule that determines when this Fee is triggered to be charged.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, if it is set to a duration-based trigger, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied..
   */
  public $scheduleFactor;

  /**
   * @integer
   * The date on which charging of the Fee should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future, or the present date.
   */
  public $start;

  /**
   * @integer
   * The date on which charging of the Fee should end. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future.
   */
  public $finish;

  /**
   * @integer
   * Applies the fee based on the volume of a resource.
   */
  public $collection;

  /**
   * @integer
   * A multiplier that you can use to adjust the set of data to be used in the collection calculation. 
   * This field is specified as an integer and its value determines the period of time to be used.
   */
  public $collectionFactor;

  /**
   * @integer
   * The number of days, weeks, months or years to go back when selecting data for collection calculation.
   */
  public $collectionOffset;

  /**
   * @integer
   * The unit of measure for this Fee
   */
  public $um;

  /**
   * @string
   * The total amount of this Fee. 
   * The units used in this field are determined by the value of the 'um' field on the Fee. If the 'um' field is set to 'percentage', then this field specifies the Fee percentage to levy in basis points. If the 'um' field is set to 'amount', then this field specifies the Fee in cents.
   */
  public $amount;

  /**
   * @string
   * The currency of the amount. 
   * This field is only required when Um is set to 'ACTUAL'.
   */
  public $currency;

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
   * Indicator to extract fee from txn supplied fee. When set, amount will correspond to the fee amount in the txn and only that amount will be extractable, anything over that amount will not be extracted.
   */
  public $txnFee;

  /**
   * @integer
   * Whether to include the current period for the colleciton calculation.
   */
  public $collectionIncludeCurrent;

  /**
   * @string
   * The maximum amount to charge for this fee when setting a percent-based fee
   */
  public $maximum;


}

