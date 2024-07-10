<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class billings extends BaseResource {
  protected $resourceName = "billings";
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
   */
  public $entity;

  /**
   * @string
   */
  public $org;

  /**
   * @string
   */
  public $division;

  /**
   * @string
   */
  public $description;

  /**
   * @string
   * The schedule that determines when this Billing is triggered to start collecting data.
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
   * The date on which this Billing period should start.
   */
  public $start;

  /**
   * @integer
   * The date on which this Billing period should end.
   */
  public $finish;

  /**
   * @string
   * Determines who will be billed.
   */
  public $collection;

  /**
   * @string
   * A multiplier that you can use to adjust the set of data to be used in the collection calculation.
   */
  public $collectionFactor;

  /**
   * @integer
   * The number of days, weeks, months or years to go back when selecting data for collection calculation.
   */
  public $collectionOffset;

  /**
   * @integer
   */
  public $collectionIncludeCurrent;

  /**
   * @string
   * The currency of the amount.
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
   * @string
   */
  public $forentity;


}

