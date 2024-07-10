<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class invoiceLineItems extends BaseResource {
  protected $resourceName = "invoiceLineItems";
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
   * The identifier of the Invoice that owns this InvoiceLineItem.
   */
  public $invoice;

  /**
   * @string
   * The identifier of the InvoiceItem associated with this InvoiceLineItem.
   */
  public $invoiceItem;

  /**
   * @integer
   * The quantity purchased for this line item. 
   * This field is specified as an integer.
   */
  public $quantity;

  /**
   * @integer
   * The price for each item. 
   * This field is specified as an integer in cents.
   */
  public $price;

  /**
   * @integer
   * The discount for the line item. 
   * This field is specified as an integer in cents.
   */
  public $discount;

  /**
   * @integer
   * The total price for the line item. 
   * This field is specified as an integer in cents.
   */
  public $total;


}

