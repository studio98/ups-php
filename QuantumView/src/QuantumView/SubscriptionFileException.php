<?php
/**
 * SubscriptionFileException
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
 * SubscriptionFileException Class Doc Comment
 *
 * @category Class
 * @description Shipment exception data.
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionFileException implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionFile_Exception';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'package_reference_number' => '\UPS\QuantumView\QuantumView\ExceptionPackageReferenceNumber[]',
        'shipment_reference_number' => '\UPS\QuantumView\QuantumView\ExceptionShipmentReferenceNumber[]',
        'shipper_number' => 'string',
        'tracking_number' => 'string',
        'date' => 'string',
        'time' => 'string',
        'updated_address' => '\UPS\QuantumView\QuantumView\ExceptionUpdatedAddress',
        'status_code' => 'string',
        'status_description' => 'string',
        'reason_code' => 'string',
        'reason_description' => 'string',
        'resolution' => '\UPS\QuantumView\QuantumView\ExceptionResolution',
        'rescheduled_delivery_date' => 'string',
        'rescheduled_delivery_time' => 'string',
        'activity_location' => '\UPS\QuantumView\QuantumView\ExceptionActivityLocation',
        'bill_to_account' => '\UPS\QuantumView\QuantumView\ExceptionBillToAccount',
        'access_point_location_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'package_reference_number' => null,
        'shipment_reference_number' => null,
        'shipper_number' => null,
        'tracking_number' => null,
        'date' => null,
        'time' => null,
        'updated_address' => null,
        'status_code' => null,
        'status_description' => null,
        'reason_code' => null,
        'reason_description' => null,
        'resolution' => null,
        'rescheduled_delivery_date' => null,
        'rescheduled_delivery_time' => null,
        'activity_location' => null,
        'bill_to_account' => null,
        'access_point_location_id' => null
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
        'package_reference_number' => 'PackageReferenceNumber',
        'shipment_reference_number' => 'ShipmentReferenceNumber',
        'shipper_number' => 'ShipperNumber',
        'tracking_number' => 'TrackingNumber',
        'date' => 'Date',
        'time' => 'Time',
        'updated_address' => 'UpdatedAddress',
        'status_code' => 'StatusCode',
        'status_description' => 'StatusDescription',
        'reason_code' => 'ReasonCode',
        'reason_description' => 'ReasonDescription',
        'resolution' => 'Resolution',
        'rescheduled_delivery_date' => 'RescheduledDeliveryDate',
        'rescheduled_delivery_time' => 'RescheduledDeliveryTime',
        'activity_location' => 'ActivityLocation',
        'bill_to_account' => 'BillToAccount',
        'access_point_location_id' => 'AccessPointLocationID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'package_reference_number' => 'setPackageReferenceNumber',
        'shipment_reference_number' => 'setShipmentReferenceNumber',
        'shipper_number' => 'setShipperNumber',
        'tracking_number' => 'setTrackingNumber',
        'date' => 'setDate',
        'time' => 'setTime',
        'updated_address' => 'setUpdatedAddress',
        'status_code' => 'setStatusCode',
        'status_description' => 'setStatusDescription',
        'reason_code' => 'setReasonCode',
        'reason_description' => 'setReasonDescription',
        'resolution' => 'setResolution',
        'rescheduled_delivery_date' => 'setRescheduledDeliveryDate',
        'rescheduled_delivery_time' => 'setRescheduledDeliveryTime',
        'activity_location' => 'setActivityLocation',
        'bill_to_account' => 'setBillToAccount',
        'access_point_location_id' => 'setAccessPointLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'package_reference_number' => 'getPackageReferenceNumber',
        'shipment_reference_number' => 'getShipmentReferenceNumber',
        'shipper_number' => 'getShipperNumber',
        'tracking_number' => 'getTrackingNumber',
        'date' => 'getDate',
        'time' => 'getTime',
        'updated_address' => 'getUpdatedAddress',
        'status_code' => 'getStatusCode',
        'status_description' => 'getStatusDescription',
        'reason_code' => 'getReasonCode',
        'reason_description' => 'getReasonDescription',
        'resolution' => 'getResolution',
        'rescheduled_delivery_date' => 'getRescheduledDeliveryDate',
        'rescheduled_delivery_time' => 'getRescheduledDeliveryTime',
        'activity_location' => 'getActivityLocation',
        'bill_to_account' => 'getBillToAccount',
        'access_point_location_id' => 'getAccessPointLocationId'
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
        $this->container['package_reference_number'] = isset($data['package_reference_number']) ? $data['package_reference_number'] : null;
        $this->container['shipment_reference_number'] = isset($data['shipment_reference_number']) ? $data['shipment_reference_number'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['updated_address'] = isset($data['updated_address']) ? $data['updated_address'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['status_description'] = isset($data['status_description']) ? $data['status_description'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['reason_description'] = isset($data['reason_description']) ? $data['reason_description'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['rescheduled_delivery_date'] = isset($data['rescheduled_delivery_date']) ? $data['rescheduled_delivery_date'] : null;
        $this->container['rescheduled_delivery_time'] = isset($data['rescheduled_delivery_time']) ? $data['rescheduled_delivery_time'] : null;
        $this->container['activity_location'] = isset($data['activity_location']) ? $data['activity_location'] : null;
        $this->container['bill_to_account'] = isset($data['bill_to_account']) ? $data['bill_to_account'] : null;
        $this->container['access_point_location_id'] = isset($data['access_point_location_id']) ? $data['access_point_location_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipper_number'] === null) {
            $invalidProperties[] = "'shipper_number' can't be null";
        }
        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
     * Gets package_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionPackageReferenceNumber[]
     */
    public function getPackageReferenceNumber()
    {
        return $this->container['package_reference_number'];
    }

    /**
     * Sets package_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionPackageReferenceNumber[] $package_reference_number package_reference_number
     *
     * @return $this
     */
    public function setPackageReferenceNumber($package_reference_number)
    {
        $this->container['package_reference_number'] = $package_reference_number;

        return $this;
    }

    /**
     * Gets shipment_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionShipmentReferenceNumber[]
     */
    public function getShipmentReferenceNumber()
    {
        return $this->container['shipment_reference_number'];
    }

    /**
     * Sets shipment_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionShipmentReferenceNumber[] $shipment_reference_number shipment_reference_number
     *
     * @return $this
     */
    public function setShipmentReferenceNumber($shipment_reference_number)
    {
        $this->container['shipment_reference_number'] = $shipment_reference_number;

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
     * @param string $shipper_number Shipper's six digit alphanumeric account number.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number Package's 1Z tracking number.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Date that the package is delivered. Date format is YYYYMMDD.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param string $time Time that the package is delivered. Time format is HHMMSS
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets updated_address
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionUpdatedAddress
     */
    public function getUpdatedAddress()
    {
        return $this->container['updated_address'];
    }

    /**
     * Sets updated_address
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionUpdatedAddress $updated_address updated_address
     *
     * @return $this
     */
    public function setUpdatedAddress($updated_address)
    {
        $this->container['updated_address'] = $updated_address;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param string $status_code Code for status of updating shipping address issue.
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string $status_description Description for status of updating shipping address issue.
     *
     * @return $this
     */
    public function setStatusDescription($status_description)
    {
        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets reason_code
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string $reason_code Code for reason of updating shipping address issue.
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets reason_description
     *
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->container['reason_description'];
    }

    /**
     * Sets reason_description
     *
     * @param string $reason_description Description for reason of updating shipping address issue.
     *
     * @return $this
     */
    public function setReasonDescription($reason_description)
    {
        $this->container['reason_description'] = $reason_description;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionResolution
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionResolution $resolution resolution
     *
     * @return $this
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets rescheduled_delivery_date
     *
     * @return string
     */
    public function getRescheduledDeliveryDate()
    {
        return $this->container['rescheduled_delivery_date'];
    }

    /**
     * Sets rescheduled_delivery_date
     *
     * @param string $rescheduled_delivery_date Rescheduled delivery date for updated shipping address. Date format is YYYYMMDD.
     *
     * @return $this
     */
    public function setRescheduledDeliveryDate($rescheduled_delivery_date)
    {
        $this->container['rescheduled_delivery_date'] = $rescheduled_delivery_date;

        return $this;
    }

    /**
     * Gets rescheduled_delivery_time
     *
     * @return string
     */
    public function getRescheduledDeliveryTime()
    {
        return $this->container['rescheduled_delivery_time'];
    }

    /**
     * Sets rescheduled_delivery_time
     *
     * @param string $rescheduled_delivery_time Rescheduled delivery time for updated shipping address. Time format is HHMMSS
     *
     * @return $this
     */
    public function setRescheduledDeliveryTime($rescheduled_delivery_time)
    {
        $this->container['rescheduled_delivery_time'] = $rescheduled_delivery_time;

        return $this;
    }

    /**
     * Gets activity_location
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionActivityLocation
     */
    public function getActivityLocation()
    {
        return $this->container['activity_location'];
    }

    /**
     * Sets activity_location
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionActivityLocation $activity_location activity_location
     *
     * @return $this
     */
    public function setActivityLocation($activity_location)
    {
        $this->container['activity_location'] = $activity_location;

        return $this;
    }

    /**
     * Gets bill_to_account
     *
     * @return \UPS\QuantumView\QuantumView\ExceptionBillToAccount
     */
    public function getBillToAccount()
    {
        return $this->container['bill_to_account'];
    }

    /**
     * Sets bill_to_account
     *
     * @param \UPS\QuantumView\QuantumView\ExceptionBillToAccount $bill_to_account bill_to_account
     *
     * @return $this
     */
    public function setBillToAccount($bill_to_account)
    {
        $this->container['bill_to_account'] = $bill_to_account;

        return $this;
    }

    /**
     * Gets access_point_location_id
     *
     * @return string
     */
    public function getAccessPointLocationId()
    {
        return $this->container['access_point_location_id'];
    }

    /**
     * Sets access_point_location_id
     *
     * @param string $access_point_location_id The UPS Access Point Location ID.
     *
     * @return $this
     */
    public function setAccessPointLocationId($access_point_location_id)
    {
        $this->container['access_point_location_id'] = $access_point_location_id;

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
