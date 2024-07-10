<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class notes extends BaseResource {
  protected $resourceName = "notes";
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
   * The identifier of the Login that owns this notes resource.
   */
  public $login;

  /**
   * @string
   * The identifier of the Hold that relates to this notes resource.
   */
  public $hold;

  /**
   * @string
   * The identifier of the Txn that relates to this notes resource.
   */
  public $txn;

  /**
   * @string
   * The identifier of the TerminalTxn that relates to this notes resource.
   */
  public $terminalTxn;

  /**
   * @string
   * The identifier of the Entity that relates to this notes resource.
   */
  public $entity;

  /**
   * @string
   * The desired type to take on the referenced Note.
   */
  public $type;

  /**
   * @string
   * A Message/Note regarding this notes resource. 
   * This field is stored as a text string.
   */
  public $note;

  /**
   * @string
   * Free-form text for adding a message along with the type.
   */
  public $data;

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


}

