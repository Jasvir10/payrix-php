<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class disbursementEntries extends BaseResource {
  protected $resourceName = "disbursementEntries";
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
   * The identifier of the Disbursement that this DisbursementEntry resource refers to.
   */
  public $disbursement;

  /**
   * @string
   * The identifier of the Entry that this DisbursementEntry resource refers to.
   */
  public $entry;

  /**
   * @string
   * The identifier of the PendingEntry that this DisbursementEntry recource refers to.
   */
  public $pendingEntry;

  /**
   * @string
   * The identifier of the ReserveEntry that this DisbursementEntry recource refers to.
   */
  public $reserveEntry;

  /**
   * @integer
   * The type of event that triggered this DisbursementEntry resource.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this DisbursementEntry resource.
   */
  public $eventId;

  /**
   * @string
   * The total amount of this DisbursementEntry.
   */
  public $amount;

  /**
   * @string
   * The total amount used of this DisbursementEntry.
   */
  public $amountUsed;

  /**
   * @string
   * A description of this DisbursementEntry.
   */
  public $description;


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

