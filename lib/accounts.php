<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class accounts extends BaseResource {
  protected $resourceName = "accounts";
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
   * The identifier of the Entity associated with this Account.
   */
  public $entity;

  /**
   */
  public $account;

  /**
   * @string
   * A unique token that can be used to refer to this Account in other parts of the API.
   */
  public $token;

  /**
   * @string
   * A client-supplied name for this bank account. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A client-supplied description for this bank account. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * Indicates whether the Account is the 'primary' Account for the associated Entity. 
   * Only one Account associated with each Entity can be the 'primary' Account. 
   */
  public $primary;

  /**
   * @integer
   * The status of the Account
   */
  public $status;

  /**
   * @string
   * The currency of this Account. The default is 'USD'
   */
  public $currency;

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
   * The expiration date of the related debit account. 
   * The date is specified as a four digit string in MMYY format, for example, '0118' for January, 2018.
   */
  public $expiration;

  /**
   * @string
   */
  public $type;

  /**
   * @integer
   * Indicates whether the Account is reserved and the action that will be taken as a result.
   */
  public $reserved;

  /**
   * @string
   * The last stage completed for risk.
   */
  public $checkStage;


}

