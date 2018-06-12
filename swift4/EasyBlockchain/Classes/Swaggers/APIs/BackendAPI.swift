//
// BackendAPI.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation
import Alamofire



open class BackendAPI {
    /**
     Create a new backend
     
     - parameter backend: (body) backend 
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func createBackend(backend: Backend, completion: @escaping ((_ data: Backend?,_ error: Error?) -> Void)) {
        createBackendWithRequestBuilder(backend: backend).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Create a new backend
     - POST /backends
     - Create a new backend. A Backend is the link to one blockchain implementation and it' s nodes. Unless you create your own private blockchain network, you should not have to create a new backend. Just use one of the public backends available.
     - OAuth:
       - type: oauth2
       - name: oauth2schema
     - examples: [{contentType=application/json;charset=UTF-8, example={
  "rpcProviders" : [ {
    "ownerType" : "PROVIDER",
    "metaData" : {
      "key" : "aeiou"
    },
    "password" : "aeiou",
    "access" : {
      "modes" : [ "NONE" ],
      "blackList" : [ "aeiou" ],
      "whiteList" : [ "aeiou" ]
    },
    "ledgerName" : "aeiou",
    "resourceFiles" : {
      "key" : "aeiou"
    },
    "walletInfo" : "aeiou",
    "host" : "aeiou",
    "id" : "aeiou",
    "type" : "API",
    "username" : "aeiou"
  } ],
  "apiVersion" : 0,
  "name" : "aeiou",
  "start" : "2000-01-23T04:56:07.000+00:00",
  "end" : "2000-01-23T04:56:07.000+00:00",
  "dataStructure" : "FACTOM",
  "id" : "aeiou",
  "externalAccess" : ""
}}]
     
     - parameter backend: (body) backend 

     - returns: RequestBuilder<Backend> 
     */
    open class func createBackendWithRequestBuilder(backend: Backend) -> RequestBuilder<Backend> {
        let path = "/backends"
        let URLString = EasyBlockchainAPI.basePath + path
        let parameters = JSONEncodingHelper.encodingParameters(forEncodableObject: backend)

        let url = NSURLComponents(string: URLString)


