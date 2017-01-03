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


package io.swagger.client.model;

import java.util.Objects;
import com.fasterxml.jackson.annotation.JsonProperty;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.math.BigDecimal;
import org.joda.time.LocalDate;


/**
 * Margin
 */
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JavaClientCodegen", date = "2017-01-03T10:34:33.567-06:00")
public class Margin   {
  @JsonProperty("account")
  private BigDecimal account = null;

  @JsonProperty("currency")
  private String currency = null;

  @JsonProperty("riskLimit")
  private BigDecimal riskLimit = null;

  @JsonProperty("prevState")
  private String prevState = null;

  @JsonProperty("state")
  private String state = null;

  @JsonProperty("action")
  private String action = null;

  @JsonProperty("amount")
  private BigDecimal amount = null;

  @JsonProperty("pendingCredit")
  private BigDecimal pendingCredit = null;

  @JsonProperty("pendingDebit")
  private BigDecimal pendingDebit = null;

  @JsonProperty("confirmedDebit")
  private BigDecimal confirmedDebit = null;

  @JsonProperty("prevRealisedPnl")
  private BigDecimal prevRealisedPnl = null;

  @JsonProperty("prevUnrealisedPnl")
  private BigDecimal prevUnrealisedPnl = null;

  @JsonProperty("grossComm")
  private BigDecimal grossComm = null;

  @JsonProperty("grossOpenCost")
  private BigDecimal grossOpenCost = null;

  @JsonProperty("grossOpenPremium")
  private BigDecimal grossOpenPremium = null;

  @JsonProperty("grossExecCost")
  private BigDecimal grossExecCost = null;

  @JsonProperty("grossMarkValue")
  private BigDecimal grossMarkValue = null;

  @JsonProperty("riskValue")
  private BigDecimal riskValue = null;

  @JsonProperty("taxableMargin")
  private BigDecimal taxableMargin = null;

  @JsonProperty("initMargin")
  private BigDecimal initMargin = null;

  @JsonProperty("maintMargin")
  private BigDecimal maintMargin = null;

  @JsonProperty("sessionMargin")
  private BigDecimal sessionMargin = null;

  @JsonProperty("targetExcessMargin")
  private BigDecimal targetExcessMargin = null;

  @JsonProperty("varMargin")
  private BigDecimal varMargin = null;

  @JsonProperty("realisedPnl")
  private BigDecimal realisedPnl = null;

  @JsonProperty("unrealisedPnl")
  private BigDecimal unrealisedPnl = null;

  @JsonProperty("indicativeTax")
  private BigDecimal indicativeTax = null;

  @JsonProperty("unrealisedProfit")
  private BigDecimal unrealisedProfit = null;

  @JsonProperty("syntheticMargin")
  private BigDecimal syntheticMargin = null;

  @JsonProperty("walletBalance")
  private BigDecimal walletBalance = null;

  @JsonProperty("marginBalance")
  private BigDecimal marginBalance = null;

  @JsonProperty("marginBalancePcnt")
  private Double marginBalancePcnt = 0.0d;

  @JsonProperty("marginLeverage")
  private Double marginLeverage = 0.0d;

  @JsonProperty("marginUsedPcnt")
  private Double marginUsedPcnt = 0.0d;

  @JsonProperty("excessMargin")
  private BigDecimal excessMargin = null;

  @JsonProperty("excessMarginPcnt")
  private Double excessMarginPcnt = 0.0d;

  @JsonProperty("availableMargin")
  private BigDecimal availableMargin = null;

  @JsonProperty("withdrawableMargin")
  private BigDecimal withdrawableMargin = null;

  @JsonProperty("timestamp")
  private LocalDate timestamp = null;

  @JsonProperty("grossLastValue")
  private BigDecimal grossLastValue = null;

  @JsonProperty("commission")
  private Double commission = 0.0d;

  public Margin account(BigDecimal account) {
    this.account = account;
    return this;
  }

