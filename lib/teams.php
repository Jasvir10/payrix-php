<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class teams extends BaseResource {
  protected $resourceName = "teams";
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
   * The Login that owns this Team.
   */
  public $login;

  /**
   * @string
   * The name of this Team. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Team. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $description;

  /**
   * @integer
   * Whether new Logins created by member Logins of this Team will be added to this team or not. Default is 0 (enabled).
   */
  public $autoCascadeDisabled;

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
  public $autoCascadeOwner;


}

