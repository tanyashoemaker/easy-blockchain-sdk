/**
 * Easy Blockchain API
 * <b>The Easy Blockchain API is an easy to use API to store entries within chains. Currently it stores entries using the bitcoin blockchain by means of Factom. In the future other solutions will be made available</b>    The flow is generally as follows:  1. Make sure a chain has been created using the /chain POST endpoint. Normally you only need one or a handful of chains. This is an expensive operation.  2. Store entries on the chain from step 1. The entries will contain the content and metadata you want to store forever on the specified chain.  3. Retrieve an existing entry from the chain to verify or retrieve data      <b>Interactive testing: </b>A web based test console is available in the <a href=\"https://store.sphereon.com\">Sphereon API Store</a>
 *
 * OpenAPI spec version: 0.1.0
 * Contact: dev@sphereon.com
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

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['SphereonSDKBlockchainEasy/ApiClient', 'SphereonSDKBlockchainEasy/model/IdResponse', 'SphereonSDKBlockchainEasy/model/VndErrors', 'SphereonSDKBlockchainEasy/model/Chain', 'SphereonSDKBlockchainEasy/model/Entry'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/IdResponse'), require('../model/VndErrors'), require('../model/Chain'), require('../model/Entry'));
  } else {
    // Browser globals (root is window)
    if (!root.EasyBlockchainApi) {
      root.EasyBlockchainApi = {};
    }
    root.EasyBlockchainApi.IdApi = factory(root.EasyBlockchainApi.ApiClient, root.EasyBlockchainApi.IdResponse, root.EasyBlockchainApi.VndErrors, root.EasyBlockchainApi.Chain, root.EasyBlockchainApi.Entry);
  }
}(this, function(ApiClient, IdResponse, VndErrors, Chain, Entry) {
  'use strict';

  /**
   * Id service.
   * @module SphereonSDKBlockchainEasy/api/IdApi
   * @version 0.1.0
   */

  /**
   * Constructs a new IdApi. 
   * @alias module:SphereonSDKBlockchainEasy/api/IdApi
   * @class
   * @param {module:SphereonSDKBlockchainEasy/ApiClient} apiClient Optional API client implementation to use,
   * default to {@link module:SphereonSDKBlockchainEasy/ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the chainIdExists operation.
     * @callback module:SphereonSDKBlockchainEasy/api/IdApi~chainIdExistsCallback
     * @param {String} error Error message, if any.
     * @param {module:SphereonSDKBlockchainEasy/model/IdResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Determine whether the Id of a chain exists in the blockchain
     * @param {String} chainId chainId
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~chainIdExistsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.chainIdExists = function(chainId, callback) {
      var postBody = null;

      // verify the required parameter 'chainId' is set
      if (chainId == undefined || chainId == null) {
        throw "Missing the required parameter 'chainId' when calling chainIdExists";
      }


      var pathParams = {
        'chainId': chainId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = ['application/json'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/blockchain/easy/0.1.0/chains/id/{chainId}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the determineChainId operation.
     * @callback module:SphereonSDKBlockchainEasy/api/IdApi~determineChainIdCallback
     * @param {String} error Error message, if any.
     * @param {module:SphereonSDKBlockchainEasy/model/IdResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Pre determine the Id of a chain request without anchoring it in the blockchain
     * @param {module:SphereonSDKBlockchainEasy/model/Chain} chain Determine a chain hash. The entry needs at least a (combination of) globaly unique external Id in the complete Blockchain network!
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.checkExistence Check whether the id exists (default to false)
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~determineChainIdCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.determineChainId = function(chain, opts, callback) {
      opts = opts || {};
      var postBody = chain;

      // verify the required parameter 'chain' is set
      if (chain == undefined || chain == null) {
        throw "Missing the required parameter 'chain' when calling determineChainId";
      }


      var pathParams = {
      };
      var queryParams = {
        'checkExistence': opts['checkExistence']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = ['application/json;charset=UTF-8'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/blockchain/easy/0.1.0/chains/id', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the determineEntryId operation.
     * @callback module:SphereonSDKBlockchainEasy/api/IdApi~determineEntryIdCallback
     * @param {String} error Error message, if any.
     * @param {module:SphereonSDKBlockchainEasy/model/IdResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Pre determine the Id of an entry request without anchoring the entry
     * @param {String} chainId chainId
     * @param {module:SphereonSDKBlockchainEasy/model/Entry} entry The entry to determine the hash for on the specified chain
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.checkExistence Check whether the id exists (default to false)
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~determineEntryIdCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.determineEntryId = function(chainId, entry, opts, callback) {
      opts = opts || {};
      var postBody = entry;

      // verify the required parameter 'chainId' is set
      if (chainId == undefined || chainId == null) {
        throw "Missing the required parameter 'chainId' when calling determineEntryId";
      }

      // verify the required parameter 'entry' is set
      if (entry == undefined || entry == null) {
        throw "Missing the required parameter 'entry' when calling determineEntryId";
      }


      var pathParams = {
        'chainId': chainId
      };
      var queryParams = {
        'checkExistence': opts['checkExistence']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = ['application/json;charset=UTF-8'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/blockchain/easy/0.1.0/chains/id/{chainId}/entries', 'POST',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the entryIdExists operation.
     * @callback module:SphereonSDKBlockchainEasy/api/IdApi~entryIdExistsCallback
     * @param {String} error Error message, if any.
     * @param {module:SphereonSDKBlockchainEasy/model/IdResponse} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Determine whether the Id of an entry exists in the blockchain
     * @param {String} chainId chainId
     * @param {String} entryId entryId
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~entryIdExistsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.entryIdExists = function(chainId, entryId, callback) {
      var postBody = null;

      // verify the required parameter 'chainId' is set
      if (chainId == undefined || chainId == null) {
        throw "Missing the required parameter 'chainId' when calling entryIdExists";
      }

      // verify the required parameter 'entryId' is set
      if (entryId == undefined || entryId == null) {
        throw "Missing the required parameter 'entryId' when calling entryIdExists";
      }


      var pathParams = {
        'chainId': chainId,
        'entryId': entryId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = ['application/json'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/blockchain/easy/0.1.0/chains/id/{chainId}/entries/{entryId}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
