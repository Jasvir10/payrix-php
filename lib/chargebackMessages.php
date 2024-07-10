<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class chargebackMessages extends BaseResource {
  protected $resourceName = "chargebackMessages";
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
   * The identifier of the Chargeback resource that this chargebackMessage relates to.
   */
  public $chargeback;

  /**
   * @integer
   * The date of this chargebackMessage. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $date;

  /**
   * @string
   * The type of this chargebackMessage.
   */
  public $type;

  /**
   * @string
   */
  public $fromQueue;

  /**
   * @string
   */
  public $toQueue;

  /**
   * @string
   * The identifier of the Contact for this chargebackMessage.
   */
  public $contact;

  /**
   * @integer
   * The amount that this chargebackMessage corresponds to. 
   * For example, if the 'type' is set to '3' (Accept Liability), then this amount indicates that the liability should be for this amount. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @string
   * The currency of the amount in this chargebackMessage.
   */
  public $currency;

  /**
   * @string
   * A free-text note relating to this chargebackMessage.
   */
  public $note;

  /**
   * @string
   * The current status of the Chargeback.
   */
  public $status;

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
   */
  public $imported;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

