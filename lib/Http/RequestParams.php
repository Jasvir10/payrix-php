<?php 
namespace PayrixPHP\Http;

class RequestParams {
  // Sort parameter to be included in the SEARCH header
  // only for GET requests
  private $sort;
  // Query parameters to be used in GET requests
  private $expand = array();
  // Page to request
  private $page;
  // Totals header to be used in the GET request
  private $totals = array();

  // Class constructor
  public function __construct($sort = "", $expand = array(), $page = 1, $totals = array()) {
    if (is_array($sort) && count($sort) == 2) {
      $this->sort = "{$sort[0]}[sort]={$sort[1]}";
    }
    else {
      $this->sort = $sort;
    }
    if (is_array($expand)) {
      $this->expand = $expand;
    }
    $this->totals($totals);
    $this->page = $page;
  }

  // Get the sort parameters
  public function getSort() {
    return $this->sort;
  }

  // Set the sort parameter to be used in the GET requests
  public function sort($field, $value) {
    if (is_string($field) && is_string($value)) {
      $this->sort = "{$field}[sort]={$value}";
    }
  }

  // Retrieve the query parameters
  public function getExpand() {
    $expand = "";
    foreach ($this->expand as $string) {
      $fields = explode(", ", $string);
      $expand .= "expand";
      foreach ($fields as $field) {
        $expand .= "[{$field}]";
      }
      $expand .= "[]&";
    }
    return rtrim($expand, "&");
  }

  // Set the query parameters to be used in the GET requests
  public function expand($expand = array()) {
    if (is_array($expand)) {
      $this->expand = $expand;
    }
  }

  // Set the page to request
  public function page($page) {
    $this->page = $page;
  }
  // Get the page
  public function getPage() {
    if ($this->page) {
      return "page[number]=" . $this->page;
    }
    return "";
  }

  // Increment page
  public function goNextPage() {
    if ($this->page) {
      $this->page = $this->page + 1;
    }
    else {
      $this->page = 1;
    }
  }

  // Get the totals parameters
  public function getTotals() {
    if (count($this->totals)) {
      return "TOTALS: " . implode('&', $this->totals);
    }
    return false;
  }

  // Set the totals parameter to be used in the GET requests
  // the totals param must be an array with at least one of these keys (min | max | count | sum)
  // each key will contain an array with all the values e.g. array("sum" => array ('approved', 'reserved'))
  public function totals($array = array()) {
    // Loop the action in the totals array (min | max | count | sum)
    foreach($array as $totalsAction => $values) {
      if (is_array($values) &&
         ($totalsAction == 'min' || $totalsAction == 'max' ||
          $totalsAction == 'count' || $totalsAction == 'sum')) {
        // Loop the values inside each totals action
        foreach($values as $value) {
          $this->totals[] = "{$totalsAction}[]={$value}";
        }
      }
    }
  }
}
