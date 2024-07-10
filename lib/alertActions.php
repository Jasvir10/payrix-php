<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class alertActions extends BaseResource {
  protected $resourceName = "alertActions";
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
   * The medium to use to deliver this Alert.': 
   */
  public $type;

  /**
   * @string
   * When the 'type' field of this resource is set to 'web', this field determines the format that the Alert data should be sent in.
   */
  public $options;

  /**
   * @string
   * A value used to deliver the alert. Thie field should be set to an email address if the type is email, an endpoint if the type is web, etc.
   */
  public $value;

  /**
   * @string
   * The identifier of the Alert resource that defines this alertAction.
   */
  public $alert;

  /**
   * @integer
   * The number of times an alert should be resent in case of a failure. This fields can only be set for web type alertActions.
   */
  public $retries;

  /**
   * @string
   * The request header name for authentication to the endpoint.
   */
  public $headerName;

  /**
   * @string
   * The request header value for authentication to the endpoint.
   */
  public $headerValue;


}

