<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class payoutFlows extends BaseResource {
  protected $resourceName = "payoutFlows";
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
   * The Login that will own the Payout resource. When set to null, the Payout resource will be owned by the triggerring Entity.
   */
  public $payoutLogin;

  /**
   * @string
   * The identifier of the Org that this payoutFlows resource applies to. 
   * If you set this field, then the payoutFlow applies to all Entities in the Org.
   */
  public $org;

  /**
   * @string
   * The identifier of the Entity that this payoutFlow applies to.
   */
  public $entity;

  /**
   * @string
   * The event on the Org or Entity that should trigger the creation of an associated Payout resource.
   */
  public $trigger;

  /**
   * @string
   * The schedule that determines when the Payout resource that is created should be triggered to be paid.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, if it is set to a duration-based trigger, such as daily, weekly, monthly, or annually. 
   * This affects the Payout resource that is created by this payoutFlow. 
   * This field is specified as an integer and its value determines how the interval is multiplied.
   */
  public $scheduleFactor;

  /**
   * @string
   * The unit of measure for the Payout resource that is created. For example, if the Entity has a negative balance of $10 and the amount is set to 10000 (100%), then $10 will be drawn from their account to fully replenish the balance to $0.
   */
  public $um;

  /**
   * @integer
   * The total amount of the Payout resource that is created. 
   * The units used in this field are determined by the value of the 'um' field on the Payout. If the 'um' field is set to '1' or '3', then this field specifies the Payout percentage to levy in basis points. If the 'um' field is set to '2', then this field specifies the Payout in cents.
   */
  public $amount;

  /**
   * @integer
   */
  public $minimum;

  /**
   * @integer
   * Whether the Payout resource will be marked as inactive.
   */
  public $payoutInactive;

  /**
   * @integer
   * Whether the Payout resource will be marked to skip the creation of disbursements on holidays and weekends.
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
   * @string
   * The identifier of the Division in which entities will have automated payouts generated.
   */
  public $division;

  /**
   * @string
   * The secondary billing descriptor to appear on the bank statements in which entities will have automated payouts generated.
   */
  public $secondaryDescriptor;

  /**
   * @string
   * The identifier of a Billing that this PayoutFlow is associated with. 
   * The Billing identifier will be carried over to Payouts created based on this PayoutFlow.
   */
  public $billing;

  /**
   * @integer
   * The date on which payment of the Payout should start. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $start;


}

