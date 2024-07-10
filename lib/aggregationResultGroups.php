<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class aggregationResultGroups extends BaseResource {
  protected $resourceName = "aggregationResultGroups";
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
   * The identifier of the Aggregation that this AggregationResult refers to.
   */
  public $aggregation;

  /**
   * @integer
   * The category number of the resource used in the aggregation. 
   * This field is specified as an integer and is copied from the aggregation.
   */
  public $resource;

  /**
   * @string
   * The search query used to find records and apply the desired calculation. 
   * This field is stored as a text string, must be between 0 and 1000 characters long, and is copied from the aggregation.
   */
  public $search;

  /**
   * @string
   * The especification of the desired aggregation functions including count, sum, min and max. 
   * This field is stored as a text string, must be between 1 and 100 characters long, and is copied from the aggregation.
   */
  public $totals;

  /**
   * @string
   */
  public $lastModified;

  /**
   * @integer
   */
  public $effective;

  /**
   * @integer
   */
  public $default;

  /**
   * @string
   */
  public $type;

  /**
   * @string
   */
  public $level;

  /**
   * @string
   */
  public $degrouping;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

