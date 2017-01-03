/* 
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

using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public interface IOrderBookApi : IApiAccessor
    {
        #region Synchronous Operations
        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2].
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>List&lt;OrderBook&gt;</returns>
        List<OrderBook> OrderBookGet (string symbol, decimal? depth = null);

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2].
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>ApiResponse of List&lt;OrderBook&gt;</returns>
        ApiResponse<List<OrderBook>> OrderBookGetWithHttpInfo (string symbol, decimal? depth = null);
        /// <summary>
        /// Get current orderbook in vertical format.
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>List&lt;OrderBookL2&gt;</returns>
        List<OrderBookL2> OrderBookGetL2 (string symbol, decimal? depth = null);

        /// <summary>
        /// Get current orderbook in vertical format.
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>ApiResponse of List&lt;OrderBookL2&gt;</returns>
        ApiResponse<List<OrderBookL2>> OrderBookGetL2WithHttpInfo (string symbol, decimal? depth = null);
        #endregion Synchronous Operations
        #region Asynchronous Operations
        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2].
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>Task of List&lt;OrderBook&gt;</returns>
        System.Threading.Tasks.Task<List<OrderBook>> OrderBookGetAsync (string symbol, decimal? depth = null);

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2].
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>Task of ApiResponse (List&lt;OrderBook&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<OrderBook>>> OrderBookGetAsyncWithHttpInfo (string symbol, decimal? depth = null);
        /// <summary>
        /// Get current orderbook in vertical format.
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>Task of List&lt;OrderBookL2&gt;</returns>
        System.Threading.Tasks.Task<List<OrderBookL2>> OrderBookGetL2Async (string symbol, decimal? depth = null);

        /// <summary>
        /// Get current orderbook in vertical format.
        /// </summary>
        /// <remarks>
        /// 
        /// </remarks>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>Task of ApiResponse (List&lt;OrderBookL2&gt;)</returns>
        System.Threading.Tasks.Task<ApiResponse<List<OrderBookL2>>> OrderBookGetL2AsyncWithHttpInfo (string symbol, decimal? depth = null);
        #endregion Asynchronous Operations
    }

    /// <summary>
    /// Represents a collection of functions to interact with the API endpoints
    /// </summary>
    public partial class OrderBookApi : IOrderBookApi
    {
        private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

        /// <summary>
        /// Initializes a new instance of the <see cref="OrderBookApi"/> class.
        /// </summary>
        /// <returns></returns>
        public OrderBookApi(String basePath)
        {
            this.Configuration = new Configuration(new ApiClient(basePath));

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Initializes a new instance of the <see cref="OrderBookApi"/> class
        /// using Configuration object
        /// </summary>
        /// <param name="configuration">An instance of Configuration</param>
        /// <returns></returns>
        public OrderBookApi(Configuration configuration = null)
        {
            if (configuration == null) // use the default one in Configuration
                this.Configuration = Configuration.Default;
            else
                this.Configuration = configuration;

            ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

            // ensure API client has configuration ready
            if (Configuration.ApiClient.Configuration == null)
            {
                this.Configuration.ApiClient.Configuration = this.Configuration;
            }
        }

        /// <summary>
        /// Gets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        public String GetBasePath()
        {
            return this.Configuration.ApiClient.RestClient.BaseUrl.ToString();
        }

        /// <summary>
        /// Sets the base path of the API client.
        /// </summary>
        /// <value>The base path</value>
        [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
        public void SetBasePath(String basePath)
        {
            // do nothing
        }

        /// <summary>
        /// Gets or sets the configuration object
        /// </summary>
        /// <value>An instance of the Configuration</value>
        public Configuration Configuration {get; set;}

        /// <summary>
        /// Provides a factory method hook for the creation of exceptions.
        /// </summary>
        public IO.Swagger.Client.ExceptionFactory ExceptionFactory
        {
            get
            {
                if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
                {
                    throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
                }
                return _exceptionFactory;
            }
            set { _exceptionFactory = value; }
        }

        /// <summary>
        /// Gets the default header.
        /// </summary>
        /// <returns>Dictionary of HTTP header</returns>
        [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
        public Dictionary<String, String> DefaultHeader()
        {
            return this.Configuration.DefaultHeader;
        }

        /// <summary>
        /// Add default header.
        /// </summary>
        /// <param name="key">Header field name.</param>
        /// <param name="value">Header field value.</param>
        /// <returns></returns>
        [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
        public void AddDefaultHeader(string key, string value)
        {
            this.Configuration.AddDefaultHeader(key, value);
        }

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2]. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>List&lt;OrderBook&gt;</returns>
        public List<OrderBook> OrderBookGet (string symbol, decimal? depth = null)
        {
             ApiResponse<List<OrderBook>> localVarResponse = OrderBookGetWithHttpInfo(symbol, depth);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2]. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>ApiResponse of List&lt;OrderBook&gt;</returns>
        public ApiResponse< List<OrderBook> > OrderBookGetWithHttpInfo (string symbol, decimal? depth = null)
        {
            // verify the required parameter 'symbol' is set
            if (symbol == null)
                throw new ApiException(400, "Missing required parameter 'symbol' when calling OrderBookApi->OrderBookGet");

            var localVarPath = "/orderBook";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json", 
                "application/x-www-form-urlencoded"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json", 
                "application/xml", 
                "text/xml", 
                "application/javascript", 
                "text/javascript"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (symbol != null) localVarQueryParams.Add("symbol", Configuration.ApiClient.ParameterToString(symbol)); // query parameter
            if (depth != null) localVarQueryParams.Add("depth", Configuration.ApiClient.ParameterToString(depth)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("OrderBookGet", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<OrderBook>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<OrderBook>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<OrderBook>)));
            
        }

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2]. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>Task of List&lt;OrderBook&gt;</returns>
        public async System.Threading.Tasks.Task<List<OrderBook>> OrderBookGetAsync (string symbol, decimal? depth = null)
        {
             ApiResponse<List<OrderBook>> localVarResponse = await OrderBookGetAsyncWithHttpInfo(symbol, depth);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get current orderbook [deprecated, use /orderBook/L2]. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth. (optional, default to 25)</param>
        /// <returns>Task of ApiResponse (List&lt;OrderBook&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<OrderBook>>> OrderBookGetAsyncWithHttpInfo (string symbol, decimal? depth = null)
        {
            // verify the required parameter 'symbol' is set
            if (symbol == null)
                throw new ApiException(400, "Missing required parameter 'symbol' when calling OrderBookApi->OrderBookGet");

            var localVarPath = "/orderBook";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json", 
                "application/x-www-form-urlencoded"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json", 
                "application/xml", 
                "text/xml", 
                "application/javascript", 
                "text/javascript"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (symbol != null) localVarQueryParams.Add("symbol", Configuration.ApiClient.ParameterToString(symbol)); // query parameter
            if (depth != null) localVarQueryParams.Add("depth", Configuration.ApiClient.ParameterToString(depth)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("OrderBookGet", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<OrderBook>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<OrderBook>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<OrderBook>)));
            
        }

        /// <summary>
        /// Get current orderbook in vertical format. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>List&lt;OrderBookL2&gt;</returns>
        public List<OrderBookL2> OrderBookGetL2 (string symbol, decimal? depth = null)
        {
             ApiResponse<List<OrderBookL2>> localVarResponse = OrderBookGetL2WithHttpInfo(symbol, depth);
             return localVarResponse.Data;
        }

        /// <summary>
        /// Get current orderbook in vertical format. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>ApiResponse of List&lt;OrderBookL2&gt;</returns>
        public ApiResponse< List<OrderBookL2> > OrderBookGetL2WithHttpInfo (string symbol, decimal? depth = null)
        {
            // verify the required parameter 'symbol' is set
            if (symbol == null)
                throw new ApiException(400, "Missing required parameter 'symbol' when calling OrderBookApi->OrderBookGetL2");

            var localVarPath = "/orderBook/L2";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json", 
                "application/x-www-form-urlencoded"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json", 
                "application/xml", 
                "text/xml", 
                "application/javascript", 
                "text/javascript"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (symbol != null) localVarQueryParams.Add("symbol", Configuration.ApiClient.ParameterToString(symbol)); // query parameter
            if (depth != null) localVarQueryParams.Add("depth", Configuration.ApiClient.ParameterToString(depth)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) Configuration.ApiClient.CallApi(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("OrderBookGetL2", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<OrderBookL2>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<OrderBookL2>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<OrderBookL2>)));
            
        }

        /// <summary>
        /// Get current orderbook in vertical format. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>Task of List&lt;OrderBookL2&gt;</returns>
        public async System.Threading.Tasks.Task<List<OrderBookL2>> OrderBookGetL2Async (string symbol, decimal? depth = null)
        {
             ApiResponse<List<OrderBookL2>> localVarResponse = await OrderBookGetL2AsyncWithHttpInfo(symbol, depth);
             return localVarResponse.Data;

        }

        /// <summary>
        /// Get current orderbook in vertical format. 
        /// </summary>
        /// <exception cref="IO.Swagger.Client.ApiException">Thrown when fails to make API call</exception>
        /// <param name="symbol">Instrument symbol. Send a series (e.g. XBT) to get data for the nearest contract in that series.</param>
        /// <param name="depth">Orderbook depth per side. Send 0 for full depth. (optional, default to 25)</param>
        /// <returns>Task of ApiResponse (List&lt;OrderBookL2&gt;)</returns>
        public async System.Threading.Tasks.Task<ApiResponse<List<OrderBookL2>>> OrderBookGetL2AsyncWithHttpInfo (string symbol, decimal? depth = null)
        {
            // verify the required parameter 'symbol' is set
            if (symbol == null)
                throw new ApiException(400, "Missing required parameter 'symbol' when calling OrderBookApi->OrderBookGetL2");

            var localVarPath = "/orderBook/L2";
            var localVarPathParams = new Dictionary<String, String>();
            var localVarQueryParams = new Dictionary<String, String>();
            var localVarHeaderParams = new Dictionary<String, String>(Configuration.DefaultHeader);
            var localVarFormParams = new Dictionary<String, String>();
            var localVarFileParams = new Dictionary<String, FileParameter>();
            Object localVarPostBody = null;

            // to determine the Content-Type header
            String[] localVarHttpContentTypes = new String[] {
                "application/json", 
                "application/x-www-form-urlencoded"
            };
            String localVarHttpContentType = Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

            // to determine the Accept header
            String[] localVarHttpHeaderAccepts = new String[] {
                "application/json", 
                "application/xml", 
                "text/xml", 
                "application/javascript", 
                "text/javascript"
            };
            String localVarHttpHeaderAccept = Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
            if (localVarHttpHeaderAccept != null)
                localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

            // set "format" to json by default
            // e.g. /pet/{petId}.{format} becomes /pet/{petId}.json
            localVarPathParams.Add("format", "json");
            if (symbol != null) localVarQueryParams.Add("symbol", Configuration.ApiClient.ParameterToString(symbol)); // query parameter
            if (depth != null) localVarQueryParams.Add("depth", Configuration.ApiClient.ParameterToString(depth)); // query parameter


            // make the HTTP request
            IRestResponse localVarResponse = (IRestResponse) await Configuration.ApiClient.CallApiAsync(localVarPath,
                Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
                localVarPathParams, localVarHttpContentType);

            int localVarStatusCode = (int) localVarResponse.StatusCode;

            if (ExceptionFactory != null)
            {
                Exception exception = ExceptionFactory("OrderBookGetL2", localVarResponse);
                if (exception != null) throw exception;
            }

            return new ApiResponse<List<OrderBookL2>>(localVarStatusCode,
                localVarResponse.Headers.ToDictionary(x => x.Name, x => x.Value.ToString()),
                (List<OrderBookL2>) Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<OrderBookL2>)));
            
        }

    }
}
