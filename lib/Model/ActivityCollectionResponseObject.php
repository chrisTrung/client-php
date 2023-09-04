<?php
/**
 * ActivityCollectionResponseObject
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
 * ActivityCollectionResponseObject Class Doc Comment
 *
 * @category Class
 * @package  Pipedrive
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityCollectionResponseObject implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ActivityCollectionResponseObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string>
      * @phpsalm-var array<string, string>
      */
    protected static array $openAPITypes = [
        'due_date' => '\DateTime',
        'due_time' => 'string',
        'duration' => 'string',
        'deal_id' => 'int',
        'lead_id' => 'string',
        'person_id' => 'int',
        'project_id' => 'int',
        'org_id' => 'int',
        'location' => 'string',
        'public_description' => 'string',
        'id' => 'int',
        'done' => 'bool',
        'subject' => 'string',
        'type' => 'string',
        'user_id' => 'int',
        'busy_flag' => 'bool',
        'company_id' => 'int',
        'conference_meeting_client' => 'string',
        'conference_meeting_url' => 'string',
        'conference_meeting_id' => 'string',
        'add_time' => 'string',
        'marked_as_done_time' => 'string',
        'active_flag' => 'bool',
        'update_time' => 'string',
        'update_user_id' => 'int',
        'source_timezone' => 'string',
        'location_subpremise' => 'string',
        'location_street_number' => 'string',
        'location_route' => 'string',
        'location_sublocality' => 'string',
        'location_locality' => 'string',
        'location_admin_area_level_1' => 'string',
        'location_admin_area_level_2' => 'string',
        'location_country' => 'string',
        'location_postal_code' => 'string',
        'location_formatted_address' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'due_date' => 'date',
        'due_time' => null,
        'duration' => null,
        'deal_id' => null,
        'lead_id' => 'uuid',
        'person_id' => null,
        'project_id' => null,
        'org_id' => null,
        'location' => null,
        'public_description' => null,
        'id' => null,
        'done' => null,
        'subject' => null,
        'type' => null,
        'user_id' => null,
        'busy_flag' => null,
        'company_id' => null,
        'conference_meeting_client' => null,
        'conference_meeting_url' => null,
        'conference_meeting_id' => null,
        'add_time' => null,
        'marked_as_done_time' => null,
        'active_flag' => null,
        'update_time' => null,
        'update_user_id' => null,
        'source_timezone' => null,
        'location_subpremise' => null,
        'location_street_number' => null,
        'location_route' => null,
        'location_sublocality' => null,
        'location_locality' => null,
        'location_admin_area_level_1' => null,
        'location_admin_area_level_2' => null,
        'location_country' => null,
        'location_postal_code' => null,
        'location_formatted_address' => null
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
        'due_date' => 'due_date',
        'due_time' => 'due_time',
        'duration' => 'duration',
        'deal_id' => 'deal_id',
        'lead_id' => 'lead_id',
        'person_id' => 'person_id',
        'project_id' => 'project_id',
        'org_id' => 'org_id',
        'location' => 'location',
        'public_description' => 'public_description',
        'id' => 'id',
        'done' => 'done',
        'subject' => 'subject',
        'type' => 'type',
        'user_id' => 'user_id',
        'busy_flag' => 'busy_flag',
        'company_id' => 'company_id',
        'conference_meeting_client' => 'conference_meeting_client',
        'conference_meeting_url' => 'conference_meeting_url',
        'conference_meeting_id' => 'conference_meeting_id',
        'add_time' => 'add_time',
        'marked_as_done_time' => 'marked_as_done_time',
        'active_flag' => 'active_flag',
        'update_time' => 'update_time',
        'update_user_id' => 'update_user_id',
        'source_timezone' => 'source_timezone',
        'location_subpremise' => 'location_subpremise',
        'location_street_number' => 'location_street_number',
        'location_route' => 'location_route',
        'location_sublocality' => 'location_sublocality',
        'location_locality' => 'location_locality',
        'location_admin_area_level_1' => 'location_admin_area_level_1',
        'location_admin_area_level_2' => 'location_admin_area_level_2',
        'location_country' => 'location_country',
        'location_postal_code' => 'location_postal_code',
        'location_formatted_address' => 'location_formatted_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'due_date' => 'setDueDate',
        'due_time' => 'setDueTime',
        'duration' => 'setDuration',
        'deal_id' => 'setDealId',
        'lead_id' => 'setLeadId',
        'person_id' => 'setPersonId',
        'project_id' => 'setProjectId',
        'org_id' => 'setOrgId',
        'location' => 'setLocation',
        'public_description' => 'setPublicDescription',
        'id' => 'setId',
        'done' => 'setDone',
        'subject' => 'setSubject',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'busy_flag' => 'setBusyFlag',
        'company_id' => 'setCompanyId',
        'conference_meeting_client' => 'setConferenceMeetingClient',
        'conference_meeting_url' => 'setConferenceMeetingUrl',
        'conference_meeting_id' => 'setConferenceMeetingId',
        'add_time' => 'setAddTime',
        'marked_as_done_time' => 'setMarkedAsDoneTime',
        'active_flag' => 'setActiveFlag',
        'update_time' => 'setUpdateTime',
        'update_user_id' => 'setUpdateUserId',
        'source_timezone' => 'setSourceTimezone',
        'location_subpremise' => 'setLocationSubpremise',
        'location_street_number' => 'setLocationStreetNumber',
        'location_route' => 'setLocationRoute',
        'location_sublocality' => 'setLocationSublocality',
        'location_locality' => 'setLocationLocality',
        'location_admin_area_level_1' => 'setLocationAdminAreaLevel1',
        'location_admin_area_level_2' => 'setLocationAdminAreaLevel2',
        'location_country' => 'setLocationCountry',
        'location_postal_code' => 'setLocationPostalCode',
        'location_formatted_address' => 'setLocationFormattedAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'due_date' => 'getDueDate',
        'due_time' => 'getDueTime',
        'duration' => 'getDuration',
        'deal_id' => 'getDealId',
        'lead_id' => 'getLeadId',
        'person_id' => 'getPersonId',
        'project_id' => 'getProjectId',
        'org_id' => 'getOrgId',
        'location' => 'getLocation',
        'public_description' => 'getPublicDescription',
        'id' => 'getId',
        'done' => 'getDone',
        'subject' => 'getSubject',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'busy_flag' => 'getBusyFlag',
        'company_id' => 'getCompanyId',
        'conference_meeting_client' => 'getConferenceMeetingClient',
        'conference_meeting_url' => 'getConferenceMeetingUrl',
        'conference_meeting_id' => 'getConferenceMeetingId',
        'add_time' => 'getAddTime',
        'marked_as_done_time' => 'getMarkedAsDoneTime',
        'active_flag' => 'getActiveFlag',
        'update_time' => 'getUpdateTime',
        'update_user_id' => 'getUpdateUserId',
        'source_timezone' => 'getSourceTimezone',
        'location_subpremise' => 'getLocationSubpremise',
        'location_street_number' => 'getLocationStreetNumber',
        'location_route' => 'getLocationRoute',
        'location_sublocality' => 'getLocationSublocality',
        'location_locality' => 'getLocationLocality',
        'location_admin_area_level_1' => 'getLocationAdminAreaLevel1',
        'location_admin_area_level_2' => 'getLocationAdminAreaLevel2',
        'location_country' => 'getLocationCountry',
        'location_postal_code' => 'getLocationPostalCode',
        'location_formatted_address' => 'getLocationFormattedAddress'
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
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['due_time'] = $data['due_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['deal_id'] = $data['deal_id'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['person_id'] = $data['person_id'] ?? null;
        $this->container['project_id'] = $data['project_id'] ?? null;
        $this->container['org_id'] = $data['org_id'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['public_description'] = $data['public_description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['done'] = $data['done'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['busy_flag'] = $data['busy_flag'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['conference_meeting_client'] = $data['conference_meeting_client'] ?? null;
        $this->container['conference_meeting_url'] = $data['conference_meeting_url'] ?? null;
        $this->container['conference_meeting_id'] = $data['conference_meeting_id'] ?? null;
        $this->container['add_time'] = $data['add_time'] ?? null;
        $this->container['marked_as_done_time'] = $data['marked_as_done_time'] ?? null;
        $this->container['active_flag'] = $data['active_flag'] ?? null;
        $this->container['update_time'] = $data['update_time'] ?? null;
        $this->container['update_user_id'] = $data['update_user_id'] ?? null;
        $this->container['source_timezone'] = $data['source_timezone'] ?? null;
        $this->container['location_subpremise'] = $data['location_subpremise'] ?? null;
        $this->container['location_street_number'] = $data['location_street_number'] ?? null;
        $this->container['location_route'] = $data['location_route'] ?? null;
        $this->container['location_sublocality'] = $data['location_sublocality'] ?? null;
        $this->container['location_locality'] = $data['location_locality'] ?? null;
        $this->container['location_admin_area_level_1'] = $data['location_admin_area_level_1'] ?? null;
        $this->container['location_admin_area_level_2'] = $data['location_admin_area_level_2'] ?? null;
        $this->container['location_country'] = $data['location_country'] ?? null;
        $this->container['location_postal_code'] = $data['location_postal_code'] ?? null;
        $this->container['location_formatted_address'] = $data['location_formatted_address'] ?? null;
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
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date The due date of the activity. Format: YYYY-MM-DD
     *
     * @return self
     */
    public function setDueDate($due_date): self
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets due_time
     *
     * @return string|null
     */
    public function getDueTime()
    {
        return $this->container['due_time'];
    }

    /**
     * Sets due_time
     *
     * @param string|null $due_time The due time of the activity in UTC. Format: HH:MM
     *
     * @return self
     */
    public function setDueTime($due_time): self
    {
        $this->container['due_time'] = $due_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string|null $duration The duration of the activity. Format: HH:MM
     *
     * @return self
     */
    public function setDuration($duration): self
    {
        $this->container['duration'] = $duration;

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
     * @param int|null $deal_id The ID of the deal this activity is associated with
     *
     * @return self
     */
    public function setDealId($deal_id): self
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param string|null $lead_id The ID of the lead in the UUID format this activity is associated with
     *
     * @return self
     */
    public function setLeadId($lead_id): self
    {
        $this->container['lead_id'] = $lead_id;

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
     * @param int|null $person_id The ID of the person this activity is associated with
     *
     * @return self
     */
    public function setPersonId($person_id): self
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int|null $project_id The ID of the project this activity is associated with
     *
     * @return self
     */
    public function setProjectId($project_id): self
    {
        $this->container['project_id'] = $project_id;

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
     * @param int|null $org_id The ID of the organization this activity is associated with
     *
     * @return self
     */
    public function setOrgId($org_id): self
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location The address of the activity. Pipedrive will automatically check if the location matches a geo-location on Google maps.
     *
     * @return self
     */
    public function setLocation($location): self
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets public_description
     *
     * @return string|null
     */
    public function getPublicDescription()
    {
        return $this->container['public_description'];
    }

    /**
     * Sets public_description
     *
     * @param string|null $public_description Additional details about the activity that is synced to your external calendar. Unlike the note added to the activity, the description is publicly visible to any guests added to the activity.
     *
     * @return self
     */
    public function setPublicDescription($public_description): self
    {
        $this->container['public_description'] = $public_description;

        return $this;
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
     * @param int|null $id The ID of the activity, generated when the activity was created
     *
     * @return self
     */
    public function setId($id): self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets done
     *
     * @return bool|null
     */
    public function getDone()
    {
        return $this->container['done'];
    }

    /**
     * Sets done
     *
     * @param bool|null $done Whether the activity is done or not
     *
     * @return self
     */
    public function setDone($done): self
    {
        $this->container['done'] = $done;

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
     * @param string|null $subject The subject of the activity
     *
     * @return self
     */
    public function setSubject($subject): self
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the activity. This is in correlation with the `key_string` parameter of ActivityTypes.
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->container['type'] = $type;

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
     * @param int|null $user_id The ID of the user whom the activity is assigned to
     *
     * @return self
     */
    public function setUserId($user_id): self
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets busy_flag
     *
     * @return bool|null
     */
    public function getBusyFlag()
    {
        return $this->container['busy_flag'];
    }

    /**
     * Sets busy_flag
     *
     * @param bool|null $busy_flag Marks if the activity is set as 'Busy' or 'Free'. If the flag is set to `true`, your customers will not be able to book that time slot through any Scheduler links. The flag can also be unset. When the value of the flag is unset (`null`), the flag defaults to 'Busy' if it has a time set, and 'Free' if it is an all-day event without specified time.
     *
     * @return self
     */
    public function setBusyFlag($busy_flag): self
    {
        $this->container['busy_flag'] = $busy_flag;

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
     * @param int|null $company_id The user's company ID
     *
     * @return self
     */
    public function setCompanyId($company_id): self
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets conference_meeting_client
     *
     * @return string|null
     */
    public function getConferenceMeetingClient()
    {
        return $this->container['conference_meeting_client'];
    }

    /**
     * Sets conference_meeting_client
     *
     * @param string|null $conference_meeting_client The ID of the Marketplace app, which is connected to this activity
     *
     * @return self
     */
    public function setConferenceMeetingClient($conference_meeting_client): self
    {
        $this->container['conference_meeting_client'] = $conference_meeting_client;

        return $this;
    }

    /**
     * Gets conference_meeting_url
     *
     * @return string|null
     */
    public function getConferenceMeetingUrl()
    {
        return $this->container['conference_meeting_url'];
    }

    /**
     * Sets conference_meeting_url
     *
     * @param string|null $conference_meeting_url The link to join the meeting which is associated with this activity
     *
     * @return self
     */
    public function setConferenceMeetingUrl($conference_meeting_url): self
    {
        $this->container['conference_meeting_url'] = $conference_meeting_url;

        return $this;
    }

    /**
     * Gets conference_meeting_id
     *
     * @return string|null
     */
    public function getConferenceMeetingId()
    {
        return $this->container['conference_meeting_id'];
    }

    /**
     * Sets conference_meeting_id
     *
     * @param string|null $conference_meeting_id The meeting ID of the meeting provider (Zoom, MS Teams etc.) that is associated with this activity
     *
     * @return self
     */
    public function setConferenceMeetingId($conference_meeting_id): self
    {
        $this->container['conference_meeting_id'] = $conference_meeting_id;

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
     * @param string|null $add_time The creation date and time of the activity in UTC. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setAddTime($add_time): self
    {
        $this->container['add_time'] = $add_time;

        return $this;
    }

    /**
     * Gets marked_as_done_time
     *
     * @return string|null
     */
    public function getMarkedAsDoneTime()
    {
        return $this->container['marked_as_done_time'];
    }

    /**
     * Sets marked_as_done_time
     *
     * @param string|null $marked_as_done_time The date and time this activity was marked as done. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setMarkedAsDoneTime($marked_as_done_time): self
    {
        $this->container['marked_as_done_time'] = $marked_as_done_time;

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
     * @param bool|null $active_flag Whether the activity is active or not
     *
     * @return self
     */
    public function setActiveFlag($active_flag): self
    {
        $this->container['active_flag'] = $active_flag;

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
     * @param string|null $update_time The last update date and time of the activity. Format: YYYY-MM-DD HH:MM:SS.
     *
     * @return self
     */
    public function setUpdateTime($update_time): self
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets update_user_id
     *
     * @return int|null
     */
    public function getUpdateUserId()
    {
        return $this->container['update_user_id'];
    }

    /**
     * Sets update_user_id
     *
     * @param int|null $update_user_id The ID of the user who was the last to update this activity
     *
     * @return self
     */
    public function setUpdateUserId($update_user_id): self
    {
        $this->container['update_user_id'] = $update_user_id;

        return $this;
    }

    /**
     * Gets source_timezone
     *
     * @return string|null
     */
    public function getSourceTimezone()
    {
        return $this->container['source_timezone'];
    }

    /**
     * Sets source_timezone
     *
     * @param string|null $source_timezone The timezone the activity was created in an external calendar
     *
     * @return self
     */
    public function setSourceTimezone($source_timezone): self
    {
        $this->container['source_timezone'] = $source_timezone;

        return $this;
    }

    /**
     * Gets location_subpremise
     *
     * @return string|null
     */
    public function getLocationSubpremise()
    {
        return $this->container['location_subpremise'];
    }

    /**
     * Sets location_subpremise
     *
     * @param string|null $location_subpremise A subfield of the location field. Indicates apartment/suite number.
     *
     * @return self
     */
    public function setLocationSubpremise($location_subpremise): self
    {
        $this->container['location_subpremise'] = $location_subpremise;

        return $this;
    }

    /**
     * Gets location_street_number
     *
     * @return string|null
     */
    public function getLocationStreetNumber()
    {
        return $this->container['location_street_number'];
    }

    /**
     * Sets location_street_number
     *
     * @param string|null $location_street_number A subfield of the location field. Indicates house number.
     *
     * @return self
     */
    public function setLocationStreetNumber($location_street_number): self
    {
        $this->container['location_street_number'] = $location_street_number;

        return $this;
    }

    /**
     * Gets location_route
     *
     * @return string|null
     */
    public function getLocationRoute()
    {
        return $this->container['location_route'];
    }

    /**
     * Sets location_route
     *
     * @param string|null $location_route A subfield of the location field. Indicates street name.
     *
     * @return self
     */
    public function setLocationRoute($location_route): self
    {
        $this->container['location_route'] = $location_route;

        return $this;
    }

    /**
     * Gets location_sublocality
     *
     * @return string|null
     */
    public function getLocationSublocality()
    {
        return $this->container['location_sublocality'];
    }

    /**
     * Sets location_sublocality
     *
     * @param string|null $location_sublocality A subfield of the location field. Indicates district/sublocality.
     *
     * @return self
     */
    public function setLocationSublocality($location_sublocality): self
    {
        $this->container['location_sublocality'] = $location_sublocality;

        return $this;
    }

    /**
     * Gets location_locality
     *
     * @return string|null
     */
    public function getLocationLocality()
    {
        return $this->container['location_locality'];
    }

    /**
     * Sets location_locality
     *
     * @param string|null $location_locality A subfield of the location field. Indicates city/town/village/locality.
     *
     * @return self
     */
    public function setLocationLocality($location_locality): self
    {
        $this->container['location_locality'] = $location_locality;

        return $this;
    }

    /**
     * Gets location_admin_area_level_1
     *
     * @return string|null
     */
    public function getLocationAdminAreaLevel1()
    {
        return $this->container['location_admin_area_level_1'];
    }

    /**
     * Sets location_admin_area_level_1
     *
     * @param string|null $location_admin_area_level_1 A subfield of the location field. Indicates state/county.
     *
     * @return self
     */
    public function setLocationAdminAreaLevel1($location_admin_area_level_1): self
    {
        $this->container['location_admin_area_level_1'] = $location_admin_area_level_1;

        return $this;
    }

    /**
     * Gets location_admin_area_level_2
     *
     * @return string|null
     */
    public function getLocationAdminAreaLevel2()
    {
        return $this->container['location_admin_area_level_2'];
    }

    /**
     * Sets location_admin_area_level_2
     *
     * @param string|null $location_admin_area_level_2 A subfield of the location field. Indicates region.
     *
     * @return self
     */
    public function setLocationAdminAreaLevel2($location_admin_area_level_2): self
    {
        $this->container['location_admin_area_level_2'] = $location_admin_area_level_2;

        return $this;
    }

    /**
     * Gets location_country
     *
     * @return string|null
     */
    public function getLocationCountry()
    {
        return $this->container['location_country'];
    }

    /**
     * Sets location_country
     *
     * @param string|null $location_country A subfield of the location field. Indicates country.
     *
     * @return self
     */
    public function setLocationCountry($location_country): self
    {
        $this->container['location_country'] = $location_country;

        return $this;
    }

    /**
     * Gets location_postal_code
     *
     * @return string|null
     */
    public function getLocationPostalCode()
    {
        return $this->container['location_postal_code'];
    }

    /**
     * Sets location_postal_code
     *
     * @param string|null $location_postal_code A subfield of the location field. Indicates ZIP/postal code.
     *
     * @return self
     */
    public function setLocationPostalCode($location_postal_code): self
    {
        $this->container['location_postal_code'] = $location_postal_code;

        return $this;
    }

    /**
     * Gets location_formatted_address
     *
     * @return string|null
     */
    public function getLocationFormattedAddress()
    {
        return $this->container['location_formatted_address'];
    }

    /**
     * Sets location_formatted_address
     *
     * @param string|null $location_formatted_address A subfield of the location field. Indicates full/combined address.
     *
     * @return self
     */
    public function setLocationFormattedAddress($location_formatted_address): self
    {
        $this->container['location_formatted_address'] = $location_formatted_address;

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


