<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class statements extends BaseResource {
  protected $resourceName = "statements";
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
   * The identifier of the Billing of this statement resource.
   */
  public $billing;

  /**
   * @string
   * The current status of the statement.
   */
  public $status;

  /**
   * @integer
   * The total paid amount for this statement. 
   * This field is specified as an integer in cents.
   */
  public $totalPaid;

  /**
   * @integer
   * The total amount for this statement. 
   * This field is specified as an integer in cents.
   */
  public $total;

  /**
   * @string
   * The currency for this statement.
   */
  public $currency;

  /**
   * @string
   */
  public $forentity;

  /**
   * @string
   */
  public $entity;

  /**
   * @integer
   * The date on which this Statement period should start.
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $start;

  /**
   * @integer
   * The date on which this Statement period should finish.
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $finish;


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

