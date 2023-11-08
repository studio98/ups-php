<?php
/**
 * SubscriptionFileGeneric
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
 * SubscriptionFileGeneric Class Doc Comment
 *
 * @category Class
 * @description Container for generic record information.
 * @package  UPS\QuantumView
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionFileGeneric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionFile_Generic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity_type' => 'string',
        'tracking_number' => 'string',
        'shipper_number' => 'string',
        'shipment_reference_number' => '\UPS\QuantumView\QuantumView\GenericShipmentReferenceNumber[]',
        'package_reference_number' => '\UPS\QuantumView\QuantumView\GenericPackageReferenceNumber[]',
        'service' => '\UPS\QuantumView\QuantumView\GenericService',
        'activity' => '\UPS\QuantumView\QuantumView\GenericActivity',
        'bill_to_account' => '\UPS\QuantumView\QuantumView\GenericBillToAccount',
        'ship_to' => '\UPS\QuantumView\QuantumView\GenericShipTo',
        'rescheduled_delivery_date' => 'string',
        'failure_notification' => '\UPS\QuantumView\QuantumView\GenericFailureNotification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activity_type' => null,
        'tracking_number' => null,
        'shipper_number' => null,
        'shipment_reference_number' => null,
        'package_reference_number' => null,
        'service' => null,
        'activity' => null,
        'bill_to_account' => null,
        'ship_to' => null,
        'rescheduled_delivery_date' => null,
        'failure_notification' => null
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
        'activity_type' => 'ActivityType',
        'tracking_number' => 'TrackingNumber',
        'shipper_number' => 'ShipperNumber',
        'shipment_reference_number' => 'ShipmentReferenceNumber',
        'package_reference_number' => 'PackageReferenceNumber',
        'service' => 'Service',
        'activity' => 'Activity',
        'bill_to_account' => 'BillToAccount',
        'ship_to' => 'ShipTo',
        'rescheduled_delivery_date' => 'RescheduledDeliveryDate',
        'failure_notification' => 'FailureNotification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_type' => 'setActivityType',
        'tracking_number' => 'setTrackingNumber',
        'shipper_number' => 'setShipperNumber',
        'shipment_reference_number' => 'setShipmentReferenceNumber',
        'package_reference_number' => 'setPackageReferenceNumber',
        'service' => 'setService',
        'activity' => 'setActivity',
        'bill_to_account' => 'setBillToAccount',
        'ship_to' => 'setShipTo',
        'rescheduled_delivery_date' => 'setRescheduledDeliveryDate',
        'failure_notification' => 'setFailureNotification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_type' => 'getActivityType',
        'tracking_number' => 'getTrackingNumber',
        'shipper_number' => 'getShipperNumber',
        'shipment_reference_number' => 'getShipmentReferenceNumber',
        'package_reference_number' => 'getPackageReferenceNumber',
        'service' => 'getService',
        'activity' => 'getActivity',
        'bill_to_account' => 'getBillToAccount',
        'ship_to' => 'getShipTo',
        'rescheduled_delivery_date' => 'getRescheduledDeliveryDate',
        'failure_notification' => 'getFailureNotification'
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
        $this->container['activity_type'] = isset($data['activity_type']) ? $data['activity_type'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['shipper_number'] = isset($data['shipper_number']) ? $data['shipper_number'] : null;
        $this->container['shipment_reference_number'] = isset($data['shipment_reference_number']) ? $data['shipment_reference_number'] : null;
        $this->container['package_reference_number'] = isset($data['package_reference_number']) ? $data['package_reference_number'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['bill_to_account'] = isset($data['bill_to_account']) ? $data['bill_to_account'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['rescheduled_delivery_date'] = isset($data['rescheduled_delivery_date']) ? $data['rescheduled_delivery_date'] : null;
        $this->container['failure_notification'] = isset($data['failure_notification']) ? $data['failure_notification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity_type'] === null) {
            $invalidProperties[] = "'activity_type' can't be null";
        }
        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
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
     * Gets activity_type
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string $activity_type Unique identifier that defines the type of activity.  VM = Void for Manifest  UR = Undeliverable Returns IR = Invoice Removal Successful  TC = Transport Company USPS scan PS = 'Postal Service Possession Scan' FN = UPS Access Point/Alternate Delivery Location Email Notification Failure DS = Destination Scan AG = Package is in transit to a UPS facility RE = UPS Returns Exchange  RP = Retail Pickup UD = Updated delivery date                                                                                              OD = Out for Delivery                                                                                                        SD = Scheduled for Delivery                                                                                              FM = Tendered to FMP
     *
     * @return $this
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

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
     * @param string $tracking_number Package's tracking number.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

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
     * @param string $shipper_number Shipper's alphanumeric account number.
     *
     * @return $this
     */
    public function setShipperNumber($shipper_number)
    {
        $this->container['shipper_number'] = $shipper_number;

        return $this;
    }

    /**
     * Gets shipment_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\GenericShipmentReferenceNumber[]
     */
    public function getShipmentReferenceNumber()
    {
        return $this->container['shipment_reference_number'];
    }

    /**
     * Sets shipment_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\GenericShipmentReferenceNumber[] $shipment_reference_number shipment_reference_number
     *
     * @return $this
     */
    public function setShipmentReferenceNumber($shipment_reference_number)
    {
        $this->container['shipment_reference_number'] = $shipment_reference_number;

        return $this;
    }

    /**
     * Gets package_reference_number
     *
     * @return \UPS\QuantumView\QuantumView\GenericPackageReferenceNumber[]
     */
    public function getPackageReferenceNumber()
    {
        return $this->container['package_reference_number'];
    }

    /**
     * Sets package_reference_number
     *
     * @param \UPS\QuantumView\QuantumView\GenericPackageReferenceNumber[] $package_reference_number package_reference_number
     *
     * @return $this
     */
    public function setPackageReferenceNumber($package_reference_number)
    {
        $this->container['package_reference_number'] = $package_reference_number;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \UPS\QuantumView\QuantumView\GenericService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \UPS\QuantumView\QuantumView\GenericService $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \UPS\QuantumView\QuantumView\GenericActivity
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \UPS\QuantumView\QuantumView\GenericActivity $activity activity
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets bill_to_account
     *
     * @return \UPS\QuantumView\QuantumView\GenericBillToAccount
     */
    public function getBillToAccount()
    {
        return $this->container['bill_to_account'];
    }

    /**
     * Sets bill_to_account
     *
     * @param \UPS\QuantumView\QuantumView\GenericBillToAccount $bill_to_account bill_to_account
     *
     * @return $this
     */
    public function setBillToAccount($bill_to_account)
    {
        $this->container['bill_to_account'] = $bill_to_account;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \UPS\QuantumView\QuantumView\GenericShipTo
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \UPS\QuantumView\QuantumView\GenericShipTo $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

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
     * @param string $rescheduled_delivery_date If Activity Type is \"DS\" or \"UD\", this element will contain Rescheduled Delivery Date.  Format will be YYYYMMDD.                                                                                               If Activity Type is \"OD\", this element will contain Rescheduled Delivery Date. Format will be YYYYMMDD.                                                                                                                     If Activity Type is \"SD\", this element will contain agreed upon date with Customer for delivery Date . Format will be YYYYMMDD.
     *
     * @return $this
     */
    public function setRescheduledDeliveryDate($rescheduled_delivery_date)
    {
        $this->container['rescheduled_delivery_date'] = $rescheduled_delivery_date;

        return $this;
    }

    /**
     * Gets failure_notification
     *
     * @return \UPS\QuantumView\QuantumView\GenericFailureNotification
     */
    public function getFailureNotification()
    {
        return $this->container['failure_notification'];
    }

    /**
     * Sets failure_notification
     *
     * @param \UPS\QuantumView\QuantumView\GenericFailureNotification $failure_notification failure_notification
     *
     * @return $this
     */
    public function setFailureNotification($failure_notification)
    {
        $this->container['failure_notification'] = $failure_notification;

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
