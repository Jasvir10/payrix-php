<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class payouts extends BaseResource {
  protected $resourceName = "payouts";
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
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   * The token of the Account that this Payout is associated with. 
   * This account will either receive the funds or be debited for the funds every time a Disbursement occurs, depending on the direction of the Disbursement.
   */
  public $account;

  /**
   * @string
   * The identifier of the Entity that this Payout is associated with.
   */
  public $entity;

  /**
   * @string
   * The identifier of the PayoutFlow associated with this Payout.
   */
  public $payoutFlow;

  /**
   * @string
   * The name of this Payout. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Payout. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The schedule that determines when this Payout is triggered to be paid.
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
   * The date on which payment of the Payout should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016. 
   * The value of this field must represent a date in the future, or the present date.
   */
  public $start;

  /**
   * @string
   * The currency of the amount in this Payout. 
   * This field is only required when Um is set to ACTUAL.
   * If this field is not set we will process disbursements for all currencies.
   */
  public $currency;

  /**
   * @integer
   * The unit of measure for this Payout. 
   * For example, if the Entity has a negative balance of $10 and the amount is set to 10000 (100%), then $10 will be drawn from their account to fully replenish the balance to $0.
   */
  public $um;

  /**
   * @integer
   * The total amount of this Payout. 
   * The units used in this field are determined by the value of the 'um' field on the Payout. If the 'um' field is set to '1' or '3', then this field specifies the Payout percentage to levy in basis points. If the 'um' field is set to '2', then this field specifies the Payout in cents.
   */
  public $amount;

  /**
   * @integer
   * The threshold that will ensure no disbursement is generated if it doesn't reach the minimum value.
   */
  public $minimum;

  /**
   * @integer
   * An optional field indicating the minimum balance you want to maintain, despite any Payouts occurring. If the Payout would reduce the balance to below this value, then it is not processed. 
   * This field is specified as an integer in cents. 
   * For example, a float value of 1000 would ensure that a balance of 10 USD is maintained at all times.
   */
  public $float;

  /**
   * @integer
   * Whether to skip the creation of disbursements on holidays and weekends.
   */
  public $skipOffDays;

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
   * Whether sameDay payout is enabled or disabled.
   */
  public $sameDay;

  /**
   * @integer
   * The maximum threshold for a disbursement. Any amount in a disbursement exceeding this value will not be released, and will roll over to the next disbursement.
   */
  public $maximum;

  /**
   * @string
   * The identifier of a Billing that this Payout is associated with. Payout associated with a Billing record will be used to pay for Statements.
   */
  public $billing;

  /**
   * @string
   * The secondary billing descriptor to appear on the bank statements for the payout.
   */
  public $secondaryDescriptor;


}

