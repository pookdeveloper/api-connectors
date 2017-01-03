#import <Foundation/Foundation.h>
#import "SWGObject.h"

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



@protocol SWGPosition
@end

@interface SWGPosition : SWGObject


@property(nonatomic) NSNumber* account;

@property(nonatomic) NSString* symbol;

@property(nonatomic) NSString* currency;

@property(nonatomic) NSString* underlying;

@property(nonatomic) NSString* quoteCurrency;

@property(nonatomic) NSNumber* commission;

@property(nonatomic) NSNumber* initMarginReq;

@property(nonatomic) NSNumber* maintMarginReq;

@property(nonatomic) NSNumber* riskLimit;

@property(nonatomic) NSNumber* leverage;

@property(nonatomic) NSNumber* crossMargin;

@property(nonatomic) NSNumber* deleveragePercentile;

@property(nonatomic) NSNumber* rebalancedPnl;

@property(nonatomic) NSNumber* prevRealisedPnl;

@property(nonatomic) NSNumber* prevUnrealisedPnl;

@property(nonatomic) NSNumber* prevClosePrice;

@property(nonatomic) NSDate* openingTimestamp;

@property(nonatomic) NSNumber* openingQty;

@property(nonatomic) NSNumber* openingCost;

@property(nonatomic) NSNumber* openingComm;

@property(nonatomic) NSNumber* openOrderBuyQty;

@property(nonatomic) NSNumber* openOrderBuyCost;

@property(nonatomic) NSNumber* openOrderBuyPremium;

@property(nonatomic) NSNumber* openOrderSellQty;

@property(nonatomic) NSNumber* openOrderSellCost;

@property(nonatomic) NSNumber* openOrderSellPremium;

@property(nonatomic) NSNumber* execBuyQty;

@property(nonatomic) NSNumber* execBuyCost;

@property(nonatomic) NSNumber* execSellQty;

@property(nonatomic) NSNumber* execSellCost;

@property(nonatomic) NSNumber* execQty;

@property(nonatomic) NSNumber* execCost;

@property(nonatomic) NSNumber* execComm;

@property(nonatomic) NSDate* currentTimestamp;

@property(nonatomic) NSNumber* currentQty;

@property(nonatomic) NSNumber* currentCost;

@property(nonatomic) NSNumber* currentComm;

@property(nonatomic) NSNumber* realisedCost;

@property(nonatomic) NSNumber* unrealisedCost;

@property(nonatomic) NSNumber* grossOpenCost;

@property(nonatomic) NSNumber* grossOpenPremium;

@property(nonatomic) NSNumber* grossExecCost;

@property(nonatomic) NSNumber* isOpen;

@property(nonatomic) NSNumber* markPrice;

@property(nonatomic) NSNumber* markValue;

@property(nonatomic) NSNumber* riskValue;

@property(nonatomic) NSNumber* homeNotional;

@property(nonatomic) NSNumber* foreignNotional;

@property(nonatomic) NSString* posState;

@property(nonatomic) NSNumber* posCost;

@property(nonatomic) NSNumber* posCost2;

@property(nonatomic) NSNumber* posCross;

@property(nonatomic) NSNumber* posInit;

@property(nonatomic) NSNumber* posComm;

@property(nonatomic) NSNumber* posLoss;

@property(nonatomic) NSNumber* posMargin;

@property(nonatomic) NSNumber* posMaint;

@property(nonatomic) NSNumber* posAllowance;

@property(nonatomic) NSNumber* taxableMargin;

@property(nonatomic) NSNumber* initMargin;

@property(nonatomic) NSNumber* maintMargin;

@property(nonatomic) NSNumber* sessionMargin;

@property(nonatomic) NSNumber* targetExcessMargin;

@property(nonatomic) NSNumber* varMargin;

@property(nonatomic) NSNumber* realisedGrossPnl;

@property(nonatomic) NSNumber* realisedTax;

@property(nonatomic) NSNumber* realisedPnl;

@property(nonatomic) NSNumber* unrealisedGrossPnl;

@property(nonatomic) NSNumber* longBankrupt;

@property(nonatomic) NSNumber* shortBankrupt;

@property(nonatomic) NSNumber* taxBase;

@property(nonatomic) NSNumber* indicativeTaxRate;

@property(nonatomic) NSNumber* indicativeTax;

@property(nonatomic) NSNumber* unrealisedTax;

@property(nonatomic) NSNumber* unrealisedPnl;

@property(nonatomic) NSNumber* unrealisedPnlPcnt;

@property(nonatomic) NSNumber* unrealisedRoePcnt;

@property(nonatomic) NSNumber* simpleQty;

@property(nonatomic) NSNumber* simpleCost;

@property(nonatomic) NSNumber* simpleValue;

@property(nonatomic) NSNumber* simplePnl;

@property(nonatomic) NSNumber* simplePnlPcnt;

@property(nonatomic) NSNumber* avgCostPrice;

@property(nonatomic) NSNumber* avgEntryPrice;

@property(nonatomic) NSNumber* breakEvenPrice;

@property(nonatomic) NSNumber* marginCallPrice;

@property(nonatomic) NSNumber* liquidationPrice;

@property(nonatomic) NSNumber* bankruptPrice;

@property(nonatomic) NSDate* timestamp;

@property(nonatomic) NSNumber* lastPrice;

@property(nonatomic) NSNumber* lastValue;

@end
