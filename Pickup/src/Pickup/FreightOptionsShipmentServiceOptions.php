<?php
/**
 * FreightOptionsShipmentServiceOptions
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pickup
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

namespace UPS\Pickup\Pickup;

use \ArrayAccess;
use \UPS\Pickup\ObjectSerializer;

/**
 * FreightOptionsShipmentServiceOptions Class Doc Comment
 *
 * @category Class
 * @description Supports various optional indicators
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreightOptionsShipmentServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreightOptions_ShipmentServiceOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'origin_lift_gate_indicator' => 'string',
        'dropoff_at_ups_facility_indicator' => 'string',
        'hold_for_pickup_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'origin_lift_gate_indicator' => null,
        'dropoff_at_ups_facility_indicator' => null,
        'hold_for_pickup_indicator' => null
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
        'origin_lift_gate_indicator' => 'OriginLiftGateIndicator',
        'dropoff_at_ups_facility_indicator' => 'DropoffAtUPSFacilityIndicator',
        'hold_for_pickup_indicator' => 'HoldForPickupIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'origin_lift_gate_indicator' => 'setOriginLiftGateIndicator',
        'dropoff_at_ups_facility_indicator' => 'setDropoffAtUpsFacilityIndicator',
        'hold_for_pickup_indicator' => 'setHoldForPickupIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'origin_lift_gate_indicator' => 'getOriginLiftGateIndicator',
        'dropoff_at_ups_facility_indicator' => 'getDropoffAtUpsFacilityIndicator',
        'hold_for_pickup_indicator' => 'getHoldForPickupIndicator'
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
        $this->container['origin_lift_gate_indicator'] = isset($data['origin_lift_gate_indicator']) ? $data['origin_lift_gate_indicator'] : null;
        $this->container['dropoff_at_ups_facility_indicator'] = isset($data['dropoff_at_ups_facility_indicator']) ? $data['dropoff_at_ups_facility_indicator'] : null;
        $this->container['hold_for_pickup_indicator'] = isset($data['hold_for_pickup_indicator']) ? $data['hold_for_pickup_indicator'] : null;
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
     * Gets origin_lift_gate_indicator
     *
     * @return string
     */
    public function getOriginLiftGateIndicator()
    {
        return $this->container['origin_lift_gate_indicator'];
    }

    /**
     * Sets origin_lift_gate_indicator
     *
     * @param string $origin_lift_gate_indicator Presence indicates OriginLiftGateRequiredIndicator is present.  Conditionally requirements. Must not be present if DropOffAtUPSFacilityIndicator is true
     *
     * @return $this
     */
    public function setOriginLiftGateIndicator($origin_lift_gate_indicator)
    {
        $this->container['origin_lift_gate_indicator'] = $origin_lift_gate_indicator;

        return $this;
    }

    /**
     * Gets dropoff_at_ups_facility_indicator
     *
     * @return string
     */
    public function getDropoffAtUpsFacilityIndicator()
    {
        return $this->container['dropoff_at_ups_facility_indicator'];
    }

    /**
     * Sets dropoff_at_ups_facility_indicator
     *
     * @param string $dropoff_at_ups_facility_indicator Identifies service center location information for Origin List of UPS Facilities.
     *
     * @return $this
     */
    public function setDropoffAtUpsFacilityIndicator($dropoff_at_ups_facility_indicator)
    {
        $this->container['dropoff_at_ups_facility_indicator'] = $dropoff_at_ups_facility_indicator;

        return $this;
    }

    /**
     * Gets hold_for_pickup_indicator
     *
     * @return string
     */
    public function getHoldForPickupIndicator()
    {
        return $this->container['hold_for_pickup_indicator'];
    }

    /**
     * Sets hold_for_pickup_indicator
     *
     * @param string $hold_for_pickup_indicator Identifies service center location information for Destination of UPS Facilities.
     *
     * @return $this
     */
    public function setHoldForPickupIndicator($hold_for_pickup_indicator)
    {
        $this->container['hold_for_pickup_indicator'] = $hold_for_pickup_indicator;

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
