<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class members extends BaseResource {
  protected $resourceName = "members";
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
   * The identifier of the Merchant associated with this Member.
   */
  public $merchant;

  /**
   * @string
   * The title that this Member holds in relation to the associated Merchant. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   * For example, 'CEO', 'Owner' or 'Director of Finance'.
   */
  public $title;

  /**
   * @string
   * The first name associated with this Member. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $first;

  /**
   * @string
   * The middle name associated with this Member. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $middle;

  /**
   * @string
   * The last name associated with this Member. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $last;

  /**
   * @string
   * The social security number of this Member. This field is required if the Merchant associated with the Member is a sole trader. 
   * This field is stored as a text string and must be 9 characters long and numeric characters only.
   */
  public $ssn;

  /**
   * @integer
   * The date of birth of this Member.  The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $dob;

  /**
   * @string
   * The driver's license number of this Member. 
   * This field is stored as a text string and must be between 0 and 15 characters long.
   */
  public $dl;

  /**
   * @string
   * The U.S. state where the driver's license of this Member was issued. 
   * Valid values are any U.S. state's 2 character postal abbreviation.
   */
  public $dlstate;

  /**
   * @integer
   * The share of the Member's ownership of the associated Merchant, expressed in basis points. 
   * For example, 25.3% is expressed as '2530'. 
   * This field is stored as an integer and must be between 1 and 10000 characters long.
   */
  public $ownership;

  /**
   * @string
   * The email address of this Member. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $email;

  /**
   * @string
   * The fax number associated with this Member. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $fax;

  /**
   * @string
   * The phone number associated with this Member. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $phone;

  /**
   * @string
   * The country in the address associated with the Member. Currently, this field only accepts the value 'USA'.
   */
  public $country;

  /**
   * @string
   * The ZIP code in the address associated with this Member. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $zip;

  /**
   * @string
   * The U.S. state associated with this Member. 
   * Valid values are any U.S. state's 2 character postal abbreviation.
   */
  public $state;

  /**
   * @string
   * The name of the city in the address associated with this Member. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $city;

  /**
   * @string
   * The second line of the address associated with this Member. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address2;

  /**
   * @string
   * The first line of the address associated with this Member. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address1;

  /**
   * @integer
   * Indicates whether the Member is the 'primary' contact for the associated Merchant. Only one Member associated with each Merchant can be the 'primary' Member.
   */
  public $primary;

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
   * The timezone for the address associated with the Member's location.
   */
  public $timezone;

  /**
   * @string
   * The gender of this Member. For example 'male' or 'female'.
   */
  public $gender;

  /**
   * @integer
   * A controlling authority, or 'Control Prong' include but are not limited to: Chief Executive Officer, Chief Financial Officer, Chief Operating Officer, Managing Member, General Partner, President, Vice Presidents, or an individual with significant legal authority to enter the Legal Entity into a commercial relationship.
   */
  public $significantResponsibility;

  /**
   * @integer
   * This person is politically exposed, defined as persons whom through their prominent position or influence, is more susceptible to being involved in bribery or corruption.
   */
  public $politicallyExposed;

  /**
   * @string
   * The country of which the owner is a citizen. 
   * Valid values for this field is the 3-letter ISO code for the country.
   */
  public $citizenship;


}

