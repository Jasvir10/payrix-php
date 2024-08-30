<?php 
namespace PayrixPHP;

use \PayrixPHP\Http\Request,
    \PayrixPHP\Http\Response,
    \PayrixPHP\Http\RequestParams,
    \PayrixPHP\Exceptions\InvalidRequest,
    \PayrixPHP\Utilities\Config as Config;

class BaseResource {
  protected $response;
  protected $resourceName;
  protected $requestOptions;

  public function __construct($params = array()) {
    $this->requestOptions = new \PayrixPHP\Http\RequestParams();
    if ($params) {
      foreach ($params as $key => $value) {
        $this->$key = $value;
      }
    }
  }

  public function retrieve($params = array(), $page = 1, $limit = 3, $totals = array())
  {
      $Request = Request::getInstance();
      // Get request values
      $values = $this->getRequestValues($params);
      // Get search params
      $search = $this->_buildSearch($values);
      if ($this->requestOptions) {
          $search .= $this->requestOptions->getSort();
      }
      $search = rtrim($search, "&");
      
      // Set the page to request
      $this->requestOptions->page($page);
      // Set the limit to request
      $this->requestOptions->limit($limit);
      
      // Set the headers
      // Content type header
      $headers = array('Content-Type: application/json');
      // Search header
      $headers[] = $search;
      $apiKey = Config::getApiKey();
      $sessionKey = Config::getSessionKey();
      // Auth header
      if ($apiKey) {
          $headers[] = "APIKEY: {$apiKey}";
      }
      else if ($sessionKey) {
          $headers[] = "SESSIONKEY: {$sessionKey}";
      }
      // Totals header
      $totals = $this->requestOptions->getTotals();
      if ($totals)
      {
          $headers[] = $totals;
      }
      // Set the url;
      $url = Config::getUrl();
      if (!$url) {
          throw new \PayrixPHP\Exceptions\InvalidRequest("Invalid URL");
      }
      $url .= "/{$this->resourceName}";
      $expand = "";
      if ($this->requestOptions) {
          $expand .= $this->requestOptions->getExpand();
          $page = $this->requestOptions->getPage();
          $limit = $this->requestOptions->getLimit();
          $url .= "?";
          if ($expand) {
              $url .= $expand . "&";
          }
          if ($page) {
              $url .= $page . "&";
          }
          if ($limit) {
              $url .= $limit . "&";
          }
      }
      $url = rtrim($url, "/[& | ?]/");
      //echo $url;exit;
      $res = $Request->sendHttp('GET', $url, '', $headers);
      $this->response = new Response($res[0], $res[1], get_class($this));
      $success = $this->_validateResponse();
      if ($success) {
        // Increment page
        $this->requestOptions->goNextPage();
      }
      return $success;
  }

  /**
     * Validate data using a POST request.
     *
     * @param array $params
     * @return mixed
     * @throws \PayrixPHP\Exceptions\ApiErrors
     */
    public function validate(array $params = array()) {
      $Request = Request::getInstance();

      // Prepare the request values
      $values = $this->getRequestValues($params, true);
      $headers = array('Content-Type: application/json');
      $apiKey = Config::getApiKey();
      $sessionKey = Config::getSessionKey();
      if ($apiKey) {
          $headers[] = "APIKEY: {$apiKey}";
      } else if ($sessionKey) {
          $headers[] = "SESSIONKEY: {$sessionKey}";
      }

      // Build the URL for validation
      $url = Config::getUrl();
      if (!$url) {
          throw new \PayrixPHP\Exceptions\InvalidRequest("Invalid URL");
      }
      $url .= "/{$this->resourceName}/validate";

      // Send the request
      $res = $Request->sendHttp('POST', $url, $values, $headers);
      $this->response = new Response($res[0], $res[1], get_class($this));

      return $this->_validateResponse();
  }

  public function create($params = array()) {
    $Request = Request::getInstance();

    // Get request values
    $values = $this->getRequestValues($params, true);
    $headers = array('Content-Type: application/json');
    $apiKey = Config::getApiKey();
    $sessionKey = Config::getSessionKey();
    if ($apiKey) {
      $headers[] = "APIKEY: {$apiKey}";
    }
    else if ($sessionKey) {
      $headers[] = "SESSIONKEY: {$sessionKey}"; 
    }
    $url = Config::getUrl();
    if (!$url) {
      throw new \PayrixPHP\Exceptions\InvalidRequest("Invalid URL");
    }
    $url .= "/{$this->resourceName}";
    $res = $Request->sendHttp(
      'POST',
      $url,
      $values,
      $headers
    );
    $this->response = new Response($res[0], $res[1], get_class($this));
    return $this->_validateResponse();
  }

  public function update($params = array()) {
    $Request = Request::getInstance();

    // Get request values
    $values = $this->getRequestValues($params, true);
    if (!isset($values["id"])) {
      if (Config::exceptionsEnabled()) {
        throw new \PayrixPHP\Exceptions\InvalidRequest("ID is required for this action");
      }
      else {
        return false;
      }
    }
    else {
      $id = $values["id"];
      unset($values["id"]);
    }

    $headers = array('Content-Type: application/json');
    $apiKey = Config::getApiKey();
    $sessionKey = Config::getSessionKey();
    if ($apiKey) {
      $headers[] = "APIKEY: {$apiKey}";
    }
    else if ($sessionKey) {
      $headers[] = "SESSIONKEY: {$sessionKey}"; 
    }
    $url = Config::getUrl();
    if (!$url) {
      throw new \PayrixPHP\Exceptions\InvalidRequest("Invalid URL");
    }
    $url .= "/{$this->resourceName}/{$id}";
    $res = $Request->sendHttp(
      'PUT',
      $url,
      $values,
      $headers
    );

    $this->response = new Response($res[0], $res[1], get_class($this));
    return $this->_validateResponse();
  }

