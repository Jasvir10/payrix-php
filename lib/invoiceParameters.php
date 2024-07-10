<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class invoiceParameters extends BaseResource {
  protected $resourceName = "invoiceParameters";
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
   * The identifier of the Login that owns this invoiceParameter resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Entity associated with this invoiceParameter.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Org associated with this invoiceParameter.
   */
  public $org;

  /**
   * @string
   * The identifier of the Division associated with this invoiceParameter.
   */
  public $division;

  /**
   * @string
   * The type of invoiceParameter that we will be configuring
   */
  public $type;

  /**
   * @string
   * The value of this type of invoiceParameter.
   */
  public $value;

  /**
   * @integer
   * Whether this invoiceParameter is locked or not. 
   * If it is locked then the value of this type of invoiceParameter will prevail.
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

