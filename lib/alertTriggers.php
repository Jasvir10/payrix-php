<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class alertTriggers extends BaseResource {
  protected $resourceName = "alertTriggers";
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
   * The identifier of the Alert resource that you want to invoke with this trigger.
   */
  public $alert;

  /**
   * @string
   * The event type that triggers the associated Alert.
   */
  public $event;

  /**
   * @integer
   */
  public $resource;

  /**
   * @string
   * The name of this alertTrigger. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   */
  public $description;

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

