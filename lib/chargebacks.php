<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class chargebacks extends BaseResource {
  protected $resourceName = "chargebacks";
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
   * The Merchant associated with the Chargeback.
   */
  public $merchant;

  /**
   * @string
   * The Transaction associated with the Chargeback.
   */
  public $txn;

  /**
   * @string
   */
  public $description;

  /**
   * @integer
   * The total amount of the Chargeback.
   */
  public $total;

  /**
   * @integer
   * The representedTotal for this Chargeback if it has been represented.
   */
  public $representedTotal;

  /**
   * @string
   */
  public $cycle;

  /**
   * @string
   */
  public $currency;

  /**
   * @string
   * The processing reference number for this Chargeback.
   */
  public $ref;

  /**
   * @string
   * The reason description for this Chargeback.
   */
  public $reason;

  /**
   * @string
   * The reason code for this Chargeback.
   */
  public $reasonCode;

  /**
   * @integer
   * The date when the Chargeback was issued.
   */
  public $issued;

  /**
   * @integer
   * The date when the Chargeback was received.
   */
  public $received;

  /**
   * @integer
   * The deadline to submit a reply for the Chargeback.
   */
  public $reply;

  /**
   * @string
   * The issuing bank's reference number for this Chargeback.
   */
  public $bankRef;

  /**
   * @string
   */
  public $chargebackRef;

  /**
   * @string
   * The Chargeback's status
   */
  public $status;

  /**
   * @string
   * The ChargebackStatus representing the latest status change for this Chargeback.
   */
  public $lastStatusChange;

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
  public $actionable;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

