/**
 * BitMEX API
 * ## REST API for the BitMEX Trading Platform  [Changelog](/app/apiChangelog)  ----  #### Getting Started   ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](https://www.bitmex.com/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ---  ## All API Endpoints  Click to expand a section. 
 *
 * OpenAPI spec version: 1.2.0
 * Contact: support@bitmex.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package io.swagger.client.api

import io.swagger.client.model.Quote
import io.swagger.client.model.Number
import io.swagger.client.model.Error
import java.util.Date
import io.swagger.client.ApiInvoker
import io.swagger.client.ApiException

import com.sun.jersey.multipart.FormDataMultiPart
import com.sun.jersey.multipart.file.FileDataBodyPart

import javax.ws.rs.core.MediaType

import java.io.File
import java.util.Date

import scala.collection.mutable.HashMap

class QuoteApi(val defBasePath: String = "https://localhost/api/v1",
                        defApiInvoker: ApiInvoker = ApiInvoker) {
  var basePath = defBasePath
  var apiInvoker = defApiInvoker

  def addHeader(key: String, value: String) = apiInvoker.defaultHeaders += key -> value 

  /**
   * Get Quotes.
   * 
   * @param symbol Instrument symbol. Send a bare series (e.g. XBU) to get data for the nearest expiring contract in that series.  You can also send a timeframe, e.g. &#x60;XBU:monthly&#x60;. Timeframes are &#x60;daily&#x60;, &#x60;weekly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, and &#x60;biquarterly&#x60;. (optional)
   * @param filter Generic table filter. Send JSON key/value pairs, such as &#x60;{\&quot;key\&quot;: \&quot;value\&quot;}&#x60;. You can key on individual fields, and do more advanced querying on timestamps. See the [Timestamp Docs](https://www.bitmex.com/app/restAPI#timestamp-filters) for more details. (optional)
   * @param columns Array of column names to fetch. If omitted, will return all columns.  Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect. (optional)
   * @param count Number of results to fetch. (optional, default to 100)
   * @param start Starting point for results. (optional, default to 0)
   * @param reverse If true, will sort results newest first. (optional, default to false)
   * @param startTime Starting date filter for results. (optional)
   * @param endTime Ending date filter for results. (optional)
   * @return List[Quote]
   */
  def quoteGet (symbol: String, filter: String, columns: String, count: Number /* = 100 */, start: Number /* = 0 */, reverse: Boolean /* = false */, startTime: Date, endTime: Date) : Option[List[Quote]] = {
    // create path and map variables
    val path = "/quote".replaceAll("\\{format\\}","json")
    val contentTypes = List("application/json", "application/x-www-form-urlencoded", "application/json")
    val contentType = contentTypes(0)

    // query params
    val queryParams = new HashMap[String, String]
    val headerParams = new HashMap[String, String]
    val formParams = new HashMap[String, String]

    if(String.valueOf(symbol) != "null") queryParams += "symbol" -> symbol.toString
if(String.valueOf(filter) != "null") queryParams += "filter" -> filter.toString
if(String.valueOf(columns) != "null") queryParams += "columns" -> columns.toString
if(String.valueOf(count) != "null") queryParams += "count" -> count.toString
if(String.valueOf(start) != "null") queryParams += "start" -> start.toString
if(String.valueOf(reverse) != "null") queryParams += "reverse" -> reverse.toString
if(String.valueOf(startTime) != "null") queryParams += "startTime" -> startTime.toString
if(String.valueOf(endTime) != "null") queryParams += "endTime" -> endTime.toString
    
    
    var postBody: AnyRef = null

    if(contentType.startsWith("multipart/form-data")) {
      val mp = new FormDataMultiPart()
      
      postBody = mp
    }
    else {
    }

    try {
      apiInvoker.invokeApi(basePath, path, "GET", queryParams.toMap, formParams.toMap, postBody, headerParams.toMap, contentType) match {
        case s: String =>
           Some(ApiInvoker.deserialize(s, "array", classOf[Quote]).asInstanceOf[List[Quote]])
        case _ => None
      }
    } catch {
      case ex: ApiException if ex.code == 404 => None
      case ex: ApiException => throw ex
    }
  }

  /**
   * Get previous quotes in time buckets.
   * 
   * @param binSize Time interval to bucket by. Available options: [&#39;1m&#39;, &#39;5m&#39;, &#39;1h&#39;, &#39;1d&#39;]. (optional)
   * @param symbol Instrument symbol. Send a bare series (e.g. XBU) to get data for the nearest expiring contract in that series.  You can also send a timeframe, e.g. &#x60;XBU:monthly&#x60;. Timeframes are &#x60;daily&#x60;, &#x60;weekly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, and &#x60;biquarterly&#x60;. (optional)
   * @param filter Generic table filter. Send JSON key/value pairs, such as &#x60;{\&quot;key\&quot;: \&quot;value\&quot;}&#x60;. You can key on individual fields, and do more advanced querying on timestamps. See the [Timestamp Docs](https://www.bitmex.com/app/restAPI#timestamp-filters) for more details. (optional)
   * @param columns Array of column names to fetch. If omitted, will return all columns.  Note that this method will always return item keys, even when not specified, so you may receive more columns that you expect. (optional)
   * @param count Number of results to fetch. (optional, default to 100)
   * @param start Starting point for results. (optional, default to 0)
   * @param reverse If true, will sort results newest first. (optional, default to false)
   * @param startTime Starting date filter for results. (optional)
   * @param endTime Ending date filter for results. (optional)
   * @return List[Quote]
   */
  def quoteGetBucketed (binSize: String, symbol: String, filter: String, columns: String, count: Number /* = 100 */, start: Number /* = 0 */, reverse: Boolean /* = false */, startTime: Date, endTime: Date) : Option[List[Quote]] = {
    // create path and map variables
    val path = "/quote/bucketed".replaceAll("\\{format\\}","json")
    val contentTypes = List("application/json", "application/x-www-form-urlencoded", "application/json")
    val contentType = contentTypes(0)

    // query params
    val queryParams = new HashMap[String, String]
    val headerParams = new HashMap[String, String]
    val formParams = new HashMap[String, String]

    if(String.valueOf(binSize) != "null") queryParams += "binSize" -> binSize.toString
if(String.valueOf(symbol) != "null") queryParams += "symbol" -> symbol.toString
if(String.valueOf(filter) != "null") queryParams += "filter" -> filter.toString
if(String.valueOf(columns) != "null") queryParams += "columns" -> columns.toString
if(String.valueOf(count) != "null") queryParams += "count" -> count.toString
if(String.valueOf(start) != "null") queryParams += "start" -> start.toString
if(String.valueOf(reverse) != "null") queryParams += "reverse" -> reverse.toString
if(String.valueOf(startTime) != "null") queryParams += "startTime" -> startTime.toString
if(String.valueOf(endTime) != "null") queryParams += "endTime" -> endTime.toString
    
    
    var postBody: AnyRef = null

    if(contentType.startsWith("multipart/form-data")) {
      val mp = new FormDataMultiPart()
      
      postBody = mp
    }
    else {
    }

    try {
      apiInvoker.invokeApi(basePath, path, "GET", queryParams.toMap, formParams.toMap, postBody, headerParams.toMap, contentType) match {
        case s: String =>
           Some(ApiInvoker.deserialize(s, "array", classOf[Quote]).asInstanceOf[List[Quote]])
        case _ => None
      }
    } catch {
      case ex: ApiException if ex.code == 404 => None
      case ex: ApiException => throw ex
    }
  }

}
