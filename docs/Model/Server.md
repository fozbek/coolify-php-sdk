# # Server

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The server ID. | [optional]
**uuid** | **string** | The server UUID. | [optional]
**name** | **string** | The server name. | [optional]
**description** | **string** | The server description. | [optional]
**ip** | **string** | The IP address. | [optional]
**user** | **string** | The user. | [optional]
**port** | **int** | The port number. | [optional]
**proxy** | **object** | The proxy configuration. | [optional]
**proxy_type** | **string** | The proxy type. | [optional]
**high_disk_usage_notification_sent** | **bool** | The flag to indicate if the high disk usage notification has been sent. | [optional]
**unreachable_notification_sent** | **bool** | The flag to indicate if the unreachable notification has been sent. | [optional]
**unreachable_count** | **int** | The unreachable count for your server. | [optional]
**validation_logs** | **string** | The validation logs. | [optional]
**log_drain_notification_sent** | **bool** | The flag to indicate if the log drain notification has been sent. | [optional]
**swarm_cluster** | **string** | The swarm cluster configuration. | [optional]
**settings** | [**\OpenAPI\Client\Model\ServerSetting**](ServerSetting.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
