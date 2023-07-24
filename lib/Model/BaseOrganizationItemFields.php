<?php
/**
 * BaseOrganizationItemFields
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
 * BaseOrganizationItemFields Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BaseOrganizationItemFields implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BaseOrganizationItemFields';

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
        'owner_id' => '\Pipedrive\Model\Owner',
        'name' => 'string',
        'active_flag' => 'bool',
        'picture_id' => '\Pipedrive\Model\PictureDataWithValue',
        'country_code' => 'string',
        'first_char' => 'string',
        'add_time' => 'string',
        'update_time' => 'string',
        'visible_to' => 'string',
        'label' => 'int',
        'owner_name' => 'string',
        'cc_email' => 'string'
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
        'owner_id' => null,
        'name' => null,
        'active_flag' => null,
        'picture_id' => null,
        'country_code' => null,
        'first_char' => null,
        'add_time' => null,
        'update_time' => null,
        'visible_to' => null,
        'label' => null,
        'owner_name' => null,
        'cc_email' => null
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
        'owner_id' => 'owner_id',
        'name' => 'name',
        'active_flag' => 'active_flag',
        'picture_id' => 'picture_id',
        'country_code' => 'country_code',
        'first_char' => 'first_char',
        'add_time' => 'add_time',
        'update_time' => 'update_time',
        'visible_to' => 'visible_to',
        'label' => 'label',
        'owner_name' => 'owner_name',
        'cc_email' => 'cc_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'owner_id' => 'setOwnerId',
        'name' => 'setName',
        'active_flag' => 'setActiveFlag',
        'picture_id' => 'setPictureId',
        'country_code' => 'setCountryCode',
        'first_char' => 'setFirstChar',
        'add_time' => 'setAddTime',
        'update_time' => 'setUpdateTime',
        'visible_to' => 'setVisibleTo',
        'label' => 'setLabel',
        'owner_name' => 'setOwnerName',
        'cc_email' => 'setCcEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'owner_id' => 'getOwnerId',
        'name' => 'getName',
        'active_flag' => 'getActiveFlag',
        'picture_id' => 'getPictureId',
        'country_code' => 'getCountryCode',
        'first_char' => 'getFirstChar',
        'add_time' => 'getAddTime',
        'update_time' => 'getUpdateTime',
        'visible_to' => 'getVisibleTo',
        'label' => 'getLabel',
        'owner_name' => 'getOwnerName',
        'cc_email' => 'getCcEmail'
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
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['picture_id'] = $data['picture_id'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['first_char'] = $data['first_char'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['owner_name'] = $data['owner_name'] ?? null;
        $this->container['cc_email'] = $data['cc_email'] ?? null;
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
     * @param int|null $id The ID of the organization
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
     * @param int|null $company_id The ID of the company related to the organization
     *
     * @return self
     */
    public function setCompanyId($company_id): self
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return \Pipedrive\Model\Owner|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param \Pipedrive\Model\Owner|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id): self
    {
        $this->container['owner_id'] = $owner_id;

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
     * @param string|null $name The name of the organization
     *
     * @return self
     */
    public function setName($name): self
    {
        $this->container['name'] = $name;

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
     * @param bool|null $active_flag Whether the organization is active or not
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

        return $this;
    }

    /**
     * Gets picture_id
     *
     * @return \Pipedrive\Model\PictureDataWithValue|null
     */
    public function getPictureId()
    {
        return $this->container['picture_id'];
    }

    /**
     * Sets picture_id
     *
     * @param \Pipedrive\Model\PictureDataWithValue|null $picture_id picture_id
     *
     * @return self
     */
    public function setPictureId($picture_id): self
    {
        $this->container['picture_id'] = $picture_id;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code The country code of the organization
     *
     * @return self
     */
    public function setCountryCode($country_code): self
    {
        $this->container['country_code'] = $country_code;

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
     * @param string|null $first_char The first character of the organization name
     *
     * @return self
     */
    public function setFirstChar($first_char): self
    {
        $this->container['first_char'] = $first_char;

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
     * @param string|null $add_time The creation date and time of the organization
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
     * @param string|null $update_time The last updated date and time of the organization
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets visible_to
     *
     * @return string|null
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param string|null $visible_to The visibility group ID of who can see the organization
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets label
     *
     * @return int|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param int|null $label The ID of the label
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return string|null
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string|null $owner_name The name of the organization owner
     *
     * @return self
     */
    public function setOwnerName($owner_name): self
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets cc_email
     *
     * @return string|null
     */
    public function getCcEmail()
    {
        return $this->container['cc_email'];
    }

    /**
     * Sets cc_email
     *
     * @param string|null $cc_email The BCC email of the organization
     *
     * @return self
     */
    public function setCcEmail($cc_email): self
    {
        $this->container['cc_email'] = $cc_email;

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
    public function offsetGet($offset): mixed
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
    public function jsonSerialize(): mixed
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

