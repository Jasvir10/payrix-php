<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class entityReserves extends BaseResource {
  protected $resourceName = "entityReserves";
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
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Fund that this entityReserves resource relates to.
   */
  public $fund;

  /**
   * @integer
   * The amount held in this entityReserve. 
   * This field is specified as an integer in cents.
   */
  public $total;

  /**
   * @string
   * The name of this EntityReserve. 
   * This field is stored as a text string and must be between 0 and 50 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this EntityReserve. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   */
  public $requestSequence;

  /**
   * @integer
   */
  public $processedSequence;


  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

