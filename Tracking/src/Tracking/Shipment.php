<?php
/**
 * Shipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UPS TrackService API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Tracking\Tracking;

use \ArrayAccess;
use \UPS\Tracking\ObjectSerializer;

/**
 * Shipment Class Doc Comment
 *
 * @category Class
 * @package  UPS\Tracking
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inquiry_number' => 'string',
        'package' => '\UPS\Tracking\Tracking\Package[]',
        'user_relation' => 'string[]',
        'warnings' => '\UPS\Tracking\Tracking\Warning[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inquiry_number' => null,
        'package' => null,
        'user_relation' => null,
        'warnings' => null
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
        'inquiry_number' => 'inquiryNumber',
        'package' => 'package',
        'user_relation' => 'userRelation',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inquiry_number' => 'setInquiryNumber',
        'package' => 'setPackage',
        'user_relation' => 'setUserRelation',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inquiry_number' => 'getInquiryNumber',
        'package' => 'getPackage',
        'user_relation' => 'getUserRelation',
        'warnings' => 'getWarnings'
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
        $this->container['inquiry_number'] = isset($data['inquiry_number']) ? $data['inquiry_number'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['user_relation'] = isset($data['user_relation']) ? $data['user_relation'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
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
     * Gets inquiry_number
     *
     * @return string
     */
    public function getInquiryNumber()
    {
        return $this->container['inquiry_number'];
    }

    /**
     * Sets inquiry_number
     *
     * @param string $inquiry_number inquiryNumber
     *
     * @return $this
     */
    public function setInquiryNumber($inquiry_number)
    {
        $this->container['inquiry_number'] = $inquiry_number;

        return $this;
    }

    /**
     * Gets package
     *
     * @return \UPS\Tracking\Tracking\Package[]
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \UPS\Tracking\Tracking\Package[] $package package
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets user_relation
     *
     * @return string[]
     */
    public function getUserRelation()
    {
        return $this->container['user_relation'];
    }

    /**
     * Sets user_relation
     *
     * @param string[] $user_relation The relationship of the user to the package(s) in the shipment. No value means that the user has no relationship to the package. Note that this check is only done when the request contains the 'Username' and package rights checking is performed. Valid values:<br />'MYC_HOME' - My Choice for Home<br />'MYC_BUS_OUTBOUND' - My Choice for Business Outbound<br />'MYC_BUS_INBOUND' - My Choice for Business Inbound<br />'SHIPPER' - Shipper
     *
     * @return $this
     */
    public function setUserRelation($user_relation)
    {
        $this->container['user_relation'] = $user_relation;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \UPS\Tracking\Tracking\Warning[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \UPS\Tracking\Tracking\Warning[] $warnings warnings
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
