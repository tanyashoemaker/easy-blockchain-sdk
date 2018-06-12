<?php
/**
 * IdApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Easy Blockchain API
 *
 * The Easy Blockchain API is an easy to use API to store related entries within chains. Currently it stores entries using a Factom, Ethereum or Multichain blockchain.   For full API documentation please visit: https://docs.sphereon.com/api/easy-blockchain/0.10/html   Interactive testing: A web based test console is available in the Sphereon API store at: https://store.sphereon.com
 *
 * OpenAPI spec version: 0.10
 * Contact: dev@sphereon.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * IdApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return IdApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation chainIdExists
     *
     * Determine chain id exists
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\IdResponse
     */
    public function chainIdExists($context, $chain_id)
    {
        list($response) = $this->chainIdExistsWithHttpInfo($context, $chain_id);
        return $response;
    }

    /**
     * Operation chainIdExistsWithHttpInfo
     *
     * Determine chain id exists
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function chainIdExistsWithHttpInfo($context, $chain_id)
    {
        // verify the required parameter 'context' is set
        if ($context === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context when calling chainIdExists');
        }
        // verify the required parameter 'chain_id' is set
        if ($chain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chain_id when calling chainIdExists');
        }
        // parse inputs
        $resourcePath = "/{context}/chains/id/{chainId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=UTF-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($context !== null) {
            $resourcePath = str_replace(
                "{" . "context" . "}",
                $this->apiClient->getSerializer()->toPathValue($context),
                $resourcePath
            );
        }
        // path params
        if ($chain_id !== null) {
            $resourcePath = str_replace(
                "{" . "chainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($chain_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IdResponse',
                '/{context}/chains/id/{chainId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation determineChainId
     *
     * Predetermine id of chain
     *
     * @param string $context context (required)
     * @param \Swagger\Client\Model\Chain $chain Determine a chain hash. The entry needs at least a (combination of) globally unique external Id in the complete Blockchain network! (required)
     * @param bool $check_existence Check whether the id exists (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\IdResponse
     */
    public function determineChainId($context, $chain, $check_existence = 'false')
    {
        list($response) = $this->determineChainIdWithHttpInfo($context, $chain, $check_existence);
        return $response;
    }

    /**
     * Operation determineChainIdWithHttpInfo
     *
     * Predetermine id of chain
     *
     * @param string $context context (required)
     * @param \Swagger\Client\Model\Chain $chain Determine a chain hash. The entry needs at least a (combination of) globally unique external Id in the complete Blockchain network! (required)
     * @param bool $check_existence Check whether the id exists (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function determineChainIdWithHttpInfo($context, $chain, $check_existence = 'false')
    {
        // verify the required parameter 'context' is set
        if ($context === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context when calling determineChainId');
        }
        // verify the required parameter 'chain' is set
        if ($chain === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chain when calling determineChainId');
        }
        // parse inputs
        $resourcePath = "/{context}/chains/id";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=UTF-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=UTF-8']);

        // query params
        if ($check_existence !== null) {
            $queryParams['checkExistence'] = $this->apiClient->getSerializer()->toQueryValue($check_existence);
        }
        // path params
        if ($context !== null) {
            $resourcePath = str_replace(
                "{" . "context" . "}",
                $this->apiClient->getSerializer()->toPathValue($context),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($chain)) {
            $_tempBody = $chain;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IdResponse',
                '/{context}/chains/id'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation determineEntryId
     *
     * Predetermine id of an entry
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @param \Swagger\Client\Model\Entry $entry The entry to determine the hash for on the specified chain (required)
     * @param bool $check_existence Check whether the id exists (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\IdResponse
     */
    public function determineEntryId($context, $chain_id, $entry, $check_existence = 'false')
    {
        list($response) = $this->determineEntryIdWithHttpInfo($context, $chain_id, $entry, $check_existence);
        return $response;
    }

    /**
     * Operation determineEntryIdWithHttpInfo
     *
     * Predetermine id of an entry
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @param \Swagger\Client\Model\Entry $entry The entry to determine the hash for on the specified chain (required)
     * @param bool $check_existence Check whether the id exists (optional, default to false)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function determineEntryIdWithHttpInfo($context, $chain_id, $entry, $check_existence = 'false')
    {
        // verify the required parameter 'context' is set
        if ($context === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context when calling determineEntryId');
        }
        // verify the required parameter 'chain_id' is set
        if ($chain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chain_id when calling determineEntryId');
        }
        // verify the required parameter 'entry' is set
        if ($entry === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entry when calling determineEntryId');
        }
        // parse inputs
        $resourcePath = "/{context}/chains/id/{chainId}/entries";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=UTF-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=UTF-8']);

        // query params
        if ($check_existence !== null) {
            $queryParams['checkExistence'] = $this->apiClient->getSerializer()->toQueryValue($check_existence);
        }
        // path params
        if ($context !== null) {
            $resourcePath = str_replace(
                "{" . "context" . "}",
                $this->apiClient->getSerializer()->toPathValue($context),
                $resourcePath
            );
        }
        // path params
        if ($chain_id !== null) {
            $resourcePath = str_replace(
                "{" . "chainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($chain_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($entry)) {
            $_tempBody = $entry;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IdResponse',
                '/{context}/chains/id/{chainId}/entries'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation entryIdExists
     *
     * Determine entry id exists
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @param string $entry_id entryId (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\IdResponse
     */
    public function entryIdExists($context, $chain_id, $entry_id)
    {
        list($response) = $this->entryIdExistsWithHttpInfo($context, $chain_id, $entry_id);
        return $response;
    }

    /**
     * Operation entryIdExistsWithHttpInfo
     *
     * Determine entry id exists
     *
     * @param string $context context (required)
     * @param string $chain_id chainId (required)
     * @param string $entry_id entryId (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\IdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function entryIdExistsWithHttpInfo($context, $chain_id, $entry_id)
    {
        // verify the required parameter 'context' is set
        if ($context === null) {
            throw new \InvalidArgumentException('Missing the required parameter $context when calling entryIdExists');
        }
        // verify the required parameter 'chain_id' is set
        if ($chain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chain_id when calling entryIdExists');
        }
        // verify the required parameter 'entry_id' is set
        if ($entry_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $entry_id when calling entryIdExists');
        }
        // parse inputs
        $resourcePath = "/{context}/chains/id/{chainId}/entries/{entryId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=UTF-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($context !== null) {
            $resourcePath = str_replace(
                "{" . "context" . "}",
                $this->apiClient->getSerializer()->toPathValue($context),
                $resourcePath
            );
        }
        // path params
        if ($chain_id !== null) {
            $resourcePath = str_replace(
                "{" . "chainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($chain_id),
                $resourcePath
            );
        }
        // path params
        if ($entry_id !== null) {
            $resourcePath = str_replace(
                "{" . "entryId" . "}",
                $this->apiClient->getSerializer()->toPathValue($entry_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\IdResponse',
                '/{context}/chains/id/{chainId}/entries/{entryId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\IdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\IdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
