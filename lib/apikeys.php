<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class apikeys extends BaseResource {
  protected $resourceName = "apikeys";
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
   * The login under which to perform this action. If you do not supply a login in this field, then the API defaults to the login that is currently authenticated.
   */
  public $login;

  /**
   * @string
   */
  public $key;

  /**
   * @string
   */
  public $name;

  /**
   * @string
   */
  public $description;

  /**
   * @integer
   * Whether this API key should have access to only public resources. 
   * Public resources include Transactions, Tokens, Customers and Items. All other resources are private.
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
   */
  public $effectiveRoles;


}

