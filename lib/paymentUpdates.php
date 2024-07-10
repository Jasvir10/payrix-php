<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class paymentUpdates extends BaseResource {
  protected $resourceName = "paymentUpdates";
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
   * The PaymentGroup resource that this PaymentUpdate belongs to.
   */
  public $paymentUpdateGroup;

  /**
   * @string
   * The payment associated with this PaymentUpdate.
   */
  public $payment;

  /**
   * @string
   * The status of the paymentUpdate.
   */
  public $status;

  /**
   * @string
   */
  public $token;

  /**
   * @string
   * The account associated with this Payment being updated. 
   * Used for instant funding payouts.
   */
  public $account;

  /**
   * @string
   * An internally generated reference for this PaymentUpdate. 
   * This field is stored as a text string and must be between 1 and 50 characters long.
   */
  public $clientRef;

  /**
   * @string
   * The message with details about the outcome of the paymentUpdate. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $message;

  /**
   * @string
   * The expiration number of the payment being updated. 
   * This field is stored as a text string in 'MMYY' format, where 'MM' is the number of a month and 'YY' is the last two digits of a year. For example, '0623' for June 2023.
   */
  public $expiration;


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