   /**
   * Get account
   * @return account
  **/
  @ApiModelProperty(example = "null", required = true, value = "")
  public BigDecimal getAccount() {
    return account;
  }

  public void setAccount(BigDecimal account) {
    this.account = account;
  }

  public Margin currency(String currency) {
    this.currency = currency;
    return this;
  }

   /**
   * Get currency
   * @return currency
  **/
  @ApiModelProperty(example = "null", required = true, value = "")
  public String getCurrency() {
    return currency;
  }

  public void setCurrency(String currency) {
    this.currency = currency;
  }

  public Margin riskLimit(BigDecimal riskLimit) {
    this.riskLimit = riskLimit;
    return this;
  }

   /**
   * Get riskLimit
   * @return riskLimit
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getRiskLimit() {
    return riskLimit;
  }

  public void setRiskLimit(BigDecimal riskLimit) {
    this.riskLimit = riskLimit;
  }

  public Margin prevState(String prevState) {
    this.prevState = prevState;
    return this;
  }

   /**
   * Get prevState
   * @return prevState
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getPrevState() {
    return prevState;
  }

  public void setPrevState(String prevState) {
    this.prevState = prevState;
  }

  public Margin state(String state) {
    this.state = state;
    return this;
  }

   /**
   * Get state
   * @return state
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getState() {
    return state;
  }

  public void setState(String state) {
    this.state = state;
  }

  public Margin action(String action) {
    this.action = action;
    return this;
  }

   /**
   * Get action
   * @return action
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getAction() {
    return action;
  }

  public void setAction(String action) {
    this.action = action;
  }

  public Margin amount(BigDecimal amount) {
    this.amount = amount;
    return this;
  }

   /**
   * Get amount
   * @return amount
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getAmount() {
    return amount;
  }

  public void setAmount(BigDecimal amount) {
    this.amount = amount;
  }

  public Margin pendingCredit(BigDecimal pendingCredit) {
    this.pendingCredit = pendingCredit;
    return this;
  }

   /**
   * Get pendingCredit
   * @return pendingCredit
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getPendingCredit() {
    return pendingCredit;
  }

  public void setPendingCredit(BigDecimal pendingCredit) {
    this.pendingCredit = pendingCredit;
  }

  public Margin pendingDebit(BigDecimal pendingDebit) {
    this.pendingDebit = pendingDebit;
    return this;
  }

   /**
   * Get pendingDebit
   * @return pendingDebit
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getPendingDebit() {
    return pendingDebit;
  }

  public void setPendingDebit(BigDecimal pendingDebit) {
    this.pendingDebit = pendingDebit;
  }

  public Margin confirmedDebit(BigDecimal confirmedDebit) {
    this.confirmedDebit = confirmedDebit;
    return this;
  }

   /**
   * Get confirmedDebit
   * @return confirmedDebit
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getConfirmedDebit() {
    return confirmedDebit;
  }

  public void setConfirmedDebit(BigDecimal confirmedDebit) {
    this.confirmedDebit = confirmedDebit;
  }

  public Margin prevRealisedPnl(BigDecimal prevRealisedPnl) {
    this.prevRealisedPnl = prevRealisedPnl;
    return this;
  }

   /**
   * Get prevRealisedPnl
   * @return prevRealisedPnl
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getPrevRealisedPnl() {
    return prevRealisedPnl;
  }

  public void setPrevRealisedPnl(BigDecimal prevRealisedPnl) {
    this.prevRealisedPnl = prevRealisedPnl;
  }

  public Margin prevUnrealisedPnl(BigDecimal prevUnrealisedPnl) {
    this.prevUnrealisedPnl = prevUnrealisedPnl;
    return this;
  }

   /**
   * Get prevUnrealisedPnl
   * @return prevUnrealisedPnl
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getPrevUnrealisedPnl() {
    return prevUnrealisedPnl;
  }

  public void setPrevUnrealisedPnl(BigDecimal prevUnrealisedPnl) {
    this.prevUnrealisedPnl = prevUnrealisedPnl;
  }

  public Margin grossComm(BigDecimal grossComm) {
    this.grossComm = grossComm;
    return this;
  }

   /**
   * Get grossComm
   * @return grossComm
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossComm() {
    return grossComm;
  }

  public void setGrossComm(BigDecimal grossComm) {
    this.grossComm = grossComm;
  }

  public Margin grossOpenCost(BigDecimal grossOpenCost) {
    this.grossOpenCost = grossOpenCost;
    return this;
  }

   /**
   * Get grossOpenCost
   * @return grossOpenCost
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossOpenCost() {
    return grossOpenCost;
  }

  public void setGrossOpenCost(BigDecimal grossOpenCost) {
    this.grossOpenCost = grossOpenCost;
  }

  public Margin grossOpenPremium(BigDecimal grossOpenPremium) {
    this.grossOpenPremium = grossOpenPremium;
    return this;
  }

   /**
   * Get grossOpenPremium
   * @return grossOpenPremium
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossOpenPremium() {
    return grossOpenPremium;
  }

  public void setGrossOpenPremium(BigDecimal grossOpenPremium) {
    this.grossOpenPremium = grossOpenPremium;
  }

  public Margin grossExecCost(BigDecimal grossExecCost) {
    this.grossExecCost = grossExecCost;
    return this;
  }

   /**
   * Get grossExecCost
   * @return grossExecCost
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossExecCost() {
    return grossExecCost;
  }

  public void setGrossExecCost(BigDecimal grossExecCost) {
    this.grossExecCost = grossExecCost;
  }

  public Margin grossMarkValue(BigDecimal grossMarkValue) {
    this.grossMarkValue = grossMarkValue;
    return this;
  }

   /**
   * Get grossMarkValue
   * @return grossMarkValue
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossMarkValue() {
    return grossMarkValue;
  }

  public void setGrossMarkValue(BigDecimal grossMarkValue) {
    this.grossMarkValue = grossMarkValue;
  }

  public Margin riskValue(BigDecimal riskValue) {
    this.riskValue = riskValue;
    return this;
  }

   /**
   * Get riskValue
   * @return riskValue
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getRiskValue() {
    return riskValue;
  }

  public void setRiskValue(BigDecimal riskValue) {
    this.riskValue = riskValue;
  }

  public Margin taxableMargin(BigDecimal taxableMargin) {
    this.taxableMargin = taxableMargin;
    return this;
  }

   /**
   * Get taxableMargin
   * @return taxableMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getTaxableMargin() {
    return taxableMargin;
  }

  public void setTaxableMargin(BigDecimal taxableMargin) {
    this.taxableMargin = taxableMargin;
  }

  public Margin initMargin(BigDecimal initMargin) {
    this.initMargin = initMargin;
    return this;
  }

   /**
   * Get initMargin
   * @return initMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getInitMargin() {
    return initMargin;
  }

  public void setInitMargin(BigDecimal initMargin) {
    this.initMargin = initMargin;
  }

  public Margin maintMargin(BigDecimal maintMargin) {
    this.maintMargin = maintMargin;
    return this;
  }

   /**
   * Get maintMargin
   * @return maintMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getMaintMargin() {
    return maintMargin;
  }

  public void setMaintMargin(BigDecimal maintMargin) {
    this.maintMargin = maintMargin;
  }

  public Margin sessionMargin(BigDecimal sessionMargin) {
    this.sessionMargin = sessionMargin;
    return this;
  }

   /**
   * Get sessionMargin
   * @return sessionMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getSessionMargin() {
    return sessionMargin;
  }

  public void setSessionMargin(BigDecimal sessionMargin) {
    this.sessionMargin = sessionMargin;
  }

  public Margin targetExcessMargin(BigDecimal targetExcessMargin) {
    this.targetExcessMargin = targetExcessMargin;
    return this;
  }

   /**
   * Get targetExcessMargin
   * @return targetExcessMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getTargetExcessMargin() {
    return targetExcessMargin;
  }

  public void setTargetExcessMargin(BigDecimal targetExcessMargin) {
    this.targetExcessMargin = targetExcessMargin;
  }

  public Margin varMargin(BigDecimal varMargin) {
    this.varMargin = varMargin;
    return this;
  }

   /**
   * Get varMargin
   * @return varMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getVarMargin() {
    return varMargin;
  }

  public void setVarMargin(BigDecimal varMargin) {
    this.varMargin = varMargin;
  }

  public Margin realisedPnl(BigDecimal realisedPnl) {
    this.realisedPnl = realisedPnl;
    return this;
  }

   /**
   * Get realisedPnl
   * @return realisedPnl
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getRealisedPnl() {
    return realisedPnl;
  }

  public void setRealisedPnl(BigDecimal realisedPnl) {
    this.realisedPnl = realisedPnl;
  }

  public Margin unrealisedPnl(BigDecimal unrealisedPnl) {
    this.unrealisedPnl = unrealisedPnl;
    return this;
  }

   /**
   * Get unrealisedPnl
   * @return unrealisedPnl
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getUnrealisedPnl() {
    return unrealisedPnl;
  }

  public void setUnrealisedPnl(BigDecimal unrealisedPnl) {
    this.unrealisedPnl = unrealisedPnl;
  }

  public Margin indicativeTax(BigDecimal indicativeTax) {
    this.indicativeTax = indicativeTax;
    return this;
  }

   /**
   * Get indicativeTax
   * @return indicativeTax
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getIndicativeTax() {
    return indicativeTax;
  }

  public void setIndicativeTax(BigDecimal indicativeTax) {
    this.indicativeTax = indicativeTax;
  }

  public Margin unrealisedProfit(BigDecimal unrealisedProfit) {
    this.unrealisedProfit = unrealisedProfit;
    return this;
  }

   /**
   * Get unrealisedProfit
   * @return unrealisedProfit
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getUnrealisedProfit() {
    return unrealisedProfit;
  }

  public void setUnrealisedProfit(BigDecimal unrealisedProfit) {
    this.unrealisedProfit = unrealisedProfit;
  }

  public Margin syntheticMargin(BigDecimal syntheticMargin) {
    this.syntheticMargin = syntheticMargin;
    return this;
  }

   /**
   * Get syntheticMargin
   * @return syntheticMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getSyntheticMargin() {
    return syntheticMargin;
  }

  public void setSyntheticMargin(BigDecimal syntheticMargin) {
    this.syntheticMargin = syntheticMargin;
  }

  public Margin walletBalance(BigDecimal walletBalance) {
    this.walletBalance = walletBalance;
    return this;
  }

   /**
   * Get walletBalance
   * @return walletBalance
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getWalletBalance() {
    return walletBalance;
  }

  public void setWalletBalance(BigDecimal walletBalance) {
    this.walletBalance = walletBalance;
  }

  public Margin marginBalance(BigDecimal marginBalance) {
    this.marginBalance = marginBalance;
    return this;
  }

   /**
   * Get marginBalance
   * @return marginBalance
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getMarginBalance() {
    return marginBalance;
  }

  public void setMarginBalance(BigDecimal marginBalance) {
    this.marginBalance = marginBalance;
  }

  public Margin marginBalancePcnt(Double marginBalancePcnt) {
    this.marginBalancePcnt = marginBalancePcnt;
    return this;
  }

   /**
   * Get marginBalancePcnt
   * @return marginBalancePcnt
  **/
  @ApiModelProperty(example = "null", value = "")
  public Double getMarginBalancePcnt() {
    return marginBalancePcnt;
  }

