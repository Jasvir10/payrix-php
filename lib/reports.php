<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class reports extends BaseResource {
  protected $resourceName = "reports";
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
  public $type;

  /**
   * @string
   */
  public $description;

  /**
   * @string
   */
  public $status;

  /**
   * @string
   */
  public $schedule;

  /**
   * @integer
   */
  public $scheduleFactor;

  /**
   * @integer
   */
  public $start;

  /**
   * @integer
   */
  public $finish;

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

