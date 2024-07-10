<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class items extends BaseResource {
  protected $resourceName = "items";
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
   */
  public $txn;

  /**
   * @string
   */
  public $item;

  /**
   * @string
   * A description of this Item. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $description;

  /**
   * @string
   * A custom identifier for this line Item. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $custom;

  /**
   * @integer
   * The quantity of this Item included in the Transaction. 
   * This field is specified as an integer.
   */
  public $quantity;

  /**
   * @integer
   * The amount charged for this Item. 
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

  /**
   * @string
   * The unit of measure for this Item. 
   * This field is stored as a text string and must be between 0 and 100 characters long. 
   * Examples of units of measure may be: each, kilogram, pound, month.
   */
  public $um;

  /**
   * @string
   * The commodity code for this Item. 
   * This field is stored as a text string and must be between 0 and 12 characters long.
   */
  public $commodityCode;

  /**
   * @integer
   * The total price for the line item. 
   * This field is specified as an integer in cents.
   */
  public $total;

  /**
   * @integer
   * The discount for the line item. 
   * This field is specified as an integer in cents.
   */
  public $discount;

  /**
   * @string
   * The product code for this Item such as: UPC, catalog number, or inventory number. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $productCode;


}

