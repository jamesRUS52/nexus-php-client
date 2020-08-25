<?php
/**
 * HostedStorageAttributes
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
 * HostedStorageAttributes Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HostedStorageAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HostedStorageAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blob_store_name' => 'string',
        'strict_content_type_validation' => 'bool',
        'write_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blob_store_name' => null,
        'strict_content_type_validation' => null,
        'write_policy' => null
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
        'blob_store_name' => 'blobStoreName',
        'strict_content_type_validation' => 'strictContentTypeValidation',
        'write_policy' => 'writePolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blob_store_name' => 'setBlobStoreName',
        'strict_content_type_validation' => 'setStrictContentTypeValidation',
        'write_policy' => 'setWritePolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blob_store_name' => 'getBlobStoreName',
        'strict_content_type_validation' => 'getStrictContentTypeValidation',
        'write_policy' => 'getWritePolicy'
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

    const WRITE_POLICY_ALLOW = 'allow';
    const WRITE_POLICY_ALLOW_ONCE = 'allow_once';
    const WRITE_POLICY_DENY = 'deny';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWritePolicyAllowableValues()
    {
        return [
            self::WRITE_POLICY_ALLOW,
            self::WRITE_POLICY_ALLOW_ONCE,
            self::WRITE_POLICY_DENY,
        ];
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
        $this->container['blob_store_name'] = isset($data['blob_store_name']) ? $data['blob_store_name'] : null;
        $this->container['strict_content_type_validation'] = isset($data['strict_content_type_validation']) ? $data['strict_content_type_validation'] : null;
        $this->container['write_policy'] = isset($data['write_policy']) ? $data['write_policy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['strict_content_type_validation'] === null) {
            $invalidProperties[] = "'strict_content_type_validation' can't be null";
        }
        if ($this->container['write_policy'] === null) {
            $invalidProperties[] = "'write_policy' can't be null";
        }
        $allowedValues = $this->getWritePolicyAllowableValues();
        if (!is_null($this->container['write_policy']) && !in_array($this->container['write_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'write_policy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets blob_store_name
     *
     * @return string
     */
    public function getBlobStoreName()
    {
        return $this->container['blob_store_name'];
    }

    /**
     * Sets blob_store_name
     *
     * @param string $blob_store_name Blob store used to store repository contents
     *
     * @return $this
     */
    public function setBlobStoreName($blob_store_name)
    {
        $this->container['blob_store_name'] = $blob_store_name;

        return $this;
    }

    /**
     * Gets strict_content_type_validation
     *
     * @return bool
     */
    public function getStrictContentTypeValidation()
    {
        return $this->container['strict_content_type_validation'];
    }

    /**
     * Sets strict_content_type_validation
     *
     * @param bool $strict_content_type_validation Whether to validate uploaded content's MIME type appropriate for the repository format
     *
     * @return $this
     */
    public function setStrictContentTypeValidation($strict_content_type_validation)
    {
        $this->container['strict_content_type_validation'] = $strict_content_type_validation;

        return $this;
    }

    /**
     * Gets write_policy
     *
     * @return string
     */
    public function getWritePolicy()
    {
        return $this->container['write_policy'];
    }

    /**
     * Sets write_policy
     *
     * @param string $write_policy Controls if deployments of and updates to assets are allowed
     *
     * @return $this
     */
    public function setWritePolicy($write_policy)
    {
        $allowedValues = $this->getWritePolicyAllowableValues();
        if (!in_array($write_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'write_policy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['write_policy'] = $write_policy;

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


