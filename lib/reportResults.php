<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class reportResults extends BaseResource {
  protected $resourceName = "reportResults";
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
   */
  public $report;

  /**
   * @string
   */
  public $type;

  /**
   * @string
   */
  public $documentType;

  /**
   * @integer
   */
  public $original;

  /**
   * @string
   */
  public $status;

  /**
   * @integer
   */
  public $effective;

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

}

