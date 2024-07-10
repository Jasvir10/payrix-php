<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class disbursements extends BaseResource {
  protected $resourceName = "disbursements";
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
   * The identifier of the Entity that owns this Disbursement.
   */
  public $entity;

  /**
   * @string
   * The token of the accounts resource used for this Disbursement.
   */
  public $account;

  /**
   * @string
   * The identifier of the Payout that represents the schedule for this Disbursement.
   */
  public $payout;

  /**
   * @string
   * A description of this Disbursement.
   */
  public $description;

  /**
   * @integer
   * The total amount of this Disbursement.
   */
  public $amount;

  /**
   * @integer
   * The current status of this Disbursement
   */
  public $status;

  /**
   * @string
   * A timestamp indicating when the Disbursement was processed.
   */
  public $processed;

  /**
   * @string
   * The currency of this Disbursement.
   */
  public $currency;

  /**
   */
  public $payment;

  /**
   * @string
   * The expiration date of the related debit account.
   */
  public $expiration;

  /**
   * @integer
   * Whether sameDay funding is enabled or disabled for this disbursement
   */
  public $sameDay;

  /**
   * @integer
   * The amount that has been returned within the disbursement.
   */
  public $returnedAmount;

  /**
   * @string
   * The identifier of the Statement being paid by this Disbursement.
   */
  public $statement;

  /**
   * @string
   */
  public $settlement;

  /**
   * @string
   * The last negative Entry processed included in the disbursement.
   */
  public $lastNegativeEntry;

  /**
   * @string
   * The last negative PendingEntry processed included in the disbursement.
   */
  public $lastNegativePendingEntry;

  /**
   * @string
   * The last positive ReserveEntry processed included in the disbursement.
   */
  public $lastPositiveReserveEntry;

  /**
   * @string
   * The current status of disbursementEntries creation
   */
  public $disbursementEntriesStatus;

  /**
   * @string
   * The last positive Entry processed included in the disbursement.
   */
  public $lastPositiveEntry;

  /**
   * @string
   * The last positive PendingEntry processed included in the disbursement.
   */
  public $lastPositivePendingEntry;

  /**
   * @string
   * The last negative ReserveEntry processed included in the disbursement.
   */
  public $lastNegativeReserveEntry;

  /**
   * @string
   * Indicates if entries were processed for this Disbursement
   */
  public $fundingStatus;

  /**
   * @string
   */
  public $secondaryDescriptor;


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

