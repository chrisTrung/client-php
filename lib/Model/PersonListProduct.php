<?php
/**
 * PersonListProduct
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
 * PersonListProduct Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PersonListProduct implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PersonListProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'company_id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'unit' => 'string',
        'tax' => 'float',
        'category' => 'string',
        'active_flag' => 'bool',
        'selectable' => 'bool',
        'first_char' => 'string',
        'visible_to' => '\Pipedrive\Model\VisibleTo',
        'owner_id' => 'int',
        'files_count' => 'int',
        'add_time' => 'string',
        'update_time' => 'string',
        'deal_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'company_id' => null,
        'name' => null,
        'code' => null,
        'description' => null,
        'unit' => null,
        'tax' => null,
        'category' => null,
        'active_flag' => null,
        'selectable' => null,
        'first_char' => null,
        'visible_to' => null,
        'owner_id' => null,
        'files_count' => null,
        'add_time' => null,
        'update_time' => null,
        'deal_id' => null
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
        'id' => 'id',
        'company_id' => 'company_id',
        'name' => 'name',
        'code' => 'code',
        'description' => 'description',
        'unit' => 'unit',
        'tax' => 'tax',
        'category' => 'category',
        'active_flag' => 'active_flag',
        'selectable' => 'selectable',
        'first_char' => 'first_char',
        'visible_to' => 'visible_to',
        'owner_id' => 'owner_id',
        'files_count' => 'files_count',
        'add_time' => 'add_time',
        'update_time' => 'update_time',
        'deal_id' => 'deal_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'name' => 'setName',
        'code' => 'setCode',
        'description' => 'setDescription',
        'unit' => 'setUnit',
        'tax' => 'setTax',
        'category' => 'setCategory',
        'active_flag' => 'setActiveFlag',
        'selectable' => 'setSelectable',
        'first_char' => 'setFirstChar',
        'visible_to' => 'setVisibleTo',
        'owner_id' => 'setOwnerId',
        'files_count' => 'setFilesCount',
        'add_time' => 'setAddTime',
        'update_time' => 'setUpdateTime',
        'deal_id' => 'setDealId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'name' => 'getName',
        'code' => 'getCode',
        'description' => 'getDescription',
        'unit' => 'getUnit',
        'tax' => 'getTax',
        'category' => 'getCategory',
        'active_flag' => 'getActiveFlag',
        'selectable' => 'getSelectable',
        'first_char' => 'getFirstChar',
        'visible_to' => 'getVisibleTo',
        'owner_id' => 'getOwnerId',
        'files_count' => 'getFilesCount',
        'add_time' => 'getAddTime',
        'update_time' => 'getUpdateTime',
        'deal_id' => 'getDealId'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['tax'] = $data['tax'] ?? 0;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? true;
        $this->container['selectable'] = $data['selectable'] ?? true;
        $this->container['first_char'] = $data['first_char'] ?? null;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['files_count'] = $data['files_count'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The ID of the product
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return int|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param int|null $company_id The ID of the company
     *
     * @return self
     */
    public function setCompanyId($company_id): self
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the product
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The product code
     *
     * @return self
     */
    public function setCode($code): self
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the product
     *
     * @return self
     */
    public function setDescription($description): self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit The unit in which this product is sold
     *
     * @return self
     */
    public function setUnit($unit): self
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax The tax percentage
     *
     * @return self
     */
    public function setTax($tax): self
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category The category of the product
     *
     * @return self
     */
    public function setCategory($category): self
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets active_flag
     *
     * @return bool|null
     */
    public function getActiveFlag()
    {
        return $this->container['active_flag'];
    }

    /**
     * Sets active_flag
     *
     * @param bool|null $active_flag Whether this product will be made active or not
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

        return $this;
    }

    /**
     * Gets selectable
     *
     * @return bool|null
     */
    public function getSelectable()
    {
        return $this->container['selectable'];
    }

    /**
     * Sets selectable
     *
     * @param bool|null $selectable Whether this product can be selected in deals or not
     *
     * @return self
     */
    public function setSelectable($selectable): self
    {
        $this->container['selectable'] = $selectable;

        return $this;
    }

    /**
     * Gets first_char
     *
     * @return string|null
     */
    public function getFirstChar()
    {
        return $this->container['first_char'];
    }

    /**
     * Sets first_char
     *
     * @param string|null $first_char The first letter of the product name
     *
     * @return self
     */
    public function setFirstChar($first_char): self
    {
        $this->container['first_char'] = $first_char;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return VisibleTo|null
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param VisibleTo|null $visible_to The visibility of the product. If omitted, the visibility will be set to the default visibility setting of this item type for the authorized user.<table><tr><th>Value</th><th>Description</th></tr><tr><td>`1`</td><td>Owner &amp; followers (private)</td></tr><tr><td>`3`</td><td>Entire company (shared)</td></tr></table>
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return int|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param int|null $owner_id The ID of the user who will be marked as the owner of this product. When omitted, the authorized user ID will be used.
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets files_count
     *
     * @return int|null
     */
    public function getFilesCount()
    {
        return $this->container['files_count'];
    }

    /**
     * Sets files_count
     *
     * @param int|null $files_count The count of files
     *
     * @return self
     */
    public function setFilesCount($files_count): self
    {
        $this->container['files_count'] = $files_count;

        return $this;
    }

    /**
     * Gets add_time
     *
     * @return string|null
     */
    public function getAddTime()
    {
        return $this->container['add_time'];
    }

    /**
     * Sets add_time
     *
     * @param string|null $add_time The date and time when the product was added to the deal
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time The date and time when the product was updated to the deal
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets deal_id
     *
     * @return int|null
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id
     *
     * @param int|null $deal_id The ID of the deal
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

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


