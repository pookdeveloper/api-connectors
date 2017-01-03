# coding: utf-8

"""
    BitMEX API

    ## REST API for the BitMEX Trading Platform  [Changelog](/app/apiChangelog)  ----  #### Getting Started   ##### Fetching Data  All REST endpoints are documented below. You can try out any query right from this interface.  Most table queries accept `count`, `start`, and `reverse` params. Set `reverse=true` to get rows newest-first.  Additional documentation regarding filters, timestamps, and authentication is available in [the main API documentation](https://www.bitmex.com/app/restAPI).  *All* table data is available via the [Websocket](/app/wsAPI). We highly recommend using the socket if you want to have the quickest possible data without being subject to ratelimits.  ##### Return Types  By default, all data is returned as JSON. Send `?_format=csv` to get CSV data or `?_format=xml` to get XML data.  ##### Trade Data Queries  *This is only a small subset of what is available, to get you started.*  Fill in the parameters and click the `Try it out!` button to try any of these queries.  * [Pricing Data](#!/Quote/Quote_get)  * [Trade Data](#!/Trade/Trade_get)  * [OrderBook Data](#!/OrderBook/OrderBook_getL2)  * [Settlement Data](#!/Settlement/Settlement_get)  * [Exchange Statistics](#!/Stats/Stats_history)  Every function of the BitMEX.com platform is exposed here and documented. Many more functions are available.  ---  ## All API Endpoints  Click to expand a section. 

    OpenAPI spec version: 1.2.0
    Contact: support@bitmex.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

from __future__ import absolute_import

import sys
import os
import re

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class PositionApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def position_get(self, **kwargs):
        """
        Get your positions.
        See <a href=\"http://www.onixs.biz/fix-dictionary/5.0.SP2/msgType_AP_6580.html\">the FIX Spec</a> for explanations of these fields.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_get(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str filter: Table filter. For example, send {\"symbol\": \"XBT24H\"}.
        :param str columns: Which columns to fetch. For example, send [\"columnName\"].
        :param float count: Number of rows to fetch.
        :return: list[Position]
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.position_get_with_http_info(**kwargs)
        else:
            (data) = self.position_get_with_http_info(**kwargs)
            return data

    def position_get_with_http_info(self, **kwargs):
        """
        Get your positions.
        See <a href=\"http://www.onixs.biz/fix-dictionary/5.0.SP2/msgType_AP_6580.html\">the FIX Spec</a> for explanations of these fields.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_get_with_http_info(callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str filter: Table filter. For example, send {\"symbol\": \"XBT24H\"}.
        :param str columns: Which columns to fetch. For example, send [\"columnName\"].
        :param float count: Number of rows to fetch.
        :return: list[Position]
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['filter', 'columns', 'count']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method position_get" % key
                )
            params[key] = val
        del params['kwargs']

        resource_path = '/position'.replace('{format}', 'json')
        path_params = {}

        query_params = {}
        if 'filter' in params:
            query_params['filter'] = params['filter']
        if 'columns' in params:
            query_params['columns'] = params['columns']
        if 'count' in params:
            query_params['count'] = params['count']

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'GET',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='list[Position]',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))

    def position_isolate_margin(self, symbol, **kwargs):
        """
        Enable isolated margin or cross margin per-position.
        On Speculative (DPE-Enabled) contracts, users can switch isolate margin per-position. This function allows switching margin isolation (aka fixed margin) on and off.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_isolate_margin(symbol, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Position symbol to isolate. (required)
        :param bool enabled: True for isolated margin, false for cross margin.
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.position_isolate_margin_with_http_info(symbol, **kwargs)
        else:
            (data) = self.position_isolate_margin_with_http_info(symbol, **kwargs)
            return data

    def position_isolate_margin_with_http_info(self, symbol, **kwargs):
        """
        Enable isolated margin or cross margin per-position.
        On Speculative (DPE-Enabled) contracts, users can switch isolate margin per-position. This function allows switching margin isolation (aka fixed margin) on and off.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_isolate_margin_with_http_info(symbol, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Position symbol to isolate. (required)
        :param bool enabled: True for isolated margin, false for cross margin.
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['symbol', 'enabled']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method position_isolate_margin" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'symbol' is set
        if ('symbol' not in params) or (params['symbol'] is None):
            raise ValueError("Missing the required parameter `symbol` when calling `position_isolate_margin`")

        resource_path = '/position/isolate'.replace('{format}', 'json')
        path_params = {}

        query_params = {}

        header_params = {}

        form_params = []
        local_var_files = {}
        if 'symbol' in params:
            form_params.append(('symbol', params['symbol']))
        if 'enabled' in params:
            form_params.append(('enabled', params['enabled']))

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'POST',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='Position',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))

    def position_transfer_isolated_margin(self, symbol, amount, **kwargs):
        """
        Transfer equity in or out of a position.
        When margin is isolated on a position, use this function to add or remove margin from the position. Note that you cannot remove margin below the initial margin threshold.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_transfer_isolated_margin(symbol, amount, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to isolate. (required)
        :param float amount: Amount to transfer, in Satoshis. May be negative. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.position_transfer_isolated_margin_with_http_info(symbol, amount, **kwargs)
        else:
            (data) = self.position_transfer_isolated_margin_with_http_info(symbol, amount, **kwargs)
            return data

    def position_transfer_isolated_margin_with_http_info(self, symbol, amount, **kwargs):
        """
        Transfer equity in or out of a position.
        When margin is isolated on a position, use this function to add or remove margin from the position. Note that you cannot remove margin below the initial margin threshold.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_transfer_isolated_margin_with_http_info(symbol, amount, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to isolate. (required)
        :param float amount: Amount to transfer, in Satoshis. May be negative. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['symbol', 'amount']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method position_transfer_isolated_margin" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'symbol' is set
        if ('symbol' not in params) or (params['symbol'] is None):
            raise ValueError("Missing the required parameter `symbol` when calling `position_transfer_isolated_margin`")
        # verify the required parameter 'amount' is set
        if ('amount' not in params) or (params['amount'] is None):
            raise ValueError("Missing the required parameter `amount` when calling `position_transfer_isolated_margin`")

        resource_path = '/position/transferMargin'.replace('{format}', 'json')
        path_params = {}

        query_params = {}

        header_params = {}

        form_params = []
        local_var_files = {}
        if 'symbol' in params:
            form_params.append(('symbol', params['symbol']))
        if 'amount' in params:
            form_params.append(('amount', params['amount']))

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'POST',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='Position',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))

    def position_update_leverage(self, symbol, leverage, **kwargs):
        """
        Choose leverage for a position.
        On Speculative (DPE-Enabled) contracts, users can choose an isolated leverage. This will automatically enable isolated margin.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_update_leverage(symbol, leverage, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to adjust. (required)
        :param float leverage: Leverage value. Send a number between 0.01 and 100 to enable isolated margin with a fixed leverage. Send 0 to enable cross margin. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.position_update_leverage_with_http_info(symbol, leverage, **kwargs)
        else:
            (data) = self.position_update_leverage_with_http_info(symbol, leverage, **kwargs)
            return data

    def position_update_leverage_with_http_info(self, symbol, leverage, **kwargs):
        """
        Choose leverage for a position.
        On Speculative (DPE-Enabled) contracts, users can choose an isolated leverage. This will automatically enable isolated margin.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_update_leverage_with_http_info(symbol, leverage, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to adjust. (required)
        :param float leverage: Leverage value. Send a number between 0.01 and 100 to enable isolated margin with a fixed leverage. Send 0 to enable cross margin. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['symbol', 'leverage']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method position_update_leverage" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'symbol' is set
        if ('symbol' not in params) or (params['symbol'] is None):
            raise ValueError("Missing the required parameter `symbol` when calling `position_update_leverage`")
        # verify the required parameter 'leverage' is set
        if ('leverage' not in params) or (params['leverage'] is None):
            raise ValueError("Missing the required parameter `leverage` when calling `position_update_leverage`")

        resource_path = '/position/leverage'.replace('{format}', 'json')
        path_params = {}

        query_params = {}

        header_params = {}

        form_params = []
        local_var_files = {}
        if 'symbol' in params:
            form_params.append(('symbol', params['symbol']))
        if 'leverage' in params:
            form_params.append(('leverage', params['leverage']))

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'POST',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='Position',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))

    def position_update_risk_limit(self, symbol, risk_limit, **kwargs):
        """
        Update your risk limit.
        Risk Limits limit the size of positions you can trade at various margin levels. Larger positions require more margin. Please see the Risk Limit documentation for more details.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_update_risk_limit(symbol, risk_limit, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to isolate. (required)
        :param float risk_limit: New Risk Limit, in Satoshis. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.position_update_risk_limit_with_http_info(symbol, risk_limit, **kwargs)
        else:
            (data) = self.position_update_risk_limit_with_http_info(symbol, risk_limit, **kwargs)
            return data

    def position_update_risk_limit_with_http_info(self, symbol, risk_limit, **kwargs):
        """
        Update your risk limit.
        Risk Limits limit the size of positions you can trade at various margin levels. Larger positions require more margin. Please see the Risk Limit documentation for more details.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.position_update_risk_limit_with_http_info(symbol, risk_limit, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str symbol: Symbol of position to isolate. (required)
        :param float risk_limit: New Risk Limit, in Satoshis. (required)
        :return: Position
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['symbol', 'risk_limit']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method position_update_risk_limit" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'symbol' is set
        if ('symbol' not in params) or (params['symbol'] is None):
            raise ValueError("Missing the required parameter `symbol` when calling `position_update_risk_limit`")
        # verify the required parameter 'risk_limit' is set
        if ('risk_limit' not in params) or (params['risk_limit'] is None):
            raise ValueError("Missing the required parameter `risk_limit` when calling `position_update_risk_limit`")

        resource_path = '/position/riskLimit'.replace('{format}', 'json')
        path_params = {}

        query_params = {}

        header_params = {}

        form_params = []
        local_var_files = {}
        if 'symbol' in params:
            form_params.append(('symbol', params['symbol']))
        if 'risk_limit' in params:
            form_params.append(('riskLimit', params['risk_limit']))

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'application/xml', 'text/xml', 'application/javascript', 'text/javascript'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type(['application/json', 'application/x-www-form-urlencoded'])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'POST',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='Position',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))
