<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class entries extends BaseResource {
  protected $resourceName = "entries";
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
   * The identifier of the Entity that owns this Entry.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this Entry refers to. This is the owner of the record that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * If the activity that this Entry refers to involves two parties in the system with one paying a charge of any kind, then this field stores the identifier of the Entity that the charge or other activity is for.
   */
  public $fromentity;

  /**
   * @string
   * The identifier of the Entry that this entry was created based on.
   */
  public $opposingEntry;

  /**
   * @string
   * The identifier of the Fund that this Entry refers to.
   */
  public $fund;

  /**
   * @string
   * If the activity that this Entry refers to is the charging of a Fee, then this field stores the identifier of the corresponding Fee resource.
   */
  public $fee;

  /**
   * @string
   * If the activity that this Entry refers to is the charging of a Disbursement, then this field stores the identifier of the corresponding Disbursement resource.
   */
  public $disbursement;

  /**
   * @string
   * If the activity that this Entry refers to is the paying of a Refund, then this field stores the identifier of the corresponding Refund resource.
   */
  public $refund;

  /**
   * @string
   * If the activity that this Entry refers to is a Transaction, then this field stores the identifier of the corresponding Transaction resource.
   */
  public $txn;

  /**
   * @string
   * If the activity that this Entry refers to is a Chargeback, then this field stores the identifier of the corresponding Chargeback resource.
   */
  public $chargeback;

  /**
   * @string
   */
  public $adjustment;

  /**
   * @string
   * If the activity that this Entry refers to is a ProfitShare, then this field stores the identifier of the corresponding ProfitShare resource.
   */
  public $profitShare;

  /**
   * @integer
   * The type of event that triggered this Entry resource.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this Entry.
   */
  public $eventId;

  /**
   * @string
   * A description of this Entry.
   */
  public $description;

  /**
   * @string
   * The amount involved in this Entry. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @string
   */
  public $unsourced;

  /**
   * @integer
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
   * @integer
   */
  public $isFee;

  /**
   * @string
   * If the activity that this Entry refers to is a Statement, then this field stores the identifier of the corresponding Statement resource.
   */
  public $statement;

  /**
   * @string
   * If the activity that this Entry refers to is a Settlement, then this field stores the identifier of the corresponding Settlement resource.
   */
  public $settlement;

  /**
   * @integer
   * Summary record for archived entries
   */
  public $archiveSummary;

  /**
   * @string
   */
  public $pendingEntry;

  /**
   * @string
   */
  public $pendingEntryCreated;

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

