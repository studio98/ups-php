<?php
/**
 * InternationalFormsContacts
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
 * InternationalFormsContacts Class Doc Comment
 *
 * @category Class
 * @description Holds the contact information of various parties.  Applicable for EEI and NAFTA CO only. Required for NAFTA CO and EEI. Ultimate consignee contact information is required for EEI.  Producer contact information is required for NAFTA CO
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InternationalFormsContacts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InternationalForms_Contacts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'forward_agent' => '\UPS\Shipping\Shipping\ContactsForwardAgent',
        'ultimate_consignee' => '\UPS\Shipping\Shipping\ContactsUltimateConsignee',
        'intermediate_consignee' => '\UPS\Shipping\Shipping\ContactsIntermediateConsignee',
        'producer' => '\UPS\Shipping\Shipping\ContactsProducer',
        'sold_to' => '\UPS\Shipping\Shipping\ContactsSoldTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'forward_agent' => null,
        'ultimate_consignee' => null,
        'intermediate_consignee' => null,
        'producer' => null,
        'sold_to' => null
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
        'forward_agent' => 'ForwardAgent',
        'ultimate_consignee' => 'UltimateConsignee',
        'intermediate_consignee' => 'IntermediateConsignee',
        'producer' => 'Producer',
        'sold_to' => 'SoldTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forward_agent' => 'setForwardAgent',
        'ultimate_consignee' => 'setUltimateConsignee',
        'intermediate_consignee' => 'setIntermediateConsignee',
        'producer' => 'setProducer',
        'sold_to' => 'setSoldTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forward_agent' => 'getForwardAgent',
        'ultimate_consignee' => 'getUltimateConsignee',
        'intermediate_consignee' => 'getIntermediateConsignee',
        'producer' => 'getProducer',
        'sold_to' => 'getSoldTo'
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
        $this->container['forward_agent'] = isset($data['forward_agent']) ? $data['forward_agent'] : null;
        $this->container['ultimate_consignee'] = isset($data['ultimate_consignee']) ? $data['ultimate_consignee'] : null;
        $this->container['intermediate_consignee'] = isset($data['intermediate_consignee']) ? $data['intermediate_consignee'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
        $this->container['sold_to'] = isset($data['sold_to']) ? $data['sold_to'] : null;
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
     * Gets forward_agent
     *
     * @return \UPS\Shipping\Shipping\ContactsForwardAgent
     */
    public function getForwardAgent()
    {
        return $this->container['forward_agent'];
    }

    /**
     * Sets forward_agent
     *
     * @param \UPS\Shipping\Shipping\ContactsForwardAgent $forward_agent forward_agent
     *
     * @return $this
     */
    public function setForwardAgent($forward_agent)
    {
        $this->container['forward_agent'] = $forward_agent;

        return $this;
    }

    /**
     * Gets ultimate_consignee
     *
     * @return \UPS\Shipping\Shipping\ContactsUltimateConsignee
     */
    public function getUltimateConsignee()
    {
        return $this->container['ultimate_consignee'];
    }

    /**
     * Sets ultimate_consignee
     *
     * @param \UPS\Shipping\Shipping\ContactsUltimateConsignee $ultimate_consignee ultimate_consignee
     *
     * @return $this
     */
    public function setUltimateConsignee($ultimate_consignee)
    {
        $this->container['ultimate_consignee'] = $ultimate_consignee;

        return $this;
    }

    /**
     * Gets intermediate_consignee
     *
     * @return \UPS\Shipping\Shipping\ContactsIntermediateConsignee
     */
    public function getIntermediateConsignee()
    {
        return $this->container['intermediate_consignee'];
    }

    /**
     * Sets intermediate_consignee
     *
     * @param \UPS\Shipping\Shipping\ContactsIntermediateConsignee $intermediate_consignee intermediate_consignee
     *
     * @return $this
     */
    public function setIntermediateConsignee($intermediate_consignee)
    {
        $this->container['intermediate_consignee'] = $intermediate_consignee;

        return $this;
    }

    /**
     * Gets producer
     *
     * @return \UPS\Shipping\Shipping\ContactsProducer
     */
    public function getProducer()
    {
        return $this->container['producer'];
    }

    /**
     * Sets producer
     *
     * @param \UPS\Shipping\Shipping\ContactsProducer $producer producer
     *
     * @return $this
     */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;

        return $this;
    }

    /**
     * Gets sold_to
     *
     * @return \UPS\Shipping\Shipping\ContactsSoldTo
     */
    public function getSoldTo()
    {
        return $this->container['sold_to'];
    }

    /**
     * Sets sold_to
     *
     * @param \UPS\Shipping\Shipping\ContactsSoldTo $sold_to sold_to
     *
     * @return $this
     */
    public function setSoldTo($sold_to)
    {
        $this->container['sold_to'] = $sold_to;

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
