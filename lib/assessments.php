<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class assessments extends BaseResource {
  protected $resourceName = "assessments";
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
   * The identifier of the Entity that owns this assessment.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Entity that this assessment refers to. This is the owner of the record that triggered the charge.
   */
  public $onentity;

  /**
   * @string
   * The identifier of the Entity that this assessment applies to. 
   * This is an optional field and will create an opposing assessment for this entity.
   */
  public $forentity;

  /**
   * @string
   * The identifier of the Partition that this assessment resource refers to.
   */
  public $partition;

  /**
   * @string
   * The identifier of the Assessment of the forentity assessment.
   */
  public $opposingAssessment;

  /**
   * @string
   * The identifier of the Fee that this assessment resource refers to.
   */
  public $fee;

  /**
   * @string
   * The identifier of the Disbursement that this assessment resource refers to.
   */
  public $disbursement;

  /**
   * @string
   * The identifier of the Txn that this assessment resource refers to.
   */
  public $txn;

  /**
   * @string
   * The identifier of the Chargeback that this assessment resource refers to.
   */
  public $chargeback;

  /**
   * @string
   * The identifier of the Merchant that this assessment resource refers to.
   */
  public $merchant;

  /**
   * @integer
   * The type of event that triggered this assessments resource.
   */
  public $event;

  /**
   * @string
   * The identifier of the record that is associated with this assessments resource.
   */
  public $eventId;

  /**
   * @string
   * A description of this assessments resource.
   */
  public $description;

  /**
   * @string
   * The amount involved in this assessments resource. It refers to the amount charged, transferred, or disbursed. 
   * This field is specified as an integer in cents.
   */
  public $amount;

  /**
   * @string
   */
  public $platform;

  /**
   * @string
   * The currency of the amount in this assessments resource.
   */
  public $currency;


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

