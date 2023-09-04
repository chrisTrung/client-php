<?php
/**
 * DealsCountInfo
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
 * DealsCountInfo Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DealsCountInfo implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DealsCountInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'open_deals_count' => 'int',
        'related_open_deals_count' => 'int',
        'closed_deals_count' => 'int',
        'related_closed_deals_count' => 'int',
        'won_deals_count' => 'int',
        'related_won_deals_count' => 'int',
        'lost_deals_count' => 'int',
        'related_lost_deals_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'open_deals_count' => null,
        'related_open_deals_count' => null,
        'closed_deals_count' => null,
        'related_closed_deals_count' => null,
        'won_deals_count' => null,
        'related_won_deals_count' => null,
        'lost_deals_count' => null,
        'related_lost_deals_count' => null
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
        'open_deals_count' => 'open_deals_count',
        'related_open_deals_count' => 'related_open_deals_count',
        'closed_deals_count' => 'closed_deals_count',
        'related_closed_deals_count' => 'related_closed_deals_count',
        'won_deals_count' => 'won_deals_count',
        'related_won_deals_count' => 'related_won_deals_count',
        'lost_deals_count' => 'lost_deals_count',
        'related_lost_deals_count' => 'related_lost_deals_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_deals_count' => 'setOpenDealsCount',
        'related_open_deals_count' => 'setRelatedOpenDealsCount',
        'closed_deals_count' => 'setClosedDealsCount',
        'related_closed_deals_count' => 'setRelatedClosedDealsCount',
        'won_deals_count' => 'setWonDealsCount',
        'related_won_deals_count' => 'setRelatedWonDealsCount',
        'lost_deals_count' => 'setLostDealsCount',
        'related_lost_deals_count' => 'setRelatedLostDealsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_deals_count' => 'getOpenDealsCount',
        'related_open_deals_count' => 'getRelatedOpenDealsCount',
        'closed_deals_count' => 'getClosedDealsCount',
        'related_closed_deals_count' => 'getRelatedClosedDealsCount',
        'won_deals_count' => 'getWonDealsCount',
        'related_won_deals_count' => 'getRelatedWonDealsCount',
        'lost_deals_count' => 'getLostDealsCount',
        'related_lost_deals_count' => 'getRelatedLostDealsCount'
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
        $this->container['open_deals_count'] = $data['open_deals_count'] ?? null;
        $this->container['related_open_deals_count'] = $data['related_open_deals_count'] ?? null;
        $this->container['closed_deals_count'] = $data['closed_deals_count'] ?? null;
        $this->container['related_closed_deals_count'] = $data['related_closed_deals_count'] ?? null;
        $this->container['won_deals_count'] = $data['won_deals_count'] ?? null;
        $this->container['related_won_deals_count'] = $data['related_won_deals_count'] ?? null;
        $this->container['lost_deals_count'] = $data['lost_deals_count'] ?? null;
        $this->container['related_lost_deals_count'] = $data['related_lost_deals_count'] ?? null;
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
     * Gets open_deals_count
     *
     * @return int|null
     */
    public function getOpenDealsCount()
    {
        return $this->container['open_deals_count'];
    }

    /**
     * Sets open_deals_count
     *
     * @param int|null $open_deals_count The count of open deals related with the item
     *
     * @return self
     */
    public function setOpenDealsCount($open_deals_count): self
    {
        $this->container['open_deals_count'] = $open_deals_count;

        return $this;
    }

    /**
     * Gets related_open_deals_count
     *
     * @return int|null
     */
    public function getRelatedOpenDealsCount()
    {
        return $this->container['related_open_deals_count'];
    }

    /**
     * Sets related_open_deals_count
     *
     * @param int|null $related_open_deals_count The count of related open deals related with the item
     *
     * @return self
     */
    public function setRelatedOpenDealsCount($related_open_deals_count): self
    {
        $this->container['related_open_deals_count'] = $related_open_deals_count;

        return $this;
    }

    /**
     * Gets closed_deals_count
     *
     * @return int|null
     */
    public function getClosedDealsCount()
    {
        return $this->container['closed_deals_count'];
    }

    /**
     * Sets closed_deals_count
     *
     * @param int|null $closed_deals_count The count of closed deals related with the item
     *
     * @return self
     */
    public function setClosedDealsCount($closed_deals_count): self
    {
        $this->container['closed_deals_count'] = $closed_deals_count;

        return $this;
    }

    /**
     * Gets related_closed_deals_count
     *
     * @return int|null
     */
    public function getRelatedClosedDealsCount()
    {
        return $this->container['related_closed_deals_count'];
    }

    /**
     * Sets related_closed_deals_count
     *
     * @param int|null $related_closed_deals_count The count of related closed deals related with the item
     *
     * @return self
     */
    public function setRelatedClosedDealsCount($related_closed_deals_count): self
    {
        $this->container['related_closed_deals_count'] = $related_closed_deals_count;

        return $this;
    }

    /**
     * Gets won_deals_count
     *
     * @return int|null
     */
    public function getWonDealsCount()
    {
        return $this->container['won_deals_count'];
    }

    /**
     * Sets won_deals_count
     *
     * @param int|null $won_deals_count The count of won deals related with the item
     *
     * @return self
     */
    public function setWonDealsCount($won_deals_count): self
    {
        $this->container['won_deals_count'] = $won_deals_count;

        return $this;
    }

    /**
     * Gets related_won_deals_count
     *
     * @return int|null
     */
    public function getRelatedWonDealsCount()
    {
        return $this->container['related_won_deals_count'];
    }

    /**
     * Sets related_won_deals_count
     *
     * @param int|null $related_won_deals_count The count of related won deals related with the item
     *
     * @return self
     */
    public function setRelatedWonDealsCount($related_won_deals_count): self
    {
        $this->container['related_won_deals_count'] = $related_won_deals_count;

        return $this;
    }

    /**
     * Gets lost_deals_count
     *
     * @return int|null
     */
    public function getLostDealsCount()
    {
        return $this->container['lost_deals_count'];
    }

    /**
     * Sets lost_deals_count
     *
     * @param int|null $lost_deals_count The count of lost deals related with the item
     *
     * @return self
     */
    public function setLostDealsCount($lost_deals_count): self
    {
        $this->container['lost_deals_count'] = $lost_deals_count;

        return $this;
    }

    /**
     * Gets related_lost_deals_count
     *
     * @return int|null
     */
    public function getRelatedLostDealsCount()
    {
        return $this->container['related_lost_deals_count'];
    }

    /**
     * Sets related_lost_deals_count
     *
     * @param int|null $related_lost_deals_count The count of related lost deals related with the item
     *
     * @return self
     */
    public function setRelatedLostDealsCount($related_lost_deals_count): self
    {
        $this->container['related_lost_deals_count'] = $related_lost_deals_count;

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


