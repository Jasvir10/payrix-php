<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class tokens extends BaseResource {
  protected $resourceName = "tokens";
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
   * The Customer that this Token is associated with.
   */
  public $customer;

  /**
   */
  public $payment;

  /**
   * @string
   * The auto-generated token identifier.
   */
  public $token;

  /**
   * @string
   * The expiry month for the payment method associated with this Token.
   *  This field is stored as a text string in 'MMYY' format, where 'MM' is the number of a month and 'YY' is the last two digits of a year. For example, '0623' for June 2023. 
   * The value must reflect a future date.
   */
  public $expiration;

  /**
   * @integer
   * Whether this resource is marked as inactive.
   */
  public $inactive;

  /**
   * @integer
   * Whether this resource is marked as frozen.
   */
  public $frozen;

  /**
   * @string
   * The name of this Token. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Token. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @string
   * Custom, free-form field for client-supplied text, must be between 0 and 1000 characters long.
   */
  public $custom;

  /**
   * @string
   */
  public $authTokenCustomer;

  /**
   * @string
   * Indicates if this token is ready for use in transactions and subscriptions or not. A token without complete payment details will be marked as pending
   */
  public $status;


}

