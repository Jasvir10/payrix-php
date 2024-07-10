<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class authTokens extends BaseResource {
  protected $resourceName = "authTokens";
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
   * The auto-generated token identifier.
   */
  public $token;

  /**
   * @string
   * The customer identifier from the AuthToken used during authentication.
   */
  public $customer;

  /**
   * @integer
   * Timestamp of when the AuthToken was used.
   */
  public $used;

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

