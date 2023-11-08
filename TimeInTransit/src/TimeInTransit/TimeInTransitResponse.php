<?php
/**
 * TimeInTransitResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\TimeInTransit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Time In Transit
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

namespace UPS\TimeInTransit\TimeInTransit;

use \ArrayAccess;
use \UPS\TimeInTransit\ObjectSerializer;

/**
 * TimeInTransitResponse Class Doc Comment
 *
 * @category Class
 * @description N/A
 * @package  UPS\TimeInTransit
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TimeInTransitResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TimeInTransitResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'validation_list' => '\UPS\TimeInTransit\TimeInTransit\ValidationList',
        'destination_pick_list' => '\UPS\TimeInTransit\TimeInTransit\DestinationPickList',
        'origin_pick_list' => '\UPS\TimeInTransit\TimeInTransit\OriginPickList',
        'ems_response' => '\UPS\TimeInTransit\TimeInTransit\EmsResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'validation_list' => null,
        'destination_pick_list' => null,
        'origin_pick_list' => null,
        'ems_response' => null
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
        'validation_list' => 'validationList',
        'destination_pick_list' => 'destinationPickList',
        'origin_pick_list' => 'originPickList',
        'ems_response' => 'emsResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validation_list' => 'setValidationList',
        'destination_pick_list' => 'setDestinationPickList',
        'origin_pick_list' => 'setOriginPickList',
        'ems_response' => 'setEmsResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validation_list' => 'getValidationList',
        'destination_pick_list' => 'getDestinationPickList',
        'origin_pick_list' => 'getOriginPickList',
        'ems_response' => 'getEmsResponse'
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
        $this->container['validation_list'] = isset($data['validation_list']) ? $data['validation_list'] : null;
        $this->container['destination_pick_list'] = isset($data['destination_pick_list']) ? $data['destination_pick_list'] : null;
        $this->container['origin_pick_list'] = isset($data['origin_pick_list']) ? $data['origin_pick_list'] : null;
        $this->container['ems_response'] = isset($data['ems_response']) ? $data['ems_response'] : null;
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
     * Gets validation_list
     *
     * @return \UPS\TimeInTransit\TimeInTransit\ValidationList
     */
    public function getValidationList()
    {
        return $this->container['validation_list'];
    }

    /**
     * Sets validation_list
     *
     * @param \UPS\TimeInTransit\TimeInTransit\ValidationList $validation_list validation_list
     *
     * @return $this
     */
    public function setValidationList($validation_list)
    {
        $this->container['validation_list'] = $validation_list;

        return $this;
    }

    /**
     * Gets destination_pick_list
     *
     * @return \UPS\TimeInTransit\TimeInTransit\DestinationPickList
     */
    public function getDestinationPickList()
    {
        return $this->container['destination_pick_list'];
    }

    /**
     * Sets destination_pick_list
     *
     * @param \UPS\TimeInTransit\TimeInTransit\DestinationPickList $destination_pick_list destination_pick_list
     *
     * @return $this
     */
    public function setDestinationPickList($destination_pick_list)
    {
        $this->container['destination_pick_list'] = $destination_pick_list;

        return $this;
    }

    /**
     * Gets origin_pick_list
     *
     * @return \UPS\TimeInTransit\TimeInTransit\OriginPickList
     */
    public function getOriginPickList()
    {
        return $this->container['origin_pick_list'];
    }

    /**
     * Sets origin_pick_list
     *
     * @param \UPS\TimeInTransit\TimeInTransit\OriginPickList $origin_pick_list origin_pick_list
     *
     * @return $this
     */
    public function setOriginPickList($origin_pick_list)
    {
        $this->container['origin_pick_list'] = $origin_pick_list;

        return $this;
    }

    /**
     * Gets ems_response
     *
     * @return \UPS\TimeInTransit\TimeInTransit\EmsResponse
     */
    public function getEmsResponse()
    {
        return $this->container['ems_response'];
    }

    /**
     * Sets ems_response
     *
     * @param \UPS\TimeInTransit\TimeInTransit\EmsResponse $ems_response ems_response
     *
     * @return $this
     */
    public function setEmsResponse($ems_response)
    {
        $this->container['ems_response'] = $ems_response;

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
