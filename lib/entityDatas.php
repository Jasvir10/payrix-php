<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class entityDatas extends BaseResource {
  protected $resourceName = "entityDatas";
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
   * The Entity associated with this EntityData.
   */
  public $entity;

  /**
   * @string
   * The Base64 encoded image of the signature captured at the time of creating the Entity.
   */
  public $tcAcceptSignature;


  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

