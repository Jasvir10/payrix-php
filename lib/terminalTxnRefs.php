<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class terminalTxnRefs extends BaseResource {
  protected $resourceName = "terminalTxnRefs";
  /**
   * @string
   */
  public $terminalTxn;

  /**
   * @string
   */
  public $ref;

  /**
   * @string
   * An indicator showing what this terminalTxnRef refers to.
   */
  public $stage;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

