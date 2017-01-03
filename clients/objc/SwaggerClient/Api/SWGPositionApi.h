#import <Foundation/Foundation.h>
#import "SWGError.h"
#import "SWGPosition.h"
#import "SWGApi.h"

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


@interface SWGPositionApi: NSObject <SWGApi>

extern NSString* kSWGPositionApiErrorDomain;
extern NSInteger kSWGPositionApiMissingParamErrorCode;

+(instancetype) sharedAPI;

/// Get your positions.
/// See <a href=\"http://www.onixs.biz/fix-dictionary/5.0.SP2/msgType_AP_6580.html\">the FIX Spec</a> for explanations of these fields.
///
/// @param filter Table filter. For example, send {\&quot;symbol\&quot;: \&quot;XBT24H\&quot;}. (optional)
/// @param columns Which columns to fetch. For example, send [\&quot;columnName\&quot;]. (optional)
/// @param count Number of rows to fetch. (optional)
/// 
///  code:200 message:"Request was successful",
///  code:400 message:"Parameter Error",
///  code:401 message:"Unauthorized",
///  code:404 message:"Not Found"
///
/// @return NSArray<SWGPosition>*
-(NSNumber*) positionGetWithFilter: (NSString*) filter
    columns: (NSString*) columns
    count: (NSNumber*) count
    completionHandler: (void (^)(NSArray<SWGPosition>* output, NSError* error)) handler;


/// Enable isolated margin or cross margin per-position.
/// On Speculative (DPE-Enabled) contracts, users can switch isolate margin per-position. This function allows switching margin isolation (aka fixed margin) on and off.
///
/// @param symbol Position symbol to isolate.
/// @param enabled True for isolated margin, false for cross margin. (optional) (default to true)
/// 
///  code:200 message:"Request was successful",
///  code:400 message:"Parameter Error",
///  code:401 message:"Unauthorized",
///  code:404 message:"Not Found"
///
/// @return SWGPosition*
-(NSNumber*) positionIsolateMarginWithSymbol: (NSString*) symbol
    enabled: (NSNumber*) enabled
    completionHandler: (void (^)(SWGPosition* output, NSError* error)) handler;


/// Transfer equity in or out of a position.
/// When margin is isolated on a position, use this function to add or remove margin from the position. Note that you cannot remove margin below the initial margin threshold.
///
/// @param symbol Symbol of position to isolate.
/// @param amount Amount to transfer, in Satoshis. May be negative.
/// 
///  code:200 message:"Request was successful",
///  code:400 message:"Parameter Error",
///  code:401 message:"Unauthorized",
///  code:404 message:"Not Found"
///
/// @return SWGPosition*
-(NSNumber*) positionTransferIsolatedMarginWithSymbol: (NSString*) symbol
    amount: (NSNumber*) amount
    completionHandler: (void (^)(SWGPosition* output, NSError* error)) handler;


/// Choose leverage for a position.
/// On Speculative (DPE-Enabled) contracts, users can choose an isolated leverage. This will automatically enable isolated margin.
///
/// @param symbol Symbol of position to adjust.
/// @param leverage Leverage value. Send a number between 0.01 and 100 to enable isolated margin with a fixed leverage. Send 0 to enable cross margin.
/// 
///  code:200 message:"Request was successful",
///  code:400 message:"Parameter Error",
///  code:401 message:"Unauthorized",
///  code:404 message:"Not Found"
///
/// @return SWGPosition*
-(NSNumber*) positionUpdateLeverageWithSymbol: (NSString*) symbol
    leverage: (NSNumber*) leverage
    completionHandler: (void (^)(SWGPosition* output, NSError* error)) handler;


/// Update your risk limit.
/// Risk Limits limit the size of positions you can trade at various margin levels. Larger positions require more margin. Please see the Risk Limit documentation for more details.
///
/// @param symbol Symbol of position to isolate.
/// @param riskLimit New Risk Limit, in Satoshis.
/// 
///  code:200 message:"Request was successful",
///  code:400 message:"Parameter Error",
///  code:401 message:"Unauthorized",
///  code:404 message:"Not Found"
///
/// @return SWGPosition*
-(NSNumber*) positionUpdateRiskLimitWithSymbol: (NSString*) symbol
    riskLimit: (NSNumber*) riskLimit
    completionHandler: (void (^)(SWGPosition* output, NSError* error)) handler;



@end
