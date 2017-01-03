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



@protocol SWGExecution
@end

@interface SWGExecution : SWGObject


@property(nonatomic) NSString* execID;

@property(nonatomic) NSString* orderID;

@property(nonatomic) NSString* clOrdID;

@property(nonatomic) NSString* clOrdLinkID;

@property(nonatomic) NSNumber* account;

@property(nonatomic) NSString* symbol;

@property(nonatomic) NSString* side;

@property(nonatomic) NSNumber* lastQty;

@property(nonatomic) NSNumber* lastPx;

@property(nonatomic) NSNumber* underlyingLastPx;

@property(nonatomic) NSString* lastMkt;

@property(nonatomic) NSString* lastLiquidityInd;

@property(nonatomic) NSNumber* simpleOrderQty;

@property(nonatomic) NSNumber* orderQty;

@property(nonatomic) NSNumber* price;

@property(nonatomic) NSNumber* displayQty;

@property(nonatomic) NSNumber* stopPx;

@property(nonatomic) NSNumber* pegOffsetValue;

@property(nonatomic) NSString* pegPriceType;

@property(nonatomic) NSString* currency;

@property(nonatomic) NSString* settlCurrency;

@property(nonatomic) NSString* execType;

@property(nonatomic) NSString* ordType;

@property(nonatomic) NSString* timeInForce;

@property(nonatomic) NSString* execInst;

@property(nonatomic) NSString* contingencyType;

@property(nonatomic) NSString* exDestination;

@property(nonatomic) NSString* ordStatus;

@property(nonatomic) NSString* triggered;

@property(nonatomic) NSNumber* workingIndicator;

@property(nonatomic) NSString* ordRejReason;

@property(nonatomic) NSNumber* simpleLeavesQty;

@property(nonatomic) NSNumber* leavesQty;

@property(nonatomic) NSNumber* simpleCumQty;

@property(nonatomic) NSNumber* cumQty;

@property(nonatomic) NSNumber* avgPx;

@property(nonatomic) NSNumber* commission;

@property(nonatomic) NSString* tradePublishIndicator;

@property(nonatomic) NSString* multiLegReportingType;

@property(nonatomic) NSString* text;

@property(nonatomic) NSString* trdMatchID;

@property(nonatomic) NSNumber* execCost;

@property(nonatomic) NSNumber* execComm;

@property(nonatomic) NSNumber* homeNotional;

@property(nonatomic) NSNumber* foreignNotional;

@property(nonatomic) NSDate* transactTime;

@property(nonatomic) NSDate* timestamp;

@end
