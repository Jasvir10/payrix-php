<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class invoiceItems extends BaseResource {
  protected $resourceName = "invoiceItems";
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
   * The identifier of the Login that owns this Invoiceitem.
   */
  public $login;

  /**
   * @string
   * The desired name of this InvoiceItem. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $item;

  /**
   * @string
   * The description of this InvoiceItem. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $description;

  /**
   * @string
   * A custom field of this InvoiceItem. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $custom;

  /**
   * @string
   * The unit of measure of this InvoiceItem. 
   * This field is stored as a text string and must be between 0 and 100 characters long. 
   * Examples of units of measure may be: each, kilogram, pound, month.
   */
  public $um;

  /**
   * @string
   * The commodity code for this InvoiceItem. 
   * This field is stored as a text string and must be between 0 and 12 characters long.
   */
  public $commodityCode;

  /**
   * @string
   * The product code for this invoiceItem such as: UPC, catalog number, or inventory number. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $productCode;

  /**
   * @integer
   * The price of this InvoiceItem. 
   * This field is specified as an integer in cents.
   */
  public $price;

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


}

