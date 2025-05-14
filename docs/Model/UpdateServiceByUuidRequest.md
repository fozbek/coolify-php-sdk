# # UpdateServiceByUuidRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The service name. | [optional]
**description** | **string** | The service description. | [optional]
**project_uuid** | **string** | The project UUID. |
**environment_name** | **string** | The environment name. |
**environment_uuid** | **string** | The environment UUID. |
**server_uuid** | **string** | The server UUID. |
**destination_uuid** | **string** | The destination UUID. | [optional]
**instant_deploy** | **bool** | The flag to indicate if the service should be deployed instantly. | [optional]
**connect_to_docker_network** | **bool** | Connect the service to the predefined docker network. | [optional] [default to false]
**docker_compose_raw** | **string** | The Docker Compose raw content. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