  public void setMarginBalancePcnt(Double marginBalancePcnt) {
    this.marginBalancePcnt = marginBalancePcnt;
  }

  public Margin marginLeverage(Double marginLeverage) {
    this.marginLeverage = marginLeverage;
    return this;
  }

   /**
   * Get marginLeverage
   * @return marginLeverage
  **/
  @ApiModelProperty(example = "null", value = "")
  public Double getMarginLeverage() {
    return marginLeverage;
  }

  public void setMarginLeverage(Double marginLeverage) {
    this.marginLeverage = marginLeverage;
  }

  public Margin marginUsedPcnt(Double marginUsedPcnt) {
    this.marginUsedPcnt = marginUsedPcnt;
    return this;
  }

   /**
   * Get marginUsedPcnt
   * @return marginUsedPcnt
  **/
  @ApiModelProperty(example = "null", value = "")
  public Double getMarginUsedPcnt() {
    return marginUsedPcnt;
  }

  public void setMarginUsedPcnt(Double marginUsedPcnt) {
    this.marginUsedPcnt = marginUsedPcnt;
  }

  public Margin excessMargin(BigDecimal excessMargin) {
    this.excessMargin = excessMargin;
    return this;
  }

   /**
   * Get excessMargin
   * @return excessMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getExcessMargin() {
    return excessMargin;
  }

  public void setExcessMargin(BigDecimal excessMargin) {
    this.excessMargin = excessMargin;
  }

  public Margin excessMarginPcnt(Double excessMarginPcnt) {
    this.excessMarginPcnt = excessMarginPcnt;
    return this;
  }

   /**
   * Get excessMarginPcnt
   * @return excessMarginPcnt
  **/
  @ApiModelProperty(example = "null", value = "")
  public Double getExcessMarginPcnt() {
    return excessMarginPcnt;
  }

