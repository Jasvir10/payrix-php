<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class decisionActions extends BaseResource {
  protected $resourceName = "decisionActions";
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
   * The identifier of the Decision to which this resource applies
   */
  public $decision;

  /**
   * @string
   * The action to take when this check fails.
   */
  public $action;

  /**
   * @string
   * Where the action defined by this DecisionAction should apply
   */
  public $application;

  /**
   * @string
   * The type of score result on the related Decision
   */
  public $scoreType;

  /**
   * @string
   * The type of DecisionAction
   */
  public $type;

  /**
   * @string
   * The result field to check
   */
  public $field;

  /**
   * @string
   * The score to check.
   */
  public $score;

  /**
   * @string
   */
  public $data;

  /**
   * @string
   */
  public $message;

  /**
   * @string
   */
  public $code;

  /**
   * @string
   * A name for a group of decisionActions to be applied in conjunction when evaluating this DecisionAction. 
   * When grouping is used the DecisionActions will not apply unless they all match.
   */
  public $grouping;

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

