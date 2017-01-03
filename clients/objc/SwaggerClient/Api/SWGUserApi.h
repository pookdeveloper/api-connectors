#import <Foundation/Foundation.h>
#import "SWGTransaction.h"
#import "SWGAccessToken.h"
#import "SWGUser.h"
#import "SWGAffiliate.h"
#import "SWGUserCommission.h"
#import "SWGMargin.h"
#import "SWGWallet.h"
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


@interface SWGUserApi: NSObject <SWGApi>

extern NSString* kSWGUserApiErrorDomain;
extern NSInteger kSWGUserApiMissingParamErrorCode;

+(instancetype) sharedAPI;

/// Cancel a withdrawal.
/// 
///
/// @param token 
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGTransaction*
-(NSNumber*) userCancelWithdrawalWithToken: (NSString*) token
    completionHandler: (void (^)(SWGTransaction* output, NSError* error)) handler;


/// Check if a referral code is valid.
/// If the code is valid, responds with the referral code's discount (e.g. `0.1` for 10%). Otherwise, will return a 404.
///
/// @param referralCode  (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSNumber*
-(NSNumber*) userCheckReferralCodeWithReferralCode: (NSString*) referralCode
    completionHandler: (void (^)(NSNumber* output, NSError* error)) handler;


/// Confirm your email address with a token.
/// 
///
/// @param token 
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGAccessToken*
-(NSNumber*) userConfirmEmailWithToken: (NSString*) token
    completionHandler: (void (^)(SWGAccessToken* output, NSError* error)) handler;


/// Confirm two-factor auth for this account. If using a Yubikey, simply send a token to this endpoint.
/// 
///
/// @param token Token from your selected TFA type.
/// @param type Two-factor auth type. Supported types: &#39;GA&#39; (Google Authenticator), &#39;Yubikey&#39; (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSNumber*
-(NSNumber*) userConfirmEnableTFAWithToken: (NSString*) token
    type: (NSString*) type
    completionHandler: (void (^)(NSNumber* output, NSError* error)) handler;


/// Confirm a withdrawal.
/// 
///
/// @param token 
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGTransaction*
-(NSNumber*) userConfirmWithdrawalWithToken: (NSString*) token
    completionHandler: (void (^)(SWGTransaction* output, NSError* error)) handler;


/// Disable two-factor auth for this account.
/// 
///
/// @param token Token from your selected TFA type.
/// @param type Two-factor auth type. Supported types: &#39;GA&#39; (Google Authenticator) (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSNumber*
-(NSNumber*) userDisableTFAWithToken: (NSString*) token
    type: (NSString*) type
    completionHandler: (void (^)(NSNumber* output, NSError* error)) handler;


/// Get your user model.
/// 
///
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGUser*
-(NSNumber*) userGetWithCompletionHandler: 
    (void (^)(SWGUser* output, NSError* error)) handler;


/// Get your current affiliate/referral status.
/// 
///
/// 
///  code:200 message:"Request was successful"
///
/// @return NSArray<SWGAffiliate>*
-(NSNumber*) userGetAffiliateStatusWithCompletionHandler: 
    (void (^)(NSArray<SWGAffiliate>* output, NSError* error)) handler;


/// Get your account's commission status.
/// 
///
/// 
///  code:200 message:"Request was successful"
///
/// @return NSArray<SWGUserCommission>*
-(NSNumber*) userGetCommissionWithCompletionHandler: 
    (void (^)(NSArray<SWGUserCommission>* output, NSError* error)) handler;


/// Get a deposit address.
/// 
///
/// @param currency  (optional) (default to XBt)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSString*
-(NSNumber*) userGetDepositAddressWithCurrency: (NSString*) currency
    completionHandler: (void (^)(NSString* output, NSError* error)) handler;


/// Get your account's margin status. Send a currency of \"all\" to receive an array of all supported currencies.
/// 
///
/// @param currency  (optional) (default to XBt)
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGMargin*
-(NSNumber*) userGetMarginWithCurrency: (NSString*) currency
    completionHandler: (void (^)(SWGMargin* output, NSError* error)) handler;


