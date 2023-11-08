<?php
/**
 * PickupCreationRequestFreightOptions
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
 * PickupCreationRequestFreightOptions Class Doc Comment
 *
 * @category Class
 * @description Container will be used to indicate Service options, add optional Original service center, destination address and shipment details related to the UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday.
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupCreationRequestFreightOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupCreationRequest_FreightOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipment_service_options' => '\UPS\Pickup\Pickup\FreightOptionsShipmentServiceOptions',
        'origin_service_center_code' => 'string',
        'origin_service_country_code' => 'string',
        'destination_address' => '\UPS\Pickup\Pickup\FreightOptionsDestinationAddress',
        'shipment_detail' => '\UPS\Pickup\Pickup\FreightOptionsShipmentDetail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipment_service_options' => null,
        'origin_service_center_code' => null,
        'origin_service_country_code' => null,
        'destination_address' => null,
        'shipment_detail' => null
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
        'shipment_service_options' => 'ShipmentServiceOptions',
        'origin_service_center_code' => 'OriginServiceCenterCode',
        'origin_service_country_code' => 'OriginServiceCountryCode',
        'destination_address' => 'DestinationAddress',
        'shipment_detail' => 'ShipmentDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_service_options' => 'setShipmentServiceOptions',
        'origin_service_center_code' => 'setOriginServiceCenterCode',
        'origin_service_country_code' => 'setOriginServiceCountryCode',
        'destination_address' => 'setDestinationAddress',
        'shipment_detail' => 'setShipmentDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_service_options' => 'getShipmentServiceOptions',
        'origin_service_center_code' => 'getOriginServiceCenterCode',
        'origin_service_country_code' => 'getOriginServiceCountryCode',
        'destination_address' => 'getDestinationAddress',
        'shipment_detail' => 'getShipmentDetail'
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
        $this->container['shipment_service_options'] = isset($data['shipment_service_options']) ? $data['shipment_service_options'] : null;
        $this->container['origin_service_center_code'] = isset($data['origin_service_center_code']) ? $data['origin_service_center_code'] : null;
        $this->container['origin_service_country_code'] = isset($data['origin_service_country_code']) ? $data['origin_service_country_code'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['shipment_detail'] = isset($data['shipment_detail']) ? $data['shipment_detail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipment_detail'] === null) {
            $invalidProperties[] = "'shipment_detail' can't be null";
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
     * Gets shipment_service_options
     *
     * @return \UPS\Pickup\Pickup\FreightOptionsShipmentServiceOptions
     */
    public function getShipmentServiceOptions()
    {
        return $this->container['shipment_service_options'];
    }

    /**
     * Sets shipment_service_options
     *
     * @param \UPS\Pickup\Pickup\FreightOptionsShipmentServiceOptions $shipment_service_options shipment_service_options
     *
     * @return $this
     */
    public function setShipmentServiceOptions($shipment_service_options)
    {
        $this->container['shipment_service_options'] = $shipment_service_options;

        return $this;
    }

    /**
     * Gets origin_service_center_code
     *
     * @return string
     */
    public function getOriginServiceCenterCode()
    {
        return $this->container['origin_service_center_code'];
    }

    /**
     * Sets origin_service_center_code
     *
     * @param string $origin_service_center_code Origin SLIC. This will be obtained from submitting a pickup service center request. See PickupGetFacilitiesServiceCenterRequest.
     *
     * @return $this
     */
    public function setOriginServiceCenterCode($origin_service_center_code)
    {
        $this->container['origin_service_center_code'] = $origin_service_center_code;

        return $this;
    }

    /**
     * Gets origin_service_country_code
     *
     * @return string
     */
    public function getOriginServiceCountryCode()
    {
        return $this->container['origin_service_country_code'];
    }

    /**
     * Sets origin_service_country_code
     *
     * @param string $origin_service_country_code Country or territory of Service Center SLIC chosen to drop off.
     *
     * @return $this
     */
    public function setOriginServiceCountryCode($origin_service_country_code)
    {
        $this->container['origin_service_country_code'] = $origin_service_country_code;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \UPS\Pickup\Pickup\FreightOptionsDestinationAddress
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \UPS\Pickup\Pickup\FreightOptionsDestinationAddress $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets shipment_detail
     *
     * @return \UPS\Pickup\Pickup\FreightOptionsShipmentDetail
     */
    public function getShipmentDetail()
    {
        return $this->container['shipment_detail'];
    }

    /**
     * Sets shipment_detail
     *
     * @param \UPS\Pickup\Pickup\FreightOptionsShipmentDetail $shipment_detail shipment_detail
     *
     * @return $this
     */
    public function setShipmentDetail($shipment_detail)
    {
        $this->container['shipment_detail'] = $shipment_detail;

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
