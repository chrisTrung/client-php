<?php
/**
 * CommonMailThread
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
 * CommonMailThread Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CommonMailThread implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CommonMailThread';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'int',
        'account_id' => 'string',
        'user_id' => 'int',
        'subject' => 'string',
        'snippet' => 'string',
        'read_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'mail_tracking_status' => 'string',
        'has_attachments_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'has_inline_attachments_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'has_real_attachments_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'deleted_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'synced_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'smart_bcc_flag' => '\Pipedrive\Model\NumberBooleanDefault0',
        'mail_link_tracking_enabled_flag' => '\Pipedrive\Model\NumberBooleanDefault0'
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
        'account_id' => null,
        'user_id' => null,
        'subject' => null,
        'snippet' => null,
        'read_flag' => null,
        'mail_tracking_status' => null,
        'has_attachments_flag' => null,
        'has_inline_attachments_flag' => null,
        'has_real_attachments_flag' => null,
        'deleted_flag' => null,
        'synced_flag' => null,
        'smart_bcc_flag' => null,
        'mail_link_tracking_enabled_flag' => null
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
        'account_id' => 'account_id',
        'user_id' => 'user_id',
        'subject' => 'subject',
        'snippet' => 'snippet',
        'read_flag' => 'read_flag',
        'mail_tracking_status' => 'mail_tracking_status',
        'has_attachments_flag' => 'has_attachments_flag',
        'has_inline_attachments_flag' => 'has_inline_attachments_flag',
        'has_real_attachments_flag' => 'has_real_attachments_flag',
        'deleted_flag' => 'deleted_flag',
        'synced_flag' => 'synced_flag',
        'smart_bcc_flag' => 'smart_bcc_flag',
        'mail_link_tracking_enabled_flag' => 'mail_link_tracking_enabled_flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_id' => 'setAccountId',
        'user_id' => 'setUserId',
        'subject' => 'setSubject',
        'snippet' => 'setSnippet',
        'read_flag' => 'setReadFlag',
        'mail_tracking_status' => 'setMailTrackingStatus',
        'has_attachments_flag' => 'setHasAttachmentsFlag',
        'has_inline_attachments_flag' => 'setHasInlineAttachmentsFlag',
        'has_real_attachments_flag' => 'setHasRealAttachmentsFlag',
        'deleted_flag' => 'setDeletedFlag',
        'synced_flag' => 'setSyncedFlag',
        'smart_bcc_flag' => 'setSmartBccFlag',
        'mail_link_tracking_enabled_flag' => 'setMailLinkTrackingEnabledFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_id' => 'getAccountId',
        'user_id' => 'getUserId',
        'subject' => 'getSubject',
        'snippet' => 'getSnippet',
        'read_flag' => 'getReadFlag',
        'mail_tracking_status' => 'getMailTrackingStatus',
        'has_attachments_flag' => 'getHasAttachmentsFlag',
        'has_inline_attachments_flag' => 'getHasInlineAttachmentsFlag',
        'has_real_attachments_flag' => 'getHasRealAttachmentsFlag',
        'deleted_flag' => 'getDeletedFlag',
        'synced_flag' => 'getSyncedFlag',
        'smart_bcc_flag' => 'getSmartBccFlag',
        'mail_link_tracking_enabled_flag' => 'getMailLinkTrackingEnabledFlag'
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['snippet'] = $data['snippet'] ?? null;
        $this->container['read_flag'] = $data['read_flag'] ?? null;
        $this->container['mail_tracking_status'] = $data['mail_tracking_status'] ?? null;
        $this->container['has_attachments_flag'] = $data['has_attachments_flag'] ?? null;
        $this->container['has_inline_attachments_flag'] = $data['has_inline_attachments_flag'] ?? null;
        $this->container['has_real_attachments_flag'] = $data['has_real_attachments_flag'] ?? null;
        $this->container['deleted_flag'] = $data['deleted_flag'] ?? null;
        $this->container['synced_flag'] = $data['synced_flag'] ?? null;
        $this->container['smart_bcc_flag'] = $data['smart_bcc_flag'] ?? null;
        $this->container['mail_link_tracking_enabled_flag'] = $data['mail_link_tracking_enabled_flag'] ?? null;
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
     * @param int|null $id ID of the mail thread
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The connection account ID
     *
     * @return self
     */
    public function setAccountId($account_id): self
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id ID of the user whom mail message will be assigned to
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject The subject
     *
     * @return self
     */
    public function setSubject($subject): self
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets snippet
     *
     * @return string|null
     */
    public function getSnippet()
    {
        return $this->container['snippet'];
    }

    /**
     * Sets snippet
     *
     * @param string|null $snippet A snippet
     *
     * @return self
     */
    public function setSnippet($snippet): self
    {
        $this->container['snippet'] = $snippet;

        return $this;
    }

    /**
     * Gets read_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getReadFlag()
    {
        return $this->container['read_flag'];
    }

    /**
     * Sets read_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $read_flag Whether the mail thread is read
     *
     * @return self
     */
    public function setReadFlag($read_flag): self
    {
        $this->container['read_flag'] = $read_flag;

        return $this;
    }

    /**
     * Gets mail_tracking_status
     *
     * @return string|null
     */
    public function getMailTrackingStatus()
    {
        return $this->container['mail_tracking_status'];
    }

    /**
     * Sets mail_tracking_status
     *
     * @param string|null $mail_tracking_status Mail tracking status
     *
     * @return self
     */
    public function setMailTrackingStatus($mail_tracking_status): self
    {
        $this->container['mail_tracking_status'] = $mail_tracking_status;

        return $this;
    }

    /**
     * Gets has_attachments_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getHasAttachmentsFlag()
    {
        return $this->container['has_attachments_flag'];
    }

    /**
     * Sets has_attachments_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $has_attachments_flag Whether the mail thread has an attachment
     *
     * @return self
     */
    public function setHasAttachmentsFlag($has_attachments_flag): self
    {
        $this->container['has_attachments_flag'] = $has_attachments_flag;

        return $this;
    }

    /**
     * Gets has_inline_attachments_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getHasInlineAttachmentsFlag()
    {
        return $this->container['has_inline_attachments_flag'];
    }

    /**
     * Sets has_inline_attachments_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $has_inline_attachments_flag Whether the mail thread has inline attachments
     *
     * @return self
     */
    public function setHasInlineAttachmentsFlag($has_inline_attachments_flag): self
    {
        $this->container['has_inline_attachments_flag'] = $has_inline_attachments_flag;

        return $this;
    }

    /**
     * Gets has_real_attachments_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getHasRealAttachmentsFlag()
    {
        return $this->container['has_real_attachments_flag'];
    }

    /**
     * Sets has_real_attachments_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $has_real_attachments_flag Whether the mail thread has real attachments (which are not inline)
     *
     * @return self
     */
    public function setHasRealAttachmentsFlag($has_real_attachments_flag): self
    {
        $this->container['has_real_attachments_flag'] = $has_real_attachments_flag;

        return $this;
    }

    /**
     * Gets deleted_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getDeletedFlag()
    {
        return $this->container['deleted_flag'];
    }

    /**
     * Sets deleted_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $deleted_flag Whether the mail thread is deleted
     *
     * @return self
     */
    public function setDeletedFlag($deleted_flag): self
    {
        $this->container['deleted_flag'] = $deleted_flag;

        return $this;
    }

    /**
     * Gets synced_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getSyncedFlag()
    {
        return $this->container['synced_flag'];
    }

    /**
     * Sets synced_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $synced_flag Whether the mail thread is synced
     *
     * @return self
     */
    public function setSyncedFlag($synced_flag): self
    {
        $this->container['synced_flag'] = $synced_flag;

        return $this;
    }

    /**
     * Gets smart_bcc_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getSmartBccFlag()
    {
        return $this->container['smart_bcc_flag'];
    }

    /**
     * Sets smart_bcc_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $smart_bcc_flag Whether one of the parties of the mail thread is Bcc
     *
     * @return self
     */
    public function setSmartBccFlag($smart_bcc_flag): self
    {
        $this->container['smart_bcc_flag'] = $smart_bcc_flag;

        return $this;
    }

    /**
     * Gets mail_link_tracking_enabled_flag
     *
     * @return \Pipedrive\Model\NumberBooleanDefault0|null
     */
    public function getMailLinkTrackingEnabledFlag()
    {
        return $this->container['mail_link_tracking_enabled_flag'];
    }

    /**
     * Sets mail_link_tracking_enabled_flag
     *
     * @param \Pipedrive\Model\NumberBooleanDefault0|null $mail_link_tracking_enabled_flag Whether the link tracking of the mail thread is enabled
     *
     * @return self
     */
    public function setMailLinkTrackingEnabledFlag($mail_link_tracking_enabled_flag): self
    {
        $this->container['mail_link_tracking_enabled_flag'] = $mail_link_tracking_enabled_flag;

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


