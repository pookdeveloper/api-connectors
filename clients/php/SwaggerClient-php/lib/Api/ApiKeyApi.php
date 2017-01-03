<?php
/**
 * APIKeyApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BitMEX API
 *
 * ## REST API for the BitMEX Trading Platform  [Changelog](/app/apiChangelog)  ----  #### Getting Started   ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](https://www.bitmex.com/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ---  ## All API Endpoints  Click to expand a section.
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * APIKeyApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIKeyApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return APIKeyApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation aPIKeyDisable
     *
     * Disable an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return \Swagger\Client\Model\APIKey
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyDisable($api_key_id)
    {
        list($response) = $this->aPIKeyDisableWithHttpInfo($api_key_id);
        return $response;
    }

    /**
     * Operation aPIKeyDisableWithHttpInfo
     *
     * Disable an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return Array of \Swagger\Client\Model\APIKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyDisableWithHttpInfo($api_key_id)
    {
        // verify the required parameter 'api_key_id' is set
        if ($api_key_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key_id when calling aPIKeyDisable');
        }
        // parse inputs
        $resourcePath = "/apiKey/disable";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($api_key_id !== null) {
            $formParams['apiKeyID'] = $this->apiClient->getSerializer()->toFormValue($api_key_id);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\APIKey',
                '/apiKey/disable'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\APIKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\APIKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation aPIKeyEnable
     *
     * Enable an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return \Swagger\Client\Model\APIKey
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyEnable($api_key_id)
    {
        list($response) = $this->aPIKeyEnableWithHttpInfo($api_key_id);
        return $response;
    }

    /**
     * Operation aPIKeyEnableWithHttpInfo
     *
     * Enable an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return Array of \Swagger\Client\Model\APIKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyEnableWithHttpInfo($api_key_id)
    {
        // verify the required parameter 'api_key_id' is set
        if ($api_key_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key_id when calling aPIKeyEnable');
        }
        // parse inputs
        $resourcePath = "/apiKey/enable";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($api_key_id !== null) {
            $formParams['apiKeyID'] = $this->apiClient->getSerializer()->toFormValue($api_key_id);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\APIKey',
                '/apiKey/enable'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\APIKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\APIKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation aPIKeyGet
     *
     * Get your API Keys.
     *
     * @param bool $reverse If true, will sort results newest first. (optional, default to false)
     * @return \Swagger\Client\Model\APIKey[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyGet($reverse = null)
    {
        list($response) = $this->aPIKeyGetWithHttpInfo($reverse);
        return $response;
    }

    /**
     * Operation aPIKeyGetWithHttpInfo
     *
     * Get your API Keys.
     *
     * @param bool $reverse If true, will sort results newest first. (optional, default to false)
     * @return Array of \Swagger\Client\Model\APIKey[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyGetWithHttpInfo($reverse = null)
    {
        // parse inputs
        $resourcePath = "/apiKey";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));

        // query params
        if ($reverse !== null) {
            $queryParams['reverse'] = $this->apiClient->getSerializer()->toQueryValue($reverse);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\APIKey[]',
                '/apiKey'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\APIKey[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\APIKey[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation aPIKeyNew
     *
     * Create a new API Key.
     *
     * @param string $name Key name. This name is for reference only. (optional)
     * @param string $cidr CIDR block to restrict this key to. To restrict to a single address, append \&quot;/32\&quot;, e.g. 207.39.29.22/32. Leave blank or set to 0.0.0.0/0 to allow all IPs. Only one block may be set. &lt;a href&#x3D;\&quot;http://software77.net/cidr-101.html\&quot;&gt;More on CIDR blocks&lt;/a&gt; (optional)
     * @param string $permissions Key Permissions. All keys can read margin and position data. Additional permissions must be added. Available: [\&quot;order\&quot;, \&quot;withdraw\&quot;]. (optional)
     * @param bool $enabled Set to true to enable this key on creation. Otherwise, it must be explicitly enabled via /apiKey/enable. (optional, default to false)
     * @param string $token OTP Token (YubiKey, Google Authenticator) (optional)
     * @return \Swagger\Client\Model\APIKey
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyNew($name = null, $cidr = null, $permissions = null, $enabled = null, $token = null)
    {
        list($response) = $this->aPIKeyNewWithHttpInfo($name, $cidr, $permissions, $enabled, $token);
        return $response;
    }

    /**
     * Operation aPIKeyNewWithHttpInfo
     *
     * Create a new API Key.
     *
     * @param string $name Key name. This name is for reference only. (optional)
     * @param string $cidr CIDR block to restrict this key to. To restrict to a single address, append \&quot;/32\&quot;, e.g. 207.39.29.22/32. Leave blank or set to 0.0.0.0/0 to allow all IPs. Only one block may be set. &lt;a href&#x3D;\&quot;http://software77.net/cidr-101.html\&quot;&gt;More on CIDR blocks&lt;/a&gt; (optional)
     * @param string $permissions Key Permissions. All keys can read margin and position data. Additional permissions must be added. Available: [\&quot;order\&quot;, \&quot;withdraw\&quot;]. (optional)
     * @param bool $enabled Set to true to enable this key on creation. Otherwise, it must be explicitly enabled via /apiKey/enable. (optional, default to false)
     * @param string $token OTP Token (YubiKey, Google Authenticator) (optional)
     * @return Array of \Swagger\Client\Model\APIKey, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyNewWithHttpInfo($name = null, $cidr = null, $permissions = null, $enabled = null, $token = null)
    {
        // parse inputs
        $resourcePath = "/apiKey";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }
        // form params
        if ($cidr !== null) {
            $formParams['cidr'] = $this->apiClient->getSerializer()->toFormValue($cidr);
        }
        // form params
        if ($permissions !== null) {
            $formParams['permissions'] = $this->apiClient->getSerializer()->toFormValue($permissions);
        }
        // form params
        if ($enabled !== null) {
            $formParams['enabled'] = $this->apiClient->getSerializer()->toFormValue($enabled);
        }
        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\APIKey',
                '/apiKey'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\APIKey', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\APIKey', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation aPIKeyRemove
     *
     * Remove an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return \Swagger\Client\Model\InlineResponse200
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyRemove($api_key_id)
    {
        list($response) = $this->aPIKeyRemoveWithHttpInfo($api_key_id);
        return $response;
    }

    /**
     * Operation aPIKeyRemoveWithHttpInfo
     *
     * Remove an API Key.
     *
     * @param string $api_key_id API Key ID (public component). (required)
     * @return Array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function aPIKeyRemoveWithHttpInfo($api_key_id)
    {
        // verify the required parameter 'api_key_id' is set
        if ($api_key_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key_id when calling aPIKeyRemove');
        }
        // parse inputs
        $resourcePath = "/apiKey";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json','application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($api_key_id !== null) {
            $formParams['apiKeyID'] = $this->apiClient->getSerializer()->toFormValue($api_key_id);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse200',
                '/apiKey'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
