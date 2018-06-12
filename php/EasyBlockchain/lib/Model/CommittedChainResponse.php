<?php
/**
 * CommittedChainResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CommittedChainResponse Class Doc Comment
 *
 * @category    Class
 * @description Committed Chain response
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommittedChainResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommittedChainResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chain' => '\Swagger\Client\Model\CommittedChain',
        'commit_time' => '\DateTime',
        'creation_request_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chain' => null,
        'commit_time' => 'date-time',
        'creation_request_time' => 'date-time'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'chain' => 'chain',
        'commit_time' => 'commitTime',
        'creation_request_time' => 'creationRequestTime'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'chain' => 'setChain',
        'commit_time' => 'setCommitTime',
        'creation_request_time' => 'setCreationRequestTime'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'chain' => 'getChain',
        'commit_time' => 'getCommitTime',
        'creation_request_time' => 'getCreationRequestTime'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['chain'] = isset($data['chain']) ? $data['chain'] : null;
        $this->container['commit_time'] = isset($data['commit_time']) ? $data['commit_time'] : null;
        $this->container['creation_request_time'] = isset($data['creation_request_time']) ? $data['creation_request_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['chain'] === null) {
            $invalid_properties[] = "'chain' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['chain'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets chain
     * @return \Swagger\Client\Model\CommittedChain
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     * @param \Swagger\Client\Model\CommittedChain $chain
     * @return $this
     */
    public function setChain($chain)
    {
        $this->container['chain'] = $chain;

        return $this;
    }

    /**
     * Gets commit_time
     * @return \DateTime
     */
    public function getCommitTime()
    {
        return $this->container['commit_time'];
    }

    /**
     * Sets commit_time
     * @param \DateTime $commit_time The time at which the chain was first committed in ISO 8601 format
     * @return $this
     */
    public function setCommitTime($commit_time)
    {
        $this->container['commit_time'] = $commit_time;

        return $this;
    }

    /**
     * Gets creation_request_time
     * @return \DateTime
     */
    public function getCreationRequestTime()
    {
        return $this->container['creation_request_time'];
    }

    /**
     * Sets creation_request_time
     * @param \DateTime $creation_request_time The time at which the chain creation was first requested in ISO 8601 format
     * @return $this
     */
    public function setCreationRequestTime($creation_request_time)
    {
        $this->container['creation_request_time'] = $creation_request_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


