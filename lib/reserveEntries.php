<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class reserveEntries extends BaseResource {
  protected $resourceName = "reserveEntries";
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
   * The Login that owns this resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Fund that this reserveEntries resource relates to.
   */
  public $fund;

  /**
   * @string
   * This field indicates that this reserveEntry was triggered from a Transaction. 
   * This field stores the identifier of the Transaction.
   */
  public $txn;

  /**
   * @string
   */
  public $hold;

  /**
   * @string
   * This field indicates that this reserveEntry was triggered from an automatic reserve. 
   * This field stores the identifier of the Reserve resource.
   */
  public $reserve;

  /**
   * @string
   * This field indicates that this reserveEntry was triggered from a manual change to an entityReserve. 
   * This field stores the identifier of the entityReserve resource.
   */
  public $entityReserve;

  /**
   * @string
   * This field indicates that this reserveEntry shows funds moving out of reserve. 
   * This field stores the identifier of the reserveEntry resource that moved the funds into the reserve.
   */
  public $reserveEntry;

  /**
   * @string
   * A description of this reserveEntries resource. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The date on which the funds in reserve should be released. 
   * The date is specified as an eight digit string in YYYYMMDD format, for example, '20160120' for January 20, 2016.
   */
  public $release;

  /**
   * @integer
   * The amount held in reserve in this reserveEntries resource. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @string
   */
  public $onentity;

  /**
   * @string
   */
  public $entry;

  /**
   * @integer
   */
  public $event;

  /**
   * @string
   */
  public $eventId;

  /**
   * @string
   * The current status of the reserveEntry.
   */
  public $status;

  /**
   * @string
   * Message that provides details abount failure of the reserveEntry.
   */
  public $statusMessage;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

