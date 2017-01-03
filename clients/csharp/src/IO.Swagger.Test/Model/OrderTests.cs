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


using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using IO.Swagger.Api;
using IO.Swagger.Model;
using IO.Swagger.Client;
using System.Reflection;

namespace IO.Swagger.Test
{
    /// <summary>
    ///  Class for testing Order
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class OrderTests
    {
        // TODO uncomment below to declare an instance variable for Order
        //private Order instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of Order
            //instance = new Order();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of Order
        /// </summary>
        [Test]
        public void OrderInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" Order
            //Assert.IsInstanceOfType<Order> (instance, "variable 'instance' is a Order");
        }

        /// <summary>
        /// Test the property 'OrderID'
        /// </summary>
        [Test]
        public void OrderIDTest()
        {
            // TODO unit test for the property 'OrderID'
        }
        /// <summary>
        /// Test the property 'ClOrdID'
        /// </summary>
        [Test]
        public void ClOrdIDTest()
        {
            // TODO unit test for the property 'ClOrdID'
        }
        /// <summary>
        /// Test the property 'ClOrdLinkID'
        /// </summary>
        [Test]
        public void ClOrdLinkIDTest()
        {
            // TODO unit test for the property 'ClOrdLinkID'
        }
        /// <summary>
        /// Test the property 'Account'
        /// </summary>
        [Test]
        public void AccountTest()
        {
            // TODO unit test for the property 'Account'
        }
        /// <summary>
        /// Test the property 'Symbol'
        /// </summary>
        [Test]
        public void SymbolTest()
        {
            // TODO unit test for the property 'Symbol'
        }
        /// <summary>
        /// Test the property 'Side'
        /// </summary>
        [Test]
        public void SideTest()
        {
            // TODO unit test for the property 'Side'
        }
        /// <summary>
        /// Test the property 'SimpleOrderQty'
        /// </summary>
        [Test]
        public void SimpleOrderQtyTest()
        {
            // TODO unit test for the property 'SimpleOrderQty'
        }
        /// <summary>
        /// Test the property 'OrderQty'
        /// </summary>
        [Test]
        public void OrderQtyTest()
        {
            // TODO unit test for the property 'OrderQty'
        }
        /// <summary>
        /// Test the property 'Price'
        /// </summary>
        [Test]
        public void PriceTest()
        {
            // TODO unit test for the property 'Price'
        }
        /// <summary>
        /// Test the property 'DisplayQty'
        /// </summary>
        [Test]
        public void DisplayQtyTest()
        {
            // TODO unit test for the property 'DisplayQty'
        }
        /// <summary>
        /// Test the property 'StopPx'
        /// </summary>
        [Test]
        public void StopPxTest()
        {
            // TODO unit test for the property 'StopPx'
        }
        /// <summary>
        /// Test the property 'PegOffsetValue'
        /// </summary>
        [Test]
        public void PegOffsetValueTest()
        {
            // TODO unit test for the property 'PegOffsetValue'
        }
        /// <summary>
        /// Test the property 'PegPriceType'
        /// </summary>
        [Test]
        public void PegPriceTypeTest()
        {
            // TODO unit test for the property 'PegPriceType'
        }
        /// <summary>
        /// Test the property 'Currency'
        /// </summary>
        [Test]
        public void CurrencyTest()
        {
            // TODO unit test for the property 'Currency'
        }
        /// <summary>
        /// Test the property 'SettlCurrency'
        /// </summary>
        [Test]
        public void SettlCurrencyTest()
        {
            // TODO unit test for the property 'SettlCurrency'
        }
        /// <summary>
        /// Test the property 'OrdType'
        /// </summary>
        [Test]
        public void OrdTypeTest()
        {
            // TODO unit test for the property 'OrdType'
        }
        /// <summary>
        /// Test the property 'TimeInForce'
        /// </summary>
        [Test]
        public void TimeInForceTest()
        {
            // TODO unit test for the property 'TimeInForce'
        }
        /// <summary>
        /// Test the property 'ExecInst'
        /// </summary>
        [Test]
        public void ExecInstTest()
        {
            // TODO unit test for the property 'ExecInst'
        }
        /// <summary>
        /// Test the property 'ContingencyType'
        /// </summary>
        [Test]
        public void ContingencyTypeTest()
        {
            // TODO unit test for the property 'ContingencyType'
        }
        /// <summary>
        /// Test the property 'ExDestination'
        /// </summary>
        [Test]
        public void ExDestinationTest()
        {
            // TODO unit test for the property 'ExDestination'
        }
        /// <summary>
        /// Test the property 'OrdStatus'
        /// </summary>
        [Test]
        public void OrdStatusTest()
        {
            // TODO unit test for the property 'OrdStatus'
        }
        /// <summary>
        /// Test the property 'Triggered'
        /// </summary>
        [Test]
        public void TriggeredTest()
        {
            // TODO unit test for the property 'Triggered'
        }
        /// <summary>
        /// Test the property 'WorkingIndicator'
        /// </summary>
        [Test]
        public void WorkingIndicatorTest()
        {
            // TODO unit test for the property 'WorkingIndicator'
        }
        /// <summary>
        /// Test the property 'OrdRejReason'
        /// </summary>
        [Test]
        public void OrdRejReasonTest()
        {
            // TODO unit test for the property 'OrdRejReason'
        }
        /// <summary>
        /// Test the property 'SimpleLeavesQty'
        /// </summary>
        [Test]
        public void SimpleLeavesQtyTest()
        {
            // TODO unit test for the property 'SimpleLeavesQty'
        }
        /// <summary>
        /// Test the property 'LeavesQty'
        /// </summary>
        [Test]
        public void LeavesQtyTest()
        {
            // TODO unit test for the property 'LeavesQty'
        }
        /// <summary>
        /// Test the property 'SimpleCumQty'
        /// </summary>
        [Test]
        public void SimpleCumQtyTest()
        {
            // TODO unit test for the property 'SimpleCumQty'
        }
        /// <summary>
        /// Test the property 'CumQty'
        /// </summary>
        [Test]
        public void CumQtyTest()
        {
            // TODO unit test for the property 'CumQty'
        }
        /// <summary>
        /// Test the property 'AvgPx'
        /// </summary>
        [Test]
        public void AvgPxTest()
        {
            // TODO unit test for the property 'AvgPx'
        }
        /// <summary>
        /// Test the property 'MultiLegReportingType'
        /// </summary>
        [Test]
        public void MultiLegReportingTypeTest()
        {
            // TODO unit test for the property 'MultiLegReportingType'
        }
        /// <summary>
        /// Test the property 'Text'
        /// </summary>
        [Test]
        public void TextTest()
        {
            // TODO unit test for the property 'Text'
        }
        /// <summary>
        /// Test the property 'TransactTime'
        /// </summary>
        [Test]
        public void TransactTimeTest()
        {
            // TODO unit test for the property 'TransactTime'
        }
        /// <summary>
        /// Test the property 'Timestamp'
        /// </summary>
        [Test]
        public void TimestampTest()
        {
            // TODO unit test for the property 'Timestamp'
        }

    }

}
