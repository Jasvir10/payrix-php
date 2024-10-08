<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class funds extends BaseResource {
  protected $resourceName = "funds";
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
   * The identifier of the Entity that owns this Fund.
   */
  public $entity;

  /**
   * @string
   * The currency of the Fund.
   */
  public $currency;

  /**
   * @string
   * The amount held in this Fund that is marked as reserved. 
   * This field is specified as an integer in cents.
   */
  public $reserved;

  /**
   * @string
   */
  public $pending;

  /**
   * @string
   * The amount held in this Fund that is currently available for disbursement. 
   * This field is specified as an integer in cents.
   */
  public $available;

  /**
   * @string
   * The total amount held in this Fund. 
   * This field is specified as an integer in cents.
   */
  public $total;

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


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

