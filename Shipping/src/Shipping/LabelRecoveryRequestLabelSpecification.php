<?php
/**
 * LabelRecoveryRequestLabelSpecification
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
 * LabelRecoveryRequestLabelSpecification Class Doc Comment
 *
 * @category Class
 * @description Container that is used to define the properties required by the user to print and/ or display the UPS shipping label.  Required for the shipment without return service, or shipment with PRL return service.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelRecoveryRequestLabelSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelRecoveryRequest_LabelSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'http_user_agent' => 'string',
        'label_image_format' => '\UPS\Shipping\Shipping\LabelSpecificationLabelImageFormat',
        'label_stock_size' => '\UPS\Shipping\Shipping\LabelSpecificationLabelStockSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'http_user_agent' => null,
        'label_image_format' => null,
        'label_stock_size' => null
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
        'http_user_agent' => 'HTTPUserAgent',
        'label_image_format' => 'LabelImageFormat',
        'label_stock_size' => 'LabelStockSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'http_user_agent' => 'setHttpUserAgent',
        'label_image_format' => 'setLabelImageFormat',
        'label_stock_size' => 'setLabelStockSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'http_user_agent' => 'getHttpUserAgent',
        'label_image_format' => 'getLabelImageFormat',
        'label_stock_size' => 'getLabelStockSize'
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
        $this->container['http_user_agent'] = isset($data['http_user_agent']) ? $data['http_user_agent'] : null;
        $this->container['label_image_format'] = isset($data['label_image_format']) ? $data['label_image_format'] : null;
        $this->container['label_stock_size'] = isset($data['label_stock_size']) ? $data['label_stock_size'] : null;
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
     * Gets http_user_agent
     *
     * @return string
     */
    public function getHttpUserAgent()
    {
        return $this->container['http_user_agent'];
    }

    /**
     * Sets http_user_agent
     *
     * @param string $http_user_agent Browser HTTPUserAgent String. This is the preferred way of identifying GIF image type to be generated.  Required if <Root node>/ LabelSpecification/LabelImageFormat/Code = Gif. Default to Mozilla/4.5 if this field is missing or has invalid value.
     *
     * @return $this
     */
    public function setHttpUserAgent($http_user_agent)
    {
        $this->container['http_user_agent'] = $http_user_agent;

        return $this;
    }

    /**
     * Gets label_image_format
     *
     * @return \UPS\Shipping\Shipping\LabelSpecificationLabelImageFormat
     */
    public function getLabelImageFormat()
    {
        return $this->container['label_image_format'];
    }

    /**
     * Sets label_image_format
     *
     * @param \UPS\Shipping\Shipping\LabelSpecificationLabelImageFormat $label_image_format label_image_format
     *
     * @return $this
     */
    public function setLabelImageFormat($label_image_format)
    {
        $this->container['label_image_format'] = $label_image_format;

        return $this;
    }

    /**
     * Gets label_stock_size
     *
     * @return \UPS\Shipping\Shipping\LabelSpecificationLabelStockSize
     */
    public function getLabelStockSize()
    {
        return $this->container['label_stock_size'];
    }

    /**
     * Sets label_stock_size
     *
     * @param \UPS\Shipping\Shipping\LabelSpecificationLabelStockSize $label_stock_size label_stock_size
     *
     * @return $this
     */
    public function setLabelStockSize($label_stock_size)
    {
        $this->container['label_stock_size'] = $label_stock_size;

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