        let requestBuilder: RequestBuilder<Backend>.Type = EasyBlockchainAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "POST", URLString: (url?.string ?? URLString), parameters: parameters, isBody: true)
    }

    /**
     Delete a backend
     
     - parameter backendId: (path) backendId 
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func deleteBackend(backendId: String, completion: @escaping ((_ data: Backend?,_ error: Error?) -> Void)) {
        deleteBackendWithRequestBuilder(backendId: backendId).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Delete a backend
     - DELETE /backends/{backendId}
     - Delete backend by id (not by name)
     - OAuth:
       - type: oauth2
       - name: oauth2schema
     - examples: [{output=none}]
     
     - parameter backendId: (path) backendId 

     - returns: RequestBuilder<Backend> 
     */
    open class func deleteBackendWithRequestBuilder(backendId: String) -> RequestBuilder<Backend> {
        var path = "/backends/{backendId}"
        path = path.replacingOccurrences(of: "{backendId}", with: "\(backendId)", options: .literal, range: nil)
        let URLString = EasyBlockchainAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)


        let requestBuilder: RequestBuilder<Backend>.Type = EasyBlockchainAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "DELETE", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

    /**
     Find backends
     
     - parameter backendId: (path) backendId 
     - parameter includePublic: (query) includePublic (optional, default to false)
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func findBackends(backendId: String, includePublic: Bool? = nil, completion: @escaping ((_ data: [Backend]?,_ error: Error?) -> Void)) {
        findBackendsWithRequestBuilder(backendId: backendId, includePublic: includePublic).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Find backends
     - GET /backends/{backendId}/find
     - Find existing backend(s) by id (single result) and/or name (multiple results). Optionally including public backends of others. Please note that we never return sensitive information like password or rpc hosts. Even not for backend owners themselves
     - OAuth:
       - type: oauth2
       - name: oauth2schema
     - examples: [{contentType=application/json;charset=UTF-8, example=[ {
  "rpcProviders" : [ {
    "ownerType" : "PROVIDER",
    "metaData" : {
      "key" : "aeiou"
    },
    "password" : "aeiou",
    "access" : {
      "modes" : [ "NONE" ],
      "blackList" : [ "aeiou" ],
      "whiteList" : [ "aeiou" ]
    },
    "ledgerName" : "aeiou",
    "resourceFiles" : {
      "key" : "aeiou"
    },
    "walletInfo" : "aeiou",
    "host" : "aeiou",
    "id" : "aeiou",
    "type" : "API",
    "username" : "aeiou"
  } ],
  "apiVersion" : 0,
  "name" : "aeiou",
  "start" : "2000-01-23T04:56:07.000+00:00",
  "end" : "2000-01-23T04:56:07.000+00:00",
  "dataStructure" : "FACTOM",
  "id" : "aeiou",
  "externalAccess" : ""
} ]}]
     
     - parameter backendId: (path) backendId 
     - parameter includePublic: (query) includePublic (optional, default to false)

     - returns: RequestBuilder<[Backend]> 
     */
    open class func findBackendsWithRequestBuilder(backendId: String, includePublic: Bool? = nil) -> RequestBuilder<[Backend]> {
        var path = "/backends/{backendId}/find"
        path = path.replacingOccurrences(of: "{backendId}", with: "\(backendId)", options: .literal, range: nil)
        let URLString = EasyBlockchainAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)
        url?.queryItems = APIHelper.mapValuesToQueryItems(values:[
            "includePublic": includePublic
        ])
        

        let requestBuilder: RequestBuilder<[Backend]>.Type = EasyBlockchainAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

    /**
     Get backend by id
     
     - parameter backendId: (path) backendId 
     - parameter includePublic: (query) includePublic (optional, default to false)
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func getBackend(backendId: String, includePublic: Bool? = nil, completion: @escaping ((_ data: Backend?,_ error: Error?) -> Void)) {
        getBackendWithRequestBuilder(backendId: backendId, includePublic: includePublic).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     Get backend by id
     - GET /backends/{backendId}
     - Get existing backend by id (not by name). Optionally including public backend of others. Please note that we never return sensitive information like password or rpc hosts. Even not for backend owners themselves
     - OAuth:
       - type: oauth2
       - name: oauth2schema
     - examples: [{contentType=application/json;charset=UTF-8, example={
  "rpcProviders" : [ {
    "ownerType" : "PROVIDER",
    "metaData" : {
      "key" : "aeiou"
    },
    "password" : "aeiou",
    "access" : {
      "modes" : [ "NONE" ],
      "blackList" : [ "aeiou" ],
      "whiteList" : [ "aeiou" ]
    },
    "ledgerName" : "aeiou",
    "resourceFiles" : {
      "key" : "aeiou"
    },
    "walletInfo" : "aeiou",
    "host" : "aeiou",
    "id" : "aeiou",
    "type" : "API",
    "username" : "aeiou"
  } ],
  "apiVersion" : 0,
  "name" : "aeiou",
  "start" : "2000-01-23T04:56:07.000+00:00",
  "end" : "2000-01-23T04:56:07.000+00:00",
  "dataStructure" : "FACTOM",
  "id" : "aeiou",
  "externalAccess" : ""
}}]
     
     - parameter backendId: (path) backendId 
     - parameter includePublic: (query) includePublic (optional, default to false)

     - returns: RequestBuilder<Backend> 
     */
    open class func getBackendWithRequestBuilder(backendId: String, includePublic: Bool? = nil) -> RequestBuilder<Backend> {
        var path = "/backends/{backendId}"
        path = path.replacingOccurrences(of: "{backendId}", with: "\(backendId)", options: .literal, range: nil)
        let URLString = EasyBlockchainAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)
        url?.queryItems = APIHelper.mapValuesToQueryItems(values:[
            "includePublic": includePublic
        ])
        

        let requestBuilder: RequestBuilder<Backend>.Type = EasyBlockchainAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

    /**
     List backends
     
     - parameter includePublic: (query) includePublic (optional, default to false)
     - parameter completion: completion handler to receive the data and the error objects
     */
    open class func listBackends(includePublic: Bool? = nil, completion: @escaping ((_ data: [Backend]?,_ error: Error?) -> Void)) {
        listBackendsWithRequestBuilder(includePublic: includePublic).execute { (response, error) -> Void in
            completion(response?.body, error);
        }
    }


    /**
     List backends
     - GET /backends
     - List existing backends. Optionally including public backends of others.  Please note that we never return sensitive information like password or rpc hosts. Even not for backend owners themselves
     - OAuth:
       - type: oauth2
       - name: oauth2schema
     - examples: [{contentType=application/json;charset=UTF-8, example=[ {
  "rpcProviders" : [ {
    "ownerType" : "PROVIDER",
    "metaData" : {
      "key" : "aeiou"
    },
    "password" : "aeiou",
    "access" : {
      "modes" : [ "NONE" ],
      "blackList" : [ "aeiou" ],
      "whiteList" : [ "aeiou" ]
    },
    "ledgerName" : "aeiou",
    "resourceFiles" : {
      "key" : "aeiou"
    },
    "walletInfo" : "aeiou",
    "host" : "aeiou",
    "id" : "aeiou",
    "type" : "API",
    "username" : "aeiou"
  } ],
  "apiVersion" : 0,
  "name" : "aeiou",
  "start" : "2000-01-23T04:56:07.000+00:00",
  "end" : "2000-01-23T04:56:07.000+00:00",
  "dataStructure" : "FACTOM",
  "id" : "aeiou",
  "externalAccess" : ""
} ]}]
     
     - parameter includePublic: (query) includePublic (optional, default to false)

     - returns: RequestBuilder<[Backend]> 
     */
    open class func listBackendsWithRequestBuilder(includePublic: Bool? = nil) -> RequestBuilder<[Backend]> {
        let path = "/backends"
        let URLString = EasyBlockchainAPI.basePath + path
        let parameters: [String:Any]? = nil

        let url = NSURLComponents(string: URLString)
        url?.queryItems = APIHelper.mapValuesToQueryItems(values:[
            "includePublic": includePublic
        ])
        

        let requestBuilder: RequestBuilder<[Backend]>.Type = EasyBlockchainAPI.requestBuilderFactory.getBuilder()

        return requestBuilder.init(method: "GET", URLString: (url?.string ?? URLString), parameters: parameters, isBody: false)
    }

}
