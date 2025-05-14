# CoolifyPHP\Client\DatabasesApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseClickhouse()**](DatabasesApi.md#createDatabaseClickhouse) | **POST** /databases/clickhouse | Create (Clickhouse) |
| [**createDatabaseDragonfly()**](DatabasesApi.md#createDatabaseDragonfly) | **POST** /databases/dragonfly | Create (DragonFly) |
| [**createDatabaseKeydb()**](DatabasesApi.md#createDatabaseKeydb) | **POST** /databases/keydb | Create (KeyDB) |
| [**createDatabaseMariadb()**](DatabasesApi.md#createDatabaseMariadb) | **POST** /databases/mariadb | Create (MariaDB) |
| [**createDatabaseMongodb()**](DatabasesApi.md#createDatabaseMongodb) | **POST** /databases/mongodb | Create (MongoDB) |
| [**createDatabaseMysql()**](DatabasesApi.md#createDatabaseMysql) | **POST** /databases/mysql | Create (MySQL) |
| [**createDatabasePostgresql()**](DatabasesApi.md#createDatabasePostgresql) | **POST** /databases/postgresql | Create (PostgreSQL) |
| [**createDatabaseRedis()**](DatabasesApi.md#createDatabaseRedis) | **POST** /databases/redis | Create (Redis) |
| [**deleteDatabaseByUuid()**](DatabasesApi.md#deleteDatabaseByUuid) | **DELETE** /databases/{uuid} | Delete |
| [**getDatabaseByUuid()**](DatabasesApi.md#getDatabaseByUuid) | **GET** /databases/{uuid} | Get |
| [**listDatabases()**](DatabasesApi.md#listDatabases) | **GET** /databases | List |
| [**restartDatabaseByUuid()**](DatabasesApi.md#restartDatabaseByUuid) | **GET** /databases/{uuid}/restart | Restart |
| [**startDatabaseByUuid()**](DatabasesApi.md#startDatabaseByUuid) | **GET** /databases/{uuid}/start | Start |
| [**stopDatabaseByUuid()**](DatabasesApi.md#stopDatabaseByUuid) | **GET** /databases/{uuid}/stop | Stop |
| [**updateDatabaseByUuid()**](DatabasesApi.md#updateDatabaseByUuid) | **PATCH** /databases/{uuid} | Update |


## `createDatabaseClickhouse()`

```php
createDatabaseClickhouse($create_database_clickhouse_request)
```

Create (Clickhouse)

Create a new Clickhouse database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_clickhouse_request = new \CoolifyPHP\Client\Model\CreateDatabaseClickhouseRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseClickhouseRequest | Database data

try {
    $apiInstance->createDatabaseClickhouse($create_database_clickhouse_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseClickhouse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_clickhouse_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseClickhouseRequest**](../Model/CreateDatabaseClickhouseRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseDragonfly()`

```php
createDatabaseDragonfly($create_database_dragonfly_request)
```

Create (DragonFly)

Create a new DragonFly database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_dragonfly_request = new \CoolifyPHP\Client\Model\CreateDatabaseDragonflyRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseDragonflyRequest | Database data

try {
    $apiInstance->createDatabaseDragonfly($create_database_dragonfly_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseDragonfly: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_dragonfly_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseDragonflyRequest**](../Model/CreateDatabaseDragonflyRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseKeydb()`

```php
createDatabaseKeydb($create_database_keydb_request)
```

Create (KeyDB)

Create a new KeyDB database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_keydb_request = new \CoolifyPHP\Client\Model\CreateDatabaseKeydbRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseKeydbRequest | Database data

try {
    $apiInstance->createDatabaseKeydb($create_database_keydb_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseKeydb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_keydb_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseKeydbRequest**](../Model/CreateDatabaseKeydbRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseMariadb()`

```php
createDatabaseMariadb($create_database_mariadb_request)
```

Create (MariaDB)

Create a new MariaDB database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_mariadb_request = new \CoolifyPHP\Client\Model\CreateDatabaseMariadbRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseMariadbRequest | Database data

try {
    $apiInstance->createDatabaseMariadb($create_database_mariadb_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseMariadb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_mariadb_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseMariadbRequest**](../Model/CreateDatabaseMariadbRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseMongodb()`

```php
createDatabaseMongodb($create_database_mongodb_request)
```

Create (MongoDB)

Create a new MongoDB database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_mongodb_request = new \CoolifyPHP\Client\Model\CreateDatabaseMongodbRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseMongodbRequest | Database data

try {
    $apiInstance->createDatabaseMongodb($create_database_mongodb_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseMongodb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_mongodb_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseMongodbRequest**](../Model/CreateDatabaseMongodbRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseMysql()`

```php
createDatabaseMysql($create_database_mysql_request)
```

Create (MySQL)

Create a new MySQL database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_mysql_request = new \CoolifyPHP\Client\Model\CreateDatabaseMysqlRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseMysqlRequest | Database data

try {
    $apiInstance->createDatabaseMysql($create_database_mysql_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseMysql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_mysql_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseMysqlRequest**](../Model/CreateDatabaseMysqlRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabasePostgresql()`

```php
createDatabasePostgresql($create_database_postgresql_request)
```

Create (PostgreSQL)

Create a new PostgreSQL database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_postgresql_request = new \CoolifyPHP\Client\Model\CreateDatabasePostgresqlRequest(); // \CoolifyPHP\Client\Model\CreateDatabasePostgresqlRequest | Database data

try {
    $apiInstance->createDatabasePostgresql($create_database_postgresql_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabasePostgresql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_postgresql_request** | [**\CoolifyPHP\Client\Model\CreateDatabasePostgresqlRequest**](../Model/CreateDatabasePostgresqlRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDatabaseRedis()`

```php
createDatabaseRedis($create_database_redis_request)
```

Create (Redis)

Create a new Redis database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_database_redis_request = new \CoolifyPHP\Client\Model\CreateDatabaseRedisRequest(); // \CoolifyPHP\Client\Model\CreateDatabaseRedisRequest | Database data

try {
    $apiInstance->createDatabaseRedis($create_database_redis_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->createDatabaseRedis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_database_redis_request** | [**\CoolifyPHP\Client\Model\CreateDatabaseRedisRequest**](../Model/CreateDatabaseRedisRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDatabaseByUuid()`

```php
deleteDatabaseByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks): \CoolifyPHP\Client\Model\DeleteDatabaseByUuid200Response
```

Delete

Delete database by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.
$delete_configurations = true; // bool | Delete configurations.
$delete_volumes = true; // bool | Delete volumes.
$docker_cleanup = true; // bool | Run docker cleanup.
$delete_connected_networks = true; // bool | Delete connected networks.

try {
    $result = $apiInstance->deleteDatabaseByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->deleteDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |
| **delete_configurations** | **bool**| Delete configurations. | [optional] [default to true] |
| **delete_volumes** | **bool**| Delete volumes. | [optional] [default to true] |
| **docker_cleanup** | **bool**| Run docker cleanup. | [optional] [default to true] |
| **delete_connected_networks** | **bool**| Delete connected networks. | [optional] [default to true] |

### Return type

[**\CoolifyPHP\Client\Model\DeleteDatabaseByUuid200Response**](../Model/DeleteDatabaseByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseByUuid()`

```php
getDatabaseByUuid($uuid): string
```

Get

Get database by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.

try {
    $result = $apiInstance->getDatabaseByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->getDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabases()`

```php
listDatabases(): string
```

List

List all databases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDatabases();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->listDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartDatabaseByUuid()`

```php
restartDatabaseByUuid($uuid): \CoolifyPHP\Client\Model\RestartDatabaseByUuid200Response
```

Restart

Restart database. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.

try {
    $result = $apiInstance->restartDatabaseByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->restartDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |

### Return type

[**\CoolifyPHP\Client\Model\RestartDatabaseByUuid200Response**](../Model/RestartDatabaseByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startDatabaseByUuid()`

```php
startDatabaseByUuid($uuid): \CoolifyPHP\Client\Model\StartDatabaseByUuid200Response
```

Start

Start database. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.

try {
    $result = $apiInstance->startDatabaseByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->startDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |

### Return type

[**\CoolifyPHP\Client\Model\StartDatabaseByUuid200Response**](../Model/StartDatabaseByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopDatabaseByUuid()`

```php
stopDatabaseByUuid($uuid): \CoolifyPHP\Client\Model\StopDatabaseByUuid200Response
```

Stop

Stop database. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.

try {
    $result = $apiInstance->stopDatabaseByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->stopDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |

### Return type

[**\CoolifyPHP\Client\Model\StopDatabaseByUuid200Response**](../Model/StopDatabaseByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDatabaseByUuid()`

```php
updateDatabaseByUuid($uuid, $update_database_by_uuid_request)
```

Update

Update database by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\DatabasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the database.
$update_database_by_uuid_request = new \CoolifyPHP\Client\Model\UpdateDatabaseByUuidRequest(); // \CoolifyPHP\Client\Model\UpdateDatabaseByUuidRequest | Database data

try {
    $apiInstance->updateDatabaseByUuid($uuid, $update_database_by_uuid_request);
} catch (Exception $e) {
    echo 'Exception when calling DatabasesApi->updateDatabaseByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the database. | |
| **update_database_by_uuid_request** | [**\CoolifyPHP\Client\Model\UpdateDatabaseByUuidRequest**](../Model/UpdateDatabaseByUuidRequest.md)| Database data | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
