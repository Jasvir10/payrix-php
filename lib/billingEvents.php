<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class billingEvents extends BaseResource {
  protected $resourceName = "billingEvents";
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
   */
  public $billing;

  /**
   * @string
   */
  public $event;

  /**
   * @string
   */
  public $eventSchedule;

  /**
   * @integer
   */
  public $deductFromBalance;

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

