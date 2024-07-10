<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class holds extends BaseResource {
  protected $resourceName = "holds";
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
   * The identifier of the Login that owns this holds resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Txn that is being held with this hold.
   */
  public $txn;

  /**
   * @string
   * If this hold resource was triggered through a verification, then this field stores the identifier of the Verification.
   */
  public $verification;

  /**
   * @integer
   * The action taken on the referenced Txn.
   */
  public $action;

  /**
   * @string
   * If this hold was released, this will contain the timestamp for when it was released.
   */
  public $released;

  /**
   * @string
   * If this hold was reviewed, this will contain the timestamp for when it was reviewed.
   */
  public $reviewed;

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
   */
  public $entity;

  /**
   * @string
   */
  public $terminalTxn;

  /**
   * @string
   */
  public $decisionAction;

  /**
   * @string
   * The identifier of the Account that owns this holds resource.
   */
  public $account;

  /**
   * @string
   * If this hold resource was triggered through Payrix Integration Risk, then this field stores the identifier of the VerificationRef.
   */
  public $verificationRef;


  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

