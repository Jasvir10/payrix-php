<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class teamLogins extends BaseResource {
  protected $resourceName = "teamLogins";
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
   * The identifier of the Team resource that the Login identified in the 'login' field should be marked as part of.
   */
  public $team;

  /**
   * @integer
   * Create rights for this Login on this Team.
   */
  public $create;

  /**
   * @integer
   */
  public $read;

  /**
   * @integer
   * Update rights for this Login on this Team.
   */
  public $update;

  /**
   * @integer
   * Delete rights for this Login on this Team.
   */
  public $delete;

  /**
   * @integer
   * Reference use rights for this Login on this Team.
   */
  public $reference;

  /**
   * @integer
   * Team administration rights for this Login on this Team.
   */
  public $teamAdmin;


}

