# # PersonItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the person | [optional]
**company_id** | **int** | The ID of the company related to the person | [optional]
**active_flag** | **bool** | Whether the person is active or not | [optional]
**phone** | [**\Pipedrive\Model\BasePersonItemPhone[]**](BasePersonItemPhone.md) | A phone number supplied as a string or an array of phone objects related to the person. The structure of the array is as follows: &#x60;[{ \&quot;value\&quot;: \&quot;12345\&quot;, \&quot;primary\&quot;: \&quot;true\&quot;, \&quot;label\&quot;: \&quot;mobile\&quot; }]&#x60;. Please note that only &#x60;value&#x60; is required. | [optional]
**email** | [**\Pipedrive\Model\BasePersonItemEmail[]**](BasePersonItemEmail.md) | An email address as a string or an array of email objects related to the person. The structure of the array is as follows: &#x60;[{ \&quot;value\&quot;: \&quot;mail@example.com\&quot;, \&quot;primary\&quot;: \&quot;true\&quot;, \&quot;label\&quot;: \&quot;main\&quot; } ]&#x60;. Please note that only &#x60;value&#x60; is required. | [optional]
**first_char** | **string** | The first letter of the name of the person | [optional]
**add_time** | **string** | The date and time when the person was added/created. Format: YYYY-MM-DD HH:MM:SS | [optional]
**update_time** | **string** | The last updated date and time of the person. Format: YYYY-MM-DD HH:MM:SS | [optional]
**visible_to** | **string** | The visibility group ID of who can see the person | [optional]
**picture_id** | [**\Pipedrive\Model\PictureDataWithID**](PictureDataWithID.md) |  | [optional]
**label** | **int** | The label assigned to the person | [optional]
**org_name** | **string** | The name of the organization associated with the person | [optional]
**owner_name** | **string** | The name of the owner associated with the person | [optional]
**cc_email** | **string** | The BCC email associated with the person | [optional]
**owner_id** | [**\Pipedrive\Model\Owner**](Owner.md) |  | [optional]
**org_id** | [**\Pipedrive\Model\RelationshipOrganizationInfoItemWithActiveFlag**](RelationshipOrganizationInfoItemWithActiveFlag.md) |  | [optional]
**name** | **string** | The name of the person | [optional]
**first_name** | **string** | The first name of the person | [optional]
**last_name** | **string** | The last name of the person | [optional]
**email_messages_count** | **int** | The count of email messages related to the person | [optional]
**activities_count** | **int** | The count of activities related to the person | [optional]
**done_activities_count** | **int** | The count of done activities related to the person | [optional]
**undone_activities_count** | **int** | The count of undone activities related to the person | [optional]
**files_count** | **int** | The count of files related to the person | [optional]
**notes_count** | **int** | The count of notes related to the person | [optional]
**followers_count** | **int** | The count of followers related to the person | [optional]
**last_incoming_mail_time** | **string** | The date and time of the last incoming email associated with the person | [optional]
**last_outgoing_mail_time** | **string** | The date and time of the last outgoing email associated with the person | [optional]
**open_deals_count** | **int** | The count of open deals related with the item | [optional]
**related_open_deals_count** | **int** | The count of related open deals related with the item | [optional]
**closed_deals_count** | **int** | The count of closed deals related with the item | [optional]
**related_closed_deals_count** | **int** | The count of related closed deals related with the item | [optional]
**won_deals_count** | **int** | The count of won deals related with the item | [optional]
**related_won_deals_count** | **int** | The count of related won deals related with the item | [optional]
**lost_deals_count** | **int** | The count of lost deals related with the item | [optional]
**related_lost_deals_count** | **int** | The count of related lost deals related with the item | [optional]
**next_activity_date** | **string** | The date of the next activity associated with the deal | [optional]
**next_activity_time** | **string** | The time of the next activity associated with the deal | [optional]
**next_activity_id** | **int** | The ID of the next activity associated with the deal | [optional]
**last_activity_id** | **int** | The ID of the last activity associated with the deal | [optional]
**last_activity_date** | **string** | The date of the last activity associated with the deal | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)