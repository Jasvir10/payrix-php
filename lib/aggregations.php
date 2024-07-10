<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class aggregations extends BaseResource {
  protected $resourceName = "aggregations";
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
   * The identifier of the Login that owns this Aggregation.
   */
  public $login;

  /**
   * @string
   * The name of this Aggregation. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $name;

  /**
   * @string
   * A description of this Aggregation. 
   * This field is stored as a text string and must be between 0 and 100 characters long.
   */
  public $description;

  /**
   * @integer
   * The category number of the resource used in the aggregation. 
   * This field is specified as an integer.
   */
  public $resource;

  /**
   * @string
   * The search query used to find records and apply the desired calculation. 
   * This field is stored as a text string and must be between 0 and 1000 characters long.
   */
  public $search;

  /**
   * @string
   * The especification of the desired aggregation functions including count, sum, min and max. 
   * This field is stored as a text string and must be between 1 and 100 characters long.
   */
  public $totals;

  /**
   * @string
   * The current status of the aggregation process.
   */
  public $status;

  /**
   * @string
   * The schedule that determines when the aggregation function will be processed.
   */
  public $schedule;

  /**
   * @integer
   * A multiplier that you can use to adjust the schedule set in the 'schedule' field, such as daily, weekly, monthly, or annually. 
   * This field is specified as an integer and its value determines how the interval is multiplied.
   */
  public $scheduleFactor;

  /**
   * @integer
   * The date on which the aggregation processing should start. 
   * The date is specified as a twelve digit string in YYYYMMDDHHII format, for example, '201601201528' for January 20, 2016 at 15:28 (3:28 pm). 
   * The value of this field must represent a date in the future, or the present date. When the schedule is set to HOURLY (1) the minute part of the time must be divisible by 10 (15:10, 15:20, 15:30, etc...).
   */
  public $start;

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
   * The identifier of the Entity that this Aggregation applies to.
   */
  public $entity;

  /**
   * @string
   * The identifier of the Login that this Aggregation applies to.
   */
  public $forlogin;

  /**
   * @string
   * The identifier of the Org that this Aggregation applies to.
   */
  public $org;

  /**
   * @string
   * The identifier of the Team that this Aggregation applies to.
   */
  public $team;

  /**
   * @string
   * The identifier of the Division that this Aggregation applies to.
   */
  public $division;

  /**
   * @string
   * The identifier of the Partition that this Aggregation applies to.
   */
  public $partition;

  /**
   * @string
   * The type of aggregation. This will automatically set the search and total values.
   */
  public $type;

  /**
   * @string
   * The level of user that this aggregation will run for.
   */
  public $level;

  /**
   * @integer
   * Indicates whether this aggregation was automatically created.
   */
  public $default;

  /**
   * @string
   */
  public $degrouping;


}

