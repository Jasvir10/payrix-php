<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class billingModifiers extends BaseResource {
  protected $resourceName = "billingModifiers";
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
   * The identifier of the Billing that this Billing Modifier applies to.
   */
  public $billing;

  /**
   * @string
   * The identifier of the Entity that this Billing Modifier applies to.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Org that this Billing Modifier applies to.
   */
  public $org;

  /**
   * @string
   * The identifier of the Division that this Billing Modifier applies to.
   */
  public $division;

  /**
   * @string
   * The identifier of the Entity that is responsible for paying this Bill on behalf of the Entity specified in the 'entity' field.
   */
  public $fromentity;

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

