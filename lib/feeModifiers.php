<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class feeModifiers extends BaseResource {
  protected $resourceName = "feeModifiers";
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
   * The identifier of the Fee that this Fee Modifier applies.
   */
  public $fee;

  /**
   * @string
   * The identifier of the Entity that this Fee Modifier applies for.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Org this Fee Modifiers should apply for on behalf of the Entity identified in the value of the 'entity' field. 
   * This field is optional. If it is set, then the Fee Modifier is applied to this Org instead.
   */
  public $org;

  /**
   * @string
   * The identifier of the Entity who should pay this Fee on behalf of the Entity identified in the value of the 'entity' or 'org' field. 
   * This field is optional. If it is set, then the Fee is charged to this Entity instead.
   */
  public $fromentity;

  /**
   * @integer
   * The unit of measure for the markup amount for the Fee.
   */
  public $markupUm;

  /**
   * @string
   * The total amount of the markup value for this Fee. 
   * The units used in this field are determined by the value of the 'markupUm' field on the Fee. If the 'markupUm' field is set to 'percentage', then this field specifies the Fee percentage to levy in basis points. If the 'markupUm' field is set to 'actual', then this field specifies the markup amount in cents.
   */
  public $markupAmount;

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
  public $division;


}

