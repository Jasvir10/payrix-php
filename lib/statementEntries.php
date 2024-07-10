<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class statementEntries extends BaseResource {
  protected $resourceName = "statementEntries";
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
   * The identifier of the Entity that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * The identifier of the Billing that this StatementEntry refers to.
   */
  public $billing;

  /**
   * @string
   * The identifier of the Statement that this StatementEntry refers to.
   */
  public $statement;

  /**
   * @string
   * If the activity that this StatementEntry refers to is the charging of a Fee, then this field stores the identifier of the corresponding Fee resource.
   */
  public $fee;

  /**
   * @string
   * If the activity that this StatementEntry refers to is a ProfitShare, then this field stores the identifier of the corresponding ProfitShare resource.
   */
  public $profitShare;

  /**
   * @integer
   * The type of event that triggered this StatementEntry resource.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this StatementEntry.
   */
  public $eventId;

  /**
   * @string
   * A description of this StatementEntry.
   */
  public $description;

  /**
   * @string
   * The amount involved in this StatementEntry. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @integer
   */
  public $deductedFromBalance;

  /**
   * @string
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that will be paid for this charge.
   */
  public $forentity;

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

