<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class terminalTxnResults extends BaseResource {
  protected $resourceName = "terminalTxnResults";
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
   * The identifier of the TerminalTxn associated with this terminalTxnResults resource.
   */
  public $terminalTxn;

  /**
   * @integer
   * The type of this terminalTxnResult.
   */
  public $type;

  /**
   * @string
   * A message that accompanies and describes this Transaction result.
   */
  public $message;

  /**
   * @integer
   * The result code that is associated with this terminalTxnResult.
   */
  public $code;

  /**
   * @string
   */
  public $originalCode;

  /**
   * @string
   */
  public $bankCode;


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

