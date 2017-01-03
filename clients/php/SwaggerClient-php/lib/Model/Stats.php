<?php
/**
 * Stats
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Stats Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Stats implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Stats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'root_symbol' => 'string',
        'currency' => 'string',
        'volume24h' => 'float',
        'turnover24h' => 'float',
        'open_interest' => 'float',
        'open_value' => 'float'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'root_symbol' => 'rootSymbol',
        'currency' => 'currency',
        'volume24h' => 'volume24h',
        'turnover24h' => 'turnover24h',
        'open_interest' => 'openInterest',
        'open_value' => 'openValue'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'root_symbol' => 'setRootSymbol',
        'currency' => 'setCurrency',
        'volume24h' => 'setVolume24h',
        'turnover24h' => 'setTurnover24h',
        'open_interest' => 'setOpenInterest',
        'open_value' => 'setOpenValue'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'root_symbol' => 'getRootSymbol',
        'currency' => 'getCurrency',
        'volume24h' => 'getVolume24h',
        'turnover24h' => 'getTurnover24h',
        'open_interest' => 'getOpenInterest',
        'open_value' => 'getOpenValue'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['root_symbol'] = isset($data['root_symbol']) ? $data['root_symbol'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['volume24h'] = isset($data['volume24h']) ? $data['volume24h'] : null;
        $this->container['turnover24h'] = isset($data['turnover24h']) ? $data['turnover24h'] : null;
        $this->container['open_interest'] = isset($data['open_interest']) ? $data['open_interest'] : null;
        $this->container['open_value'] = isset($data['open_value']) ? $data['open_value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['root_symbol'] === null) {
            $invalid_properties[] = "'root_symbol' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['root_symbol'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets root_symbol
     * @return string
     */
    public function getRootSymbol()
    {
        return $this->container['root_symbol'];
    }

    /**
     * Sets root_symbol
     * @param string $root_symbol
     * @return $this
     */
    public function setRootSymbol($root_symbol)
    {
        $this->container['root_symbol'] = $root_symbol;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets volume24h
     * @return float
     */
    public function getVolume24h()
    {
        return $this->container['volume24h'];
    }

    /**
     * Sets volume24h
     * @param float $volume24h
     * @return $this
     */
    public function setVolume24h($volume24h)
    {
        $this->container['volume24h'] = $volume24h;

        return $this;
    }

    /**
     * Gets turnover24h
     * @return float
     */
    public function getTurnover24h()
    {
        return $this->container['turnover24h'];
    }

    /**
     * Sets turnover24h
     * @param float $turnover24h
     * @return $this
     */
    public function setTurnover24h($turnover24h)
    {
        $this->container['turnover24h'] = $turnover24h;

        return $this;
    }

    /**
     * Gets open_interest
     * @return float
     */
    public function getOpenInterest()
    {
        return $this->container['open_interest'];
    }

    /**
     * Sets open_interest
     * @param float $open_interest
     * @return $this
     */
    public function setOpenInterest($open_interest)
    {
        $this->container['open_interest'] = $open_interest;

        return $this;
    }

    /**
     * Gets open_value
     * @return float
     */
    public function getOpenValue()
    {
        return $this->container['open_value'];
    }

    /**
     * Sets open_value
     * @param float $open_value
     * @return $this
     */
    public function setOpenValue($open_value)
    {
        $this->container['open_value'] = $open_value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


