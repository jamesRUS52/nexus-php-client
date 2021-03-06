<?php
/**
 * DockerAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nexus Repository Manager REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.26.1-02
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NexusClient\Model;

use \ArrayAccess;
use \NexusClient\ObjectSerializer;

/**
 * DockerAttributes Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DockerAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DockerAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'v1_enabled' => 'bool',
        'force_basic_auth' => 'bool',
        'http_port' => 'int',
        'https_port' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'v1_enabled' => null,
        'force_basic_auth' => null,
        'http_port' => 'int32',
        'https_port' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'v1_enabled' => 'v1Enabled',
        'force_basic_auth' => 'forceBasicAuth',
        'http_port' => 'httpPort',
        'https_port' => 'httpsPort'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'v1_enabled' => 'setV1Enabled',
        'force_basic_auth' => 'setForceBasicAuth',
        'http_port' => 'setHttpPort',
        'https_port' => 'setHttpsPort'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'v1_enabled' => 'getV1Enabled',
        'force_basic_auth' => 'getForceBasicAuth',
        'http_port' => 'getHttpPort',
        'https_port' => 'getHttpsPort'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['v1_enabled'] = isset($data['v1_enabled']) ? $data['v1_enabled'] : null;
        $this->container['force_basic_auth'] = isset($data['force_basic_auth']) ? $data['force_basic_auth'] : null;
        $this->container['http_port'] = isset($data['http_port']) ? $data['http_port'] : null;
        $this->container['https_port'] = isset($data['https_port']) ? $data['https_port'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['v1_enabled'] === null) {
            $invalidProperties[] = "'v1_enabled' can't be null";
        }
        if ($this->container['force_basic_auth'] === null) {
            $invalidProperties[] = "'force_basic_auth' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets v1_enabled
     *
     * @return bool
     */
    public function getV1Enabled()
    {
        return $this->container['v1_enabled'];
    }

    /**
     * Sets v1_enabled
     *
     * @param bool $v1_enabled Whether to allow clients to use the V1 API to interact with this repository
     *
     * @return $this
     */
    public function setV1Enabled($v1_enabled)
    {
        $this->container['v1_enabled'] = $v1_enabled;

        return $this;
    }

    /**
     * Gets force_basic_auth
     *
     * @return bool
     */
    public function getForceBasicAuth()
    {
        return $this->container['force_basic_auth'];
    }

    /**
     * Sets force_basic_auth
     *
     * @param bool $force_basic_auth Whether to force authentication (Docker Bearer Token Realm required if false)
     *
     * @return $this
     */
    public function setForceBasicAuth($force_basic_auth)
    {
        $this->container['force_basic_auth'] = $force_basic_auth;

        return $this;
    }

    /**
     * Gets http_port
     *
     * @return int
     */
    public function getHttpPort()
    {
        return $this->container['http_port'];
    }

    /**
     * Sets http_port
     *
     * @param int $http_port Create an HTTP connector at specified port
     *
     * @return $this
     */
    public function setHttpPort($http_port)
    {
        $this->container['http_port'] = $http_port;

        return $this;
    }

    /**
     * Gets https_port
     *
     * @return int
     */
    public function getHttpsPort()
    {
        return $this->container['https_port'];
    }

    /**
     * Sets https_port
     *
     * @param int $https_port Create an HTTPS connector at specified port
     *
     * @return $this
     */
    public function setHttpsPort($https_port)
    {
        $this->container['https_port'] = $https_port;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


