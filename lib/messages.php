<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class messages extends BaseResource {
  protected $resourceName = "messages";
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
   * The identifier of the messageThreads that owns this Messages resource.
   */
  public $messageThread;

  /**
   * @string
   */
  public $opposingMessage;

  /**
   * @string
   * Whether this resource is incoming or outgoing.
   */
  public $type;

  /**
   * @integer
   * Whether this resource was automatically generated or not.
   */
  public $generated;

  /**
   * @integer
   * Whether this resource is marked as secure.
   */
  public $secure;

  /**
   * @integer
   * Whether this resource is marked as read.
   */
  public $read;

  /**
   * @string
   * Free-form text for adding a message to a messageThread resource.
   */
  public $message;


  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

