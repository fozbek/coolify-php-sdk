# # CreateDockercomposeApplicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_uuid** | **string** | The project UUID. |
**server_uuid** | **string** | The server UUID. |
**environment_name** | **string** | The environment name. You need to provide at least one of environment_name or environment_uuid. |
**environment_uuid** | **string** | The environment UUID. You need to provide at least one of environment_name or environment_uuid. |
**docker_compose_raw** | **string** | The Docker Compose raw content. |
**destination_uuid** | **string** | The destination UUID if the server has more than one destinations. | [optional]
**name** | **string** | The application name. | [optional]
**description** | **string** | The application description. | [optional]
**instant_deploy** | **bool** | The flag to indicate if the application should be deployed instantly. | [optional]
**use_build_server** | **bool** | Use build server. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
