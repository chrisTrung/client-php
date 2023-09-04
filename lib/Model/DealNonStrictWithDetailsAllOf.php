<?php
/**
 * DealNonStrictWithDetailsAllOf
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Pipedrive API v1
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Pipedrive\Model;

use ArrayAccess;
use JsonException;
use JsonSerializable;
use Pipedrive\ObjectSerializer;

/**
 * DealNonStrictWithDetailsAllOf Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DealNonStrictWithDetailsAllOf implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DealNonStrictWithDetails_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'average_time_to_won' => '\Pipedrive\Model\DealNonStrictWithDetailsAllOfAverageTimeToWon',
        'average_stage_progress' => 'float',
        'age' => '\Pipedrive\Model\DealNonStrictWithDetailsAllOfAge',
        'stay_in_pipeline_stages' => '\Pipedrive\Model\DealNonStrictWithDetailsAllOfStayInPipelineStages',
        'last_activity' => 'object',
        'next_activity' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'average_time_to_won' => null,
        'average_stage_progress' => null,
        'age' => null,
        'stay_in_pipeline_stages' => null,
        'last_activity' => null,
        'next_activity' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @phpstan-return array<string, string|null>
     * @psalm-return array<string, string|null>
     * @return array
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'average_time_to_won' => 'average_time_to_won',
        'average_stage_progress' => 'average_stage_progress',
        'age' => 'age',
        'stay_in_pipeline_stages' => 'stay_in_pipeline_stages',
        'last_activity' => 'last_activity',
        'next_activity' => 'next_activity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'average_time_to_won' => 'setAverageTimeToWon',
        'average_stage_progress' => 'setAverageStageProgress',
        'age' => 'setAge',
        'stay_in_pipeline_stages' => 'setStayInPipelineStages',
        'last_activity' => 'setLastActivity',
        'next_activity' => 'setNextActivity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'average_time_to_won' => 'getAverageTimeToWon',
        'average_stage_progress' => 'getAverageStageProgress',
        'age' => 'getAge',
        'stay_in_pipeline_stages' => 'getStayInPipelineStages',
        'last_activity' => 'getLastActivity',
        'next_activity' => 'getNextActivity'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @phpstan-return array<string, string>
     * @psalm-return array<string, string>
     * @return array
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     * @phpstan-var array<int|string, mixed>
     * @psalm-var array<int|string, mixed>
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @phpstan-param array<string, mixed>|null $data
     * @psalm-param array<string, mixed>|null $data
     * @param array|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['average_time_to_won'] = $data['average_time_to_won'] ?? null;
        $this->container['average_stage_progress'] = $data['average_stage_progress'] ?? null;
        $this->container['age'] = $data['age'] ?? null;
        $this->container['stay_in_pipeline_stages'] = $data['stay_in_pipeline_stages'] ?? null;
        $this->container['last_activity'] = $data['last_activity'] ?? null;
        $this->container['next_activity'] = $data['next_activity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     * @phpstan-return array<int, string>
     * @psalm-return array<int, string>
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets average_time_to_won
     *
     * @return \Pipedrive\Model\DealNonStrictWithDetailsAllOfAverageTimeToWon|null
     */
    public function getAverageTimeToWon()
    {
        return $this->container['average_time_to_won'];
    }

    /**
     * Sets average_time_to_won
     *
     * @param \Pipedrive\Model\DealNonStrictWithDetailsAllOfAverageTimeToWon|null $average_time_to_won average_time_to_won
     *
     * @return self
     */
    public function setAverageTimeToWon($average_time_to_won): self
    {
        $this->container['average_time_to_won'] = $average_time_to_won;

        return $this;
    }

    /**
     * Gets average_stage_progress
     *
     * @return float|null
     */
    public function getAverageStageProgress()
    {
        return $this->container['average_stage_progress'];
    }

    /**
     * Sets average_stage_progress
     *
     * @param float|null $average_stage_progress The average of the deal stage progression
     *
     * @return self
     */
    public function setAverageStageProgress($average_stage_progress): self
    {
        $this->container['average_stage_progress'] = $average_stage_progress;

        return $this;
    }

    /**
     * Gets age
     *
     * @return \Pipedrive\Model\DealNonStrictWithDetailsAllOfAge|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \Pipedrive\Model\DealNonStrictWithDetailsAllOfAge|null $age age
     *
     * @return self
     */
    public function setAge($age): self
    {
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets stay_in_pipeline_stages
     *
     * @return \Pipedrive\Model\DealNonStrictWithDetailsAllOfStayInPipelineStages|null
     */
    public function getStayInPipelineStages()
    {
        return $this->container['stay_in_pipeline_stages'];
    }

    /**
     * Sets stay_in_pipeline_stages
     *
     * @param \Pipedrive\Model\DealNonStrictWithDetailsAllOfStayInPipelineStages|null $stay_in_pipeline_stages stay_in_pipeline_stages
     *
     * @return self
     */
    public function setStayInPipelineStages($stay_in_pipeline_stages): self
    {
        $this->container['stay_in_pipeline_stages'] = $stay_in_pipeline_stages;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return object|null
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param object|null $last_activity The details of the last activity associated with the deal
     *
     * @return self
     */
    public function setLastActivity($last_activity): self
    {
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets next_activity
     *
     * @return object|null
     */
    public function getNextActivity()
    {
        return $this->container['next_activity'];
    }

    /**
     * Sets next_activity
     *
     * @param object|null $next_activity The details of the next activity associated with the deal
     *
     * @return self
     */
    public function setNextActivity($next_activity): self
    {
        $this->container['next_activity'] = $next_activity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @throws JsonException
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}


