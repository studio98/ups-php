<?php
/**
 * LocatorRequestRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Locator
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

namespace UPS\Locator\Locator;

use \ArrayAccess;
use \UPS\Locator\ObjectSerializer;

/**
 * LocatorRequestRequest Class Doc Comment
 *
 * @category Class
 * @description N/A
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocatorRequestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LocatorRequest_Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transaction_reference' => '\UPS\Locator\Locator\RequestTransactionReference',
        'request_action' => 'string',
        'request_option' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transaction_reference' => null,
        'request_action' => null,
        'request_option' => null
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
        'transaction_reference' => 'TransactionReference',
        'request_action' => 'RequestAction',
        'request_option' => 'RequestOption'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_reference' => 'setTransactionReference',
        'request_action' => 'setRequestAction',
        'request_option' => 'setRequestOption'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_reference' => 'getTransactionReference',
        'request_action' => 'getRequestAction',
        'request_option' => 'getRequestOption'
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
        $this->container['transaction_reference'] = isset($data['transaction_reference']) ? $data['transaction_reference'] : null;
        $this->container['request_action'] = isset($data['request_action']) ? $data['request_action'] : null;
        $this->container['request_option'] = isset($data['request_option']) ? $data['request_option'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_action'] === null) {
            $invalidProperties[] = "'request_action' can't be null";
        }
        if ($this->container['request_option'] === null) {
            $invalidProperties[] = "'request_option' can't be null";
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
     * Gets transaction_reference
     *
     * @return \UPS\Locator\Locator\RequestTransactionReference
     */
    public function getTransactionReference()
    {
        return $this->container['transaction_reference'];
    }

    /**
     * Sets transaction_reference
     *
     * @param \UPS\Locator\Locator\RequestTransactionReference $transaction_reference transaction_reference
     *
     * @return $this
     */
    public function setTransactionReference($transaction_reference)
    {
        $this->container['transaction_reference'] = $transaction_reference;

        return $this;
    }

    /**
     * Gets request_action
     *
     * @return string
     */
    public function getRequestAction()
    {
        return $this->container['request_action'];
    }

    /**
     * Sets request_action
     *
     * @param string $request_action Indicates the action to be taken by the XML service.  The only valid value is 'Locator'.
     *
     * @return $this
     */
    public function setRequestAction($request_action)
    {
        $this->container['request_action'] = $request_action;

        return $this;
    }

    /**
     * Gets request_option
     *
     * @return string
     */
    public function getRequestOption()
    {
        return $this->container['request_option'];
    }

    /**
     * Sets request_option
     *
     * @param string $request_option Indicates the type of request. Valid values: 1-Locations (Drop Locations and Will call locations) 8-All available Additional Services 16-All available Program Types 24-All available Additional Services and Program types 32-All available Retail Locations 40-All available Retail Locations and Additional Services  48-All available Retail Locations and Program Types  56-All available Retail Locations, Additional Services and Program Types  64-Search for UPS Access Point Locations.
     *
     * @return $this
     */
    public function setRequestOption($request_option)
    {
        $this->container['request_option'] = $request_option;

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