  public function delete($params = array()) {
    $Request = Request::getInstance();

    // Get request values
    $values = $this->getRequestValues($params);
    if (!isset($values["id"])) {
      if (Config::exceptionsEnabled()) {
        throw new \PayrixPHP\Exceptions\InvalidRequest("ID is required for this action;");
      }
      else {
        return false;
      }
    }

    $headers = array('Content-Type: application/json');
    $apiKey = Config::getApiKey();
    $sessionKey = Config::getSessionKey();
    if ($apiKey) {
      $headers[] = "APIKEY: {$apiKey}";
    }
    else if ($sessionKey) {
      $headers[] = "SESSIONKEY: {$sessionKey}"; 
    }
    $url = Config::getUrl();
    if (!$url) {
      throw new \PayrixPHP\Exceptions\InvalidRequest("Invalid URL");
    }
    $url .= "/{$this->resourceName}/{$values["id"]}";
    $res = $Request->sendHttp(
      'DELETE',
      $url,
      '',
      $headers
    );

    $this->response = new Response($res[0], $res[1], get_class($this));
    return $this->_validateResponse();
  }

  // Setter for nested objects
  public function __set($field, $param) {
    if (!is_string($field)) {
      return false;
    }

    $this->{$field} = $param;
  }

  // Get the status code of the request
  public function getStatus() {
    if (!$this->response) {
      return false;
    }
    return $this->response->getStatus();
  }

  // Whether the response has error or not
  public function hasErrors() {
    if (!$this->response) {
      return false;
    }
    return $this->response->hasErrors();
  }

  // Retrieve the response in array format
  public function getResponse() {
    if (!$this->response) {
      return array();
    }
    return $this->response->getResponse();
  }

  // Retrieve the errors in array format
  public function getErrors() {
    if (!$this->response) {
      return array();
    }
    return $this->response->getErrors();
  }

  // Retrieve the details of the response
  public function getDetails() {
    if (!$this->response) {
      return array();
    }
    return $this->response->getDetails();
  }

  // Retrieve the totals of the response
  public function getTotals() {
    if (!$this->response) {
      return array();
    }
    return $this->response->getTotals();
  }

  public function hasMore() {
    if (!$this->response) {
      return true;
    }
    return $this->response->hasMore();
  }

  public function setOptions($params = false) {
    if ($params && get_class($params) === "PayrixPHP\Http\RequestParams") {
      $this->requestOptions = $params;
    }
  }

  public function getOptions() {
    return $this->requestOptions;
  }

  private function _buildSearch($values = array()) {
    $search = "";
    foreach ($values as $key => $value) {
      if (isset($value)) {
        $search .= "{$key}={$value}&";
      }
    }
    return "SEARCH: {$search}";
  }

  protected function getRequestValues($params = array(), $getNested = false) {
    if ($params) {
      foreach ($params as $key => $value) {
        $this->$key = $value;
      }
      $params = null;
    }
    $requestOptions = $this->requestOptions;
    $resourceName = $this->resourceName;
    $response = $this->response;

    $this->requestOptions = null;
    $this->resourceName = null;
    $this->response = null;
    $requestParams = array();
    foreach ($this as $key => $value) {
      if (isset($value)) {
        if (is_scalar($value)) {
          // Add to request array
          $requestParams[$key] = $value;
        }
        else if ($getNested) {
          // Process nested arrays/objects as well
          // Check if the params have nested values
          $nestedParams = array();
          if (isset($params[$key])) {
            $nestedParams = $params[$key];
          }
          if (is_array($value)) {
            // Nested array of objects
            $requestParams[$key] = array();
            foreach ($value as $subKey => $subVal) {
              if ($subVal instanceof BaseResource) {
                // Append this object to the request array
                $requestParams[$key][] = $subVal->getRequestValues($nestedParams, true);
              }
              else if (is_scalar($subVal)) {
                // Append direct values to this nested array
                $requestParams[$key][$subKey] = $subVal;
              }
              else if (is_array($subVal)) {
                // Append this array to the request array
                $emptyResource = new BaseResource($subVal);
                $requestParams[$key][$subKey] = $emptyResource->getRequestValues($nestedParams, true);
              }
              else {
                // Unknown key detected, throw an exception
                throw new \PayrixPHP\Exceptions\InvalidRequest("Incorrect nesting structure for request");
              }
            }
          }
          else if ($value instanceof BaseResource) {
            $requestParams[$key] = $value->getRequestValues($nestedParams, true);
          }
          else {
            // Unknown key detected, throw an exception
            throw new \PayrixPHP\Exceptions\InvalidRequest("Incorrect nesting structure for request");
          }
        }
      }
    }
    $this->requestOptions = $requestOptions;
    $this->resourceName = $resourceName;
    $this->response = $response;
    return $requestParams;
  }

  private function _validateResponse() {
    // Get the errors
    if ($this->response->hasErrors()) {
      if (Config::exceptionsEnabled()) {
        throw new \PayrixPHP\Exceptions\ApiErrors('There are errors in the response');
      }
      return false;
    }
    return true;
  }
}
