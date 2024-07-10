<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class chargebackMessageResults extends BaseResource {
  protected $resourceName = "chargebackMessageResults";
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
   * The identifier of the chargebackMessage resource that this chargebackMessageResult relates to.
   */
  public $chargebackMessage;

  /**
   * @string
   * The type of this chargebackMessageResult.
   */
  public $type;

  /**
   * @string
   * The Chargeback message itself.
   */
  public $message;


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

