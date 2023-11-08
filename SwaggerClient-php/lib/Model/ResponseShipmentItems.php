<?php
/**
 * ResponseShipmentItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Landed Cost
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ResponseShipmentItems Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseShipmentItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Response_ShipmentItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commodity_id' => 'string',
        'hs_code' => 'string',
        'commodity_duty' => 'float',
        'total_commodity_tax_and_fee' => 'float',
        'commodity_vat' => 'float',
        'total_commodity_duty_and_tax' => 'float',
        'commodity_currency_code' => 'string',
        'is_calculable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commodity_id' => null,
        'hs_code' => null,
        'commodity_duty' => null,
        'total_commodity_tax_and_fee' => null,
        'commodity_vat' => null,
        'total_commodity_duty_and_tax' => null,
        'commodity_currency_code' => null,
        'is_calculable' => null
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
        'commodity_id' => 'commodityID',
        'hs_code' => 'hsCode',
        'commodity_duty' => 'commodityDuty',
        'total_commodity_tax_and_fee' => 'totalCommodityTaxAndFee',
        'commodity_vat' => 'commodityVAT',
        'total_commodity_duty_and_tax' => 'totalCommodityDutyAndTax',
        'commodity_currency_code' => 'commodityCurrencyCode',
        'is_calculable' => 'isCalculable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commodity_id' => 'setCommodityId',
        'hs_code' => 'setHsCode',
        'commodity_duty' => 'setCommodityDuty',
        'total_commodity_tax_and_fee' => 'setTotalCommodityTaxAndFee',
        'commodity_vat' => 'setCommodityVat',
        'total_commodity_duty_and_tax' => 'setTotalCommodityDutyAndTax',
        'commodity_currency_code' => 'setCommodityCurrencyCode',
        'is_calculable' => 'setIsCalculable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commodity_id' => 'getCommodityId',
        'hs_code' => 'getHsCode',
        'commodity_duty' => 'getCommodityDuty',
        'total_commodity_tax_and_fee' => 'getTotalCommodityTaxAndFee',
        'commodity_vat' => 'getCommodityVat',
        'total_commodity_duty_and_tax' => 'getTotalCommodityDutyAndTax',
        'commodity_currency_code' => 'getCommodityCurrencyCode',
        'is_calculable' => 'getIsCalculable'
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
        $this->container['commodity_id'] = isset($data['commodity_id']) ? $data['commodity_id'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['commodity_duty'] = isset($data['commodity_duty']) ? $data['commodity_duty'] : null;
        $this->container['total_commodity_tax_and_fee'] = isset($data['total_commodity_tax_and_fee']) ? $data['total_commodity_tax_and_fee'] : null;
        $this->container['commodity_vat'] = isset($data['commodity_vat']) ? $data['commodity_vat'] : null;
        $this->container['total_commodity_duty_and_tax'] = isset($data['total_commodity_duty_and_tax']) ? $data['total_commodity_duty_and_tax'] : null;
        $this->container['commodity_currency_code'] = isset($data['commodity_currency_code']) ? $data['commodity_currency_code'] : null;
        $this->container['is_calculable'] = isset($data['is_calculable']) ? $data['is_calculable'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commodity_id'] === null) {
            $invalidProperties[] = "'commodity_id' can't be null";
        }
        if ($this->container['hs_code'] === null) {
            $invalidProperties[] = "'hs_code' can't be null";
        }
        if ($this->container['commodity_duty'] === null) {
            $invalidProperties[] = "'commodity_duty' can't be null";
        }
        if ($this->container['commodity_vat'] === null) {
            $invalidProperties[] = "'commodity_vat' can't be null";
        }
        if ($this->container['total_commodity_duty_and_tax'] === null) {
            $invalidProperties[] = "'total_commodity_duty_and_tax' can't be null";
        }
        if ($this->container['commodity_currency_code'] === null) {
            $invalidProperties[] = "'commodity_currency_code' can't be null";
        }
        if ($this->container['is_calculable'] === null) {
            $invalidProperties[] = "'is_calculable' can't be null";
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
     * Gets commodity_id
     *
     * @return string
     */
    public function getCommodityId()
    {
        return $this->container['commodity_id'];
    }

    /**
     * Sets commodity_id
     *
     * @param string $commodity_id Specifies Commodity Id
     *
     * @return $this
     */
    public function setCommodityId($commodity_id)
    {
        $this->container['commodity_id'] = $commodity_id;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code Specifies the HTS code of the commodity
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets commodity_duty
     *
     * @return float
     */
    public function getCommodityDuty()
    {
        return $this->container['commodity_duty'];
    }

    /**
     * Sets commodity_duty
     *
     * @param float $commodity_duty Duty amount of this commodity
     *
     * @return $this
     */
    public function setCommodityDuty($commodity_duty)
    {
        $this->container['commodity_duty'] = $commodity_duty;

        return $this;
    }

    /**
     * Gets total_commodity_tax_and_fee
     *
     * @return float
     */
    public function getTotalCommodityTaxAndFee()
    {
        return $this->container['total_commodity_tax_and_fee'];
    }

    /**
     * Sets total_commodity_tax_and_fee
     *
     * @param float $total_commodity_tax_and_fee Total tax and other fees of this commodity (excluding Duty and VAT)
     *
     * @return $this
     */
    public function setTotalCommodityTaxAndFee($total_commodity_tax_and_fee)
    {
        $this->container['total_commodity_tax_and_fee'] = $total_commodity_tax_and_fee;

        return $this;
    }

    /**
     * Gets commodity_vat
     *
     * @return float
     */
    public function getCommodityVat()
    {
        return $this->container['commodity_vat'];
    }

    /**
     * Sets commodity_vat
     *
     * @param float $commodity_vat VAT amount of this commodity
     *
     * @return $this
     */
    public function setCommodityVat($commodity_vat)
    {
        $this->container['commodity_vat'] = $commodity_vat;

        return $this;
    }

    /**
     * Gets total_commodity_duty_and_tax
     *
     * @return float
     */
    public function getTotalCommodityDutyAndTax()
    {
        return $this->container['total_commodity_duty_and_tax'];
    }

    /**
     * Sets total_commodity_duty_and_tax
     *
     * @param float $total_commodity_duty_and_tax Total combined duty, VAT, tax and other fees of this commodity
     *
     * @return $this
     */
    public function setTotalCommodityDutyAndTax($total_commodity_duty_and_tax)
    {
        $this->container['total_commodity_duty_and_tax'] = $total_commodity_duty_and_tax;

        return $this;
    }

    /**
     * Gets commodity_currency_code
     *
     * @return string
     */
    public function getCommodityCurrencyCode()
    {
        return $this->container['commodity_currency_code'];
    }

    /**
     * Sets commodity_currency_code
     *
     * @param string $commodity_currency_code Specifies the Currency Code used for commodity price
     *
     * @return $this
     */
    public function setCommodityCurrencyCode($commodity_currency_code)
    {
        $this->container['commodity_currency_code'] = $commodity_currency_code;

        return $this;
    }

    /**
     * Gets is_calculable
     *
     * @return bool
     */
    public function getIsCalculable()
    {
        return $this->container['is_calculable'];
    }

    /**
     * Sets is_calculable
     *
     * @param bool $is_calculable True/False. Indicator for successful Landed Cost calculation for this commodity
     *
     * @return $this
     */
    public function setIsCalculable($is_calculable)
    {
        $this->container['is_calculable'] = $is_calculable;

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