  public void setExcessMarginPcnt(Double excessMarginPcnt) {
    this.excessMarginPcnt = excessMarginPcnt;
  }

  public Margin availableMargin(BigDecimal availableMargin) {
    this.availableMargin = availableMargin;
    return this;
  }

   /**
   * Get availableMargin
   * @return availableMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getAvailableMargin() {
    return availableMargin;
  }

  public void setAvailableMargin(BigDecimal availableMargin) {
    this.availableMargin = availableMargin;
  }

  public Margin withdrawableMargin(BigDecimal withdrawableMargin) {
    this.withdrawableMargin = withdrawableMargin;
    return this;
  }

   /**
   * Get withdrawableMargin
   * @return withdrawableMargin
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getWithdrawableMargin() {
    return withdrawableMargin;
  }

  public void setWithdrawableMargin(BigDecimal withdrawableMargin) {
    this.withdrawableMargin = withdrawableMargin;
  }

  public Margin timestamp(LocalDate timestamp) {
    this.timestamp = timestamp;
    return this;
  }

   /**
   * Get timestamp
   * @return timestamp
  **/
  @ApiModelProperty(example = "null", value = "")
  public LocalDate getTimestamp() {
    return timestamp;
  }

  public void setTimestamp(LocalDate timestamp) {
    this.timestamp = timestamp;
  }

