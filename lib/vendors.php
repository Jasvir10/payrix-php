<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class vendors extends BaseResource {
  protected $resourceName = "vendors";
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
   * The identifier of the Entity associated with this Vendor resource.
   */
  public $entity;

  /**
   * @string
   */
  public $division;

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


  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

