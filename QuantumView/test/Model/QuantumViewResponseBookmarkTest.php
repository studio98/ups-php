<?php
/**
 * QuantumViewResponseBookmarkTest
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
 * Please update the test case below to test the model.
 */

namespace UPS\QuantumView;

use PHPUnit\Framework\TestCase;

/**
 * QuantumViewResponseBookmarkTest Class Doc Comment
 *
 * @category    Class
 * @description Bookmarks the file for next retrieval, It is a base64Encoded String. It contains the combination of SubscriberID + SubscriptionName + File Name if the request is for all data. It contains SubscriberID if the request is for unread data. When a response comes back with a bookmark it indicates that there is more data. To fetch the remaining data, the requester should come back with the bookmark added to the original request.
 * @package     UPS\QuantumView
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuantumViewResponseBookmarkTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "QuantumViewResponseBookmark"
     */
    public function testQuantumViewResponseBookmark()
    {
    }
}