  public Margin grossLastValue(BigDecimal grossLastValue) {
    this.grossLastValue = grossLastValue;
    return this;
  }

   /**
   * Get grossLastValue
   * @return grossLastValue
  **/
  @ApiModelProperty(example = "null", value = "")
  public BigDecimal getGrossLastValue() {
    return grossLastValue;
  }

  public void setGrossLastValue(BigDecimal grossLastValue) {
    this.grossLastValue = grossLastValue;
  }

  public Margin commission(Double commission) {
    this.commission = commission;
    return this;
  }

   /**
   * Get commission
   * @return commission
  **/
  @ApiModelProperty(example = "null", value = "")
  public Double getCommission() {
    return commission;
  }

  public void setCommission(Double commission) {
    this.commission = commission;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    Margin margin = (Margin) o;
    return Objects.equals(this.account, margin.account) &&
        Objects.equals(this.currency, margin.currency) &&
        Objects.equals(this.riskLimit, margin.riskLimit) &&
        Objects.equals(this.prevState, margin.prevState) &&
        Objects.equals(this.state, margin.state) &&
        Objects.equals(this.action, margin.action) &&
        Objects.equals(this.amount, margin.amount) &&
        Objects.equals(this.pendingCredit, margin.pendingCredit) &&
        Objects.equals(this.pendingDebit, margin.pendingDebit) &&
        Objects.equals(this.confirmedDebit, margin.confirmedDebit) &&
        Objects.equals(this.prevRealisedPnl, margin.prevRealisedPnl) &&
        Objects.equals(this.prevUnrealisedPnl, margin.prevUnrealisedPnl) &&
        Objects.equals(this.grossComm, margin.grossComm) &&
        Objects.equals(this.grossOpenCost, margin.grossOpenCost) &&
        Objects.equals(this.grossOpenPremium, margin.grossOpenPremium) &&
        Objects.equals(this.grossExecCost, margin.grossExecCost) &&
        Objects.equals(this.grossMarkValue, margin.grossMarkValue) &&
        Objects.equals(this.riskValue, margin.riskValue) &&
        Objects.equals(this.taxableMargin, margin.taxableMargin) &&
        Objects.equals(this.initMargin, margin.initMargin) &&
        Objects.equals(this.maintMargin, margin.maintMargin) &&
        Objects.equals(this.sessionMargin, margin.sessionMargin) &&
        Objects.equals(this.targetExcessMargin, margin.targetExcessMargin) &&
        Objects.equals(this.varMargin, margin.varMargin) &&
        Objects.equals(this.realisedPnl, margin.realisedPnl) &&
        Objects.equals(this.unrealisedPnl, margin.unrealisedPnl) &&
        Objects.equals(this.indicativeTax, margin.indicativeTax) &&
        Objects.equals(this.unrealisedProfit, margin.unrealisedProfit) &&
        Objects.equals(this.syntheticMargin, margin.syntheticMargin) &&
        Objects.equals(this.walletBalance, margin.walletBalance) &&
        Objects.equals(this.marginBalance, margin.marginBalance) &&
        Objects.equals(this.marginBalancePcnt, margin.marginBalancePcnt) &&
        Objects.equals(this.marginLeverage, margin.marginLeverage) &&
        Objects.equals(this.marginUsedPcnt, margin.marginUsedPcnt) &&
        Objects.equals(this.excessMargin, margin.excessMargin) &&
        Objects.equals(this.excessMarginPcnt, margin.excessMarginPcnt) &&
        Objects.equals(this.availableMargin, margin.availableMargin) &&
        Objects.equals(this.withdrawableMargin, margin.withdrawableMargin) &&
        Objects.equals(this.timestamp, margin.timestamp) &&
        Objects.equals(this.grossLastValue, margin.grossLastValue) &&
        Objects.equals(this.commission, margin.commission);
  }

