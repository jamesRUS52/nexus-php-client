<?php
/**
 * ApiPrivilegeRepositoryAdminRequest
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
 * ApiPrivilegeRepositoryAdminRequest Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiPrivilegeRepositoryAdminRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiPrivilegeRepositoryAdminRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'description' => 'string',
        'actions' => 'string[]',
        'format' => 'string',
        'repository' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'description' => null,
        'actions' => null,
        'format' => null,
        'repository' => null
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
        'description' => 'description',
        'actions' => 'actions',
        'format' => 'format',
        'repository' => 'repository'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'actions' => 'setActions',
        'format' => 'setFormat',
        'repository' => 'setRepository'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'actions' => 'getActions',
        'format' => 'getFormat',
        'repository' => 'getRepository'
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

    const ACTIONS_READ = 'READ';
    const ACTIONS_BROWSE = 'BROWSE';
    const ACTIONS_EDIT = 'EDIT';
    const ACTIONS_ADD = 'ADD';
    const ACTIONS_DELETE = 'DELETE';
    const ACTIONS_RUN = 'RUN';
    const ACTIONS_ASSOCIATE = 'ASSOCIATE';
    const ACTIONS_DISASSOCIATE = 'DISASSOCIATE';
    const ACTIONS_ALL = 'ALL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionsAllowableValues()
    {
        return [
            self::ACTIONS_READ,
            self::ACTIONS_BROWSE,
            self::ACTIONS_EDIT,
            self::ACTIONS_ADD,
            self::ACTIONS_DELETE,
            self::ACTIONS_RUN,
            self::ACTIONS_ASSOCIATE,
            self::ACTIONS_DISASSOCIATE,
            self::ACTIONS_ALL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['repository'] = isset($data['repository']) ? $data['repository'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.";
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
     * @param string $name The name of the privilege.  This value cannot be changed.
     *
     * @return $this
     */
    public function setName($name)
    {

        if (!is_null($name) && (!preg_match("/^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling ApiPrivilegeRepositoryAdminRequest., must conform to the pattern /^[a-zA-Z0-9\\-]{1}[a-zA-Z0-9_\\-\\.]*$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param string[] $actions A collection of actions to associate with the privilege, using BREAD syntax (browse,read,edit,add,delete,all) as well as 'run' for script privileges.
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $allowedValues = $this->getActionsAllowableValues();
        if (!is_null($actions) && array_diff($actions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The repository format (i.e 'nuget', 'npm') this privilege will grant access to (or * for all).
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->container['repository'];
    }

    /**
     * Sets repository
     *
     * @param string $repository The name of the repository this privilege will grant access to (or * for all).
     *
     * @return $this
     */
    public function setRepository($repository)
    {
        $this->container['repository'] = $repository;

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


