/**
 * Easy Blockchain API
 * <b>The Easy Blockchain API is an easy to use API to store entries within chains. Currently it stores entries using the bitcoin blockchain by means of Factom or Multichain. The latter also allows for a private blockchain. In the future other solutions will be made available</b>    The flow is generally as follows:  1. Make sure a context is available using the / POST endpoint. Normally you only need one context. This is the place where backend providers and blockchain implementations are being specified.  2. Make sure a chain has been created using the /chain POST endpoint. Normally you only need one or a handful of chains. This is a relative expensive operation.  3. Store entries on the chain from step 2. The entries will contain the content and metadata you want to store forever on the specified chain.  4. Retrieve an existing entry from the chain to verify or retrieve data      <b>Interactive testing: </b>A web based test console is available in the <a href=\"https://store.sphereon.com\">Sphereon API Store</a>
 *
 * OpenAPI spec version: 0.9
 * Contact: dev@sphereon.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['SphereonSDKBlockchainEasy/ApiClient', 'SphereonSDKBlockchainEasy/model/Chain', 'SphereonSDKBlockchainEasy/model/Entry', 'SphereonSDKBlockchainEasy/model/ErrorResponse', 'SphereonSDKBlockchainEasy/model/IdResponse'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/Chain'), require('../model/Entry'), require('../model/ErrorResponse'), require('../model/IdResponse'));
  } else {
    // Browser globals (root is window)
    if (!root.EasyBlockchainApi) {
      root.EasyBlockchainApi = {};
    }
    root.EasyBlockchainApi.IdApi = factory(root.EasyBlockchainApi.ApiClient, root.EasyBlockchainApi.Chain, root.EasyBlockchainApi.Entry, root.EasyBlockchainApi.ErrorResponse, root.EasyBlockchainApi.IdResponse);
  }
}(this, function(ApiClient, Chain, Entry, ErrorResponse, IdResponse) {
  'use strict';

  /**
   * Id service.
   * @module SphereonSDKBlockchainEasy/api/IdApi
   * @version 0.9
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
     * @param {String} context context
     * @param {String} chainId chainId
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~chainIdExistsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.chainIdExists = function(context, chainId, callback) {
      var postBody = null;

      // verify the required parameter 'context' is set
      if (context === undefined || context === null) {
        throw new Error("Missing the required parameter 'context' when calling chainIdExists");
      }

      // verify the required parameter 'chainId' is set
      if (chainId === undefined || chainId === null) {
        throw new Error("Missing the required parameter 'chainId' when calling chainIdExists");
      }


      var pathParams = {
        'context': context,
        'chainId': chainId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2schema'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/{context}/chains/id/{chainId}', 'GET',
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
     * @param {String} context context
     * @param {module:SphereonSDKBlockchainEasy/model/Chain} chain Determine a chain hash. The entry needs at least a (combination of) globally unique external Id in the complete Blockchain network!
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.checkExistence Check whether the id exists (default to false)
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~determineChainIdCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.determineChainId = function(context, chain, opts, callback) {
      opts = opts || {};
      var postBody = chain;

      // verify the required parameter 'context' is set
      if (context === undefined || context === null) {
        throw new Error("Missing the required parameter 'context' when calling determineChainId");
      }

      // verify the required parameter 'chain' is set
      if (chain === undefined || chain === null) {
        throw new Error("Missing the required parameter 'chain' when calling determineChainId");
      }


      var pathParams = {
        'context': context
      };
      var queryParams = {
        'checkExistence': opts['checkExistence']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2schema'];
      var contentTypes = ['application/json;charset=UTF-8'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/{context}/chains/id', 'POST',
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
     * @param {String} context context
     * @param {String} chainId chainId
     * @param {module:SphereonSDKBlockchainEasy/model/Entry} entry The entry to determine the hash for on the specified chain
     * @param {Object} opts Optional parameters
     * @param {Boolean} opts.checkExistence Check whether the id exists (default to false)
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~determineEntryIdCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.determineEntryId = function(context, chainId, entry, opts, callback) {
      opts = opts || {};
      var postBody = entry;

      // verify the required parameter 'context' is set
      if (context === undefined || context === null) {
        throw new Error("Missing the required parameter 'context' when calling determineEntryId");
      }

      // verify the required parameter 'chainId' is set
      if (chainId === undefined || chainId === null) {
        throw new Error("Missing the required parameter 'chainId' when calling determineEntryId");
      }

      // verify the required parameter 'entry' is set
      if (entry === undefined || entry === null) {
        throw new Error("Missing the required parameter 'entry' when calling determineEntryId");
      }


      var pathParams = {
        'context': context,
        'chainId': chainId
      };
      var queryParams = {
        'checkExistence': opts['checkExistence']
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2schema'];
      var contentTypes = ['application/json;charset=UTF-8'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/{context}/chains/id/{chainId}/entries', 'POST',
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
     * @param {String} context context
     * @param {String} chainId chainId
     * @param {String} entryId entryId
     * @param {module:SphereonSDKBlockchainEasy/api/IdApi~entryIdExistsCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:SphereonSDKBlockchainEasy/model/IdResponse}
     */
    this.entryIdExists = function(context, chainId, entryId, callback) {
      var postBody = null;

      // verify the required parameter 'context' is set
      if (context === undefined || context === null) {
        throw new Error("Missing the required parameter 'context' when calling entryIdExists");
      }

      // verify the required parameter 'chainId' is set
      if (chainId === undefined || chainId === null) {
        throw new Error("Missing the required parameter 'chainId' when calling entryIdExists");
      }

      // verify the required parameter 'entryId' is set
      if (entryId === undefined || entryId === null) {
        throw new Error("Missing the required parameter 'entryId' when calling entryIdExists");
      }


      var pathParams = {
        'context': context,
        'chainId': chainId,
        'entryId': entryId
      };
      var queryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = ['oauth2schema'];
      var contentTypes = ['application/json'];
      var accepts = ['application/json;charset=UTF-8'];
      var returnType = IdResponse;

      return this.apiClient.callApi(
        '/{context}/chains/id/{chainId}/entries/{entryId}', 'GET',
        pathParams, queryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
