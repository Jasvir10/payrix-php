<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class entities extends BaseResource {
  protected $resourceName = "entities";
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
   * The incoming ip address from which this Entity was created.
   */
  public $ipCreated;

  /**
   * @string
   * The incoming ip address from which this Entity was last modified.
   */
  public $ipModified;

  /**
   * @string
   * The client ip address from which the Entity was created. 
   * Valid values are any Ipv4 or Ipv6 address.
   */
  public $clientIp;

  /**
   * @string
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   * The parameter associated with this Entity.
   */
  public $parameter;

  /**
   * @integer
   * The type of Entity.
   */
  public $type;

  /**
   * @string
   * The name of this Entity. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * The first line of the address associated with this Entity. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address1;

  /**
   * @string
   * The second line of the address associated with this Entity. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $address2;

  /**
   * @string
   * The name of the city in the address associated with this Entity. 
   * This field is stored as a text string and must be between 1 and 500 characters long.
   */
  public $city;

  /**
   * @string
   * The U.S. state associated with this Entity. 
   * Valid values are any U.S. state's 2 character postal abbreviation.
   */
  public $state;

  /**
   * @string
   * The ZIP code in the address associated with this Entity. 
   * This field is stored as a text string and must be between 1 and 20 characters long.
   */
  public $zip;

  /**
   * @string
   * The country in the address associated with the Entity. Currently, this field only accepts the value 'USA'.
   */
  public $country;

  /**
   * @string
   * The timezone for the address associated with the Entity's location.
   */
  public $timezone;

  /**
   * @string
   * The phone number associated with this Entity. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $phone;

  /**
   * @string
   * The fax number associated with this Entity. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $fax;

  /**
   * @string
   * The email address associated with this Entity. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $email;

  /**
   * @string
   * The web site URL associated with this Entity. 
   * This field is stored as a text string and must be between 0 and 500 characters long.
   */
  public $website;

  /**
   * @string
   * The IRS Employer Number (EIN) for the Entity. 
   * This field is stored as an interger and must be 9 characters long.
   */
  public $ein;

  /**
   * @string
   * An indicator showing the version of the terms and conditions that this Entity has accepted. The API indicates the version as a string. 
   * This field is stored as a text string and must be between 0 and 20 characters long.
   */
  public $tcVersion;

  /**
   * @string
   * Date the tcVersion was last updated.
   */
  public $tcDate;

  /**
   * @string
   * IP address of client from last tcVersion update.
   */
  public $tcIp;

  /**
   * @integer
   * Date and time on which this Entity accepted the Terms and Conditions, if different than tcDate. 
   * The date is specified as a twelve digit string in YYYYMMDDHHII format, for example, '201601201528' for January 20, 2016 at 15:28 (3:28 pm).
   */
  public $tcAcceptDate;

  /**
   * @string
   * IP address from which this Entity accepted the Terms and Conditions, if different than tcIp.
   */
  public $tcAcceptIp;

  /**
   * @string
   * Custom, free-form field for client-supplied text, must be between 0 and 1000 characters long.
   */
  public $custom;

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
   * @integer
   * The Tax ID (TIN) status of the entity.
   */
  public $tinStatus;

  /**
   * @integer
   */
  public $reserved;

  /**
   * @string
   * The last stage completed for risk.
   */
  public $checkStage;

  /**
   * @integer
   * Indicates whether this is a publicly held entity.
   */
  public $public;

  /**
   * @string
   * The customer service phone number associated with this Entity. For Merchants, this number will be displayed on the customer's credit card statement. 
   * This field is stored as a text string and must be between 5 and 15 characters long.
   */
  public $customerPhone;

  /**
   * @integer
   * The number of locations at which this Entity does business. 
   * This field is stored as an integer and must be between 1 and 1000000 characters long.
   */
  public $locations;

  /**
   * @string
   * This field is stored as a text string and must be between 0 and 1000 characters long.
   */
  public $industry;

  /**
   * @string
   * The display name of this Entity. 
   * This field is stored as a text string and must be between 1 and 1000 characters long.
   */
  public $displayName;

  /**
   * @integer
   */
  public $totalCreditDisbursements;

  /**
   * @string
   * The secondary billing descriptor to appear on the bank statements for funds transfer for the entity.
   */
  public $payoutSecondaryDescriptor;

  /**
   * @string
   * Indicates if the EIN being used is a TIN or SSN or "other/unknown" number.
   */
  public $einType;

  /**
   * @string
   * The IRS Legal Filing Name. This must match what has been provided to the IRS when filing taxes.
   */
  public $irsFilingName;


}

