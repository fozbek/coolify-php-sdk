# OpenAPI\Client\ServicesApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEnvByServiceUuid()**](ServicesApi.md#createEnvByServiceUuid) | **POST** /services/{uuid}/envs | Create Env |
| [**createService()**](ServicesApi.md#createService) | **POST** /services | Create service |
| [**deleteEnvByServiceUuid()**](ServicesApi.md#deleteEnvByServiceUuid) | **DELETE** /services/{uuid}/envs/{env_uuid} | Delete Env |
| [**deleteServiceByUuid()**](ServicesApi.md#deleteServiceByUuid) | **DELETE** /services/{uuid} | Delete |
| [**getServiceByUuid()**](ServicesApi.md#getServiceByUuid) | **GET** /services/{uuid} | Get |
| [**listEnvsByServiceUuid()**](ServicesApi.md#listEnvsByServiceUuid) | **GET** /services/{uuid}/envs | List Envs |
| [**listServices()**](ServicesApi.md#listServices) | **GET** /services | List |
| [**restartServiceByUuid()**](ServicesApi.md#restartServiceByUuid) | **GET** /services/{uuid}/restart | Restart |
| [**startServiceByUuid()**](ServicesApi.md#startServiceByUuid) | **GET** /services/{uuid}/start | Start |
| [**stopServiceByUuid()**](ServicesApi.md#stopServiceByUuid) | **GET** /services/{uuid}/stop | Stop |
| [**updateEnvByServiceUuid()**](ServicesApi.md#updateEnvByServiceUuid) | **PATCH** /services/{uuid}/envs | Update Env |
| [**updateEnvsByServiceUuid()**](ServicesApi.md#updateEnvsByServiceUuid) | **PATCH** /services/{uuid}/envs/bulk | Update Envs (Bulk) |
| [**updateServiceByUuid()**](ServicesApi.md#updateServiceByUuid) | **PATCH** /services/{uuid} | Update |


## `createEnvByServiceUuid()`

```php
createEnvByServiceUuid($uuid, $create_env_by_application_uuid_request): \OpenAPI\Client\Model\CreateEnvByApplicationUuid201Response
```

Create Env

Create env by service UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.
$create_env_by_application_uuid_request = new \OpenAPI\Client\Model\CreateEnvByApplicationUuidRequest(); // \OpenAPI\Client\Model\CreateEnvByApplicationUuidRequest | Env created.

try {
    $result = $apiInstance->createEnvByServiceUuid($uuid, $create_env_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->createEnvByServiceUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |
| **create_env_by_application_uuid_request** | [**\OpenAPI\Client\Model\CreateEnvByApplicationUuidRequest**](../Model/CreateEnvByApplicationUuidRequest.md)| Env created. | |

### Return type

[**\OpenAPI\Client\Model\CreateEnvByApplicationUuid201Response**](../Model/CreateEnvByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createService()`

```php
createService($create_service_request): \OpenAPI\Client\Model\CreateService201Response
```

Create service

Create a one-click / custom service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_service_request = new \OpenAPI\Client\Model\CreateServiceRequest(); // \OpenAPI\Client\Model\CreateServiceRequest

try {
    $result = $apiInstance->createService($create_service_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->createService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_service_request** | [**\OpenAPI\Client\Model\CreateServiceRequest**](../Model/CreateServiceRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CreateService201Response**](../Model/CreateService201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvByServiceUuid()`

```php
deleteEnvByServiceUuid($uuid, $env_uuid): \OpenAPI\Client\Model\DeleteEnvByApplicationUuid200Response
```

Delete Env

Delete env by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.
$env_uuid = 'env_uuid_example'; // string | UUID of the environment variable.

try {
    $result = $apiInstance->deleteEnvByServiceUuid($uuid, $env_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteEnvByServiceUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |
| **env_uuid** | **string**| UUID of the environment variable. | |

### Return type

[**\OpenAPI\Client\Model\DeleteEnvByApplicationUuid200Response**](../Model/DeleteEnvByApplicationUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServiceByUuid()`

```php
deleteServiceByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks): \OpenAPI\Client\Model\DeleteServiceByUuid200Response
```

Delete

Delete service by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Service UUID
$delete_configurations = true; // bool | Delete configurations.
$delete_volumes = true; // bool | Delete volumes.
$docker_cleanup = true; // bool | Run docker cleanup.
$delete_connected_networks = true; // bool | Delete connected networks.

try {
    $result = $apiInstance->deleteServiceByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->deleteServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Service UUID | |
| **delete_configurations** | **bool**| Delete configurations. | [optional] [default to true] |
| **delete_volumes** | **bool**| Delete volumes. | [optional] [default to true] |
| **docker_cleanup** | **bool**| Run docker cleanup. | [optional] [default to true] |
| **delete_connected_networks** | **bool**| Delete connected networks. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\DeleteServiceByUuid200Response**](../Model/DeleteServiceByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceByUuid()`

```php
getServiceByUuid($uuid): \OpenAPI\Client\Model\Service
```

Get

Get service by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Service UUID

try {
    $result = $apiInstance->getServiceByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->getServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Service UUID | |

### Return type

[**\OpenAPI\Client\Model\Service**](../Model/Service.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvsByServiceUuid()`

```php
listEnvsByServiceUuid($uuid): \OpenAPI\Client\Model\EnvironmentVariable[]
```

List Envs

List all envs by service UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.

try {
    $result = $apiInstance->listEnvsByServiceUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listEnvsByServiceUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentVariable[]**](../Model/EnvironmentVariable.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServices()`

```php
listServices(): \OpenAPI\Client\Model\Service[]
```

List

List all services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->listServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Service[]**](../Model/Service.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartServiceByUuid()`

```php
restartServiceByUuid($uuid): \OpenAPI\Client\Model\RestartServiceByUuid200Response
```

Restart

Restart service. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.

try {
    $result = $apiInstance->restartServiceByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->restartServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |

### Return type

[**\OpenAPI\Client\Model\RestartServiceByUuid200Response**](../Model/RestartServiceByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startServiceByUuid()`

```php
startServiceByUuid($uuid): \OpenAPI\Client\Model\StartServiceByUuid200Response
```

Start

Start service. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.

try {
    $result = $apiInstance->startServiceByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->startServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |

### Return type

[**\OpenAPI\Client\Model\StartServiceByUuid200Response**](../Model/StartServiceByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopServiceByUuid()`

```php
stopServiceByUuid($uuid): \OpenAPI\Client\Model\StopServiceByUuid200Response
```

Stop

Stop service. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.

try {
    $result = $apiInstance->stopServiceByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->stopServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |

### Return type

[**\OpenAPI\Client\Model\StopServiceByUuid200Response**](../Model/StopServiceByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvByServiceUuid()`

```php
updateEnvByServiceUuid($uuid, $update_env_by_application_uuid_request): \OpenAPI\Client\Model\UpdateEnvByApplicationUuid201Response
```

Update Env

Update env by service UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.
$update_env_by_application_uuid_request = new \OpenAPI\Client\Model\UpdateEnvByApplicationUuidRequest(); // \OpenAPI\Client\Model\UpdateEnvByApplicationUuidRequest | Env updated.

try {
    $result = $apiInstance->updateEnvByServiceUuid($uuid, $update_env_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateEnvByServiceUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |
| **update_env_by_application_uuid_request** | [**\OpenAPI\Client\Model\UpdateEnvByApplicationUuidRequest**](../Model/UpdateEnvByApplicationUuidRequest.md)| Env updated. | |

### Return type

[**\OpenAPI\Client\Model\UpdateEnvByApplicationUuid201Response**](../Model/UpdateEnvByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvsByServiceUuid()`

```php
updateEnvsByServiceUuid($uuid, $update_envs_by_application_uuid_request): \OpenAPI\Client\Model\UpdateEnvsByApplicationUuid201Response
```

Update Envs (Bulk)

Update multiple envs by service UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.
$update_envs_by_application_uuid_request = new \OpenAPI\Client\Model\UpdateEnvsByApplicationUuidRequest(); // \OpenAPI\Client\Model\UpdateEnvsByApplicationUuidRequest | Bulk envs updated.

try {
    $result = $apiInstance->updateEnvsByServiceUuid($uuid, $update_envs_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateEnvsByServiceUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |
| **update_envs_by_application_uuid_request** | [**\OpenAPI\Client\Model\UpdateEnvsByApplicationUuidRequest**](../Model/UpdateEnvsByApplicationUuidRequest.md)| Bulk envs updated. | |

### Return type

[**\OpenAPI\Client\Model\UpdateEnvsByApplicationUuid201Response**](../Model/UpdateEnvsByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServiceByUuid()`

```php
updateServiceByUuid($uuid, $update_service_by_uuid_request): \OpenAPI\Client\Model\CreateService201Response
```

Update

Update service by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the service.
$update_service_by_uuid_request = new \OpenAPI\Client\Model\UpdateServiceByUuidRequest(); // \OpenAPI\Client\Model\UpdateServiceByUuidRequest | Service updated.

try {
    $result = $apiInstance->updateServiceByUuid($uuid, $update_service_by_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->updateServiceByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the service. | |
| **update_service_by_uuid_request** | [**\OpenAPI\Client\Model\UpdateServiceByUuidRequest**](../Model/UpdateServiceByUuidRequest.md)| Service updated. | |

### Return type

[**\OpenAPI\Client\Model\CreateService201Response**](../Model/CreateService201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
