# # NewDealParameters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **string** | The value of the deal. If omitted, value will be set to 0. | [optional]
**currency** | **string** | The currency of the deal. Accepts a 3-character currency code. If omitted, currency will be set to the default currency of the authorized user. | [optional]
**user_id** | **int** | The ID of the user which will be the owner of the created deal. If not provided, the user making the request will be used. | [optional]
**person_id** | **int** | The ID of a person which this deal will be linked to. If the person does not exist yet, it needs to be created first. This property is required unless &#x60;org_id&#x60; is specified. | [optional]
**org_id** | **int** | The ID of an organization which this deal will be linked to. If the organization does not exist yet, it needs to be created first. This property is required unless &#x60;person_id&#x60; is specified. | [optional]
**pipeline_id** | **int** | The ID of the pipeline this deal will be added to. By default, the deal will be added to the first stage of the specified pipeline. Please note that &#x60;pipeline_id&#x60; and &#x60;stage_id&#x60; should not be used together as &#x60;pipeline_id&#x60; will be ignored. | [optional]
**stage_id** | **int** | The ID of the stage this deal will be added to. Please note that a pipeline will be assigned automatically based on the &#x60;stage_id&#x60;. If omitted, the deal will be placed in the first stage of the default pipeline. | [optional]
**status** | **string** | open &#x3D; Open, won &#x3D; Won, lost &#x3D; Lost, deleted &#x3D; Deleted. If omitted, status will be set to open. | [optional]
**add_time** | **string** | The optional creation date &amp; time of the deal in UTC. Requires admin user API token. Format: YYYY-MM-DD HH:MM:SS | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
