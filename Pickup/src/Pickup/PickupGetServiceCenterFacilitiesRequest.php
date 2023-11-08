<?php
/**
 * PickupGetServiceCenterFacilitiesRequest
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
 * PickupGetServiceCenterFacilitiesRequest Class Doc Comment
 *
 * @category Class
 * @description This request is to retrieve UPS Facility location information including location address, phone number, SLIC, and hours of operation for pick-up and drop-off requests
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupGetServiceCenterFacilitiesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupGetServiceCenterFacilitiesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request' => '\UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestRequest',
        'pickup_piece' => '\UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestPickupPiece[]',
        'origin_address' => '\UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestOriginAddress',
        'destination_address' => '\UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestDestinationAddress',
        'locale' => 'string',
        'proximity_search_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request' => null,
        'pickup_piece' => null,
        'origin_address' => null,
        'destination_address' => null,
        'locale' => null,
        'proximity_search_indicator' => null
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
        'request' => 'Request',
        'pickup_piece' => 'PickupPiece',
        'origin_address' => 'OriginAddress',
        'destination_address' => 'DestinationAddress',
        'locale' => 'Locale',
        'proximity_search_indicator' => 'ProximitySearchIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'pickup_piece' => 'setPickupPiece',
        'origin_address' => 'setOriginAddress',
        'destination_address' => 'setDestinationAddress',
        'locale' => 'setLocale',
        'proximity_search_indicator' => 'setProximitySearchIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'pickup_piece' => 'getPickupPiece',
        'origin_address' => 'getOriginAddress',
        'destination_address' => 'getDestinationAddress',
        'locale' => 'getLocale',
        'proximity_search_indicator' => 'getProximitySearchIndicator'
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
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['pickup_piece'] = isset($data['pickup_piece']) ? $data['pickup_piece'] : null;
        $this->container['origin_address'] = isset($data['origin_address']) ? $data['origin_address'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['proximity_search_indicator'] = isset($data['proximity_search_indicator']) ? $data['proximity_search_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        if ($this->container['pickup_piece'] === null) {
            $invalidProperties[] = "'pickup_piece' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
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
     * Gets request
     *
     * @return \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestRequest
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestRequest $request request
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets pickup_piece
     *
     * @return \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestPickupPiece[]
     */
    public function getPickupPiece()
    {
        return $this->container['pickup_piece'];
    }

    /**
     * Sets pickup_piece
     *
     * @param \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestPickupPiece[] $pickup_piece pickup_piece
     *
     * @return $this
     */
    public function setPickupPiece($pickup_piece)
    {
        $this->container['pickup_piece'] = $pickup_piece;

        return $this;
    }

    /**
     * Gets origin_address
     *
     * @return \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestOriginAddress
     */
    public function getOriginAddress()
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address
     *
     * @param \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestOriginAddress $origin_address origin_address
     *
     * @return $this
     */
    public function setOriginAddress($origin_address)
    {
        $this->container['origin_address'] = $origin_address;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestDestinationAddress
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \UPS\Pickup\Pickup\PickupGetServiceCenterFacilitiesRequestDestinationAddress $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Origin Country or Territory Locale.  Locale should be Origin Country. Example: en_US.  The Last 50 instruction will be send based on this locale. Locale is required if PoximityIndicator is present for Drop Off facilities.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets proximity_search_indicator
     *
     * @return string
     */
    public function getProximitySearchIndicator()
    {
        return $this->container['proximity_search_indicator'];
    }

    /**
     * Sets proximity_search_indicator
     *
     * @param string $proximity_search_indicator Proximity Indicator.  Indicates the� user requested the proximity search for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday locations for the origin address and/or the airport code, and the sort code for destination address.
     *
     * @return $this
     */
    public function setProximitySearchIndicator($proximity_search_indicator)
    {
        $this->container['proximity_search_indicator'] = $proximity_search_indicator;

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
