<?php
/**
 * ShipmentPackage
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
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

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * ShipmentPackage Class Doc Comment
 *
 * @category Class
 * @description Package Container.  Only one Package allowed for Simple Rate
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Shipment_Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packaging_type' => '\UPS\Rating\Rating\PackagePackagingType',
        'dimensions' => '\UPS\Rating\Rating\PackageDimensions',
        'dim_weight' => '\UPS\Rating\Rating\PackageDimWeight',
        'package_weight' => '\UPS\Rating\Rating\PackagePackageWeight',
        'commodity' => '\UPS\Rating\Rating\PackageCommodity',
        'large_package_indicator' => 'string',
        'package_service_options' => '\UPS\Rating\Rating\PackagePackageServiceOptions',
        'additional_handling_indicator' => 'string',
        'simple_rate' => '\UPS\Rating\Rating\PackageSimpleRate',
        'ups_premier' => '\UPS\Rating\Rating\PackageUPSPremier',
        'oversize_indicator' => 'string',
        'minimum_billable_weight_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packaging_type' => null,
        'dimensions' => null,
        'dim_weight' => null,
        'package_weight' => null,
        'commodity' => null,
        'large_package_indicator' => null,
        'package_service_options' => null,
        'additional_handling_indicator' => null,
        'simple_rate' => null,
        'ups_premier' => null,
        'oversize_indicator' => null,
        'minimum_billable_weight_indicator' => null
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
        'packaging_type' => 'PackagingType',
        'dimensions' => 'Dimensions',
        'dim_weight' => 'DimWeight',
        'package_weight' => 'PackageWeight',
        'commodity' => 'Commodity',
        'large_package_indicator' => 'LargePackageIndicator',
        'package_service_options' => 'PackageServiceOptions',
        'additional_handling_indicator' => 'AdditionalHandlingIndicator',
        'simple_rate' => 'SimpleRate',
        'ups_premier' => 'UPSPremier',
        'oversize_indicator' => 'OversizeIndicator',
        'minimum_billable_weight_indicator' => 'MinimumBillableWeightIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packaging_type' => 'setPackagingType',
        'dimensions' => 'setDimensions',
        'dim_weight' => 'setDimWeight',
        'package_weight' => 'setPackageWeight',
        'commodity' => 'setCommodity',
        'large_package_indicator' => 'setLargePackageIndicator',
        'package_service_options' => 'setPackageServiceOptions',
        'additional_handling_indicator' => 'setAdditionalHandlingIndicator',
        'simple_rate' => 'setSimpleRate',
        'ups_premier' => 'setUpsPremier',
        'oversize_indicator' => 'setOversizeIndicator',
        'minimum_billable_weight_indicator' => 'setMinimumBillableWeightIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packaging_type' => 'getPackagingType',
        'dimensions' => 'getDimensions',
        'dim_weight' => 'getDimWeight',
        'package_weight' => 'getPackageWeight',
        'commodity' => 'getCommodity',
        'large_package_indicator' => 'getLargePackageIndicator',
        'package_service_options' => 'getPackageServiceOptions',
        'additional_handling_indicator' => 'getAdditionalHandlingIndicator',
        'simple_rate' => 'getSimpleRate',
        'ups_premier' => 'getUpsPremier',
        'oversize_indicator' => 'getOversizeIndicator',
        'minimum_billable_weight_indicator' => 'getMinimumBillableWeightIndicator'
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
        $this->container['packaging_type'] = isset($data['packaging_type']) ? $data['packaging_type'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['dim_weight'] = isset($data['dim_weight']) ? $data['dim_weight'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null;
        $this->container['commodity'] = isset($data['commodity']) ? $data['commodity'] : null;
        $this->container['large_package_indicator'] = isset($data['large_package_indicator']) ? $data['large_package_indicator'] : null;
        $this->container['package_service_options'] = isset($data['package_service_options']) ? $data['package_service_options'] : null;
        $this->container['additional_handling_indicator'] = isset($data['additional_handling_indicator']) ? $data['additional_handling_indicator'] : null;
        $this->container['simple_rate'] = isset($data['simple_rate']) ? $data['simple_rate'] : null;
        $this->container['ups_premier'] = isset($data['ups_premier']) ? $data['ups_premier'] : null;
        $this->container['oversize_indicator'] = isset($data['oversize_indicator']) ? $data['oversize_indicator'] : null;
        $this->container['minimum_billable_weight_indicator'] = isset($data['minimum_billable_weight_indicator']) ? $data['minimum_billable_weight_indicator'] : null;
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
     * Gets packaging_type
     *
     * @return \UPS\Rating\Rating\PackagePackagingType
     */
    public function getPackagingType()
    {
        return $this->container['packaging_type'];
    }

    /**
     * Sets packaging_type
     *
     * @param \UPS\Rating\Rating\PackagePackagingType $packaging_type packaging_type
     *
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->container['packaging_type'] = $packaging_type;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \UPS\Rating\Rating\PackageDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \UPS\Rating\Rating\PackageDimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets dim_weight
     *
     * @return \UPS\Rating\Rating\PackageDimWeight
     */
    public function getDimWeight()
    {
        return $this->container['dim_weight'];
    }

    /**
     * Sets dim_weight
     *
     * @param \UPS\Rating\Rating\PackageDimWeight $dim_weight dim_weight
     *
     * @return $this
     */
    public function setDimWeight($dim_weight)
    {
        $this->container['dim_weight'] = $dim_weight;

        return $this;
    }

    /**
     * Gets package_weight
     *
     * @return \UPS\Rating\Rating\PackagePackageWeight
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param \UPS\Rating\Rating\PackagePackageWeight $package_weight package_weight
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

        return $this;
    }

    /**
     * Gets commodity
     *
     * @return \UPS\Rating\Rating\PackageCommodity
     */
    public function getCommodity()
    {
        return $this->container['commodity'];
    }

    /**
     * Sets commodity
     *
     * @param \UPS\Rating\Rating\PackageCommodity $commodity commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        $this->container['commodity'] = $commodity;

        return $this;
    }

    /**
     * Gets large_package_indicator
     *
     * @return string
     */
    public function getLargePackageIndicator()
    {
        return $this->container['large_package_indicator'];
    }

    /**
     * Sets large_package_indicator
     *
     * @param string $large_package_indicator This element does not require a value and if one is entered it will be ignored.  If present, it indicates the shipment will be categorized as a Large Package.
     *
     * @return $this
     */
    public function setLargePackageIndicator($large_package_indicator)
    {
        $this->container['large_package_indicator'] = $large_package_indicator;

        return $this;
    }

    /**
     * Gets package_service_options
     *
     * @return \UPS\Rating\Rating\PackagePackageServiceOptions
     */
    public function getPackageServiceOptions()
    {
        return $this->container['package_service_options'];
    }

    /**
     * Sets package_service_options
     *
     * @param \UPS\Rating\Rating\PackagePackageServiceOptions $package_service_options package_service_options
     *
     * @return $this
     */
    public function setPackageServiceOptions($package_service_options)
    {
        $this->container['package_service_options'] = $package_service_options;

        return $this;
    }

    /**
     * Gets additional_handling_indicator
     *
     * @return string
     */
    public function getAdditionalHandlingIndicator()
    {
        return $this->container['additional_handling_indicator'];
    }

    /**
     * Sets additional_handling_indicator
     *
     * @param string $additional_handling_indicator A flag indicating if the packages require additional handling. True if AdditionalHandlingIndicator tag exists; false otherwise. Additional Handling indicator indicates it\"s a non-corrugated package.  Empty Tag.
     *
     * @return $this
     */
    public function setAdditionalHandlingIndicator($additional_handling_indicator)
    {
        $this->container['additional_handling_indicator'] = $additional_handling_indicator;

        return $this;
    }

    /**
     * Gets simple_rate
     *
     * @return \UPS\Rating\Rating\PackageSimpleRate
     */
    public function getSimpleRate()
    {
        return $this->container['simple_rate'];
    }

    /**
     * Sets simple_rate
     *
     * @param \UPS\Rating\Rating\PackageSimpleRate $simple_rate simple_rate
     *
     * @return $this
     */
    public function setSimpleRate($simple_rate)
    {
        $this->container['simple_rate'] = $simple_rate;

        return $this;
    }

    /**
     * Gets ups_premier
     *
     * @return \UPS\Rating\Rating\PackageUPSPremier
     */
    public function getUpsPremier()
    {
        return $this->container['ups_premier'];
    }

    /**
     * Sets ups_premier
     *
     * @param \UPS\Rating\Rating\PackageUPSPremier $ups_premier ups_premier
     *
     * @return $this
     */
    public function setUpsPremier($ups_premier)
    {
        $this->container['ups_premier'] = $ups_premier;

        return $this;
    }

    /**
     * Gets oversize_indicator
     *
     * @return string
     */
    public function getOversizeIndicator()
    {
        return $this->container['oversize_indicator'];
    }

    /**
     * Sets oversize_indicator
     *
     * @param string $oversize_indicator Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is oversized.  Applicable for UPS Worldwide Economy DDU service
     *
     * @return $this
     */
    public function setOversizeIndicator($oversize_indicator)
    {
        $this->container['oversize_indicator'] = $oversize_indicator;

        return $this;
    }

    /**
     * Gets minimum_billable_weight_indicator
     *
     * @return string
     */
    public function getMinimumBillableWeightIndicator()
    {
        return $this->container['minimum_billable_weight_indicator'];
    }

    /**
     * Sets minimum_billable_weight_indicator
     *
     * @param string $minimum_billable_weight_indicator Presence/Absence Indicator. Any value inside is ignored. It indicates if packge is qualified for minimum billable weight.  Applicable for UPS Worldwide Economy DDU service
     *
     * @return $this
     */
    public function setMinimumBillableWeightIndicator($minimum_billable_weight_indicator)
    {
        $this->container['minimum_billable_weight_indicator'] = $minimum_billable_weight_indicator;

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
