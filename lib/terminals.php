<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class terminals extends BaseResource {
  protected $resourceName = "terminals";
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
   * The identifier of the Merchant that owns this terminals resource.
   */
  public $merchant;

  /**
   * @string
   * The type of terminal. 
   * This field is stored as an integer and must be between 1 and 417.
   */
  public $type;

  /**
   * @integer
   */
  public $capability;

  /**
   * @integer
   * How is the terminal employed.
   */
  public $environment;

  /**
   * @integer
   * If the terminal should be manually or automatically closed for the day.
   */
  public $autoClose;

  /**
   * @integer
   * The time when the terminal should be automatically closed for the day. This field is only required when AutoClose is set to automatic. 
   * The format should be HHMM (1145, 2200, etc).
   */
  public $autoCloseTime;

  /**
   * @string
   * The name of this Terminal. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of the Terminal. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $description;

  /**
   * @string
   * The first line of the address associated with this Terminal's location. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address1;

  /**
   * @string
   * The second line of the address associated with this Terminal's location. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address2;

  /**
   * @string
   * The name of the city in the address associated with this Terminal's location. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $city;

  /**
   * @string
   * The U.S. state in the address associated with this Terminal's location.
   */
  public $state;

  /**
   * @string
   * The ZIP code in the address associated with this Terminal's location. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $zip;

  /**
   * @string
   * The country in the address associated with the Terminal's location. Currently, this field only accepts the value 'USA'.
   */
  public $country;

  /**
   * @string
   * The timezone for the address associated with the Terminal's location.
   */
  public $timezone;

  /**
   * @integer
   * The current status of the terminal.
   */
  public $status;

  /**
   * @string
   * The Phone number is the telephone number associated with the Terminal's location. 
   * This field is stored as a text string and must be between 5 and 15 characters long and numeric characters only.
   */
  public $phone;

  /**
   * @string
   * The serial number of the terminal device.
   */
  public $serial;

  /**
   * @integer
   */
  public $cloudEnabled;


}

