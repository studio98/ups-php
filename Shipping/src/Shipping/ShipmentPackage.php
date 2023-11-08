<?php
/**
 * ShipmentPackage
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ship
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

namespace UPS\Shipping\Shipping;

use \ArrayAccess;
use \UPS\Shipping\ObjectSerializer;

/**
 * ShipmentPackage Class Doc Comment
 *
 * @category Class
 * @description Package Information container.  For Return Shipments up to and including 20 packages are allowed. US/PR origin return movements are limited to only one package. For Mail Innovations and Simple Rate shipments only one package is allowed.
 * @package  UPS\Shipping
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
        'description' => 'string',
        'pallet_description' => 'string',
        'num_of_pieces' => 'string',
        'unit_price' => 'string',
        'packaging' => '\UPS\Shipping\Shipping\PackagePackaging',
        'dimensions' => '\UPS\Shipping\Shipping\PackageDimensions',
        'dim_weight' => '\UPS\Shipping\Shipping\PackageDimWeight',
        'package_weight' => '\UPS\Shipping\Shipping\PackagePackageWeight',
        'large_package_indicator' => 'string',
        'reference_number' => '\UPS\Shipping\Shipping\PackageReferenceNumber[]',
        'additional_handling_indicator' => 'string',
        'simple_rate' => '\UPS\Shipping\Shipping\PackageSimpleRate',
        'ups_premier' => '\UPS\Shipping\Shipping\PackageUPSPremier',
        'package_service_options' => '\UPS\Shipping\Shipping\PackagePackageServiceOptions',
        'commodity' => '\UPS\Shipping\Shipping\PackageCommodity',
        'haz_mat_package_information' => '\UPS\Shipping\Shipping\PackageHazMatPackageInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'pallet_description' => null,
        'num_of_pieces' => null,
        'unit_price' => null,
        'packaging' => null,
        'dimensions' => null,
        'dim_weight' => null,
        'package_weight' => null,
        'large_package_indicator' => null,
        'reference_number' => null,
        'additional_handling_indicator' => null,
        'simple_rate' => null,
        'ups_premier' => null,
        'package_service_options' => null,
        'commodity' => null,
        'haz_mat_package_information' => null
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
        'description' => 'Description',
        'pallet_description' => 'PalletDescription',
        'num_of_pieces' => 'NumOfPieces',
        'unit_price' => 'UnitPrice',
        'packaging' => 'Packaging',
        'dimensions' => 'Dimensions',
        'dim_weight' => 'DimWeight',
        'package_weight' => 'PackageWeight',
        'large_package_indicator' => 'LargePackageIndicator',
        'reference_number' => 'ReferenceNumber',
        'additional_handling_indicator' => 'AdditionalHandlingIndicator',
        'simple_rate' => 'SimpleRate',
        'ups_premier' => 'UPSPremier',
        'package_service_options' => 'PackageServiceOptions',
        'commodity' => 'Commodity',
        'haz_mat_package_information' => 'HazMatPackageInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'pallet_description' => 'setPalletDescription',
        'num_of_pieces' => 'setNumOfPieces',
        'unit_price' => 'setUnitPrice',
        'packaging' => 'setPackaging',
        'dimensions' => 'setDimensions',
        'dim_weight' => 'setDimWeight',
        'package_weight' => 'setPackageWeight',
        'large_package_indicator' => 'setLargePackageIndicator',
        'reference_number' => 'setReferenceNumber',
        'additional_handling_indicator' => 'setAdditionalHandlingIndicator',
        'simple_rate' => 'setSimpleRate',
        'ups_premier' => 'setUpsPremier',
        'package_service_options' => 'setPackageServiceOptions',
        'commodity' => 'setCommodity',
        'haz_mat_package_information' => 'setHazMatPackageInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'pallet_description' => 'getPalletDescription',
        'num_of_pieces' => 'getNumOfPieces',
        'unit_price' => 'getUnitPrice',
        'packaging' => 'getPackaging',
        'dimensions' => 'getDimensions',
        'dim_weight' => 'getDimWeight',
        'package_weight' => 'getPackageWeight',
        'large_package_indicator' => 'getLargePackageIndicator',
        'reference_number' => 'getReferenceNumber',
        'additional_handling_indicator' => 'getAdditionalHandlingIndicator',
        'simple_rate' => 'getSimpleRate',
        'ups_premier' => 'getUpsPremier',
        'package_service_options' => 'getPackageServiceOptions',
        'commodity' => 'getCommodity',
        'haz_mat_package_information' => 'getHazMatPackageInformation'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['pallet_description'] = isset($data['pallet_description']) ? $data['pallet_description'] : null;
        $this->container['num_of_pieces'] = isset($data['num_of_pieces']) ? $data['num_of_pieces'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['packaging'] = isset($data['packaging']) ? $data['packaging'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['dim_weight'] = isset($data['dim_weight']) ? $data['dim_weight'] : null;
        $this->container['package_weight'] = isset($data['package_weight']) ? $data['package_weight'] : null;
        $this->container['large_package_indicator'] = isset($data['large_package_indicator']) ? $data['large_package_indicator'] : null;
        $this->container['reference_number'] = isset($data['reference_number']) ? $data['reference_number'] : null;
        $this->container['additional_handling_indicator'] = isset($data['additional_handling_indicator']) ? $data['additional_handling_indicator'] : null;
        $this->container['simple_rate'] = isset($data['simple_rate']) ? $data['simple_rate'] : null;
        $this->container['ups_premier'] = isset($data['ups_premier']) ? $data['ups_premier'] : null;
        $this->container['package_service_options'] = isset($data['package_service_options']) ? $data['package_service_options'] : null;
        $this->container['commodity'] = isset($data['commodity']) ? $data['commodity'] : null;
        $this->container['haz_mat_package_information'] = isset($data['haz_mat_package_information']) ? $data['haz_mat_package_information'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packaging'] === null) {
            $invalidProperties[] = "'packaging' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Merchandise description of package.  Required for shipment with return service.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets pallet_description
     *
     * @return string
     */
    public function getPalletDescription()
    {
        return $this->container['pallet_description'];
    }

    /**
     * Sets pallet_description
     *
     * @param string $pallet_description Description of articles & special marks. Applicable for Air Freight only
     *
     * @return $this
     */
    public function setPalletDescription($pallet_description)
    {
        $this->container['pallet_description'] = $pallet_description;

        return $this;
    }

    /**
     * Gets num_of_pieces
     *
     * @return string
     */
    public function getNumOfPieces()
    {
        return $this->container['num_of_pieces'];
    }

    /**
     * Sets num_of_pieces
     *
     * @param string $num_of_pieces Number of Pieces. Applicable for Air Freight only
     *
     * @return $this
     */
    public function setNumOfPieces($num_of_pieces)
    {
        $this->container['num_of_pieces'] = $num_of_pieces;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string $unit_price Unit price of the commodity. Applicable for Air Freight only  Limit to 2 digit after the decimal. The maximum length of the field is 12 including \".\" and can hold up to 2 decimal place. (e.g. 999999999.99)
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets packaging
     *
     * @return \UPS\Shipping\Shipping\PackagePackaging
     */
    public function getPackaging()
    {
        return $this->container['packaging'];
    }

    /**
     * Sets packaging
     *
     * @param \UPS\Shipping\Shipping\PackagePackaging $packaging packaging
     *
     * @return $this
     */
    public function setPackaging($packaging)
    {
        $this->container['packaging'] = $packaging;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \UPS\Shipping\Shipping\PackageDimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \UPS\Shipping\Shipping\PackageDimensions $dimensions dimensions
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
     * @return \UPS\Shipping\Shipping\PackageDimWeight
     */
    public function getDimWeight()
    {
        return $this->container['dim_weight'];
    }

    /**
     * Sets dim_weight
     *
     * @param \UPS\Shipping\Shipping\PackageDimWeight $dim_weight dim_weight
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
     * @return \UPS\Shipping\Shipping\PackagePackageWeight
     */
    public function getPackageWeight()
    {
        return $this->container['package_weight'];
    }

    /**
     * Sets package_weight
     *
     * @param \UPS\Shipping\Shipping\PackagePackageWeight $package_weight package_weight
     *
     * @return $this
     */
    public function setPackageWeight($package_weight)
    {
        $this->container['package_weight'] = $package_weight;

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
     * @param string $large_package_indicator Presence of the indicator mentions that the package is Large Package.  This is an empty tag, any value inside is ignored.
     *
     * @return $this
     */
    public function setLargePackageIndicator($large_package_indicator)
    {
        $this->container['large_package_indicator'] = $large_package_indicator;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return \UPS\Shipping\Shipping\PackageReferenceNumber[]
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param \UPS\Shipping\Shipping\PackageReferenceNumber[] $reference_number reference_number
     *
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

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
     * @param string $additional_handling_indicator Additional Handling Required. The presence indicates additional handling is required, the absence indicates no additional handling is required. Additional Handling indicator indicates it's a non-corrugated package.
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
     * @return \UPS\Shipping\Shipping\PackageSimpleRate
     */
    public function getSimpleRate()
    {
        return $this->container['simple_rate'];
    }

    /**
     * Sets simple_rate
     *
     * @param \UPS\Shipping\Shipping\PackageSimpleRate $simple_rate simple_rate
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
     * @return \UPS\Shipping\Shipping\PackageUPSPremier
     */
    public function getUpsPremier()
    {
        return $this->container['ups_premier'];
    }

    /**
     * Sets ups_premier
     *
     * @param \UPS\Shipping\Shipping\PackageUPSPremier $ups_premier ups_premier
     *
     * @return $this
     */
    public function setUpsPremier($ups_premier)
    {
        $this->container['ups_premier'] = $ups_premier;

        return $this;
    }

    /**
     * Gets package_service_options
     *
     * @return \UPS\Shipping\Shipping\PackagePackageServiceOptions
     */
    public function getPackageServiceOptions()
    {
        return $this->container['package_service_options'];
    }

    /**
     * Sets package_service_options
     *
     * @param \UPS\Shipping\Shipping\PackagePackageServiceOptions $package_service_options package_service_options
     *
     * @return $this
     */
    public function setPackageServiceOptions($package_service_options)
    {
        $this->container['package_service_options'] = $package_service_options;

        return $this;
    }

    /**
     * Gets commodity
     *
     * @return \UPS\Shipping\Shipping\PackageCommodity
     */
    public function getCommodity()
    {
        return $this->container['commodity'];
    }

    /**
     * Sets commodity
     *
     * @param \UPS\Shipping\Shipping\PackageCommodity $commodity commodity
     *
     * @return $this
     */
    public function setCommodity($commodity)
    {
        $this->container['commodity'] = $commodity;

        return $this;
    }

    /**
     * Gets haz_mat_package_information
     *
     * @return \UPS\Shipping\Shipping\PackageHazMatPackageInformation
     */
    public function getHazMatPackageInformation()
    {
        return $this->container['haz_mat_package_information'];
    }

    /**
     * Sets haz_mat_package_information
     *
     * @param \UPS\Shipping\Shipping\PackageHazMatPackageInformation $haz_mat_package_information haz_mat_package_information
     *
     * @return $this
     */
    public function setHazMatPackageInformation($haz_mat_package_information)
    {
        $this->container['haz_mat_package_information'] = $haz_mat_package_information;

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
