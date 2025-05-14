# # CreateDatabaseMysqlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_uuid** | **string** | UUID of the server |
**project_uuid** | **string** | UUID of the project |
**environment_name** | **string** | Name of the environment. You need to provide at least one of environment_name or environment_uuid. |
**environment_uuid** | **string** | UUID of the environment. You need to provide at least one of environment_name or environment_uuid. |
**destination_uuid** | **string** | UUID of the destination if the server has multiple destinations | [optional]
**mysql_root_password** | **string** | MySQL root password | [optional]
**mysql_password** | **string** | MySQL password | [optional]
**mysql_user** | **string** | MySQL user | [optional]
**mysql_database** | **string** | MySQL database | [optional]
**mysql_conf** | **string** | MySQL conf | [optional]
**name** | **string** | Name of the database | [optional]
**description** | **string** | Description of the database | [optional]
**image** | **string** | Docker Image of the database | [optional]
**is_public** | **bool** | Is the database public? | [optional]
**public_port** | **int** | Public port of the database | [optional]
**limits_memory** | **string** | Memory limit of the database | [optional]
**limits_memory_swap** | **string** | Memory swap limit of the database | [optional]
**limits_memory_swappiness** | **int** | Memory swappiness of the database | [optional]
**limits_memory_reservation** | **string** | Memory reservation of the database | [optional]
**limits_cpus** | **string** | CPU limit of the database | [optional]
**limits_cpuset** | **string** | CPU set of the database | [optional]
**limits_cpu_shares** | **int** | CPU shares of the database | [optional]
**instant_deploy** | **bool** | Instant deploy the database | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
