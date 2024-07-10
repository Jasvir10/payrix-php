<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class pendingEntries extends BaseResource {
  protected $resourceName = "pendingEntries";
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
   * The identifier of the Entity that owns this PendingEntry.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this PendingEntry refers to. This is the owner of the record that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * If the activity that this PendingEntry refers to involves two parties in the system with one paying a charge of any kind, then this field stores the identifier of the Entity that the charge or other activity is for.
   */
  public $fromentity;

  /**
   * @string
   * The identifier of the Fund that this PendingEntry refers to.
   */
  public $fund;

  /**
   * @string
   */
  public $opposingPendingEntry;

  /**
   * @string
   */
  public $entry;

  /**
   * @string
   */
  public $adjustment;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a ProfitShare, then this field stores the identifier of the corresponding ProfitShare resource.
   */
  public $profitShare;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Chargeback, then this field stores the identifier of the corresponding Chargeback resource.
   */
  public $chargeback;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the charging of a Disbursement, then this field stores the identifier of the corresponding Disbursement resource.
   */
  public $disbursement;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the charging of a Fee, then this field stores the identifier of the corresponding Fee resource.
   */
  public $fee;

  /**
   * @string
   * If the activity that this PendingEntry refers to is the paying of a Refund, then this field stores the identifier of the corresponding Refund resource.
   */
  public $refund;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Transaction, then this field stores the identifier of the corresponding Transaction resource.
   */
  public $txn;

  /**
   * @integer
   * The type of event that triggered this PendingEntry resource.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this PendingEntry.
   */
  public $eventId;

  /**
   * @string
   * A description of this PendingEntry.
   */
  public $description;

  /**
   * @string
   * The amount involved in this PendingEntry. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @integer
   * Whether this resource is marked as pending..
   */
  public $pending;

  /**
   * @string
   */
  public $originalCurrency;

  /**
   * @string
   */
  public $currencyRate;

  /**
   * @string
   */
  public $terminalTxn;

  /**
   * @integer
   */
  public $isFee;

  /**
   * @string
   */
  public $entityDebt;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Statement, then this field stores the identifier of the corresponding Statement resource.
   */
  public $statement;

  /**
   * @string
   * If the activity that this PendingEntry refers to is a Settlement, then this field stores the identifier of the corresponding Settlement resource.
   */
  public $settlement;

  /**
   * @string
   */
  public $originalEventId;

  /**
   * @integer
   */
  public $originalEvent;


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

