<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class aggregationResults extends BaseResource {
  protected $resourceName = "aggregationResults";
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
   * The identifier of the AggregationResultGroup that this AggregationResult refers to.
   */
  public $aggregationResultGroup;

  /**
   * @string
   * The field of the resource where calculatios were made based on. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $field;

  /**
   * @integer
   * The value calculated by the count aggregation function. 
   * This field is specified as an integer.
   */
  public $count;

  /**
   * @string
   * The value calculated by the sum aggregation function. 
   * This field is specified as an integer.
   */
  public $sum;

  /**
   * @string
   * The value calculated by the min aggregation function. 
   * This field is specified as an integer.
   */
  public $min;

  /**
   * @string
   * The value calculated by the max aggregation function. 
   * This field is specified as an integer.
   */
  public $max;

  /**
   * @string
   */
  public $grouping;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

