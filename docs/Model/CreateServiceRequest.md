# # CreateServiceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The one-click service type | [optional]
**name** | **string** | Name of the service. | [optional]
**description** | **string** | Description of the service. | [optional]
**project_uuid** | **string** | Project UUID. |
**environment_name** | **string** | Environment name. You need to provide at least one of environment_name or environment_uuid. |
**environment_uuid** | **string** | Environment UUID. You need to provide at least one of environment_name or environment_uuid. |
**server_uuid** | **string** | Server UUID. |
**destination_uuid** | **string** | Destination UUID. Required if server has multiple destinations. | [optional]
**instant_deploy** | **bool** | Start the service immediately after creation. | [optional] [default to false]
**docker_compose_raw** | **string** | The Docker Compose raw content. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
