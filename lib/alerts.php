<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class alerts extends BaseResource {
  protected $resourceName = "alerts";
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
   * The identifier of the Login that this Alert relates to. 
   * The Alert is triggered based on the activity of this Login.
   */
  public $forlogin;

  /**
   * @string
   */
  public $team;

  /**
   * @string
   * The name of this Alert. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
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

  /**
   * @string
   */
  public $division;


}

