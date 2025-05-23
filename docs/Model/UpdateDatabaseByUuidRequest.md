# # UpdateDatabaseByUuidRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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
**postgres_user** | **string** | PostgreSQL user | [optional]
**postgres_password** | **string** | PostgreSQL password | [optional]
**postgres_db** | **string** | PostgreSQL database | [optional]
**postgres_initdb_args** | **string** | PostgreSQL initdb args | [optional]
**postgres_host_auth_method** | **string** | PostgreSQL host auth method | [optional]
**postgres_conf** | **string** | PostgreSQL conf | [optional]
**clickhouse_admin_user** | **string** | Clickhouse admin user | [optional]
**clickhouse_admin_password** | **string** | Clickhouse admin password | [optional]
**dragonfly_password** | **string** | DragonFly password | [optional]
**redis_password** | **string** | Redis password | [optional]
**redis_conf** | **string** | Redis conf | [optional]
**keydb_password** | **string** | KeyDB password | [optional]
**keydb_conf** | **string** | KeyDB conf | [optional]
**mariadb_conf** | **string** | MariaDB conf | [optional]
**mariadb_root_password** | **string** | MariaDB root password | [optional]
**mariadb_user** | **string** | MariaDB user | [optional]
**mariadb_password** | **string** | MariaDB password | [optional]
**mariadb_database** | **string** | MariaDB database | [optional]
**mongo_conf** | **string** | Mongo conf | [optional]
**mongo_initdb_root_username** | **string** | Mongo initdb root username | [optional]
**mongo_initdb_root_password** | **string** | Mongo initdb root password | [optional]
**mongo_initdb_database** | **string** | Mongo initdb init database | [optional]
**mysql_root_password** | **string** | MySQL root password | [optional]
**mysql_password** | **string** | MySQL password | [optional]
**mysql_user** | **string** | MySQL user | [optional]
**mysql_database** | **string** | MySQL database | [optional]
**mysql_conf** | **string** | MySQL conf | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
