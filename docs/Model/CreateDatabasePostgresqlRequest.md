# # CreateDatabasePostgresqlRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**server_uuid** | **string** | UUID of the server |
**project_uuid** | **string** | UUID of the project |
**environment_name** | **string** | Name of the environment. You need to provide at least one of environment_name or environment_uuid. |
**environment_uuid** | **string** | UUID of the environment. You need to provide at least one of environment_name or environment_uuid. |
**postgres_user** | **string** | PostgreSQL user | [optional]
**postgres_password** | **string** | PostgreSQL password | [optional]
**postgres_db** | **string** | PostgreSQL database | [optional]
**postgres_initdb_args** | **string** | PostgreSQL initdb args | [optional]
**postgres_host_auth_method** | **string** | PostgreSQL host auth method | [optional]
**postgres_conf** | **string** | PostgreSQL conf | [optional]
**destination_uuid** | **string** | UUID of the destination if the server has multiple destinations | [optional]
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
