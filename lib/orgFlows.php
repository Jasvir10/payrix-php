<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class orgFlows extends BaseResource {
  protected $resourceName = "orgFlows";
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
   * The identifier of the Login resource for which this orgFlows resource is triggered.
   */
  public $forlogin;

  /**
   * @string
   * This field sets the trigger that determines when this orgFlow runs.
   */
  public $trigger;

  /**
   * @string
   * The identifier of the Team resource for which this orgFlows resource is triggered.
   */
  public $team;

  /**
   * @string
   * The identified of the Division resource for which this orgFlows resource is triggered.
   */
  public $division;


}

