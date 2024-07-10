<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class adjustments extends BaseResource {
  protected $resourceName = "adjustments";
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
   * The Login that owns this Adjustment.
   */
  public $login;

  /**
   * @string
   * The Entity that will receive the set amount.
   */
  public $entity;

  /**
   * @string
   * The Entity that will pay for the adjustment. 
   * This is an optional field and should only be used when the amount is being transfered from the fromentity to the entity.
   */
  public $fromentity;

  /**
   * @string
   * The description of this Decision Rule. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @string
   * The amount of the Adjustment.
   */
  public $amount;

  /**
   * @string
   * The currency of the amount.
   */
  public $currency;

  /**
   * @string
   * The applicable Entity for this Adjustment. 
   * This field is an optional field.
   */
  public $onentity;


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

