<?php
/**
 * PickupCreationRequestPickupAddress
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
 * PickupCreationRequestPickupAddress Class Doc Comment
 *
 * @category Class
 * @description The container of pickup address.
 * @package  UPS\Pickup
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PickupCreationRequestPickupAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PickupCreationRequest_PickupAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_name' => 'string',
        'contact_name' => 'string',
        'address_line' => 'string[]',
        'room' => 'string',
        'floor' => 'string',
        'city' => 'string',
        'state_province' => 'string',
        'urbanization' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'residential_indicator' => 'string',
        'pickup_point' => 'string',
        'phone' => '\UPS\Pickup\Pickup\PickupAddressPhone'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_name' => null,
        'contact_name' => null,
        'address_line' => null,
        'room' => null,
        'floor' => null,
        'city' => null,
        'state_province' => null,
        'urbanization' => null,
        'postal_code' => null,
        'country_code' => null,
        'residential_indicator' => null,
        'pickup_point' => null,
        'phone' => null
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
        'company_name' => 'CompanyName',
        'contact_name' => 'ContactName',
        'address_line' => 'AddressLine',
        'room' => 'Room',
        'floor' => 'Floor',
        'city' => 'City',
        'state_province' => 'StateProvince',
        'urbanization' => 'Urbanization',
        'postal_code' => 'PostalCode',
        'country_code' => 'CountryCode',
        'residential_indicator' => 'ResidentialIndicator',
        'pickup_point' => 'PickupPoint',
        'phone' => 'Phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'contact_name' => 'setContactName',
        'address_line' => 'setAddressLine',
        'room' => 'setRoom',
        'floor' => 'setFloor',
        'city' => 'setCity',
        'state_province' => 'setStateProvince',
        'urbanization' => 'setUrbanization',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'residential_indicator' => 'setResidentialIndicator',
        'pickup_point' => 'setPickupPoint',
        'phone' => 'setPhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'contact_name' => 'getContactName',
        'address_line' => 'getAddressLine',
        'room' => 'getRoom',
        'floor' => 'getFloor',
        'city' => 'getCity',
        'state_province' => 'getStateProvince',
        'urbanization' => 'getUrbanization',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'residential_indicator' => 'getResidentialIndicator',
        'pickup_point' => 'getPickupPoint',
        'phone' => 'getPhone'
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
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['address_line'] = isset($data['address_line']) ? $data['address_line'] : null;
        $this->container['room'] = isset($data['room']) ? $data['room'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state_province'] = isset($data['state_province']) ? $data['state_province'] : null;
        $this->container['urbanization'] = isset($data['urbanization']) ? $data['urbanization'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['residential_indicator'] = isset($data['residential_indicator']) ? $data['residential_indicator'] : null;
        $this->container['pickup_point'] = isset($data['pickup_point']) ? $data['pickup_point'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ($this->container['address_line'] === null) {
            $invalidProperties[] = "'address_line' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['residential_indicator'] === null) {
            $invalidProperties[] = "'residential_indicator' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name Name of contact person
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets address_line
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->container['address_line'];
    }

    /**
     * Sets address_line
     *
     * @param string[] $address_line Detailed street address. For Jan. 2010 release, only one AddressLine is allowed
     *
     * @return $this
     */
    public function setAddressLine($address_line)
    {
        $this->container['address_line'] = $address_line;

        return $this;
    }

    /**
     * Gets room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->container['room'];
    }

    /**
     * Sets room
     *
     * @param string $room Room number
     *
     * @return $this
     */
    public function setRoom($room)
    {
        $this->container['room'] = $room;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param string $floor Floor number
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City or equivalent
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_province
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string $state_province State or province for postal countries; county for Ireland (IE) and district code for Hong Kong (HK)
     *
     * @return $this
     */
    public function setStateProvince($state_province)
    {
        $this->container['state_province'] = $state_province;

        return $this;
    }

    /**
     * Gets urbanization
     *
     * @return string
     */
    public function getUrbanization()
    {
        return $this->container['urbanization'];
    }

    /**
     * Sets urbanization
     *
     * @param string $urbanization Barrio for Mexico (MX) Urbanization for Puerto Rico (PR) Shire for United Kingdom (UK)
     *
     * @return $this
     */
    public function setUrbanization($urbanization)
    {
        $this->container['urbanization'] = $urbanization;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal code or equivalent for postal countries
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
     * @param string $country_code The pickup country or territory code as defined by ISO-3166.  Refer to Country or Territory Codes in the Appendix for valid values.
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets residential_indicator
     *
     * @return string
     */
    public function getResidentialIndicator()
    {
        return $this->container['residential_indicator'];
    }

    /**
     * Sets residential_indicator
     *
     * @param string $residential_indicator Indicates if the pickup address is commercial or residential.  Valid values: Y = Residential address N = Non-residential (Commercial) address (default)
     *
     * @return $this
     */
    public function setResidentialIndicator($residential_indicator)
    {
        $this->container['residential_indicator'] = $residential_indicator;

        return $this;
    }

    /**
     * Gets pickup_point
     *
     * @return string
     */
    public function getPickupPoint()
    {
        return $this->container['pickup_point'];
    }

    /**
     * Sets pickup_point
     *
     * @param string $pickup_point The specific spot to pickup at the address.
     *
     * @return $this
     */
    public function setPickupPoint($pickup_point)
    {
        $this->container['pickup_point'] = $pickup_point;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \UPS\Pickup\Pickup\PickupAddressPhone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \UPS\Pickup\Pickup\PickupAddressPhone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
