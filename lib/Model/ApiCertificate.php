<?php
/**
 * ApiCertificate
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
 * ApiCertificate Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiCertificate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiCertificate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'expires_on' => 'int',
        'fingerprint' => 'string',
        'id' => 'string',
        'issued_on' => 'int',
        'issuer_common_name' => 'string',
        'issuer_organization' => 'string',
        'issuer_organizational_unit' => 'string',
        'pem' => 'string',
        'serial_number' => 'string',
        'subject_common_name' => 'string',
        'subject_organization' => 'string',
        'subject_organizational_unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'expires_on' => 'int64',
        'fingerprint' => null,
        'id' => null,
        'issued_on' => 'int64',
        'issuer_common_name' => null,
        'issuer_organization' => null,
        'issuer_organizational_unit' => null,
        'pem' => null,
        'serial_number' => null,
        'subject_common_name' => null,
        'subject_organization' => null,
        'subject_organizational_unit' => null
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
        'expires_on' => 'expiresOn',
        'fingerprint' => 'fingerprint',
        'id' => 'id',
        'issued_on' => 'issuedOn',
        'issuer_common_name' => 'issuerCommonName',
        'issuer_organization' => 'issuerOrganization',
        'issuer_organizational_unit' => 'issuerOrganizationalUnit',
        'pem' => 'pem',
        'serial_number' => 'serialNumber',
        'subject_common_name' => 'subjectCommonName',
        'subject_organization' => 'subjectOrganization',
        'subject_organizational_unit' => 'subjectOrganizationalUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expires_on' => 'setExpiresOn',
        'fingerprint' => 'setFingerprint',
        'id' => 'setId',
        'issued_on' => 'setIssuedOn',
        'issuer_common_name' => 'setIssuerCommonName',
        'issuer_organization' => 'setIssuerOrganization',
        'issuer_organizational_unit' => 'setIssuerOrganizationalUnit',
        'pem' => 'setPem',
        'serial_number' => 'setSerialNumber',
        'subject_common_name' => 'setSubjectCommonName',
        'subject_organization' => 'setSubjectOrganization',
        'subject_organizational_unit' => 'setSubjectOrganizationalUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expires_on' => 'getExpiresOn',
        'fingerprint' => 'getFingerprint',
        'id' => 'getId',
        'issued_on' => 'getIssuedOn',
        'issuer_common_name' => 'getIssuerCommonName',
        'issuer_organization' => 'getIssuerOrganization',
        'issuer_organizational_unit' => 'getIssuerOrganizationalUnit',
        'pem' => 'getPem',
        'serial_number' => 'getSerialNumber',
        'subject_common_name' => 'getSubjectCommonName',
        'subject_organization' => 'getSubjectOrganization',
        'subject_organizational_unit' => 'getSubjectOrganizationalUnit'
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
        $this->container['expires_on'] = isset($data['expires_on']) ? $data['expires_on'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issued_on'] = isset($data['issued_on']) ? $data['issued_on'] : null;
        $this->container['issuer_common_name'] = isset($data['issuer_common_name']) ? $data['issuer_common_name'] : null;
        $this->container['issuer_organization'] = isset($data['issuer_organization']) ? $data['issuer_organization'] : null;
        $this->container['issuer_organizational_unit'] = isset($data['issuer_organizational_unit']) ? $data['issuer_organizational_unit'] : null;
        $this->container['pem'] = isset($data['pem']) ? $data['pem'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['subject_common_name'] = isset($data['subject_common_name']) ? $data['subject_common_name'] : null;
        $this->container['subject_organization'] = isset($data['subject_organization']) ? $data['subject_organization'] : null;
        $this->container['subject_organizational_unit'] = isset($data['subject_organizational_unit']) ? $data['subject_organizational_unit'] : null;
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
     * Gets expires_on
     *
     * @return int
     */
    public function getExpiresOn()
    {
        return $this->container['expires_on'];
    }

    /**
     * Sets expires_on
     *
     * @param int $expires_on expires_on
     *
     * @return $this
     */
    public function setExpiresOn($expires_on)
    {
        $this->container['expires_on'] = $expires_on;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string $fingerprint fingerprint
     *
     * @return $this
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets issued_on
     *
     * @return int
     */
    public function getIssuedOn()
    {
        return $this->container['issued_on'];
    }

    /**
     * Sets issued_on
     *
     * @param int $issued_on issued_on
     *
     * @return $this
     */
    public function setIssuedOn($issued_on)
    {
        $this->container['issued_on'] = $issued_on;

        return $this;
    }

    /**
     * Gets issuer_common_name
     *
     * @return string
     */
    public function getIssuerCommonName()
    {
        return $this->container['issuer_common_name'];
    }

    /**
     * Sets issuer_common_name
     *
     * @param string $issuer_common_name issuer_common_name
     *
     * @return $this
     */
    public function setIssuerCommonName($issuer_common_name)
    {
        $this->container['issuer_common_name'] = $issuer_common_name;

        return $this;
    }

    /**
     * Gets issuer_organization
     *
     * @return string
     */
    public function getIssuerOrganization()
    {
        return $this->container['issuer_organization'];
    }

    /**
     * Sets issuer_organization
     *
     * @param string $issuer_organization issuer_organization
     *
     * @return $this
     */
    public function setIssuerOrganization($issuer_organization)
    {
        $this->container['issuer_organization'] = $issuer_organization;

        return $this;
    }

    /**
     * Gets issuer_organizational_unit
     *
     * @return string
     */
    public function getIssuerOrganizationalUnit()
    {
        return $this->container['issuer_organizational_unit'];
    }

    /**
     * Sets issuer_organizational_unit
     *
     * @param string $issuer_organizational_unit issuer_organizational_unit
     *
     * @return $this
     */
    public function setIssuerOrganizationalUnit($issuer_organizational_unit)
    {
        $this->container['issuer_organizational_unit'] = $issuer_organizational_unit;

        return $this;
    }

    /**
     * Gets pem
     *
     * @return string
     */
    public function getPem()
    {
        return $this->container['pem'];
    }

    /**
     * Sets pem
     *
     * @param string $pem pem
     *
     * @return $this
     */
    public function setPem($pem)
    {
        $this->container['pem'] = $pem;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets subject_common_name
     *
     * @return string
     */
    public function getSubjectCommonName()
    {
        return $this->container['subject_common_name'];
    }

    /**
     * Sets subject_common_name
     *
     * @param string $subject_common_name subject_common_name
     *
     * @return $this
     */
    public function setSubjectCommonName($subject_common_name)
    {
        $this->container['subject_common_name'] = $subject_common_name;

        return $this;
    }

    /**
     * Gets subject_organization
     *
     * @return string
     */
    public function getSubjectOrganization()
    {
        return $this->container['subject_organization'];
    }

    /**
     * Sets subject_organization
     *
     * @param string $subject_organization subject_organization
     *
     * @return $this
     */
    public function setSubjectOrganization($subject_organization)
    {
        $this->container['subject_organization'] = $subject_organization;

        return $this;
    }

    /**
     * Gets subject_organizational_unit
     *
     * @return string
     */
    public function getSubjectOrganizationalUnit()
    {
        return $this->container['subject_organizational_unit'];
    }

    /**
     * Sets subject_organizational_unit
     *
     * @param string $subject_organizational_unit subject_organizational_unit
     *
     * @return $this
     */
    public function setSubjectOrganizationalUnit($subject_organizational_unit)
    {
        $this->container['subject_organizational_unit'] = $subject_organizational_unit;

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


