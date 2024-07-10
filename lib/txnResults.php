<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class txnResults extends BaseResource {
  protected $resourceName = "txnResults";
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
   * The identifier of the Transaction associated with this txnResults resource.
   */
  public $txn;

  /**
   * @integer
   * The type of this txnResult.
   */
  public $type;

  /**
   * @string
   * A message that accompanies and describes this Transaction result.
   */
  public $message;

  /**
   * @integer
   * The result code that is associated with this txnResult.
   */
  public $code;

  /**
   * @string
   */
  public $bankCode;

  /**
   * @string
   */
  public $originalCode;


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

