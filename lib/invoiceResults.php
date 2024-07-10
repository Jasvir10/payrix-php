<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class invoiceResults extends BaseResource {
  protected $resourceName = "invoiceResults";
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
   * The identifier of the Invoice that owns this invoiceResults resource.
   */
  public $invoice;

  /**
   * @string
   * The identifier of the Transaction associated with this invoiceResults resource.
   */
  public $txn;

  /**
   * @string
   * The status of this invoiceResult
   */
  public $status;

  /**
   * @string
   * A message that accompanies and describes this invoice result. 
   * This field is specified as a text string and must be between 1 and 500 characters long.
   */
  public $message;

  /**
   * @string
   * The shipping first name associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $shippingFirst;

  /**
   * @string
   * The shipping middle name associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $shippingMiddle;

  /**
   * @string
   * The shipping last name associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $shippingLast;

  /**
   * @string
   * The shipping name of the company associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $shippingCompany;

  /**
   * @string
   * The shipping first line of the address associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $shippingAddress1;

  /**
   * @string
   * The shipping second line of the address associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $shippingAddress2;

  /**
   * @string
   * The shipping name of the city in the address associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $shippingCity;

  /**
   * @string
   * The shipping state associated with this InvoiceResult. 
   * If in the U.S. this is specified as the 2 character postal abbreviation for the state, if outside of the U.S. the full state name. 
   * This field is stored as a text string and must be between 2 and 100 characters long.
   */
  public $shippingState;

  /**
   * @string
   * The shipping zip code in the address associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $shippingZip;

  /**
   * @string
   * The shipping country associated with this InvoiceResult. 
   * Valid values for this field is the 3-letter ISO code for the country.
   */
  public $shippingCountry;

  /**
   * @string
   * The shipping phone number associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $shippingPhone;

  /**
   * @string
   * The shipping fax number associated with this InvoiceResult. 
   * This field is stored as a text string and must be between 5 and 15 characters long
   */
  public $shippingFax;

  /**
   * @string
   */
  public $authorization;

  /**
   * @string
   */
  public $authorizationData;

  /**
   * @string
   */
  public $signature;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

