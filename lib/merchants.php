<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class merchants extends BaseResource {
  protected $resourceName = "merchants";
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
   * The date and time on which this Merchant last processed a Transaction.
   */
  public $lastActivity;

  /**
   * @string
   * The Entity associated with this Merchant.
   */
  public $entity;

  /**
   * @string
   * The name under which the Merchant is doing business, if applicable. This field is stored as a text string and must be between 0 and 50 characters long.
   */
  public $dba;

  /**
   * @integer
   * An indicator that specifies whether the Merchant is new to credit card processing. By default, merchants are considered to be new.
   */
  public $new;

  /**
   * @integer
   * The date on which the Merchant was established. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $established;

  /**
   * @integer
   * The value of the annual credit card sales of this Merchant. 
   * This field is specified as an integer in cents. For example, $25.30 is expressed as '2530'.
   */
  public $annualCCSales;

  /**
   * @integer
   * The value of the average credit card sales of this Merchant. 
   * This field is specified as an integer in cents. For example, $25.30 is expressed as '2530'.
   */
  public $avgTicket;

  /**
   * @string
   * The American Express merchant identifier for this Merchant, if applicable. 
   * This field is stored as a text string and must be between 1 and 15 characters long.
   */
  public $amex;

  /**
   * @string
   * The Discover merchant identifier for this Merchant, if applicable. 
   * This field is stored as a text string and must be between 1 and 15 characters long.
   */
  public $discover;

  /**
   * @string
   * The Merchant Category Code (MCC) for this Merchant. This code is not required to create a Merchant, but it is required to successfully board a Merchant.
   */
  public $mcc;

  /**
   * @integer
   * The status of the Merchant.
   */
  public $status;

  /**
   * @integer
   * The date and time on which this Merchant was successfully boarded.
   */
  public $boarded;

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
   * The environment which the Merchant is in, if applicable.
   */
  public $environment;

  /**
   * @string
   * Merchant Verification Value. A value assigned by Visa to identify participation in select merchant programs.
   */
  public $visaMvv;

  /**
   * @string
   */
  public $chargebackNotificationEmail;

  /**
   * @string
   * The reason for manual or closed status.
   */
  public $statusReason;

  /**
   * @integer
   * Show the total approved amount to this merchant.
   */
  public $totalApprovedSales;

  /**
   * @integer
   */
  public $autoBoarded;

  /**
   * @string
   */
  public $saqType;

  /**
   * @integer
   */
  public $saqDate;

  /**
   * @string
   */
  public $qsa;

  /**
   * @integer
   */
  public $letterStatus;

  /**
   * @integer
   */
  public $letterDate;

  /**
   * @integer
   */
  public $tcAttestation;

  /**
   * @integer
   */
  public $visaDisclosure;

  /**
   * @string
   */
  public $disclosureIP;

  /**
   * @integer
   */
  public $disclosureDate;

  /**
   * @string
   */
  public $accountClosureReasonCode;

  /**
   * @integer
   */
  public $accountClosureReasonDate;

  /**
   * @integer
   * The value of the annual credit card sale volume of this Merchant. 
   * This field is specified as an integer in cents. For example, $25.30 is expressed as '2530'.
   */
  public $annualCCSaleVolume;

  /**
   * @integer
   * The value of the annual direct deposit sale volume of this Merchant. 
   * This field is specified as an integer in cents. For example, $25.30 is expressed as '2530'.
   */
  public $annualACHSaleVolume;

  /**
   * @string
   * The risk level which the Merchant is in, if applicable.
   */
  public $riskLevel;

  /**
   * @integer
   * The credit ratio to use while calculating risk factors for credit, if applicable.
   */
  public $creditRatio;

  /**
   * @integer
   * The credit timeliness for the Merchant, if applicable.
   */
  public $creditTimeliness;

  /**
   * @integer
   */
  public $chargebackRatio;

  /**
   * @integer
   * The ndx (Non Delivery Exposure) days which the Merchant is in, if applicable.
   */
  public $ndxDays;

  /**
   * @integer
   * The ndx (Non Delivery Exposure) percentage to be used for the merchant, if applicable.
   */
  public $ndxPercentage;

  /**
   * @integer
   * Indicates whether the merchant accepts pre-purchase for products that are shipped at a later date or not currently available.
   */
  public $advancedBilling;

  /**
   * @integer
   * Description of the type of address that the business operates at. 
   */
  public $locationType;

  /**
   * @integer
   * The merchant percentage of transactions that are Card Not Present (Includes MOTO and eCommerce).
   */
  public $percentKeyed;

  /**
   * @integer
   * The expected total volume for all credit card and ACH payments that the merchant will process for the current year.
   */
  public $totalVolume;

  /**
   * @integer
   */
  public $percentCardNotPresent;

  /**
   * @integer
   * Indicates if the merchant is a seasonal merchant or operates year-round.
   */
  public $seasonal;

  /**
   * @integer
   * Indicates the Annual AMEX Sales Volume for the outlet.
   */
  public $amexVolume;

  /**
   * @integer
   * This field allows the ability to submit merchant registration files with a MasterCard (MC) Auth Integrity value.
   */
  public $incrementalAuthSupported;

  /**
   * @string
   */
  public $tmxSessionId;


}

