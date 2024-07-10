<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class disbursementResults extends BaseResource {
  protected $resourceName = "disbursementResults";
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
   * The identifier of the Disbursement that this disbursementReresult resource refers to.
   */
  public $disbursement;

  /**
   * @string
   * Code.
   */
  public $code;

  /**
   * @string
   */
  public $platform;

  /**
   * @string
   * Message.
   */
  public $message;

  /**
   * @string
   */
  public $disbursementRef;

  /**
   * @integer
   * Amount.
   */
  public $amount;

  /**
   * @string
   * Data (the trace number will go here if applicable).
   */
  public $data;

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

