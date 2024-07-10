<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class sessions extends BaseResource {
  protected $resourceName = "sessions";
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
  public $key;

  /**
   * @integer
   * Whether this Session should have access to only public resources. 
   * All other resources are private.
   */
  public $public;

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
   * Whether or not an AuthToken is required as part of the authentication when this Apikey is used.
   */
  public $token;

  /**
   * @integer
   * Whether or not the Session is created using SSO.
   */
  public $sso;

  /**
   * @integer
   */
  public $effectiveRoles;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

