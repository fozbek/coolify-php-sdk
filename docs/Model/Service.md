# # Service

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier of the service. Only used for database identification. | [optional]
**uuid** | **string** | The unique identifier of the service. | [optional]
**name** | **string** | The name of the service. | [optional]
**environment_id** | **int** | The unique identifier of the environment where the service is attached to. | [optional]
**server_id** | **int** | The unique identifier of the server where the service is running. | [optional]
**description** | **string** | The description of the service. | [optional]
**docker_compose_raw** | **string** | The raw docker-compose.yml file of the service. | [optional]
**docker_compose** | **string** | The docker-compose.yml file that is parsed and modified by Coolify. | [optional]
**destination_type** | **string** | Destination type. | [optional]
**destination_id** | **int** | The unique identifier of the destination where the service is running. | [optional]
**connect_to_docker_network** | **bool** | The flag to connect the service to the predefined Docker network. | [optional]
**is_container_label_escape_enabled** | **bool** | The flag to enable the container label escape. | [optional]
**is_container_label_readonly_enabled** | **bool** | The flag to enable the container label readonly. | [optional]
**config_hash** | **string** | The hash of the service configuration. | [optional]
**service_type** | **string** | The type of the service. | [optional]
**created_at** | **string** | The date and time when the service was created. | [optional]
**updated_at** | **string** | The date and time when the service was last updated. | [optional]
**deleted_at** | **string** | The date and time when the service was deleted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
