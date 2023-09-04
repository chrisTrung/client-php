<?php
/**
 * ProductBaseDeal
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
 * ProductBaseDeal Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductBaseDeal implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductBaseDeal';

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
        'creator_user_id' => 'int',
        'user_id' => 'int',
        'person_id' => 'int',
        'org_id' => 'int',
        'stage_id' => 'int',
        'title' => 'string',
        'value' => 'float',
        'currency' => 'string',
        'add_time' => 'string',
        'first_add_time' => 'string',
        'update_time' => 'string',
        'stage_change_time' => 'string',
        'active' => 'bool',
        'deleted' => 'bool',
        'status' => 'string',
        'probability' => 'float',
        'next_activity_date' => 'string',
        'next_activity_time' => 'string',
        'next_activity_id' => 'int',
        'last_activity_id' => 'int',
        'last_activity_date' => 'string',
        'lost_reason' => 'string',
        'visible_to' => 'string',
        'close_time' => 'string',
        'pipeline_id' => 'int',
        'won_time' => 'string',
        'first_won_time' => 'string',
        'lost_time' => 'string',
        'products_count' => 'int',
        'files_count' => 'int',
        'notes_count' => 'int',
        'followers_count' => 'int',
        'email_messages_count' => 'int',
        'activities_count' => 'int',
        'done_activities_count' => 'int',
        'undone_activities_count' => 'int',
        'participants_count' => 'int',
        'expected_close_date' => '\DateTime',
        'last_incoming_mail_time' => 'string',
        'last_outgoing_mail_time' => 'string',
        'label' => 'string'
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
        'creator_user_id' => null,
        'user_id' => null,
        'person_id' => null,
        'org_id' => null,
        'stage_id' => null,
        'title' => null,
        'value' => null,
        'currency' => null,
        'add_time' => null,
        'first_add_time' => null,
        'update_time' => null,
        'stage_change_time' => null,
        'active' => null,
        'deleted' => null,
        'status' => null,
        'probability' => null,
        'next_activity_date' => null,
        'next_activity_time' => null,
        'next_activity_id' => null,
        'last_activity_id' => null,
        'last_activity_date' => null,
        'lost_reason' => null,
        'visible_to' => null,
        'close_time' => null,
        'pipeline_id' => null,
        'won_time' => null,
        'first_won_time' => null,
        'lost_time' => null,
        'products_count' => null,
        'files_count' => null,
        'notes_count' => null,
        'followers_count' => null,
        'email_messages_count' => null,
        'activities_count' => null,
        'done_activities_count' => null,
        'undone_activities_count' => null,
        'participants_count' => null,
        'expected_close_date' => 'date',
        'last_incoming_mail_time' => null,
        'last_outgoing_mail_time' => null,
        'label' => null
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
        'creator_user_id' => 'creator_user_id',
        'user_id' => 'user_id',
        'person_id' => 'person_id',
        'org_id' => 'org_id',
        'stage_id' => 'stage_id',
        'title' => 'title',
        'value' => 'value',
        'currency' => 'currency',
        'add_time' => 'add_time',
        'first_add_time' => 'first_add_time',
        'update_time' => 'update_time',
        'stage_change_time' => 'stage_change_time',
        'active' => 'active',
        'deleted' => 'deleted',
        'status' => 'status',
        'probability' => 'probability',
        'next_activity_date' => 'next_activity_date',
        'next_activity_time' => 'next_activity_time',
        'next_activity_id' => 'next_activity_id',
        'last_activity_id' => 'last_activity_id',
        'last_activity_date' => 'last_activity_date',
        'lost_reason' => 'lost_reason',
        'visible_to' => 'visible_to',
        'close_time' => 'close_time',
        'pipeline_id' => 'pipeline_id',
        'won_time' => 'won_time',
        'first_won_time' => 'first_won_time',
        'lost_time' => 'lost_time',
        'products_count' => 'products_count',
        'files_count' => 'files_count',
        'notes_count' => 'notes_count',
        'followers_count' => 'followers_count',
        'email_messages_count' => 'email_messages_count',
        'activities_count' => 'activities_count',
        'done_activities_count' => 'done_activities_count',
        'undone_activities_count' => 'undone_activities_count',
        'participants_count' => 'participants_count',
        'expected_close_date' => 'expected_close_date',
        'last_incoming_mail_time' => 'last_incoming_mail_time',
        'last_outgoing_mail_time' => 'last_outgoing_mail_time',
        'label' => 'label'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'company_id' => 'setCompanyId',
        'creator_user_id' => 'setCreatorUserId',
        'user_id' => 'setUserId',
        'person_id' => 'setPersonId',
        'org_id' => 'setOrgId',
        'stage_id' => 'setStageId',
        'title' => 'setTitle',
        'value' => 'setValue',
        'currency' => 'setCurrency',
        'add_time' => 'setAddTime',
        'first_add_time' => 'setFirstAddTime',
        'update_time' => 'setUpdateTime',
        'stage_change_time' => 'setStageChangeTime',
        'active' => 'setActive',
        'deleted' => 'setDeleted',
        'status' => 'setStatus',
        'probability' => 'setProbability',
        'next_activity_date' => 'setNextActivityDate',
        'next_activity_time' => 'setNextActivityTime',
        'next_activity_id' => 'setNextActivityId',
        'last_activity_id' => 'setLastActivityId',
        'last_activity_date' => 'setLastActivityDate',
        'lost_reason' => 'setLostReason',
        'visible_to' => 'setVisibleTo',
        'close_time' => 'setCloseTime',
        'pipeline_id' => 'setPipelineId',
        'won_time' => 'setWonTime',
        'first_won_time' => 'setFirstWonTime',
        'lost_time' => 'setLostTime',
        'products_count' => 'setProductsCount',
        'files_count' => 'setFilesCount',
        'notes_count' => 'setNotesCount',
        'followers_count' => 'setFollowersCount',
        'email_messages_count' => 'setEmailMessagesCount',
        'activities_count' => 'setActivitiesCount',
        'done_activities_count' => 'setDoneActivitiesCount',
        'undone_activities_count' => 'setUndoneActivitiesCount',
        'participants_count' => 'setParticipantsCount',
        'expected_close_date' => 'setExpectedCloseDate',
        'last_incoming_mail_time' => 'setLastIncomingMailTime',
        'last_outgoing_mail_time' => 'setLastOutgoingMailTime',
        'label' => 'setLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'company_id' => 'getCompanyId',
        'creator_user_id' => 'getCreatorUserId',
        'user_id' => 'getUserId',
        'person_id' => 'getPersonId',
        'org_id' => 'getOrgId',
        'stage_id' => 'getStageId',
        'title' => 'getTitle',
        'value' => 'getValue',
        'currency' => 'getCurrency',
        'add_time' => 'getAddTime',
        'first_add_time' => 'getFirstAddTime',
        'update_time' => 'getUpdateTime',
        'stage_change_time' => 'getStageChangeTime',
        'active' => 'getActive',
        'deleted' => 'getDeleted',
        'status' => 'getStatus',
        'probability' => 'getProbability',
        'next_activity_date' => 'getNextActivityDate',
        'next_activity_time' => 'getNextActivityTime',
        'next_activity_id' => 'getNextActivityId',
        'last_activity_id' => 'getLastActivityId',
        'last_activity_date' => 'getLastActivityDate',
        'lost_reason' => 'getLostReason',
        'visible_to' => 'getVisibleTo',
        'close_time' => 'getCloseTime',
        'pipeline_id' => 'getPipelineId',
        'won_time' => 'getWonTime',
        'first_won_time' => 'getFirstWonTime',
        'lost_time' => 'getLostTime',
        'products_count' => 'getProductsCount',
        'files_count' => 'getFilesCount',
        'notes_count' => 'getNotesCount',
        'followers_count' => 'getFollowersCount',
        'email_messages_count' => 'getEmailMessagesCount',
        'activities_count' => 'getActivitiesCount',
        'done_activities_count' => 'getDoneActivitiesCount',
        'undone_activities_count' => 'getUndoneActivitiesCount',
        'participants_count' => 'getParticipantsCount',
        'expected_close_date' => 'getExpectedCloseDate',
        'last_incoming_mail_time' => 'getLastIncomingMailTime',
        'last_outgoing_mail_time' => 'getLastOutgoingMailTime',
        'label' => 'getLabel'
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
        $this->container['creator_user_id'] = $data['creator_user_id'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['person_id'] = $data['person_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['stage_id'] = $data['stage_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['first_add_time'] = $data['first_add_time'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['stage_change_time'] = $data['stage_change_time'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['probability'] = $data['probability'] ?? null;
        $this->container['next_activity_date'] = $data['next_activity_date'] ?? null;
        $this->container['next_activity_time'] = $data['next_activity_time'] ?? null;
        $this->container['next_activity_id'] = $data['next_activity_id'] ?? null;
        $this->container['last_activity_id'] = $data['last_activity_id'] ?? null;
        $this->container['last_activity_date'] = $data['last_activity_date'] ?? null;
        $this->container['lost_reason'] = $data['lost_reason'] ?? null;
        $this->container['visible_to'] = $data['visible_to'] ?? null;
        $this->container['close_time'] = $data['close_time'] ?? null;
        $this->container['pipeline_id'] = $data['pipeline_id'] ?? null;
        $this->container['won_time'] = $data['won_time'] ?? null;
        $this->container['first_won_time'] = $data['first_won_time'] ?? null;
        $this->container['lost_time'] = $data['lost_time'] ?? null;
        $this->container['products_count'] = $data['products_count'] ?? null;
        $this->container['files_count'] = $data['files_count'] ?? null;
        $this->container['notes_count'] = $data['notes_count'] ?? null;
        $this->container['followers_count'] = $data['followers_count'] ?? null;
        $this->container['email_messages_count'] = $data['email_messages_count'] ?? null;
        $this->container['activities_count'] = $data['activities_count'] ?? null;
        $this->container['done_activities_count'] = $data['done_activities_count'] ?? null;
        $this->container['undone_activities_count'] = $data['undone_activities_count'] ?? null;
        $this->container['participants_count'] = $data['participants_count'] ?? null;
        $this->container['expected_close_date'] = $data['expected_close_date'] ?? null;
        $this->container['last_incoming_mail_time'] = $data['last_incoming_mail_time'] ?? null;
        $this->container['last_outgoing_mail_time'] = $data['last_outgoing_mail_time'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
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
     * @param int|null $id The ID of the deal
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
     * Gets creator_user_id
     *
     * @return int|null
     */
    public function getCreatorUserId()
    {
        return $this->container['creator_user_id'];
    }

    /**
     * Sets creator_user_id
     *
     * @param int|null $creator_user_id The ID of the deal creator
     *
     * @return self
     */
    public function setCreatorUserId($creator_user_id): self
    {
        $this->container['creator_user_id'] = $creator_user_id;

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
     * @param int|null $user_id The ID of the user
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int|null
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int|null $person_id The ID of the person associated with the deal
     *
     * @return self
     */
    public function setPersonId($person_id): self
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets org_id
     *
     * @return int|null
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param int|null $org_id The ID of the organization associated with the deal
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return int|null
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param int|null $stage_id The ID of the deal stage
     *
     * @return self
     */
    public function setStageId($stage_id): self
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the deal
     *
     * @return self
     */
    public function setTitle($title): self
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value The value of the deal
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency associated with the deal
     *
     * @return self
     */
    public function setCurrency($currency): self
    {
        $this->container['currency'] = $currency;

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
     * @param string|null $add_time The creation date and time of the deal
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets first_add_time
     *
     * @return string|null
     */
    public function getFirstAddTime()
    {
        return $this->container['first_add_time'];
    }

    /**
     * Sets first_add_time
     *
     * @param string|null $first_add_time The first creation date and time of the deal
     *
     * @return self
     */
    public function setFirstAddTime($first_add_time): self
    {
        $this->container['first_add_time'] = $first_add_time;

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
     * @param string|null $update_time The last updated date and time of the deal
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets stage_change_time
     *
     * @return string|null
     */
    public function getStageChangeTime()
    {
        return $this->container['stage_change_time'];
    }

    /**
     * Sets stage_change_time
     *
     * @param string|null $stage_change_time The last updated date and time of the deal stage
     *
     * @return self
     */
    public function setStageChangeTime($stage_change_time): self
    {
        $this->container['stage_change_time'] = $stage_change_time;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether the deal is active or not
     *
     * @return self
     */
    public function setActive($active): self
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted Whether the deal is deleted or not
     *
     * @return self
     */
    public function setDeleted($deleted): self
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the deal
     *
     * @return self
     */
    public function setStatus($status): self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float|null
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float|null $probability The success probability percentage of the deal
     *
     * @return self
     */
    public function setProbability($probability): self
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets next_activity_date
     *
     * @return string|null
     */
    public function getNextActivityDate()
    {
        return $this->container['next_activity_date'];
    }

    /**
     * Sets next_activity_date
     *
     * @param string|null $next_activity_date The date of the next activity associated with the deal
     *
     * @return self
     */
    public function setNextActivityDate($next_activity_date): self
    {
        $this->container['next_activity_date'] = $next_activity_date;

        return $this;
    }

    /**
     * Gets next_activity_time
     *
     * @return string|null
     */
    public function getNextActivityTime()
    {
        return $this->container['next_activity_time'];
    }

    /**
     * Sets next_activity_time
     *
     * @param string|null $next_activity_time The time of the next activity associated with the deal
     *
     * @return self
     */
    public function setNextActivityTime($next_activity_time): self
    {
        $this->container['next_activity_time'] = $next_activity_time;

        return $this;
    }

    /**
     * Gets next_activity_id
     *
     * @return int|null
     */
    public function getNextActivityId()
    {
        return $this->container['next_activity_id'];
    }

    /**
     * Sets next_activity_id
     *
     * @param int|null $next_activity_id The ID of the next activity associated with the deal
     *
     * @return self
     */
    public function setNextActivityId($next_activity_id): self
    {
        $this->container['next_activity_id'] = $next_activity_id;

        return $this;
    }

    /**
     * Gets last_activity_id
     *
     * @return int|null
     */
    public function getLastActivityId()
    {
        return $this->container['last_activity_id'];
    }

    /**
     * Sets last_activity_id
     *
     * @param int|null $last_activity_id The ID of the last activity associated with the deal
     *
     * @return self
     */
    public function setLastActivityId($last_activity_id): self
    {
        $this->container['last_activity_id'] = $last_activity_id;

        return $this;
    }

    /**
     * Gets last_activity_date
     *
     * @return string|null
     */
    public function getLastActivityDate()
    {
        return $this->container['last_activity_date'];
    }

    /**
     * Sets last_activity_date
     *
     * @param string|null $last_activity_date The date of the last activity associated with the deal
     *
     * @return self
     */
    public function setLastActivityDate($last_activity_date): self
    {
        $this->container['last_activity_date'] = $last_activity_date;

        return $this;
    }

    /**
     * Gets lost_reason
     *
     * @return string|null
     */
    public function getLostReason()
    {
        return $this->container['lost_reason'];
    }

    /**
     * Sets lost_reason
     *
     * @param string|null $lost_reason The reason for losing the deal
     *
     * @return self
     */
    public function setLostReason($lost_reason): self
    {
        $this->container['lost_reason'] = $lost_reason;

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
     * @param string|null $visible_to The visibility of the deal
     *
     * @return self
     */
    public function setVisibleTo($visible_to): self
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets close_time
     *
     * @return string|null
     */
    public function getCloseTime()
    {
        return $this->container['close_time'];
    }

    /**
     * Sets close_time
     *
     * @param string|null $close_time The date and time of closing the deal
     *
     * @return self
     */
    public function setCloseTime($close_time): self
    {
        $this->container['close_time'] = $close_time;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return int|null
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int|null $pipeline_id The ID of the pipeline associated with the deal
     *
     * @return self
     */
    public function setPipelineId($pipeline_id): self
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets won_time
     *
     * @return string|null
     */
    public function getWonTime()
    {
        return $this->container['won_time'];
    }

    /**
     * Sets won_time
     *
     * @param string|null $won_time The date and time of changing the deal status as won
     *
     * @return self
     */
    public function setWonTime($won_time): self
    {
        $this->container['won_time'] = $won_time;

        return $this;
    }

    /**
     * Gets first_won_time
     *
     * @return string|null
     */
    public function getFirstWonTime()
    {
        return $this->container['first_won_time'];
    }

    /**
     * Sets first_won_time
     *
     * @param string|null $first_won_time The date and time of the first time changing the deal status as won
     *
     * @return self
     */
    public function setFirstWonTime($first_won_time): self
    {
        $this->container['first_won_time'] = $first_won_time;

        return $this;
    }

    /**
     * Gets lost_time
     *
     * @return string|null
     */
    public function getLostTime()
    {
        return $this->container['lost_time'];
    }

    /**
     * Sets lost_time
     *
     * @param string|null $lost_time The date and time of changing the deal status as lost
     *
     * @return self
     */
    public function setLostTime($lost_time): self
    {
        $this->container['lost_time'] = $lost_time;

        return $this;
    }

    /**
     * Gets products_count
     *
     * @return int|null
     */
    public function getProductsCount()
    {
        return $this->container['products_count'];
    }

    /**
     * Sets products_count
     *
     * @param int|null $products_count The number of products associated with the deal
     *
     * @return self
     */
    public function setProductsCount($products_count): self
    {
        $this->container['products_count'] = $products_count;

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
     * @param int|null $files_count The number of files associated with the deal
     *
     * @return self
     */
    public function setFilesCount($files_count): self
    {
        $this->container['files_count'] = $files_count;

        return $this;
    }

    /**
     * Gets notes_count
     *
     * @return int|null
     */
    public function getNotesCount()
    {
        return $this->container['notes_count'];
    }

    /**
     * Sets notes_count
     *
     * @param int|null $notes_count The number of notes associated with the deal
     *
     * @return self
     */
    public function setNotesCount($notes_count): self
    {
        $this->container['notes_count'] = $notes_count;

        return $this;
    }

    /**
     * Gets followers_count
     *
     * @return int|null
     */
    public function getFollowersCount()
    {
        return $this->container['followers_count'];
    }

    /**
     * Sets followers_count
     *
     * @param int|null $followers_count The number of followers associated with the deal
     *
     * @return self
     */
    public function setFollowersCount($followers_count): self
    {
        $this->container['followers_count'] = $followers_count;

        return $this;
    }

    /**
     * Gets email_messages_count
     *
     * @return int|null
     */
    public function getEmailMessagesCount()
    {
        return $this->container['email_messages_count'];
    }

    /**
     * Sets email_messages_count
     *
     * @param int|null $email_messages_count The number of emails associated with the deal
     *
     * @return self
     */
    public function setEmailMessagesCount($email_messages_count): self
    {
        $this->container['email_messages_count'] = $email_messages_count;

        return $this;
    }

    /**
     * Gets activities_count
     *
     * @return int|null
     */
    public function getActivitiesCount()
    {
        return $this->container['activities_count'];
    }

    /**
     * Sets activities_count
     *
     * @param int|null $activities_count The number of activities associated with the deal
     *
     * @return self
     */
    public function setActivitiesCount($activities_count): self
    {
        $this->container['activities_count'] = $activities_count;

        return $this;
    }

    /**
     * Gets done_activities_count
     *
     * @return int|null
     */
    public function getDoneActivitiesCount()
    {
        return $this->container['done_activities_count'];
    }

    /**
     * Sets done_activities_count
     *
     * @param int|null $done_activities_count The number of completed activities associated with the deal
     *
     * @return self
     */
    public function setDoneActivitiesCount($done_activities_count): self
    {
        $this->container['done_activities_count'] = $done_activities_count;

        return $this;
    }

    /**
     * Gets undone_activities_count
     *
     * @return int|null
     */
    public function getUndoneActivitiesCount()
    {
        return $this->container['undone_activities_count'];
    }

    /**
     * Sets undone_activities_count
     *
     * @param int|null $undone_activities_count The number of incomplete activities associated with the deal
     *
     * @return self
     */
    public function setUndoneActivitiesCount($undone_activities_count): self
    {
        $this->container['undone_activities_count'] = $undone_activities_count;

        return $this;
    }

    /**
     * Gets participants_count
     *
     * @return int|null
     */
    public function getParticipantsCount()
    {
        return $this->container['participants_count'];
    }

    /**
     * Sets participants_count
     *
     * @param int|null $participants_count The number of participants associated with the deal
     *
     * @return self
     */
    public function setParticipantsCount($participants_count): self
    {
        $this->container['participants_count'] = $participants_count;

        return $this;
    }

    /**
     * Gets expected_close_date
     *
     * @return \DateTime|null
     */
    public function getExpectedCloseDate()
    {
        return $this->container['expected_close_date'];
    }

    /**
     * Sets expected_close_date
     *
     * @param \DateTime|null $expected_close_date The expected close date of the deal
     *
     * @return self
     */
    public function setExpectedCloseDate($expected_close_date): self
    {
        $this->container['expected_close_date'] = $expected_close_date;

        return $this;
    }

    /**
     * Gets last_incoming_mail_time
     *
     * @return string|null
     */
    public function getLastIncomingMailTime()
    {
        return $this->container['last_incoming_mail_time'];
    }

    /**
     * Sets last_incoming_mail_time
     *
     * @param string|null $last_incoming_mail_time The date and time of the last incoming email associated with the deal
     *
     * @return self
     */
    public function setLastIncomingMailTime($last_incoming_mail_time): self
    {
        $this->container['last_incoming_mail_time'] = $last_incoming_mail_time;

        return $this;
    }

    /**
     * Gets last_outgoing_mail_time
     *
     * @return string|null
     */
    public function getLastOutgoingMailTime()
    {
        return $this->container['last_outgoing_mail_time'];
    }

    /**
     * Sets last_outgoing_mail_time
     *
     * @param string|null $last_outgoing_mail_time The date and time of the last outgoing email associated with the deal
     *
     * @return self
     */
    public function setLastOutgoingMailTime($last_outgoing_mail_time): self
    {
        $this->container['last_outgoing_mail_time'] = $last_outgoing_mail_time;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The label or multiple labels assigned to the deal
     *
     * @return self
     */
    public function setLabel($label): self
    {
        $this->container['label'] = $label;

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


