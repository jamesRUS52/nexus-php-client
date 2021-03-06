<?php
/**
 * GenericBlobStoreApiResponse
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
 * GenericBlobStoreApiResponse Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenericBlobStoreApiResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GenericBlobStoreApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'soft_quota' => '\NexusClient\Model\BlobStoreApiSoftQuota',
        'name' => 'string',
        'type' => 'string',
        'blob_count' => 'int',
        'total_size_in_bytes' => 'int',
        'available_space_in_bytes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'soft_quota' => null,
        'name' => null,
        'type' => null,
        'blob_count' => 'int64',
        'total_size_in_bytes' => 'int64',
        'available_space_in_bytes' => 'int64'
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
        'soft_quota' => 'softQuota',
        'name' => 'name',
        'type' => 'type',
        'blob_count' => 'blobCount',
        'total_size_in_bytes' => 'totalSizeInBytes',
        'available_space_in_bytes' => 'availableSpaceInBytes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'soft_quota' => 'setSoftQuota',
        'name' => 'setName',
        'type' => 'setType',
        'blob_count' => 'setBlobCount',
        'total_size_in_bytes' => 'setTotalSizeInBytes',
        'available_space_in_bytes' => 'setAvailableSpaceInBytes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'soft_quota' => 'getSoftQuota',
        'name' => 'getName',
        'type' => 'getType',
        'blob_count' => 'getBlobCount',
        'total_size_in_bytes' => 'getTotalSizeInBytes',
        'available_space_in_bytes' => 'getAvailableSpaceInBytes'
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
        $this->container['soft_quota'] = isset($data['soft_quota']) ? $data['soft_quota'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['blob_count'] = isset($data['blob_count']) ? $data['blob_count'] : null;
        $this->container['total_size_in_bytes'] = isset($data['total_size_in_bytes']) ? $data['total_size_in_bytes'] : null;
        $this->container['available_space_in_bytes'] = isset($data['available_space_in_bytes']) ? $data['available_space_in_bytes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets soft_quota
     *
     * @return \NexusClient\Model\BlobStoreApiSoftQuota
     */
    public function getSoftQuota()
    {
        return $this->container['soft_quota'];
    }

    /**
     * Sets soft_quota
     *
     * @param \NexusClient\Model\BlobStoreApiSoftQuota $soft_quota Settings to control the soft quota
     *
     * @return $this
     */
    public function setSoftQuota($soft_quota)
    {
        $this->container['soft_quota'] = $soft_quota;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets blob_count
     *
     * @return int
     */
    public function getBlobCount()
    {
        return $this->container['blob_count'];
    }

    /**
     * Sets blob_count
     *
     * @param int $blob_count blob_count
     *
     * @return $this
     */
    public function setBlobCount($blob_count)
    {
        $this->container['blob_count'] = $blob_count;

        return $this;
    }

    /**
     * Gets total_size_in_bytes
     *
     * @return int
     */
    public function getTotalSizeInBytes()
    {
        return $this->container['total_size_in_bytes'];
    }

    /**
     * Sets total_size_in_bytes
     *
     * @param int $total_size_in_bytes total_size_in_bytes
     *
     * @return $this
     */
    public function setTotalSizeInBytes($total_size_in_bytes)
    {
        $this->container['total_size_in_bytes'] = $total_size_in_bytes;

        return $this;
    }

    /**
     * Gets available_space_in_bytes
     *
     * @return int
     */
    public function getAvailableSpaceInBytes()
    {
        return $this->container['available_space_in_bytes'];
    }

    /**
     * Sets available_space_in_bytes
     *
     * @param int $available_space_in_bytes available_space_in_bytes
     *
     * @return $this
     */
    public function setAvailableSpaceInBytes($available_space_in_bytes)
    {
        $this->container['available_space_in_bytes'] = $available_space_in_bytes;

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