  @Override
  public int hashCode() {
    return Objects.hash(account, currency, riskLimit, prevState, state, action, amount, pendingCredit, pendingDebit, confirmedDebit, prevRealisedPnl, prevUnrealisedPnl, grossComm, grossOpenCost, grossOpenPremium, grossExecCost, grossMarkValue, riskValue, taxableMargin, initMargin, maintMargin, sessionMargin, targetExcessMargin, varMargin, realisedPnl, unrealisedPnl, indicativeTax, unrealisedProfit, syntheticMargin, walletBalance, marginBalance, marginBalancePcnt, marginLeverage, marginUsedPcnt, excessMargin, excessMarginPcnt, availableMargin, withdrawableMargin, timestamp, grossLastValue, commission);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class Margin {\n");
    
    sb.append("    account: ").append(toIndentedString(account)).append("\n");
    sb.append("    currency: ").append(toIndentedString(currency)).append("\n");
    sb.append("    riskLimit: ").append(toIndentedString(riskLimit)).append("\n");
    sb.append("    prevState: ").append(toIndentedString(prevState)).append("\n");
    sb.append("    state: ").append(toIndentedString(state)).append("\n");
    sb.append("    action: ").append(toIndentedString(action)).append("\n");
    sb.append("    amount: ").append(toIndentedString(amount)).append("\n");
    sb.append("    pendingCredit: ").append(toIndentedString(pendingCredit)).append("\n");
    sb.append("    pendingDebit: ").append(toIndentedString(pendingDebit)).append("\n");
    sb.append("    confirmedDebit: ").append(toIndentedString(confirmedDebit)).append("\n");
    sb.append("    prevRealisedPnl: ").append(toIndentedString(prevRealisedPnl)).append("\n");
    sb.append("    prevUnrealisedPnl: ").append(toIndentedString(prevUnrealisedPnl)).append("\n");
    sb.append("    grossComm: ").append(toIndentedString(grossComm)).append("\n");
    sb.append("    grossOpenCost: ").append(toIndentedString(grossOpenCost)).append("\n");
    sb.append("    grossOpenPremium: ").append(toIndentedString(grossOpenPremium)).append("\n");
    sb.append("    grossExecCost: ").append(toIndentedString(grossExecCost)).append("\n");
    sb.append("    grossMarkValue: ").append(toIndentedString(grossMarkValue)).append("\n");
    sb.append("    riskValue: ").append(toIndentedString(riskValue)).append("\n");
    sb.append("    taxableMargin: ").append(toIndentedString(taxableMargin)).append("\n");
    sb.append("    initMargin: ").append(toIndentedString(initMargin)).append("\n");
    sb.append("    maintMargin: ").append(toIndentedString(maintMargin)).append("\n");
    sb.append("    sessionMargin: ").append(toIndentedString(sessionMargin)).append("\n");
    sb.append("    targetExcessMargin: ").append(toIndentedString(targetExcessMargin)).append("\n");
    sb.append("    varMargin: ").append(toIndentedString(varMargin)).append("\n");
    sb.append("    realisedPnl: ").append(toIndentedString(realisedPnl)).append("\n");
    sb.append("    unrealisedPnl: ").append(toIndentedString(unrealisedPnl)).append("\n");
    sb.append("    indicativeTax: ").append(toIndentedString(indicativeTax)).append("\n");
    sb.append("    unrealisedProfit: ").append(toIndentedString(unrealisedProfit)).append("\n");
    sb.append("    syntheticMargin: ").append(toIndentedString(syntheticMargin)).append("\n");
    sb.append("    walletBalance: ").append(toIndentedString(walletBalance)).append("\n");
    sb.append("    marginBalance: ").append(toIndentedString(marginBalance)).append("\n");
    sb.append("    marginBalancePcnt: ").append(toIndentedString(marginBalancePcnt)).append("\n");
    sb.append("    marginLeverage: ").append(toIndentedString(marginLeverage)).append("\n");
    sb.append("    marginUsedPcnt: ").append(toIndentedString(marginUsedPcnt)).append("\n");
    sb.append("    excessMargin: ").append(toIndentedString(excessMargin)).append("\n");
    sb.append("    excessMarginPcnt: ").append(toIndentedString(excessMarginPcnt)).append("\n");
    sb.append("    availableMargin: ").append(toIndentedString(availableMargin)).append("\n");
    sb.append("    withdrawableMargin: ").append(toIndentedString(withdrawableMargin)).append("\n");
    sb.append("    timestamp: ").append(toIndentedString(timestamp)).append("\n");
    sb.append("    grossLastValue: ").append(toIndentedString(grossLastValue)).append("\n");
    sb.append("    commission: ").append(toIndentedString(commission)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}

