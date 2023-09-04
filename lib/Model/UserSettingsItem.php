<?php
/**
 * UserSettingsItem
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
 * UserSettingsItem Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserSettingsItem implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UserSettingsItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'marketplace_allow_custom_install_url' => 'bool',
        'marketplace_app_extensions_vendor' => 'bool',
        'marketplace_team' => 'bool',
        'list_limit' => 'float',
        'beta_app' => 'bool',
        'prevent_salesphone_callto_override' => 'bool',
        'file_upload_destination' => 'string',
        'callto_link_syntax' => 'string',
        'autofill_deal_expected_close_date' => 'bool',
        'person_duplicate_condition' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketplace_allow_custom_install_url' => null,
        'marketplace_app_extensions_vendor' => null,
        'marketplace_team' => null,
        'list_limit' => null,
        'beta_app' => null,
        'prevent_salesphone_callto_override' => null,
        'file_upload_destination' => null,
        'callto_link_syntax' => null,
        'autofill_deal_expected_close_date' => null,
        'person_duplicate_condition' => null
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
        'marketplace_allow_custom_install_url' => 'marketplace_allow_custom_install_url',
        'marketplace_app_extensions_vendor' => 'marketplace_app_extensions_vendor',
        'marketplace_team' => 'marketplace_team',
        'list_limit' => 'list_limit',
        'beta_app' => 'beta_app',
        'prevent_salesphone_callto_override' => 'prevent_salesphone_callto_override',
        'file_upload_destination' => 'file_upload_destination',
        'callto_link_syntax' => 'callto_link_syntax',
        'autofill_deal_expected_close_date' => 'autofill_deal_expected_close_date',
        'person_duplicate_condition' => 'person_duplicate_condition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_allow_custom_install_url' => 'setMarketplaceAllowCustomInstallUrl',
        'marketplace_app_extensions_vendor' => 'setMarketplaceAppExtensionsVendor',
        'marketplace_team' => 'setMarketplaceTeam',
        'list_limit' => 'setListLimit',
        'beta_app' => 'setBetaApp',
        'prevent_salesphone_callto_override' => 'setPreventSalesphoneCalltoOverride',
        'file_upload_destination' => 'setFileUploadDestination',
        'callto_link_syntax' => 'setCalltoLinkSyntax',
        'autofill_deal_expected_close_date' => 'setAutofillDealExpectedCloseDate',
        'person_duplicate_condition' => 'setPersonDuplicateCondition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_allow_custom_install_url' => 'getMarketplaceAllowCustomInstallUrl',
        'marketplace_app_extensions_vendor' => 'getMarketplaceAppExtensionsVendor',
        'marketplace_team' => 'getMarketplaceTeam',
        'list_limit' => 'getListLimit',
        'beta_app' => 'getBetaApp',
        'prevent_salesphone_callto_override' => 'getPreventSalesphoneCalltoOverride',
        'file_upload_destination' => 'getFileUploadDestination',
        'callto_link_syntax' => 'getCalltoLinkSyntax',
        'autofill_deal_expected_close_date' => 'getAutofillDealExpectedCloseDate',
        'person_duplicate_condition' => 'getPersonDuplicateCondition'
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
        $this->container['marketplace_allow_custom_install_url'] = $data['marketplace_allow_custom_install_url'] ?? null;
        $this->container['marketplace_app_extensions_vendor'] = $data['marketplace_app_extensions_vendor'] ?? null;
        $this->container['marketplace_team'] = $data['marketplace_team'] ?? null;
        $this->container['list_limit'] = $data['list_limit'] ?? null;
        $this->container['beta_app'] = $data['beta_app'] ?? null;
        $this->container['prevent_salesphone_callto_override'] = $data['prevent_salesphone_callto_override'] ?? null;
        $this->container['file_upload_destination'] = $data['file_upload_destination'] ?? null;
        $this->container['callto_link_syntax'] = $data['callto_link_syntax'] ?? null;
        $this->container['autofill_deal_expected_close_date'] = $data['autofill_deal_expected_close_date'] ?? null;
        $this->container['person_duplicate_condition'] = $data['person_duplicate_condition'] ?? null;
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
     * Gets marketplace_allow_custom_install_url
     *
     * @return bool|null
     */
    public function getMarketplaceAllowCustomInstallUrl()
    {
        return $this->container['marketplace_allow_custom_install_url'];
    }

    /**
     * Sets marketplace_allow_custom_install_url
     *
     * @param bool|null $marketplace_allow_custom_install_url If the vendors are allowed to install custom Marketplace apps with functionality and content in the Pipedrive UI or not
     *
     * @return self
     */
    public function setMarketplaceAllowCustomInstallUrl($marketplace_allow_custom_install_url): self
    {
        $this->container['marketplace_allow_custom_install_url'] = $marketplace_allow_custom_install_url;

        return $this;
    }

    /**
     * Gets marketplace_app_extensions_vendor
     *
     * @return bool|null
     */
    public function getMarketplaceAppExtensionsVendor()
    {
        return $this->container['marketplace_app_extensions_vendor'];
    }

    /**
     * Sets marketplace_app_extensions_vendor
     *
     * @param bool|null $marketplace_app_extensions_vendor If the vendors are allowed to extend their Marketplace apps with functionality and content in the Pipedrive UI or not
     *
     * @return self
     */
    public function setMarketplaceAppExtensionsVendor($marketplace_app_extensions_vendor): self
    {
        $this->container['marketplace_app_extensions_vendor'] = $marketplace_app_extensions_vendor;

        return $this;
    }

    /**
     * Gets marketplace_team
     *
     * @return bool|null
     */
    public function getMarketplaceTeam()
    {
        return $this->container['marketplace_team'];
    }

    /**
     * Sets marketplace_team
     *
     * @param bool|null $marketplace_team If the vendors are allowed to be part of the Marketplace team or not
     *
     * @return self
     */
    public function setMarketplaceTeam($marketplace_team): self
    {
        $this->container['marketplace_team'] = $marketplace_team;

        return $this;
    }

    /**
     * Gets list_limit
     *
     * @return float|null
     */
    public function getListLimit()
    {
        return $this->container['list_limit'];
    }

    /**
     * Sets list_limit
     *
     * @param float|null $list_limit The number of results shown in list by default
     *
     * @return self
     */
    public function setListLimit($list_limit): self
    {
        $this->container['list_limit'] = $list_limit;

        return $this;
    }

    /**
     * Gets beta_app
     *
     * @return bool|null
     */
    public function getBetaApp()
    {
        return $this->container['beta_app'];
    }

    /**
     * Sets beta_app
     *
     * @param bool|null $beta_app Whether beta app is enabled
     *
     * @return self
     */
    public function setBetaApp($beta_app): self
    {
        $this->container['beta_app'] = $beta_app;

        return $this;
    }

    /**
     * Gets prevent_salesphone_callto_override
     *
     * @return bool|null
     */
    public function getPreventSalesphoneCalltoOverride()
    {
        return $this->container['prevent_salesphone_callto_override'];
    }

    /**
     * Sets prevent_salesphone_callto_override
     *
     * @param bool|null $prevent_salesphone_callto_override Prevent salesphone call to override
     *
     * @return self
     */
    public function setPreventSalesphoneCalltoOverride($prevent_salesphone_callto_override): self
    {
        $this->container['prevent_salesphone_callto_override'] = $prevent_salesphone_callto_override;

        return $this;
    }

    /**
     * Gets file_upload_destination
     *
     * @return string|null
     */
    public function getFileUploadDestination()
    {
        return $this->container['file_upload_destination'];
    }

    /**
     * Sets file_upload_destination
     *
     * @param string|null $file_upload_destination The destination of file upload
     *
     * @return self
     */
    public function setFileUploadDestination($file_upload_destination): self
    {
        $this->container['file_upload_destination'] = $file_upload_destination;

        return $this;
    }

    /**
     * Gets callto_link_syntax
     *
     * @return string|null
     */
    public function getCalltoLinkSyntax()
    {
        return $this->container['callto_link_syntax'];
    }

    /**
     * Sets callto_link_syntax
     *
     * @param string|null $callto_link_syntax The call to link syntax
     *
     * @return self
     */
    public function setCalltoLinkSyntax($callto_link_syntax): self
    {
        $this->container['callto_link_syntax'] = $callto_link_syntax;

        return $this;
    }

    /**
     * Gets autofill_deal_expected_close_date
     *
     * @return bool|null
     */
    public function getAutofillDealExpectedCloseDate()
    {
        return $this->container['autofill_deal_expected_close_date'];
    }

    /**
     * Sets autofill_deal_expected_close_date
     *
     * @param bool|null $autofill_deal_expected_close_date Whether the expected close date of the deal is filled automatically or not
     *
     * @return self
     */
    public function setAutofillDealExpectedCloseDate($autofill_deal_expected_close_date): self
    {
        $this->container['autofill_deal_expected_close_date'] = $autofill_deal_expected_close_date;

        return $this;
    }

    /**
     * Gets person_duplicate_condition
     *
     * @return string|null
     */
    public function getPersonDuplicateCondition()
    {
        return $this->container['person_duplicate_condition'];
    }

    /**
     * Sets person_duplicate_condition
     *
     * @param string|null $person_duplicate_condition Allow the vendors to duplicate a person
     *
     * @return self
     */
    public function setPersonDuplicateCondition($person_duplicate_condition): self
    {
        $this->container['person_duplicate_condition'] = $person_duplicate_condition;

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


