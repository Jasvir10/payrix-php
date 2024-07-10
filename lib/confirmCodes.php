<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class confirmCodes extends BaseResource {
  protected $resourceName = "confirmCodes";
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
   * The identifier of the Login resource that this confirmation code relates to.
   */
  public $login;

  /**
   * @string
   * The type of this confirmCode.
   */
  public $type;

  /**
   * @string
   * If the 'type' of this confirmation code is '2' (email), then this field represents the email address that requires verification.
   */
  public $email;

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


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

