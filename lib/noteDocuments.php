<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class noteDocuments extends BaseResource {
  protected $resourceName = "noteDocuments";
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
   * The identifier of the Note that owns this note documents resource.
   */
  public $note;

  /**
   * @string
   * The identifier of the Custom that relates to this notes resource.
   */
  public $custom;

  /**
   * @string
   */
  public $type;

  /**
   * @string
   */
  public $documentType;

  /**
   * @string
   * The name of the document on the referenced NoteDocument.
   */
  public $name;

  /**
   * @string
   * A brief description of the document.
   */
  public $description;

  /**
   * @string
   */
  public $status;

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

