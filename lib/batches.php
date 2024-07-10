<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class batches extends BaseResource {
  protected $resourceName = "batches";
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
   * The identifier of the Merchant that is associated with this Batch.
   */
  public $merchant;

  /**
   * @string
   */
  public $date;

  /**
   * @string
   * The current status of this Batch.
   */
  public $status;

  /**
   * @string
   * The merchant's reference code of the batch. 
   * This field is stored as a text string and must be between 0 and 50 characters long.
   */
  public $clientRef;

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
  public $processingDate;

  /**
   * @string
   */
  public $processingId;


  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

