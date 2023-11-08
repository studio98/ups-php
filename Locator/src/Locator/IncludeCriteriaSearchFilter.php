<?php
/**
 * IncludeCriteriaSearchFilter
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
 * IncludeCriteriaSearchFilter Class Doc Comment
 *
 * @category Class
 * @description Container to hold one or more search criteria for UPS Access Points that allow DCR, Shipping and ClickAndCollect access. Only applicable when the UPS access point candidate list is obtained in search by address or geocode search.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncludeCriteriaSearchFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncludeCriteria_SearchFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dcr_indicator' => 'string',
        'shipping_availability_indicator' => 'string',
        'shipper_preparation_delay' => 'string',
        'click_and_collect_sort_with_distance' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dcr_indicator' => null,
        'shipping_availability_indicator' => null,
        'shipper_preparation_delay' => null,
        'click_and_collect_sort_with_distance' => null
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
        'dcr_indicator' => 'DCRIndicator',
        'shipping_availability_indicator' => 'ShippingAvailabilityIndicator',
        'shipper_preparation_delay' => 'ShipperPreparationDelay',
        'click_and_collect_sort_with_distance' => 'ClickAndCollectSortWithDistance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dcr_indicator' => 'setDcrIndicator',
        'shipping_availability_indicator' => 'setShippingAvailabilityIndicator',
        'shipper_preparation_delay' => 'setShipperPreparationDelay',
        'click_and_collect_sort_with_distance' => 'setClickAndCollectSortWithDistance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dcr_indicator' => 'getDcrIndicator',
        'shipping_availability_indicator' => 'getShippingAvailabilityIndicator',
        'shipper_preparation_delay' => 'getShipperPreparationDelay',
        'click_and_collect_sort_with_distance' => 'getClickAndCollectSortWithDistance'
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
        $this->container['dcr_indicator'] = isset($data['dcr_indicator']) ? $data['dcr_indicator'] : null;
        $this->container['shipping_availability_indicator'] = isset($data['shipping_availability_indicator']) ? $data['shipping_availability_indicator'] : null;
        $this->container['shipper_preparation_delay'] = isset($data['shipper_preparation_delay']) ? $data['shipper_preparation_delay'] : null;
        $this->container['click_and_collect_sort_with_distance'] = isset($data['click_and_collect_sort_with_distance']) ? $data['click_and_collect_sort_with_distance'] : null;
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
     * Gets dcr_indicator
     *
     * @return string
     */
    public function getDcrIndicator()
    {
        return $this->container['dcr_indicator'];
    }

    /**
     * Sets dcr_indicator
     *
     * @param string $dcr_indicator DCR/DCO Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search for access points with DCR. Any data in the element is ignored.
     *
     * @return $this
     */
    public function setDcrIndicator($dcr_indicator)
    {
        $this->container['dcr_indicator'] = $dcr_indicator;

        return $this;
    }

    /**
     * Gets shipping_availability_indicator
     *
     * @return string
     */
    public function getShippingAvailabilityIndicator()
    {
        return $this->container['shipping_availability_indicator'];
    }

    /**
     * Sets shipping_availability_indicator
     *
     * @param string $shipping_availability_indicator Shipping Availability indicator for UPS Access Point. Either this indicator is present or not present. Presence indicates a search of access points with shipping availability. Any data in it is ignored.
     *
     * @return $this
     */
    public function setShippingAvailabilityIndicator($shipping_availability_indicator)
    {
        $this->container['shipping_availability_indicator'] = $shipping_availability_indicator;

        return $this;
    }

    /**
     * Gets shipper_preparation_delay
     *
     * @return string
     */
    public function getShipperPreparationDelay()
    {
        return $this->container['shipper_preparation_delay'];
    }

    /**
     * Sets shipper_preparation_delay
     *
     * @param string $shipper_preparation_delay Value for the number of days to check for shipping availability from� the current day. When this value is present, ShippingAvailabilityIndicator is implied implicitly.
     *
     * @return $this
     */
    public function setShipperPreparationDelay($shipper_preparation_delay)
    {
        $this->container['shipper_preparation_delay'] = $shipper_preparation_delay;

        return $this;
    }

    /**
     * Gets click_and_collect_sort_with_distance
     *
     * @return string
     */
    public function getClickAndCollectSortWithDistance()
    {
        return $this->container['click_and_collect_sort_with_distance'];
    }

    /**
     * Sets click_and_collect_sort_with_distance
     *
     * @param string $click_and_collect_sort_with_distance This contains the distance (in given UnitOfMeasurement) wherin to sort the click and collect access point locations above other� access point locations� when a UPS Access Point candidate list is obtained in search by address or geocode search.
     *
     * @return $this
     */
    public function setClickAndCollectSortWithDistance($click_and_collect_sort_with_distance)
    {
        $this->container['click_and_collect_sort_with_distance'] = $click_and_collect_sort_with_distance;

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
