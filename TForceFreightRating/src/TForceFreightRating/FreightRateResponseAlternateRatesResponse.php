<?php
/**
 * FreightRateResponseAlternateRatesResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\TForceFreightRating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freight Rate
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

namespace UPS\TForceFreightRating\TForceFreightRating;

use \ArrayAccess;
use \UPS\TForceFreightRating\ObjectSerializer;

/**
 * FreightRateResponseAlternateRatesResponse Class Doc Comment
 *
 * @category Class
 * @description Container for alternate rates including FRS rates
 * @package  UPS\TForceFreightRating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FreightRateResponseAlternateRatesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FreightRateResponse_AlternateRatesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alternate_rate_type' => '\UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseAlternateRateType',
        'rate' => '\UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseRate[]',
        'freight_density_rate' => '\UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseFreightDensityRate',
        'billable_shipment_weight' => '\UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseBillableShipmentWeight',
        'time_in_transit' => '\UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseTimeInTransit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alternate_rate_type' => null,
        'rate' => null,
        'freight_density_rate' => null,
        'billable_shipment_weight' => null,
        'time_in_transit' => null
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
        'alternate_rate_type' => 'AlternateRateType',
        'rate' => 'Rate',
        'freight_density_rate' => 'FreightDensityRate',
        'billable_shipment_weight' => 'BillableShipmentWeight',
        'time_in_transit' => 'TimeInTransit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alternate_rate_type' => 'setAlternateRateType',
        'rate' => 'setRate',
        'freight_density_rate' => 'setFreightDensityRate',
        'billable_shipment_weight' => 'setBillableShipmentWeight',
        'time_in_transit' => 'setTimeInTransit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alternate_rate_type' => 'getAlternateRateType',
        'rate' => 'getRate',
        'freight_density_rate' => 'getFreightDensityRate',
        'billable_shipment_weight' => 'getBillableShipmentWeight',
        'time_in_transit' => 'getTimeInTransit'
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
        $this->container['alternate_rate_type'] = isset($data['alternate_rate_type']) ? $data['alternate_rate_type'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['freight_density_rate'] = isset($data['freight_density_rate']) ? $data['freight_density_rate'] : null;
        $this->container['billable_shipment_weight'] = isset($data['billable_shipment_weight']) ? $data['billable_shipment_weight'] : null;
        $this->container['time_in_transit'] = isset($data['time_in_transit']) ? $data['time_in_transit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['alternate_rate_type'] === null) {
            $invalidProperties[] = "'alternate_rate_type' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
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
     * Gets alternate_rate_type
     *
     * @return \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseAlternateRateType
     */
    public function getAlternateRateType()
    {
        return $this->container['alternate_rate_type'];
    }

    /**
     * Sets alternate_rate_type
     *
     * @param \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseAlternateRateType $alternate_rate_type alternate_rate_type
     *
     * @return $this
     */
    public function setAlternateRateType($alternate_rate_type)
    {
        $this->container['alternate_rate_type'] = $alternate_rate_type;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseRate[]
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseRate[] $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets freight_density_rate
     *
     * @return \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseFreightDensityRate
     */
    public function getFreightDensityRate()
    {
        return $this->container['freight_density_rate'];
    }

    /**
     * Sets freight_density_rate
     *
     * @param \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseFreightDensityRate $freight_density_rate freight_density_rate
     *
     * @return $this
     */
    public function setFreightDensityRate($freight_density_rate)
    {
        $this->container['freight_density_rate'] = $freight_density_rate;

        return $this;
    }

    /**
     * Gets billable_shipment_weight
     *
     * @return \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseBillableShipmentWeight
     */
    public function getBillableShipmentWeight()
    {
        return $this->container['billable_shipment_weight'];
    }

    /**
     * Sets billable_shipment_weight
     *
     * @param \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseBillableShipmentWeight $billable_shipment_weight billable_shipment_weight
     *
     * @return $this
     */
    public function setBillableShipmentWeight($billable_shipment_weight)
    {
        $this->container['billable_shipment_weight'] = $billable_shipment_weight;

        return $this;
    }

    /**
     * Gets time_in_transit
     *
     * @return \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseTimeInTransit
     */
    public function getTimeInTransit()
    {
        return $this->container['time_in_transit'];
    }

    /**
     * Sets time_in_transit
     *
     * @param \UPS\TForceFreightRating\TForceFreightRating\AlternateRatesResponseTimeInTransit $time_in_transit time_in_transit
     *
     * @return $this
     */
    public function setTimeInTransit($time_in_transit)
    {
        $this->container['time_in_transit'] = $time_in_transit;

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