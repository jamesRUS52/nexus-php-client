<?php
/**
 * YumAttributes
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
 * YumAttributes Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YumAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YumAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'repodata_depth' => 'int',
        'deploy_policy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'repodata_depth' => 'int32',
        'deploy_policy' => null
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
        'repodata_depth' => 'repodataDepth',
        'deploy_policy' => 'deployPolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'repodata_depth' => 'setRepodataDepth',
        'deploy_policy' => 'setDeployPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'repodata_depth' => 'getRepodataDepth',
        'deploy_policy' => 'getDeployPolicy'
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

    const DEPLOY_POLICY_PERMISSIVE = 'PERMISSIVE';
    const DEPLOY_POLICY_STRICT = 'STRICT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeployPolicyAllowableValues()
    {
        return [
            self::DEPLOY_POLICY_PERMISSIVE,
            self::DEPLOY_POLICY_STRICT,
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
        $this->container['repodata_depth'] = isset($data['repodata_depth']) ? $data['repodata_depth'] : null;
        $this->container['deploy_policy'] = isset($data['deploy_policy']) ? $data['deploy_policy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['repodata_depth'] === null) {
            $invalidProperties[] = "'repodata_depth' can't be null";
        }
        $allowedValues = $this->getDeployPolicyAllowableValues();
        if (!is_null($this->container['deploy_policy']) && !in_array($this->container['deploy_policy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deploy_policy', must be one of '%s'",
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
     * Gets repodata_depth
     *
     * @return int
     */
    public function getRepodataDepth()
    {
        return $this->container['repodata_depth'];
    }

    /**
     * Sets repodata_depth
     *
     * @param int $repodata_depth Specifies the repository depth where repodata folder(s) are created
     *
     * @return $this
     */
    public function setRepodataDepth($repodata_depth)
    {
        $this->container['repodata_depth'] = $repodata_depth;

        return $this;
    }

    /**
     * Gets deploy_policy
     *
     * @return string
     */
    public function getDeployPolicy()
    {
        return $this->container['deploy_policy'];
    }

    /**
     * Sets deploy_policy
     *
     * @param string $deploy_policy Validate that all paths are RPMs or yum metadata
     *
     * @return $this
     */
    public function setDeployPolicy($deploy_policy)
    {
        $allowedValues = $this->getDeployPolicyAllowableValues();
        if (!is_null($deploy_policy) && !in_array($deploy_policy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deploy_policy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deploy_policy'] = $deploy_policy;

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


