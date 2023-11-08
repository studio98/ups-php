<?php
/**
 * GeocodeCandidateAddressKeyFormat
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
 * GeocodeCandidateAddressKeyFormat Class Doc Comment
 *
 * @category Class
 * @description Contains all of the basic information about candidate address.
 * @package  UPS\Locator
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeocodeCandidateAddressKeyFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeocodeCandidate_AddressKeyFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignee_name' => 'string',
        'address_line' => 'string',
        'political_division3' => 'string',
        'political_division2' => 'string',
        'political_division1' => 'string',
        'postcode_primary_low' => 'string',
        'postcode_extended_low' => 'string',
        'country_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignee_name' => null,
        'address_line' => null,
        'political_division3' => null,
        'political_division2' => null,
        'political_division1' => null,
        'postcode_primary_low' => null,
        'postcode_extended_low' => null,
        'country_code' => null
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
        'address_line' => 'AddressLine',
        'political_division3' => 'PoliticalDivision3',
        'political_division2' => 'PoliticalDivision2',
        'political_division1' => 'PoliticalDivision1',
        'postcode_primary_low' => 'PostcodePrimaryLow',
        'postcode_extended_low' => 'PostcodeExtendedLow',
        'country_code' => 'CountryCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignee_name' => 'setConsigneeName',
        'address_line' => 'setAddressLine',
        'political_division3' => 'setPoliticalDivision3',
        'political_division2' => 'setPoliticalDivision2',
        'political_division1' => 'setPoliticalDivision1',
        'postcode_primary_low' => 'setPostcodePrimaryLow',
        'postcode_extended_low' => 'setPostcodeExtendedLow',
        'country_code' => 'setCountryCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignee_name' => 'getConsigneeName',
        'address_line' => 'getAddressLine',
        'political_division3' => 'getPoliticalDivision3',
        'political_division2' => 'getPoliticalDivision2',
        'political_division1' => 'getPoliticalDivision1',
        'postcode_primary_low' => 'getPostcodePrimaryLow',
        'postcode_extended_low' => 'getPostcodeExtendedLow',
        'country_code' => 'getCountryCode'
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
        $this->container['address_line'] = isset($data['address_line']) ? $data['address_line'] : null;
        $this->container['political_division3'] = isset($data['political_division3']) ? $data['political_division3'] : null;
        $this->container['political_division2'] = isset($data['political_division2']) ? $data['political_division2'] : null;
        $this->container['political_division1'] = isset($data['political_division1']) ? $data['political_division1'] : null;
        $this->container['postcode_primary_low'] = isset($data['postcode_primary_low']) ? $data['postcode_primary_low'] : null;
        $this->container['postcode_extended_low'] = isset($data['postcode_extended_low']) ? $data['postcode_extended_low'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_line'] === null) {
            $invalidProperties[] = "'address_line' can't be null";
        }
        if ($this->container['political_division2'] === null) {
            $invalidProperties[] = "'political_division2' can't be null";
        }
        if ($this->container['political_division1'] === null) {
            $invalidProperties[] = "'political_division1' can't be null";
        }
        if ($this->container['postcode_primary_low'] === null) {
            $invalidProperties[] = "'postcode_primary_low' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
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
     * @param string $consignee_name Name. (Also includes the building name)Return if available.
     *
     * @return $this
     */
    public function setConsigneeName($consignee_name)
    {
        $this->container['consignee_name'] = $consignee_name;

        return $this;
    }

    /**
     * Gets address_line
     *
     * @return string
     */
    public function getAddressLine()
    {
        return $this->container['address_line'];
    }

    /**
     * Sets address_line
     *
     * @param string $address_line Address Line Information of the UPS location The address level or Intersection information. Only two address lines will be returned. The second line may contain such information as the building name, the suite, and room.
     *
     * @return $this
     */
    public function setAddressLine($address_line)
    {
        $this->container['address_line'] = $address_line;

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
     * @param string $political_division3 Subdivision within a City.� e.g., a Barrio.
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
     * @param string $political_division2 City.
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
     * @param string $political_division1 State/Province.
     *
     * @return $this
     */
    public function setPoliticalDivision1($political_division1)
    {
        $this->container['political_division1'] = $political_division1;

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
     * @param string $postcode_primary_low Postal Code.
     *
     * @return $this
     */
    public function setPostcodePrimaryLow($postcode_primary_low)
    {
        $this->container['postcode_primary_low'] = $postcode_primary_low;

        return $this;
    }

    /**
     * Gets postcode_extended_low
     *
     * @return string
     */
    public function getPostcodeExtendedLow()
    {
        return $this->container['postcode_extended_low'];
    }

    /**
     * Sets postcode_extended_low
     *
     * @param string $postcode_extended_low 4 Digit postal code extension. Valid for US only.
     *
     * @return $this
     */
    public function setPostcodeExtendedLow($postcode_extended_low)
    {
        $this->container['postcode_extended_low'] = $postcode_extended_low;

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
     * @param string $country_code A country or territory code. Valid values to be returned are: US-United States (meaning US 50).
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

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
