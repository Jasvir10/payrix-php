<?php 
namespace PayrixPHP\Exceptions;

class Base extends \Exception {
  public function __construct($error) {
    parent::__construct($error);
  }
}
