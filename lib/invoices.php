<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class invoices extends BaseResource {
  protected $resourceName = "invoices";
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
   * The identifier of the Login of this invoice resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Merchant of this invoice resource.
   */
  public $merchant;

  /**
   * @string
   * The identifier of the Customer of this invoice resource.
   */
  public $customer;

  /**
   * @string
   * The identifier of the Subscription of this invoice resource.
   */
  public $subscription;

  /**
   * @string
   * The invoice number.
   */
  public $number;

  /**
   * @string
   * The title of the invoice.
   */
  public $title;

  /**
   * @string
   * The message that will be sent with the invoice.
   */
  public $message;

  /**
   * @string
   * The email addresses to send the invoice to.
   */
  public $emails;

  /**
   * @integer
   * The total amount for this invoice.
   */
  public $total;

  /**
   * @integer
   * The tax amount for this invoice.
   */
  public $tax;

  /**
   * @integer
   * The discount amount applied to this invoice.
   */
  public $discount;

  /**
   * @string
   * The type of invoice.
   */
  public $type;

  /**
   * @string
   * The current status of the invoice.
   */
  public $status;

  /**
   * @integer
   * The date the invoice is due.
   */
  public $dueDate;

  /**
   * @integer
   * The date the invoice is due.
   */
  public $expirationDate;

  /**
   * @integer
   * The date to send this invoice.
   */
  public $sendOn;

  /**
   * @string
   * The current status of the invoice.
   */
  public $emailStatus;

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
   */
  public $allowedPaymentMethods;


}

