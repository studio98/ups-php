<?php
/**
 * AcceptanceAuditPreCheckResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dangerous Goods Utility
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

namespace UPS\DangerousGoods\DangerousGoods;

use \ArrayAccess;
use \UPS\DangerousGoods\ObjectSerializer;

/**
 * AcceptanceAuditPreCheckResponse Class Doc Comment
 *
 * @category Class
 * @description Dangerous Goods Utility Response container for Acceptance Audit Pre-check.
 * @package  UPS\DangerousGoods
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcceptanceAuditPreCheckResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcceptanceAuditPreCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'response' => '\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseResponse',
        'shipper_number' => 'string',
        'service' => '\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseService',
        'regulation_set' => 'string',
        'package_results' => '\UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponsePackageResults[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'response' => null,
        'shipper_number' => null,
        'service' => null,
        'regulation_set' => null,
        'package_results' => null
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
        'response' => 'Response',
        'shipper_number' => 'ShipperNumber',
        'service' => 'Service',
        'regulation_set' => 'RegulationSet',
        'package_results' => 'PackageResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response' => 'setResponse',
        'shipper_number' => 'setShipperNumber',
        'service' => 'setService',
        'regulation_set' => 'setRegulationSet',
        'package_results' => 'setPackageResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response' => 'getResponse',
        'shipper_number' => 'getShipperNumber',
        'service' => 'getService',
        'regulation_set' => 'getRegulationSet',
        'package_results' => 'getPackageResults'
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
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['regulation_set'] = isset($data['regulation_set']) ? $data['regulation_set'] : null;
        $this->container['package_results'] = isset($data['package_results']) ? $data['package_results'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['response'] === null) {
            $invalidProperties[] = "'response' can't be null";
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
     * Gets response
     *
     * @return \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseResponse
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseResponse $response response
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets shipper_number
     *
     * @return string
     */
    public function getShipperNumber()
    {
        return $this->container['shipper_number'];
    }

    /**
     * Sets shipper_number
     *
     * @param string $shipper_number Shipper's six digit account number. This is same account number present in the request that is played back in response.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponseService $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets regulation_set
     *
     * @return string
     */
    public function getRegulationSet()
    {
        return $this->container['regulation_set'];
    }

    /**
     * Sets regulation_set
     *
     * @param string $regulation_set The Regulatory set associated with every regulated shipment. This is same Regulation set present in the request that is played back in response.  Valid values: ADR 49CFR IATA TDG
     *
     * @return $this
     */
    public function setRegulationSet($regulation_set)
    {
        $this->container['regulation_set'] = $regulation_set;

        return $this;
    }

    /**
     * Gets package_results
     *
     * @return \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponsePackageResults[]
     */
    public function getPackageResults()
    {
        return $this->container['package_results'];
    }

    /**
     * Sets package_results
     *
     * @param \UPS\DangerousGoods\DangerousGoods\AcceptanceAuditPreCheckResponsePackageResults[] $package_results package_results
     *
     * @return $this
     */
    public function setPackageResults($package_results)
    {
        $this->container['package_results'] = $package_results;

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