/// Get your current wallet information.
/// 
///
/// @param currency  (optional) (default to XBt)
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGWallet*
-(NSNumber*) userGetWalletWithCurrency: (NSString*) currency
    completionHandler: (void (^)(SWGWallet* output, NSError* error)) handler;


/// Get a history of all of your wallet transactions (deposits, withdrawals, PNL).
/// 
///
/// @param currency  (optional) (default to XBt)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSArray<SWGTransaction>*
-(NSNumber*) userGetWalletHistoryWithCurrency: (NSString*) currency
    completionHandler: (void (^)(NSArray<SWGTransaction>* output, NSError* error)) handler;


/// Get a summary of all of your wallet transactions (deposits, withdrawals, PNL).
/// 
///
/// @param currency  (optional) (default to XBt)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSArray<SWGTransaction>*
-(NSNumber*) userGetWalletSummaryWithCurrency: (NSString*) currency
    completionHandler: (void (^)(NSArray<SWGTransaction>* output, NSError* error)) handler;


/// Log out of BitMEX.
/// 
///
/// 
///  code:200 message:"Request was successful"
///
/// @return 
-(NSNumber*) userLogoutWithCompletionHandler: 
    (void (^)(NSError* error)) handler;


/// Log all systems out of BitMEX. This will revoke all of your account's access tokens, logging you out on all devices.
/// 
///
/// 
///  code:200 message:"Request was successful"
///
/// @return NSNumber*
-(NSNumber*) userLogoutAllWithCompletionHandler: 
    (void (^)(NSNumber* output, NSError* error)) handler;


/// Get Google Authenticator secret key for setting up two-factor auth. Fails if already enabled. Use /confirmEnableTFA for Yubikeys.
/// 
///
/// @param type Two-factor auth type. Supported types: &#39;GA&#39; (Google Authenticator) (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return NSNumber*
-(NSNumber*) userRequestEnableTFAWithType: (NSString*) type
    completionHandler: (void (^)(NSNumber* output, NSError* error)) handler;


/// Request a withdrawal to an external wallet.
/// This will send a confirmation email to the email address on record, unless requested via an API Key with the `withdraw` permission.
///
/// @param currency Currency you&#39;re withdrawing. Options: &#x60;XBt&#x60; (default to XBt)
/// @param amount Amount of withdrawal currency.
/// @param address Destination Address.
/// @param otpToken 2FA token. Required if 2FA is enabled on your account. (optional)
/// @param fee Network fee for Bitcoin withdrawals. If not specified, a default value will be calculated based on Bitcoin network conditions. You will have a chance to confirm this via email. (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGTransaction*
-(NSNumber*) userRequestWithdrawalWithCurrency: (NSString*) currency
    amount: (NSNumber*) amount
    address: (NSString*) address
    otpToken: (NSString*) otpToken
    fee: (NSNumber*) fee
    completionHandler: (void (^)(SWGTransaction* output, NSError* error)) handler;


/// Save user preferences.
/// 
///
/// @param prefs 
/// @param overwrite If true, will overwrite all existing preferences. (optional) (default to false)
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGUser*
-(NSNumber*) userSavePreferencesWithPrefs: (NSString*) prefs
    overwrite: (NSNumber*) overwrite
    completionHandler: (void (^)(SWGUser* output, NSError* error)) handler;


/// Update your password, name, and other attributes.
/// 
///
/// @param firstname  (optional)
/// @param lastname  (optional)
/// @param oldPassword  (optional)
/// @param varNewPassword  (optional)
/// @param varNewPasswordConfirm  (optional)
/// @param username Username can only be set once. To reset, email support. (optional)
/// @param country Country of residence. (optional)
/// @param pgpPubKey PGP Public Key. If specified, automated emails will be sentwith this key. (optional)
/// 
///  code:200 message:"Request was successful"
///
/// @return SWGUser*
-(NSNumber*) userUpdateWithFirstname: (NSString*) firstname
    lastname: (NSString*) lastname
    oldPassword: (NSString*) oldPassword
    varNewPassword: (NSString*) varNewPassword
    varNewPasswordConfirm: (NSString*) varNewPasswordConfirm
    username: (NSString*) username
    country: (NSString*) country
    pgpPubKey: (NSString*) pgpPubKey
    completionHandler: (void (^)(SWGUser* output, NSError* error)) handler;



@end
