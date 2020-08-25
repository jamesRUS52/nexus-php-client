<?php
/**
 * S3BlobStoreApiBucketConfiguration
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
 * S3BlobStoreApiBucketConfiguration Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class S3BlobStoreApiBucketConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'S3BlobStoreApiBucketConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket' => '\NexusClient\Model\S3BlobStoreApiBucket',
        'encryption' => '\NexusClient\Model\S3BlobStoreApiEncryption',
        'bucket_security' => '\NexusClient\Model\S3BlobStoreApiBucketSecurity',
        'advanced_bucket_connection' => '\NexusClient\Model\S3BlobStoreApiAdvancedBucketConnection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bucket' => null,
        'encryption' => null,
        'bucket_security' => null,
        'advanced_bucket_connection' => null
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
        'bucket' => 'bucket',
        'encryption' => 'encryption',
        'bucket_security' => 'bucketSecurity',
        'advanced_bucket_connection' => 'advancedBucketConnection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bucket' => 'setBucket',
        'encryption' => 'setEncryption',
        'bucket_security' => 'setBucketSecurity',
        'advanced_bucket_connection' => 'setAdvancedBucketConnection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bucket' => 'getBucket',
        'encryption' => 'getEncryption',
        'bucket_security' => 'getBucketSecurity',
        'advanced_bucket_connection' => 'getAdvancedBucketConnection'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['bucket_security'] = isset($data['bucket_security']) ? $data['bucket_security'] : null;
        $this->container['advanced_bucket_connection'] = isset($data['advanced_bucket_connection']) ? $data['advanced_bucket_connection'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
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
     * Gets bucket
     *
     * @return \NexusClient\Model\S3BlobStoreApiBucket
     */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
     * Sets bucket
     *
     * @param \NexusClient\Model\S3BlobStoreApiBucket $bucket Details of the S3 bucket such as name and region
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;

        return $this;
    }

    /**
     * Gets encryption
     *
     * @return \NexusClient\Model\S3BlobStoreApiEncryption
     */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param \NexusClient\Model\S3BlobStoreApiEncryption $encryption The type of encryption to use if any
     *
     * @return $this
     */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;

        return $this;
    }

    /**
     * Gets bucket_security
     *
     * @return \NexusClient\Model\S3BlobStoreApiBucketSecurity
     */
    public function getBucketSecurity()
    {
        return $this->container['bucket_security'];
    }

    /**
     * Sets bucket_security
     *
     * @param \NexusClient\Model\S3BlobStoreApiBucketSecurity $bucket_security Security details for granting access the S3 API
     *
     * @return $this
     */
    public function setBucketSecurity($bucket_security)
    {
        $this->container['bucket_security'] = $bucket_security;

        return $this;
    }

    /**
     * Gets advanced_bucket_connection
     *
     * @return \NexusClient\Model\S3BlobStoreApiAdvancedBucketConnection
     */
    public function getAdvancedBucketConnection()
    {
        return $this->container['advanced_bucket_connection'];
    }

    /**
     * Sets advanced_bucket_connection
     *
     * @param \NexusClient\Model\S3BlobStoreApiAdvancedBucketConnection $advanced_bucket_connection A custom endpoint URL, signer type and whether path style access is enabled
     *
     * @return $this
     */
    public function setAdvancedBucketConnection($advanced_bucket_connection)
    {
        $this->container['advanced_bucket_connection'] = $advanced_bucket_connection;

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


