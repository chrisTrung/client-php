<?php
/**
 * GetDealsSummaryData
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
 * GetDealsSummaryData Class Doc Comment
 *
 * @category Class
 * @description The summary of deals
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetDealsSummaryData implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetDealsSummary_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'values_total' => '\Pipedrive\Model\GetDealsSummaryDataValuesTotal',
        'weighted_values_total' => '\Pipedrive\Model\GetDealsSummaryDataWeightedValuesTotal',
        'total_count' => 'int',
        'total_currency_converted_value' => 'float',
        'total_weighted_currency_converted_value' => 'float',
        'total_currency_converted_value_formatted' => 'string',
        'total_weighted_currency_converted_value_formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'values_total' => null,
        'weighted_values_total' => null,
        'total_count' => null,
        'total_currency_converted_value' => null,
        'total_weighted_currency_converted_value' => null,
        'total_currency_converted_value_formatted' => null,
        'total_weighted_currency_converted_value_formatted' => null
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
        'values_total' => 'values_total',
        'weighted_values_total' => 'weighted_values_total',
        'total_count' => 'total_count',
        'total_currency_converted_value' => 'total_currency_converted_value',
        'total_weighted_currency_converted_value' => 'total_weighted_currency_converted_value',
        'total_currency_converted_value_formatted' => 'total_currency_converted_value_formatted',
        'total_weighted_currency_converted_value_formatted' => 'total_weighted_currency_converted_value_formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'values_total' => 'setValuesTotal',
        'weighted_values_total' => 'setWeightedValuesTotal',
        'total_count' => 'setTotalCount',
        'total_currency_converted_value' => 'setTotalCurrencyConvertedValue',
        'total_weighted_currency_converted_value' => 'setTotalWeightedCurrencyConvertedValue',
        'total_currency_converted_value_formatted' => 'setTotalCurrencyConvertedValueFormatted',
        'total_weighted_currency_converted_value_formatted' => 'setTotalWeightedCurrencyConvertedValueFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'values_total' => 'getValuesTotal',
        'weighted_values_total' => 'getWeightedValuesTotal',
        'total_count' => 'getTotalCount',
        'total_currency_converted_value' => 'getTotalCurrencyConvertedValue',
        'total_weighted_currency_converted_value' => 'getTotalWeightedCurrencyConvertedValue',
        'total_currency_converted_value_formatted' => 'getTotalCurrencyConvertedValueFormatted',
        'total_weighted_currency_converted_value_formatted' => 'getTotalWeightedCurrencyConvertedValueFormatted'
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
        $this->container['values_total'] = $data['values_total'] ?? null;
        $this->container['weighted_values_total'] = $data['weighted_values_total'] ?? null;
        $this->container['total_count'] = $data['total_count'] ?? null;
        $this->container['total_currency_converted_value'] = $data['total_currency_converted_value'] ?? null;
        $this->container['total_weighted_currency_converted_value'] = $data['total_weighted_currency_converted_value'] ?? null;
        $this->container['total_currency_converted_value_formatted'] = $data['total_currency_converted_value_formatted'] ?? null;
        $this->container['total_weighted_currency_converted_value_formatted'] = $data['total_weighted_currency_converted_value_formatted'] ?? null;
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
     * Gets values_total
     *
     * @return \Pipedrive\Model\GetDealsSummaryDataValuesTotal|null
     */
    public function getValuesTotal()
    {
        return $this->container['values_total'];
    }

    /**
     * Sets values_total
     *
     * @param \Pipedrive\Model\GetDealsSummaryDataValuesTotal|null $values_total values_total
     *
     * @return self
     */
    public function setValuesTotal($values_total): self
    {
        $this->container['values_total'] = $values_total;

        return $this;
    }

    /**
     * Gets weighted_values_total
     *
     * @return \Pipedrive\Model\GetDealsSummaryDataWeightedValuesTotal|null
     */
    public function getWeightedValuesTotal()
    {
        return $this->container['weighted_values_total'];
    }

    /**
     * Sets weighted_values_total
     *
     * @param \Pipedrive\Model\GetDealsSummaryDataWeightedValuesTotal|null $weighted_values_total weighted_values_total
     *
     * @return self
     */
    public function setWeightedValuesTotal($weighted_values_total): self
    {
        $this->container['weighted_values_total'] = $weighted_values_total;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int|null $total_count The total number of deals
     *
     * @return self
     */
    public function setTotalCount($total_count): self
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets total_currency_converted_value
     *
     * @return float|null
     */
    public function getTotalCurrencyConvertedValue()
    {
        return $this->container['total_currency_converted_value'];
    }

    /**
     * Sets total_currency_converted_value
     *
     * @param float|null $total_currency_converted_value The total value of deals converted into the company default currency
     *
     * @return self
     */
    public function setTotalCurrencyConvertedValue($total_currency_converted_value): self
    {
        $this->container['total_currency_converted_value'] = $total_currency_converted_value;

        return $this;
    }

    /**
     * Gets total_weighted_currency_converted_value
     *
     * @return float|null
     */
    public function getTotalWeightedCurrencyConvertedValue()
    {
        return $this->container['total_weighted_currency_converted_value'];
    }

    /**
     * Sets total_weighted_currency_converted_value
     *
     * @param float|null $total_weighted_currency_converted_value The total weighted value of deals converted into the company default currency
     *
     * @return self
     */
    public function setTotalWeightedCurrencyConvertedValue($total_weighted_currency_converted_value): self
    {
        $this->container['total_weighted_currency_converted_value'] = $total_weighted_currency_converted_value;

        return $this;
    }

    /**
     * Gets total_currency_converted_value_formatted
     *
     * @return string|null
     */
    public function getTotalCurrencyConvertedValueFormatted()
    {
        return $this->container['total_currency_converted_value_formatted'];
    }

    /**
     * Sets total_currency_converted_value_formatted
     *
     * @param string|null $total_currency_converted_value_formatted The total converted value of deals formatted with the company default currency. E.g. US$5,100.96
     *
     * @return self
     */
    public function setTotalCurrencyConvertedValueFormatted($total_currency_converted_value_formatted): self
    {
        $this->container['total_currency_converted_value_formatted'] = $total_currency_converted_value_formatted;

        return $this;
    }

    /**
     * Gets total_weighted_currency_converted_value_formatted
     *
     * @return string|null
     */
    public function getTotalWeightedCurrencyConvertedValueFormatted()
    {
        return $this->container['total_weighted_currency_converted_value_formatted'];
    }

    /**
     * Sets total_weighted_currency_converted_value_formatted
     *
     * @param string|null $total_weighted_currency_converted_value_formatted The total weighted value of deals formatted with the company default currency. E.g. US$5,100.96
     *
     * @return self
     */
    public function setTotalWeightedCurrencyConvertedValueFormatted($total_weighted_currency_converted_value_formatted): self
    {
        $this->container['total_weighted_currency_converted_value_formatted'] = $total_weighted_currency_converted_value_formatted;

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


