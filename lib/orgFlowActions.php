<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class orgFlowActions extends BaseResource {
  protected $resourceName = "orgFlowActions";
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
   * The identifier of the orgFlow resource that this orgFlowActions resource is associated with.
   */
  public $orgFlow;

  /**
   * @string
   * The identifier of the Org resource that this orgFlowActions resource is associated with.
   */
  public $org;

  /**
   * @string
   * The action to take in relation to the Entity being processed.
   */
  public $action;


}

