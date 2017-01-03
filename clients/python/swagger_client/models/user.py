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

from pprint import pformat
from six import iteritems
import re


class User(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, id=None, owner_id=None, firstname=None, lastname=None, username=None, email=None, phone=None, created=None, last_updated=None, preferences=None, tfa_enabled=None, affiliate_id=None, pgp_pub_key=None, country=None):
        """
        User - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'id': 'float',
            'owner_id': 'float',
            'firstname': 'str',
            'lastname': 'str',
            'username': 'str',
            'email': 'str',
            'phone': 'str',
            'created': 'date',
            'last_updated': 'date',
            'preferences': 'UserPreferences',
            'tfa_enabled': 'str',
            'affiliate_id': 'str',
            'pgp_pub_key': 'str',
            'country': 'str'
        }

        self.attribute_map = {
            'id': 'id',
            'owner_id': 'ownerId',
            'firstname': 'firstname',
            'lastname': 'lastname',
            'username': 'username',
            'email': 'email',
            'phone': 'phone',
            'created': 'created',
            'last_updated': 'lastUpdated',
            'preferences': 'preferences',
            'tfa_enabled': 'TFAEnabled',
            'affiliate_id': 'affiliateID',
            'pgp_pub_key': 'pgpPubKey',
            'country': 'country'
        }

        self._id = id
        self._owner_id = owner_id
        self._firstname = firstname
        self._lastname = lastname
        self._username = username
        self._email = email
        self._phone = phone
        self._created = created
        self._last_updated = last_updated
        self._preferences = preferences
        self._tfa_enabled = tfa_enabled
        self._affiliate_id = affiliate_id
        self._pgp_pub_key = pgp_pub_key
        self._country = country

    @property
    def id(self):
        """
        Gets the id of this User.


        :return: The id of this User.
        :rtype: float
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this User.


        :param id: The id of this User.
        :type: float
        """

        self._id = id

    @property
    def owner_id(self):
        """
        Gets the owner_id of this User.


        :return: The owner_id of this User.
        :rtype: float
        """
        return self._owner_id

    @owner_id.setter
    def owner_id(self, owner_id):
        """
        Sets the owner_id of this User.


        :param owner_id: The owner_id of this User.
        :type: float
        """

        self._owner_id = owner_id

    @property
    def firstname(self):
        """
        Gets the firstname of this User.


        :return: The firstname of this User.
        :rtype: str
        """
        return self._firstname

    @firstname.setter
    def firstname(self, firstname):
        """
        Sets the firstname of this User.


        :param firstname: The firstname of this User.
        :type: str
        """

        self._firstname = firstname

    @property
    def lastname(self):
        """
        Gets the lastname of this User.


        :return: The lastname of this User.
        :rtype: str
        """
        return self._lastname

    @lastname.setter
    def lastname(self, lastname):
        """
        Sets the lastname of this User.


        :param lastname: The lastname of this User.
        :type: str
        """

        self._lastname = lastname

    @property
    def username(self):
        """
        Gets the username of this User.


        :return: The username of this User.
        :rtype: str
        """
        return self._username

    @username.setter
    def username(self, username):
        """
        Sets the username of this User.


        :param username: The username of this User.
        :type: str
        """

        self._username = username

    @property
    def email(self):
        """
        Gets the email of this User.


        :return: The email of this User.
        :rtype: str
        """
        return self._email

    @email.setter
    def email(self, email):
        """
        Sets the email of this User.


        :param email: The email of this User.
        :type: str
        """

        self._email = email

    @property
    def phone(self):
        """
        Gets the phone of this User.


        :return: The phone of this User.
        :rtype: str
        """
        return self._phone

    @phone.setter
    def phone(self, phone):
        """
        Sets the phone of this User.


        :param phone: The phone of this User.
        :type: str
        """

        self._phone = phone

    @property
    def created(self):
        """
        Gets the created of this User.


        :return: The created of this User.
        :rtype: date
        """
        return self._created

    @created.setter
    def created(self, created):
        """
        Sets the created of this User.


        :param created: The created of this User.
        :type: date
        """

        self._created = created

    @property
    def last_updated(self):
        """
        Gets the last_updated of this User.


        :return: The last_updated of this User.
        :rtype: date
        """
        return self._last_updated

    @last_updated.setter
    def last_updated(self, last_updated):
        """
        Sets the last_updated of this User.


        :param last_updated: The last_updated of this User.
        :type: date
        """

        self._last_updated = last_updated

    @property
    def preferences(self):
        """
        Gets the preferences of this User.


        :return: The preferences of this User.
        :rtype: UserPreferences
        """
        return self._preferences

    @preferences.setter
    def preferences(self, preferences):
        """
        Sets the preferences of this User.


        :param preferences: The preferences of this User.
        :type: UserPreferences
        """

        self._preferences = preferences

    @property
    def tfa_enabled(self):
        """
        Gets the tfa_enabled of this User.


        :return: The tfa_enabled of this User.
        :rtype: str
        """
        return self._tfa_enabled

    @tfa_enabled.setter
    def tfa_enabled(self, tfa_enabled):
        """
        Sets the tfa_enabled of this User.


        :param tfa_enabled: The tfa_enabled of this User.
        :type: str
        """

        self._tfa_enabled = tfa_enabled

    @property
    def affiliate_id(self):
        """
        Gets the affiliate_id of this User.


        :return: The affiliate_id of this User.
        :rtype: str
        """
        return self._affiliate_id

    @affiliate_id.setter
    def affiliate_id(self, affiliate_id):
        """
        Sets the affiliate_id of this User.


        :param affiliate_id: The affiliate_id of this User.
        :type: str
        """

        if not affiliate_id:
            raise ValueError("Invalid value for `affiliate_id`, must not be `None`")
        if len(affiliate_id) > 6:
            raise ValueError("Invalid value for `affiliate_id`, length must be less than `6`")

        self._affiliate_id = affiliate_id

    @property
    def pgp_pub_key(self):
        """
        Gets the pgp_pub_key of this User.


        :return: The pgp_pub_key of this User.
        :rtype: str
        """
        return self._pgp_pub_key

    @pgp_pub_key.setter
    def pgp_pub_key(self, pgp_pub_key):
        """
        Sets the pgp_pub_key of this User.


        :param pgp_pub_key: The pgp_pub_key of this User.
        :type: str
        """

        if not pgp_pub_key:
            raise ValueError("Invalid value for `pgp_pub_key`, must not be `None`")
        if len(pgp_pub_key) > 16384:
            raise ValueError("Invalid value for `pgp_pub_key`, length must be less than `16384`")

        self._pgp_pub_key = pgp_pub_key

    @property
    def country(self):
        """
        Gets the country of this User.


        :return: The country of this User.
        :rtype: str
        """
        return self._country

    @country.setter
    def country(self, country):
        """
        Sets the country of this User.


        :param country: The country of this User.
        :type: str
        """

        if not country:
            raise ValueError("Invalid value for `country`, must not be `None`")
        if len(country) > 3:
            raise ValueError("Invalid value for `country`, length must be less than `3`")

        self._country = country

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
