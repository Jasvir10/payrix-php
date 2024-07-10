<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class customers extends BaseResource {
  protected $resourceName = "customers";
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
   * The Merchant associated with this Customer.
   */
  public $merchant;

  /**
   * @string
   * The first name associated with this Customer.
   */
  public $first;

  /**
   * @string
   * The middle name associated with this Customer.
   */
  public $middle;

  /**
   * @string
   * The last name associated with this Customer.
   */
  public $last;

  /**
   * @string
   * The name of the company associated with this Customer.
   */
  public $company;

  /**
   * @string
   * The email address of this Customer.
   */
  public $email;

  /**
   * @string
   * The fax number associated with this Customer. 
   * This field is stored as a text string and must be between 10 and 15 characters long.
   */
  public $fax;

  /**
   * @string
   * The phone number associated with this Transaction. 
   * This field is stored as a text string and must be between 10 and 15 characters long.
   */
  public $phone;

  /**
   * @string
   * The country associated with this Customer. 
   * Valid values for this field is the 3-letter ISO code for the country.
   */
  public $country;

  /**
   * @string
   * The ZIP code in the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $zip;

  /**
   * @string
   * The state associated with this Customer. 
   * If in the U.S. this is specified as the 2 character postal abbreviation for the state, if outside of the U.S. the full state name. 
   * This field is stored as a text string and must be between 2 and 100 characters long.
   */
  public $state;

  /**
   * @string
   * The name of the city in the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $city;

  /**
   * @string
   * The second line of the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address2;

  /**
   * @string
   * The first line of the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address1;

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
   * The shipping first name associated with this Customer.
   */
  public $shippingFirst;

  /**
   * @string
   * The shipping middle name associated with this Customer.
   */
  public $shippingMiddle;

  /**
   * @string
   * The shipping last name associated with this Customer.
   */
  public $shippingLast;

  /**
   * @string
   * The shipping name of the company associated with this Customer.
   */
  public $shippingCompany;

  /**
   * @string
   * The shipping first line of the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $shippingAddress1;

  /**
   * @string
   * The shipping second line of the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $shippingAddress2;

  /**
   * @string
   * The shipping name of the city in the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $shippingCity;

  /**
   * @string
   * The shipping state associated with this Customer. 
   * If in the U.S. this is specified as the 2 character postal abbreviation for the state, if outside of the U.S. the full state name. 
   * This field is stored as a text string and must be between 2 and 100 characters long.
   */
  public $shippingState;

  /**
   * @string
   * The shipping ZIP code in the address associated with this Customer. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $shippingZip;

  /**
   * @string
   * The shipping country associated with this Customer. 
   * Valid values for this field is the 3-letter ISO code for the country.
   */
  public $shippingCountry;

  /**
   * @string
   * The shipping phone number associated with this Transaction. 
   * This field is stored as a text string and must be between 10 and 15 characters long.
   */
  public $shippingPhone;

  /**
   * @string
   * The shipping fax number associated with this Customer. 
   * This field is stored as a text string and must be between 10 and 15 characters long.
   */
  public $shippingFax;

  /**
   * @string
   * Custom, free-form field for client-supplied text, must be between 0 and 1000 characters long.
   */
  public $custom;

  /**
   * @string
   */
  public $authTokenCustomer;


}

