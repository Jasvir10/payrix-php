<?php 
namespace PayrixPHP;

use PayrixPHP\Exceptions\InvalidRequest;

class bankAccounts extends BaseResource {
  protected $resourceName = "bank-accounts";

  public function update($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function delete($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

  public function create($params = array()) {
      throw new \PayrixPHP\Exceptions\InvalidRequest('Invalid Action');
  }

}

