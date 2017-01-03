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
    ///  Class for testing Affiliate
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the model.
    /// </remarks>
    [TestFixture]
    public class AffiliateTests
    {
        // TODO uncomment below to declare an instance variable for Affiliate
        //private Affiliate instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of Affiliate
            //instance = new Affiliate();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of Affiliate
        /// </summary>
        [Test]
        public void AffiliateInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOfType" Affiliate
            //Assert.IsInstanceOfType<Affiliate> (instance, "variable 'instance' is a Affiliate");
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
        /// Test the property 'Currency'
        /// </summary>
        [Test]
        public void CurrencyTest()
        {
            // TODO unit test for the property 'Currency'
        }
        /// <summary>
        /// Test the property 'PrevPayout'
        /// </summary>
        [Test]
        public void PrevPayoutTest()
        {
            // TODO unit test for the property 'PrevPayout'
        }
        /// <summary>
        /// Test the property 'PrevTurnover'
        /// </summary>
        [Test]
        public void PrevTurnoverTest()
        {
            // TODO unit test for the property 'PrevTurnover'
        }
        /// <summary>
        /// Test the property 'PrevComm'
        /// </summary>
        [Test]
        public void PrevCommTest()
        {
            // TODO unit test for the property 'PrevComm'
        }
        /// <summary>
        /// Test the property 'PrevTimestamp'
        /// </summary>
        [Test]
        public void PrevTimestampTest()
        {
            // TODO unit test for the property 'PrevTimestamp'
        }
        /// <summary>
        /// Test the property 'ExecTurnover'
        /// </summary>
        [Test]
        public void ExecTurnoverTest()
        {
            // TODO unit test for the property 'ExecTurnover'
        }
        /// <summary>
        /// Test the property 'ExecComm'
        /// </summary>
        [Test]
        public void ExecCommTest()
        {
            // TODO unit test for the property 'ExecComm'
        }
        /// <summary>
        /// Test the property 'TotalReferrals'
        /// </summary>
        [Test]
        public void TotalReferralsTest()
        {
            // TODO unit test for the property 'TotalReferrals'
        }
        /// <summary>
        /// Test the property 'TotalTurnover'
        /// </summary>
        [Test]
        public void TotalTurnoverTest()
        {
            // TODO unit test for the property 'TotalTurnover'
        }
        /// <summary>
        /// Test the property 'TotalComm'
        /// </summary>
        [Test]
        public void TotalCommTest()
        {
            // TODO unit test for the property 'TotalComm'
        }
        /// <summary>
        /// Test the property 'PayoutPcnt'
        /// </summary>
        [Test]
        public void PayoutPcntTest()
        {
            // TODO unit test for the property 'PayoutPcnt'
        }
        /// <summary>
        /// Test the property 'PendingPayout'
        /// </summary>
        [Test]
        public void PendingPayoutTest()
        {
            // TODO unit test for the property 'PendingPayout'
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
