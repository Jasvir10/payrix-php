<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class secrets extends BaseResource {
  protected $resourceName = "secrets";
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
   * The identifier of the Login that owns this secret resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Entity associated with this secret.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Org associated with this secret.
   */
  public $org;

  /**
   * @string
   * The identifier of the Division associated with this secret.
   */
  public $division;

  /**
   * @string
   * The type of secret.
   */
  public $type;

  /**
   * @string
   * The platform of this secret.
   */
  public $platform;

  /**
   * @string
   * The name of this Secret. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Secret. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $description;

  /**
   * @string
   * The actual key or the indicator of which key to use. 
   * This field is stored as a text string and must be between 1 and 5000 characters long.
   */
  public $key;

  /**
   * @integer
   * Whether this secret is locked or not. 
   * If it is locked then the value of this type of secret will prevail.
   */
  public $locked;

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

