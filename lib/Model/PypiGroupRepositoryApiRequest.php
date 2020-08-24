<?php
/**
 * PypiGroupRepositoryApiRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PypiGroupRepositoryApiRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PypiGroupRepositoryApiRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PypiGroupRepositoryApiRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'online' => 'bool',
        'storage' => '\Swagger\Client\Model\StorageAttributes',
        'group' => '\Swagger\Client\Model\GroupAttributes'
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
        'group' => null
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
        'group' => 'group'
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
        'group' => 'setGroup'
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
        'group' => 'getGroup'
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
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
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $name when calling PypiGroupRepositoryApiRequest., must conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.");
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
     * @return \Swagger\Client\Model\StorageAttributes
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     *
     * @param \Swagger\Client\Model\StorageAttributes $storage storage
     *
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Swagger\Client\Model\GroupAttributes
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Swagger\Client\Model\GroupAttributes $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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


