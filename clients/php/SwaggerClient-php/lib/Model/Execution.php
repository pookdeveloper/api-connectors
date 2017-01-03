<?php
/**
 * Execution
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
 * Execution Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Execution implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Execution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'exec_id' => 'string',
        'order_id' => 'string',
        'cl_ord_id' => 'string',
        'cl_ord_link_id' => 'string',
        'account' => 'float',
        'symbol' => 'string',
        'side' => 'string',
        'last_qty' => 'float',
        'last_px' => 'double',
        'underlying_last_px' => 'double',
        'last_mkt' => 'string',
        'last_liquidity_ind' => 'string',
        'simple_order_qty' => 'double',
        'order_qty' => 'float',
        'price' => 'double',
        'display_qty' => 'float',
        'stop_px' => 'double',
        'peg_offset_value' => 'double',
        'peg_price_type' => 'string',
        'currency' => 'string',
        'settl_currency' => 'string',
        'exec_type' => 'string',
        'ord_type' => 'string',
        'time_in_force' => 'string',
        'exec_inst' => 'string',
        'contingency_type' => 'string',
        'ex_destination' => 'string',
        'ord_status' => 'string',
        'triggered' => 'string',
        'working_indicator' => 'bool',
        'ord_rej_reason' => 'string',
        'simple_leaves_qty' => 'double',
        'leaves_qty' => 'float',
        'simple_cum_qty' => 'double',
        'cum_qty' => 'float',
        'avg_px' => 'double',
        'commission' => 'double',
        'trade_publish_indicator' => 'string',
        'multi_leg_reporting_type' => 'string',
        'text' => 'string',
        'trd_match_id' => 'string',
        'exec_cost' => 'float',
        'exec_comm' => 'float',
        'home_notional' => 'double',
        'foreign_notional' => 'double',
        'transact_time' => '\DateTime',
        'timestamp' => '\DateTime'
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
        'exec_id' => 'execID',
        'order_id' => 'orderID',
        'cl_ord_id' => 'clOrdID',
        'cl_ord_link_id' => 'clOrdLinkID',
        'account' => 'account',
        'symbol' => 'symbol',
        'side' => 'side',
        'last_qty' => 'lastQty',
        'last_px' => 'lastPx',
        'underlying_last_px' => 'underlyingLastPx',
        'last_mkt' => 'lastMkt',
        'last_liquidity_ind' => 'lastLiquidityInd',
        'simple_order_qty' => 'simpleOrderQty',
        'order_qty' => 'orderQty',
        'price' => 'price',
        'display_qty' => 'displayQty',
        'stop_px' => 'stopPx',
        'peg_offset_value' => 'pegOffsetValue',
        'peg_price_type' => 'pegPriceType',
        'currency' => 'currency',
        'settl_currency' => 'settlCurrency',
        'exec_type' => 'execType',
        'ord_type' => 'ordType',
        'time_in_force' => 'timeInForce',
        'exec_inst' => 'execInst',
        'contingency_type' => 'contingencyType',
        'ex_destination' => 'exDestination',
        'ord_status' => 'ordStatus',
        'triggered' => 'triggered',
        'working_indicator' => 'workingIndicator',
        'ord_rej_reason' => 'ordRejReason',
        'simple_leaves_qty' => 'simpleLeavesQty',
        'leaves_qty' => 'leavesQty',
        'simple_cum_qty' => 'simpleCumQty',
        'cum_qty' => 'cumQty',
        'avg_px' => 'avgPx',
        'commission' => 'commission',
        'trade_publish_indicator' => 'tradePublishIndicator',
        'multi_leg_reporting_type' => 'multiLegReportingType',
        'text' => 'text',
        'trd_match_id' => 'trdMatchID',
        'exec_cost' => 'execCost',
        'exec_comm' => 'execComm',
        'home_notional' => 'homeNotional',
        'foreign_notional' => 'foreignNotional',
        'transact_time' => 'transactTime',
        'timestamp' => 'timestamp'
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
        'exec_id' => 'setExecId',
        'order_id' => 'setOrderId',
        'cl_ord_id' => 'setClOrdId',
        'cl_ord_link_id' => 'setClOrdLinkId',
        'account' => 'setAccount',
        'symbol' => 'setSymbol',
        'side' => 'setSide',
        'last_qty' => 'setLastQty',
        'last_px' => 'setLastPx',
        'underlying_last_px' => 'setUnderlyingLastPx',
        'last_mkt' => 'setLastMkt',
        'last_liquidity_ind' => 'setLastLiquidityInd',
        'simple_order_qty' => 'setSimpleOrderQty',
        'order_qty' => 'setOrderQty',
        'price' => 'setPrice',
        'display_qty' => 'setDisplayQty',
        'stop_px' => 'setStopPx',
        'peg_offset_value' => 'setPegOffsetValue',
        'peg_price_type' => 'setPegPriceType',
        'currency' => 'setCurrency',
        'settl_currency' => 'setSettlCurrency',
        'exec_type' => 'setExecType',
        'ord_type' => 'setOrdType',
        'time_in_force' => 'setTimeInForce',
        'exec_inst' => 'setExecInst',
        'contingency_type' => 'setContingencyType',
        'ex_destination' => 'setExDestination',
        'ord_status' => 'setOrdStatus',
        'triggered' => 'setTriggered',
        'working_indicator' => 'setWorkingIndicator',
        'ord_rej_reason' => 'setOrdRejReason',
        'simple_leaves_qty' => 'setSimpleLeavesQty',
        'leaves_qty' => 'setLeavesQty',
        'simple_cum_qty' => 'setSimpleCumQty',
        'cum_qty' => 'setCumQty',
        'avg_px' => 'setAvgPx',
        'commission' => 'setCommission',
        'trade_publish_indicator' => 'setTradePublishIndicator',
        'multi_leg_reporting_type' => 'setMultiLegReportingType',
        'text' => 'setText',
        'trd_match_id' => 'setTrdMatchId',
        'exec_cost' => 'setExecCost',
        'exec_comm' => 'setExecComm',
        'home_notional' => 'setHomeNotional',
        'foreign_notional' => 'setForeignNotional',
        'transact_time' => 'setTransactTime',
        'timestamp' => 'setTimestamp'
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
        'exec_id' => 'getExecId',
        'order_id' => 'getOrderId',
        'cl_ord_id' => 'getClOrdId',
        'cl_ord_link_id' => 'getClOrdLinkId',
        'account' => 'getAccount',
        'symbol' => 'getSymbol',
        'side' => 'getSide',
        'last_qty' => 'getLastQty',
        'last_px' => 'getLastPx',
        'underlying_last_px' => 'getUnderlyingLastPx',
        'last_mkt' => 'getLastMkt',
        'last_liquidity_ind' => 'getLastLiquidityInd',
        'simple_order_qty' => 'getSimpleOrderQty',
        'order_qty' => 'getOrderQty',
        'price' => 'getPrice',
        'display_qty' => 'getDisplayQty',
        'stop_px' => 'getStopPx',
        'peg_offset_value' => 'getPegOffsetValue',
        'peg_price_type' => 'getPegPriceType',
        'currency' => 'getCurrency',
        'settl_currency' => 'getSettlCurrency',
        'exec_type' => 'getExecType',
        'ord_type' => 'getOrdType',
        'time_in_force' => 'getTimeInForce',
        'exec_inst' => 'getExecInst',
        'contingency_type' => 'getContingencyType',
        'ex_destination' => 'getExDestination',
        'ord_status' => 'getOrdStatus',
        'triggered' => 'getTriggered',
        'working_indicator' => 'getWorkingIndicator',
        'ord_rej_reason' => 'getOrdRejReason',
        'simple_leaves_qty' => 'getSimpleLeavesQty',
        'leaves_qty' => 'getLeavesQty',
        'simple_cum_qty' => 'getSimpleCumQty',
        'cum_qty' => 'getCumQty',
        'avg_px' => 'getAvgPx',
        'commission' => 'getCommission',
        'trade_publish_indicator' => 'getTradePublishIndicator',
        'multi_leg_reporting_type' => 'getMultiLegReportingType',
        'text' => 'getText',
        'trd_match_id' => 'getTrdMatchId',
        'exec_cost' => 'getExecCost',
        'exec_comm' => 'getExecComm',
        'home_notional' => 'getHomeNotional',
        'foreign_notional' => 'getForeignNotional',
        'transact_time' => 'getTransactTime',
        'timestamp' => 'getTimestamp'
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
        $this->container['exec_id'] = isset($data['exec_id']) ? $data['exec_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['cl_ord_id'] = isset($data['cl_ord_id']) ? $data['cl_ord_id'] : null;
        $this->container['cl_ord_link_id'] = isset($data['cl_ord_link_id']) ? $data['cl_ord_link_id'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['last_qty'] = isset($data['last_qty']) ? $data['last_qty'] : null;
        $this->container['last_px'] = isset($data['last_px']) ? $data['last_px'] : null;
        $this->container['underlying_last_px'] = isset($data['underlying_last_px']) ? $data['underlying_last_px'] : null;
        $this->container['last_mkt'] = isset($data['last_mkt']) ? $data['last_mkt'] : null;
        $this->container['last_liquidity_ind'] = isset($data['last_liquidity_ind']) ? $data['last_liquidity_ind'] : null;
        $this->container['simple_order_qty'] = isset($data['simple_order_qty']) ? $data['simple_order_qty'] : null;
        $this->container['order_qty'] = isset($data['order_qty']) ? $data['order_qty'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['display_qty'] = isset($data['display_qty']) ? $data['display_qty'] : null;
        $this->container['stop_px'] = isset($data['stop_px']) ? $data['stop_px'] : null;
        $this->container['peg_offset_value'] = isset($data['peg_offset_value']) ? $data['peg_offset_value'] : null;
        $this->container['peg_price_type'] = isset($data['peg_price_type']) ? $data['peg_price_type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['settl_currency'] = isset($data['settl_currency']) ? $data['settl_currency'] : null;
        $this->container['exec_type'] = isset($data['exec_type']) ? $data['exec_type'] : null;
        $this->container['ord_type'] = isset($data['ord_type']) ? $data['ord_type'] : null;
        $this->container['time_in_force'] = isset($data['time_in_force']) ? $data['time_in_force'] : null;
        $this->container['exec_inst'] = isset($data['exec_inst']) ? $data['exec_inst'] : null;
        $this->container['contingency_type'] = isset($data['contingency_type']) ? $data['contingency_type'] : null;
        $this->container['ex_destination'] = isset($data['ex_destination']) ? $data['ex_destination'] : null;
        $this->container['ord_status'] = isset($data['ord_status']) ? $data['ord_status'] : null;
        $this->container['triggered'] = isset($data['triggered']) ? $data['triggered'] : null;
        $this->container['working_indicator'] = isset($data['working_indicator']) ? $data['working_indicator'] : null;
        $this->container['ord_rej_reason'] = isset($data['ord_rej_reason']) ? $data['ord_rej_reason'] : null;
        $this->container['simple_leaves_qty'] = isset($data['simple_leaves_qty']) ? $data['simple_leaves_qty'] : null;
        $this->container['leaves_qty'] = isset($data['leaves_qty']) ? $data['leaves_qty'] : null;
        $this->container['simple_cum_qty'] = isset($data['simple_cum_qty']) ? $data['simple_cum_qty'] : null;
        $this->container['cum_qty'] = isset($data['cum_qty']) ? $data['cum_qty'] : null;
        $this->container['avg_px'] = isset($data['avg_px']) ? $data['avg_px'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['trade_publish_indicator'] = isset($data['trade_publish_indicator']) ? $data['trade_publish_indicator'] : null;
        $this->container['multi_leg_reporting_type'] = isset($data['multi_leg_reporting_type']) ? $data['multi_leg_reporting_type'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['trd_match_id'] = isset($data['trd_match_id']) ? $data['trd_match_id'] : null;
        $this->container['exec_cost'] = isset($data['exec_cost']) ? $data['exec_cost'] : null;
        $this->container['exec_comm'] = isset($data['exec_comm']) ? $data['exec_comm'] : null;
        $this->container['home_notional'] = isset($data['home_notional']) ? $data['home_notional'] : null;
        $this->container['foreign_notional'] = isset($data['foreign_notional']) ? $data['foreign_notional'] : null;
        $this->container['transact_time'] = isset($data['transact_time']) ? $data['transact_time'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['exec_id'] === null) {
            $invalid_properties[] = "'exec_id' can't be null";
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
        if ($this->container['exec_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets exec_id
     * @return string
     */
    public function getExecId()
    {
        return $this->container['exec_id'];
    }

    /**
     * Sets exec_id
     * @param string $exec_id
     * @return $this
     */
    public function setExecId($exec_id)
    {
        $this->container['exec_id'] = $exec_id;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets cl_ord_id
     * @return string
     */
    public function getClOrdId()
    {
        return $this->container['cl_ord_id'];
    }

    /**
     * Sets cl_ord_id
     * @param string $cl_ord_id
     * @return $this
     */
    public function setClOrdId($cl_ord_id)
    {
        $this->container['cl_ord_id'] = $cl_ord_id;

        return $this;
    }

    /**
     * Gets cl_ord_link_id
     * @return string
     */
    public function getClOrdLinkId()
    {
        return $this->container['cl_ord_link_id'];
    }

    /**
     * Sets cl_ord_link_id
     * @param string $cl_ord_link_id
     * @return $this
     */
    public function setClOrdLinkId($cl_ord_link_id)
    {
        $this->container['cl_ord_link_id'] = $cl_ord_link_id;

        return $this;
    }

    /**
     * Gets account
     * @return float
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param float $account
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets symbol
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     * @param string $symbol
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets side
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     * @param string $side
     * @return $this
     */
    public function setSide($side)
    {
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets last_qty
     * @return float
     */
    public function getLastQty()
    {
        return $this->container['last_qty'];
    }

    /**
     * Sets last_qty
     * @param float $last_qty
     * @return $this
     */
    public function setLastQty($last_qty)
    {
        $this->container['last_qty'] = $last_qty;

        return $this;
    }

    /**
     * Gets last_px
     * @return double
     */
    public function getLastPx()
    {
        return $this->container['last_px'];
    }

    /**
     * Sets last_px
     * @param double $last_px
     * @return $this
     */
    public function setLastPx($last_px)
    {
        $this->container['last_px'] = $last_px;

        return $this;
    }

    /**
     * Gets underlying_last_px
     * @return double
     */
    public function getUnderlyingLastPx()
    {
        return $this->container['underlying_last_px'];
    }

    /**
     * Sets underlying_last_px
     * @param double $underlying_last_px
     * @return $this
     */
    public function setUnderlyingLastPx($underlying_last_px)
    {
        $this->container['underlying_last_px'] = $underlying_last_px;

        return $this;
    }

    /**
     * Gets last_mkt
     * @return string
     */
    public function getLastMkt()
    {
        return $this->container['last_mkt'];
    }

    /**
     * Sets last_mkt
     * @param string $last_mkt
     * @return $this
     */
    public function setLastMkt($last_mkt)
    {
        $this->container['last_mkt'] = $last_mkt;

        return $this;
    }

    /**
     * Gets last_liquidity_ind
     * @return string
     */
    public function getLastLiquidityInd()
    {
        return $this->container['last_liquidity_ind'];
    }

    /**
     * Sets last_liquidity_ind
     * @param string $last_liquidity_ind
     * @return $this
     */
    public function setLastLiquidityInd($last_liquidity_ind)
    {
        $this->container['last_liquidity_ind'] = $last_liquidity_ind;

        return $this;
    }

    /**
     * Gets simple_order_qty
     * @return double
     */
    public function getSimpleOrderQty()
    {
        return $this->container['simple_order_qty'];
    }

    /**
     * Sets simple_order_qty
     * @param double $simple_order_qty
     * @return $this
     */
    public function setSimpleOrderQty($simple_order_qty)
    {
        $this->container['simple_order_qty'] = $simple_order_qty;

        return $this;
    }

    /**
     * Gets order_qty
     * @return float
     */
    public function getOrderQty()
    {
        return $this->container['order_qty'];
    }

    /**
     * Sets order_qty
     * @param float $order_qty
     * @return $this
     */
    public function setOrderQty($order_qty)
    {
        $this->container['order_qty'] = $order_qty;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets display_qty
     * @return float
     */
    public function getDisplayQty()
    {
        return $this->container['display_qty'];
    }

    /**
     * Sets display_qty
     * @param float $display_qty
     * @return $this
     */
    public function setDisplayQty($display_qty)
    {
        $this->container['display_qty'] = $display_qty;

        return $this;
    }

    /**
     * Gets stop_px
     * @return double
     */
    public function getStopPx()
    {
        return $this->container['stop_px'];
    }

    /**
     * Sets stop_px
     * @param double $stop_px
     * @return $this
     */
    public function setStopPx($stop_px)
    {
        $this->container['stop_px'] = $stop_px;

        return $this;
    }

    /**
     * Gets peg_offset_value
     * @return double
     */
    public function getPegOffsetValue()
    {
        return $this->container['peg_offset_value'];
    }

    /**
     * Sets peg_offset_value
     * @param double $peg_offset_value
     * @return $this
     */
    public function setPegOffsetValue($peg_offset_value)
    {
        $this->container['peg_offset_value'] = $peg_offset_value;

        return $this;
    }

    /**
     * Gets peg_price_type
     * @return string
     */
    public function getPegPriceType()
    {
        return $this->container['peg_price_type'];
    }

    /**
     * Sets peg_price_type
     * @param string $peg_price_type
     * @return $this
     */
    public function setPegPriceType($peg_price_type)
    {
        $this->container['peg_price_type'] = $peg_price_type;

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
     * Gets settl_currency
     * @return string
     */
    public function getSettlCurrency()
    {
        return $this->container['settl_currency'];
    }

    /**
     * Sets settl_currency
     * @param string $settl_currency
     * @return $this
     */
    public function setSettlCurrency($settl_currency)
    {
        $this->container['settl_currency'] = $settl_currency;

        return $this;
    }

    /**
     * Gets exec_type
     * @return string
     */
    public function getExecType()
    {
        return $this->container['exec_type'];
    }

    /**
     * Sets exec_type
     * @param string $exec_type
     * @return $this
     */
    public function setExecType($exec_type)
    {
        $this->container['exec_type'] = $exec_type;

        return $this;
    }

    /**
     * Gets ord_type
     * @return string
     */
    public function getOrdType()
    {
        return $this->container['ord_type'];
    }

    /**
     * Sets ord_type
     * @param string $ord_type
     * @return $this
     */
    public function setOrdType($ord_type)
    {
        $this->container['ord_type'] = $ord_type;

        return $this;
    }

    /**
     * Gets time_in_force
     * @return string
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     * @param string $time_in_force
     * @return $this
     */
    public function setTimeInForce($time_in_force)
    {
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets exec_inst
     * @return string
     */
    public function getExecInst()
    {
        return $this->container['exec_inst'];
    }

    /**
     * Sets exec_inst
     * @param string $exec_inst
     * @return $this
     */
    public function setExecInst($exec_inst)
    {
        $this->container['exec_inst'] = $exec_inst;

        return $this;
    }

    /**
     * Gets contingency_type
     * @return string
     */
    public function getContingencyType()
    {
        return $this->container['contingency_type'];
    }

    /**
     * Sets contingency_type
     * @param string $contingency_type
     * @return $this
     */
    public function setContingencyType($contingency_type)
    {
        $this->container['contingency_type'] = $contingency_type;

        return $this;
    }

    /**
     * Gets ex_destination
     * @return string
     */
    public function getExDestination()
    {
        return $this->container['ex_destination'];
    }

    /**
     * Sets ex_destination
     * @param string $ex_destination
     * @return $this
     */
    public function setExDestination($ex_destination)
    {
        $this->container['ex_destination'] = $ex_destination;

        return $this;
    }

    /**
     * Gets ord_status
     * @return string
     */
    public function getOrdStatus()
    {
        return $this->container['ord_status'];
    }

    /**
     * Sets ord_status
     * @param string $ord_status
     * @return $this
     */
    public function setOrdStatus($ord_status)
    {
        $this->container['ord_status'] = $ord_status;

        return $this;
    }

    /**
     * Gets triggered
     * @return string
     */
    public function getTriggered()
    {
        return $this->container['triggered'];
    }

    /**
     * Sets triggered
     * @param string $triggered
     * @return $this
     */
    public function setTriggered($triggered)
    {
        $this->container['triggered'] = $triggered;

        return $this;
    }

    /**
     * Gets working_indicator
     * @return bool
     */
    public function getWorkingIndicator()
    {
        return $this->container['working_indicator'];
    }

    /**
     * Sets working_indicator
     * @param bool $working_indicator
     * @return $this
     */
    public function setWorkingIndicator($working_indicator)
    {
        $this->container['working_indicator'] = $working_indicator;

        return $this;
    }

    /**
     * Gets ord_rej_reason
     * @return string
     */
    public function getOrdRejReason()
    {
        return $this->container['ord_rej_reason'];
    }

    /**
     * Sets ord_rej_reason
     * @param string $ord_rej_reason
     * @return $this
     */
    public function setOrdRejReason($ord_rej_reason)
    {
        $this->container['ord_rej_reason'] = $ord_rej_reason;

        return $this;
    }

    /**
     * Gets simple_leaves_qty
     * @return double
     */
    public function getSimpleLeavesQty()
    {
        return $this->container['simple_leaves_qty'];
    }

    /**
     * Sets simple_leaves_qty
     * @param double $simple_leaves_qty
     * @return $this
     */
    public function setSimpleLeavesQty($simple_leaves_qty)
    {
        $this->container['simple_leaves_qty'] = $simple_leaves_qty;

        return $this;
    }

    /**
     * Gets leaves_qty
     * @return float
     */
    public function getLeavesQty()
    {
        return $this->container['leaves_qty'];
    }

    /**
     * Sets leaves_qty
     * @param float $leaves_qty
     * @return $this
     */
    public function setLeavesQty($leaves_qty)
    {
        $this->container['leaves_qty'] = $leaves_qty;

        return $this;
    }

    /**
     * Gets simple_cum_qty
     * @return double
     */
    public function getSimpleCumQty()
    {
        return $this->container['simple_cum_qty'];
    }

    /**
     * Sets simple_cum_qty
     * @param double $simple_cum_qty
     * @return $this
     */
    public function setSimpleCumQty($simple_cum_qty)
    {
        $this->container['simple_cum_qty'] = $simple_cum_qty;

        return $this;
    }

    /**
     * Gets cum_qty
     * @return float
     */
    public function getCumQty()
    {
        return $this->container['cum_qty'];
    }

    /**
     * Sets cum_qty
     * @param float $cum_qty
     * @return $this
     */
    public function setCumQty($cum_qty)
    {
        $this->container['cum_qty'] = $cum_qty;

        return $this;
    }

    /**
     * Gets avg_px
     * @return double
     */
    public function getAvgPx()
    {
        return $this->container['avg_px'];
    }

    /**
     * Sets avg_px
     * @param double $avg_px
     * @return $this
     */
    public function setAvgPx($avg_px)
    {
        $this->container['avg_px'] = $avg_px;

        return $this;
    }

    /**
     * Gets commission
     * @return double
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     * @param double $commission
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets trade_publish_indicator
     * @return string
     */
    public function getTradePublishIndicator()
    {
        return $this->container['trade_publish_indicator'];
    }

    /**
     * Sets trade_publish_indicator
     * @param string $trade_publish_indicator
     * @return $this
     */
    public function setTradePublishIndicator($trade_publish_indicator)
    {
        $this->container['trade_publish_indicator'] = $trade_publish_indicator;

        return $this;
    }

    /**
     * Gets multi_leg_reporting_type
     * @return string
     */
    public function getMultiLegReportingType()
    {
        return $this->container['multi_leg_reporting_type'];
    }

    /**
     * Sets multi_leg_reporting_type
     * @param string $multi_leg_reporting_type
     * @return $this
     */
    public function setMultiLegReportingType($multi_leg_reporting_type)
    {
        $this->container['multi_leg_reporting_type'] = $multi_leg_reporting_type;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets trd_match_id
     * @return string
     */
    public function getTrdMatchId()
    {
        return $this->container['trd_match_id'];
    }

    /**
     * Sets trd_match_id
     * @param string $trd_match_id
     * @return $this
     */
    public function setTrdMatchId($trd_match_id)
    {
        $this->container['trd_match_id'] = $trd_match_id;

        return $this;
    }

    /**
     * Gets exec_cost
     * @return float
     */
    public function getExecCost()
    {
        return $this->container['exec_cost'];
    }

    /**
     * Sets exec_cost
     * @param float $exec_cost
     * @return $this
     */
    public function setExecCost($exec_cost)
    {
        $this->container['exec_cost'] = $exec_cost;

        return $this;
    }

    /**
     * Gets exec_comm
     * @return float
     */
    public function getExecComm()
    {
        return $this->container['exec_comm'];
    }

    /**
     * Sets exec_comm
     * @param float $exec_comm
     * @return $this
     */
    public function setExecComm($exec_comm)
    {
        $this->container['exec_comm'] = $exec_comm;

        return $this;
    }

    /**
     * Gets home_notional
     * @return double
     */
    public function getHomeNotional()
    {
        return $this->container['home_notional'];
    }

    /**
     * Sets home_notional
     * @param double $home_notional
     * @return $this
     */
    public function setHomeNotional($home_notional)
    {
        $this->container['home_notional'] = $home_notional;

        return $this;
    }

    /**
     * Gets foreign_notional
     * @return double
     */
    public function getForeignNotional()
    {
        return $this->container['foreign_notional'];
    }

    /**
     * Sets foreign_notional
     * @param double $foreign_notional
     * @return $this
     */
    public function setForeignNotional($foreign_notional)
    {
        $this->container['foreign_notional'] = $foreign_notional;

        return $this;
    }

    /**
     * Gets transact_time
     * @return \DateTime
     */
    public function getTransactTime()
    {
        return $this->container['transact_time'];
    }

    /**
     * Sets transact_time
     * @param \DateTime $transact_time
     * @return $this
     */
    public function setTransactTime($transact_time)
    {
        $this->container['transact_time'] = $transact_time;

        return $this;
    }

    /**
     * Gets timestamp
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param \DateTime $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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


