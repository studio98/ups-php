<?php
/**
 * ExceptionUpdatedAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Quantum View
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

namespace UPS\QuantumView\QuantumView;

use \ArrayAccess;
use \UPS\QuantumView\ObjectSerializer;

/**
 * ExceptionUpdatedAddress Class Doc Comment
 *
 * @category Class
 * @description Contains information about updated shipping address.
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExceptionUpdatedAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Exception_UpdatedAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignee_name' => 'string',
        'street_number_low' => 'string',
        'street_prefix' => 'string',
        'street_name' => 'string',
        'street_type' => 'string',
        'street_suffix' => 'string',
        'address_extended_information' => '\UPS\QuantumView\QuantumView\UpdatedAddressAddressExtendedInformation[]',
        'political_division3' => 'string',
        'political_division2' => 'string',
        'political_division1' => 'string',
        'country_code' => 'string',
        'postcode_primary_low' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignee_name' => null,
        'street_number_low' => null,
        'street_prefix' => null,
        'street_name' => null,
        'street_type' => null,
        'street_suffix' => null,
        'address_extended_information' => null,
        'political_division3' => null,
        'political_division2' => null,
        'political_division1' => null,
        'country_code' => null,
        'postcode_primary_low' => null
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
        'consignee_name' => 'ConsigneeName',
        'street_number_low' => 'StreetNumberLow',
        'street_prefix' => 'StreetPrefix',
        'street_name' => 'StreetName',
        'street_type' => 'StreetType',
        'street_suffix' => 'StreetSuffix',
        'address_extended_information' => 'AddressExtendedInformation',
        'political_division3' => 'PoliticalDivision3',
        'political_division2' => 'PoliticalDivision2',
        'political_division1' => 'PoliticalDivision1',
        'country_code' => 'CountryCode',
        'postcode_primary_low' => 'PostcodePrimaryLow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignee_name' => 'setConsigneeName',
        'street_number_low' => 'setStreetNumberLow',
        'street_prefix' => 'setStreetPrefix',
        'street_name' => 'setStreetName',
        'street_type' => 'setStreetType',
        'street_suffix' => 'setStreetSuffix',
        'address_extended_information' => 'setAddressExtendedInformation',
        'political_division3' => 'setPoliticalDivision3',
        'political_division2' => 'setPoliticalDivision2',
        'political_division1' => 'setPoliticalDivision1',
        'country_code' => 'setCountryCode',
        'postcode_primary_low' => 'setPostcodePrimaryLow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignee_name' => 'getConsigneeName',
        'street_number_low' => 'getStreetNumberLow',
        'street_prefix' => 'getStreetPrefix',
        'street_name' => 'getStreetName',
        'street_type' => 'getStreetType',
        'street_suffix' => 'getStreetSuffix',
        'address_extended_information' => 'getAddressExtendedInformation',
        'political_division3' => 'getPoliticalDivision3',
        'political_division2' => 'getPoliticalDivision2',
        'political_division1' => 'getPoliticalDivision1',
        'country_code' => 'getCountryCode',
        'postcode_primary_low' => 'getPostcodePrimaryLow'
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
        $this->container['consignee_name'] = isset($data['consignee_name']) ? $data['consignee_name'] : null;
        $this->container['street_number_low'] = isset($data['street_number_low']) ? $data['street_number_low'] : null;
        $this->container['street_prefix'] = isset($data['street_prefix']) ? $data['street_prefix'] : null;
        $this->container['street_name'] = isset($data['street_name']) ? $data['street_name'] : null;
        $this->container['street_type'] = isset($data['street_type']) ? $data['street_type'] : null;
        $this->container['street_suffix'] = isset($data['street_suffix']) ? $data['street_suffix'] : null;
        $this->container['address_extended_information'] = isset($data['address_extended_information']) ? $data['address_extended_information'] : null;
        $this->container['political_division3'] = isset($data['political_division3']) ? $data['political_division3'] : null;
        $this->container['political_division2'] = isset($data['political_division2']) ? $data['political_division2'] : null;
        $this->container['political_division1'] = isset($data['political_division1']) ? $data['political_division1'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postcode_primary_low'] = isset($data['postcode_primary_low']) ? $data['postcode_primary_low'] : null;
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
     * Gets consignee_name
     *
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->container['consignee_name'];
    }

    /**
     * Sets consignee_name
     *
     * @param string $consignee_name Consignee's name for package shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setConsigneeName($consignee_name)
    {
        $this->container['consignee_name'] = $consignee_name;

        return $this;
    }

    /**
     * Gets street_number_low
     *
     * @return string
     */
    public function getStreetNumberLow()
    {
        return $this->container['street_number_low'];
    }

    /**
     * Sets street_number_low
     *
     * @param string $street_number_low Street number of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setStreetNumberLow($street_number_low)
    {
        $this->container['street_number_low'] = $street_number_low;

        return $this;
    }

    /**
     * Gets street_prefix
     *
     * @return string
     */
    public function getStreetPrefix()
    {
        return $this->container['street_prefix'];
    }

    /**
     * Sets street_prefix
     *
     * @param string $street_prefix Street prefix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setStreetPrefix($street_prefix)
    {
        $this->container['street_prefix'] = $street_prefix;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string $street_name Street name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setStreetName($street_name)
    {
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_type
     *
     * @return string
     */
    public function getStreetType()
    {
        return $this->container['street_type'];
    }

    /**
     * Sets street_type
     *
     * @param string $street_type Street type of updated shipping address, e.g. ST. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setStreetType($street_type)
    {
        $this->container['street_type'] = $street_type;

        return $this;
    }

    /**
     * Gets street_suffix
     *
     * @return string
     */
    public function getStreetSuffix()
    {
        return $this->container['street_suffix'];
    }

    /**
     * Sets street_suffix
     *
     * @param string $street_suffix Street suffix of updated shipping address, e.g. N, SE. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setStreetSuffix($street_suffix)
    {
        $this->container['street_suffix'] = $street_suffix;

        return $this;
    }

    /**
     * Gets address_extended_information
     *
     * @return \UPS\QuantumView\QuantumView\UpdatedAddressAddressExtendedInformation[]
     */
    public function getAddressExtendedInformation()
    {
        return $this->container['address_extended_information'];
    }

    /**
     * Sets address_extended_information
     *
     * @param \UPS\QuantumView\QuantumView\UpdatedAddressAddressExtendedInformation[] $address_extended_information address_extended_information
     *
     * @return $this
     */
    public function setAddressExtendedInformation($address_extended_information)
    {
        $this->container['address_extended_information'] = $address_extended_information;

        return $this;
    }

    /**
     * Gets political_division3
     *
     * @return string
     */
    public function getPoliticalDivision3()
    {
        return $this->container['political_division3'];
    }

    /**
     * Sets political_division3
     *
     * @param string $political_division3 The neighborhood, town, barrio etc. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setPoliticalDivision3($political_division3)
    {
        $this->container['political_division3'] = $political_division3;

        return $this;
    }

    /**
     * Gets political_division2
     *
     * @return string
     */
    public function getPoliticalDivision2()
    {
        return $this->container['political_division2'];
    }

    /**
     * Sets political_division2
     *
     * @param string $political_division2 City name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setPoliticalDivision2($political_division2)
    {
        $this->container['political_division2'] = $political_division2;

        return $this;
    }

    /**
     * Gets political_division1
     *
     * @return string
     */
    public function getPoliticalDivision1()
    {
        return $this->container['political_division1'];
    }

    /**
     * Sets political_division1
     *
     * @param string $political_division1 Abbreviated state or province name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setPoliticalDivision1($political_division1)
    {
        $this->container['political_division1'] = $political_division1;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Abbreviated country or territory name of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postcode_primary_low
     *
     * @return string
     */
    public function getPostcodePrimaryLow()
    {
        return $this->container['postcode_primary_low'];
    }

    /**
     * Sets postcode_primary_low
     *
     * @param string $postcode_primary_low Postal Code of updated shipping address. It will be returned if there is any update due to exception.
     *
     * @return $this
     */
    public function setPostcodePrimaryLow($postcode_primary_low)
    {
        $this->container['postcode_primary_low'] = $postcode_primary_low;

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
