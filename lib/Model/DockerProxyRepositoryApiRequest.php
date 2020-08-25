<?php
/**
 * DockerProxyRepositoryApiRequest
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
 * DockerProxyRepositoryApiRequest Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DockerProxyRepositoryApiRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DockerProxyRepositoryApiRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'online' => 'bool',
        'storage' => '\NexusClient\Model\StorageAttributes',
        'cleanup' => '\NexusClient\Model\CleanupPolicyAttributes',
        'proxy' => '\NexusClient\Model\ProxyAttributes',
        'negative_cache' => '\NexusClient\Model\NegativeCacheAttributes',
        'http_client' => '\NexusClient\Model\HttpClientAttributes',
        'routing_rule' => 'string',
        'docker' => '\NexusClient\Model\DockerAttributes',
        'docker_proxy' => '\NexusClient\Model\DockerProxyAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'online' => null,
        'storage' => null,
        'cleanup' => null,
        'proxy' => null,
        'negative_cache' => null,
        'http_client' => null,
        'routing_rule' => null,
        'docker' => null,
        'docker_proxy' => null
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
        'name' => 'name',
        'online' => 'online',
        'storage' => 'storage',
        'cleanup' => 'cleanup',
        'proxy' => 'proxy',
        'negative_cache' => 'negativeCache',
        'http_client' => 'httpClient',
        'routing_rule' => 'routingRule',
        'docker' => 'docker',
        'docker_proxy' => 'dockerProxy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'online' => 'setOnline',
        'storage' => 'setStorage',
        'cleanup' => 'setCleanup',
        'proxy' => 'setProxy',
        'negative_cache' => 'setNegativeCache',
        'http_client' => 'setHttpClient',
        'routing_rule' => 'setRoutingRule',
        'docker' => 'setDocker',
        'docker_proxy' => 'setDockerProxy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'online' => 'getOnline',
        'storage' => 'getStorage',
        'cleanup' => 'getCleanup',
        'proxy' => 'getProxy',
        'negative_cache' => 'getNegativeCache',
        'http_client' => 'getHttpClient',
        'routing_rule' => 'getRoutingRule',
        'docker' => 'getDocker',
        'docker_proxy' => 'getDockerProxy'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['cleanup'] = isset($data['cleanup']) ? $data['cleanup'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['negative_cache'] = isset($data['negative_cache']) ? $data['negative_cache'] : null;
        $this->container['http_client'] = isset($data['http_client']) ? $data['http_client'] : null;
        $this->container['routing_rule'] = isset($data['routing_rule']) ? $data['routing_rule'] : null;
        $this->container['docker'] = isset($data['docker']) ? $data['docker'] : null;
        $this->container['docker_proxy'] = isset($data['docker_proxy']) ? $data['docker_proxy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.";
        }

        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        if ($this->container['storage'] === null) {
            $invalidProperties[] = "'storage' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalidProperties[] = "'proxy' can't be null";
        }
        if ($this->container['negative_cache'] === null) {
            $invalidProperties[] = "'negative_cache' can't be null";
        }
        if ($this->container['http_client'] === null) {
            $invalidProperties[] = "'http_client' can't be null";
        }
        if ($this->container['docker'] === null) {
            $invalidProperties[] = "'docker' can't be null";
        }
        if ($this->container['docker_proxy'] === null) {
            $invalidProperties[] = "'docker_proxy' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A unique identifier for this repository
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((!preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling DockerProxyRepositoryApiRequest., must conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool $online Whether this repository accepts incoming requests
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets storage
     *
     * @return \NexusClient\Model\StorageAttributes
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param \NexusClient\Model\StorageAttributes $storage storage
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets cleanup
     *
     * @return \NexusClient\Model\CleanupPolicyAttributes
     */
    public function getCleanup()
    {
        return $this->container['cleanup'];
    }

    /**
     * Sets cleanup
     *
     * @param \NexusClient\Model\CleanupPolicyAttributes $cleanup cleanup
     *
     * @return $this
     */
    public function setCleanup($cleanup)
    {
        $this->container['cleanup'] = $cleanup;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return \NexusClient\Model\ProxyAttributes
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param \NexusClient\Model\ProxyAttributes $proxy proxy
     *
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets negative_cache
     *
     * @return \NexusClient\Model\NegativeCacheAttributes
     */
    public function getNegativeCache()
    {
        return $this->container['negative_cache'];
    }

    /**
     * Sets negative_cache
     *
     * @param \NexusClient\Model\NegativeCacheAttributes $negative_cache negative_cache
     *
     * @return $this
     */
    public function setNegativeCache($negative_cache)
    {
        $this->container['negative_cache'] = $negative_cache;

        return $this;
    }

    /**
     * Gets http_client
     *
     * @return \NexusClient\Model\HttpClientAttributes
     */
    public function getHttpClient()
    {
        return $this->container['http_client'];
    }

    /**
     * Sets http_client
     *
     * @param \NexusClient\Model\HttpClientAttributes $http_client http_client
     *
     * @return $this
     */
    public function setHttpClient($http_client)
    {
        $this->container['http_client'] = $http_client;

        return $this;
    }

    /**
     * Gets routing_rule
     *
     * @return string
     */
    public function getRoutingRule()
    {
        return $this->container['routing_rule'];
    }

    /**
     * Sets routing_rule
     *
     * @param string $routing_rule routing_rule
     *
     * @return $this
     */
    public function setRoutingRule($routing_rule)
    {
        $this->container['routing_rule'] = $routing_rule;

        return $this;
    }

    /**
     * Gets docker
     *
     * @return \NexusClient\Model\DockerAttributes
     */
    public function getDocker()
    {
        return $this->container['docker'];
    }

    /**
     * Sets docker
     *
     * @param \NexusClient\Model\DockerAttributes $docker docker
     *
     * @return $this
     */
    public function setDocker($docker)
    {
        $this->container['docker'] = $docker;

        return $this;
    }

    /**
     * Gets docker_proxy
     *
     * @return \NexusClient\Model\DockerProxyAttributes
     */
    public function getDockerProxy()
    {
        return $this->container['docker_proxy'];
    }

    /**
     * Sets docker_proxy
     *
     * @param \NexusClient\Model\DockerProxyAttributes $docker_proxy docker_proxy
     *
     * @return $this
     */
    public function setDockerProxy($docker_proxy)
    {
        $this->container['docker_proxy'] = $docker_proxy;

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


