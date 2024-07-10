<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class paymentUpdateGroups extends BaseResource {
  protected $resourceName = "paymentUpdateGroups";
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
   * The identifier of the Entity that this resource belongs to.
   */
  public $entity;

  /**
   * @string
   * The payment associated with this PaymentUpdate.
   */
  public $payment;


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

