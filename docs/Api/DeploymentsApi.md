# OpenAPI\Client\DeploymentsApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deployByTagOrUuid()**](DeploymentsApi.md#deployByTagOrUuid) | **GET** /deploy | Deploy |
| [**getDeploymentByUuid()**](DeploymentsApi.md#getDeploymentByUuid) | **GET** /deployments/{uuid} | Get |
| [**listDeployments()**](DeploymentsApi.md#listDeployments) | **GET** /deployments | List |
| [**listDeploymentsByAppUuid()**](DeploymentsApi.md#listDeploymentsByAppUuid) | **GET** /deployments/applications/{uuid} | List application deployments |


## `deployByTagOrUuid()`

```php
deployByTagOrUuid($tag, $uuid, $force, $pr): \OpenAPI\Client\Model\DeployByTagOrUuid200Response
```

Deploy

Deploy by tag or uuid. `Post` request also accepted with `uuid` and `tag` json body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag = 'tag_example'; // string | Tag name(s). Comma separated list is also accepted.
$uuid = 'uuid_example'; // string | Resource UUID(s). Comma separated list is also accepted.
$force = True; // bool | Force rebuild (without cache)
$pr = 56; // int | Pull Request Id for deploying specific PR builds. Cannot be used with tag parameter.

try {
    $result = $apiInstance->deployByTagOrUuid($tag, $uuid, $force, $pr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->deployByTagOrUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag** | **string**| Tag name(s). Comma separated list is also accepted. | [optional] |
| **uuid** | **string**| Resource UUID(s). Comma separated list is also accepted. | [optional] |
| **force** | **bool**| Force rebuild (without cache) | [optional] |
| **pr** | **int**| Pull Request Id for deploying specific PR builds. Cannot be used with tag parameter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeployByTagOrUuid200Response**](../Model/DeployByTagOrUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeploymentByUuid()`

```php
getDeploymentByUuid($uuid): \OpenAPI\Client\Model\ApplicationDeploymentQueue
```

Get

Get deployment by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Deployment UUID

try {
    $result = $apiInstance->getDeploymentByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->getDeploymentByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Deployment UUID | |

### Return type

[**\OpenAPI\Client\Model\ApplicationDeploymentQueue**](../Model/ApplicationDeploymentQueue.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeployments()`

```php
listDeployments(): \OpenAPI\Client\Model\ApplicationDeploymentQueue[]
```

List

List currently running deployments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDeployments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->listDeployments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ApplicationDeploymentQueue[]**](../Model/ApplicationDeploymentQueue.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDeploymentsByAppUuid()`

```php
listDeploymentsByAppUuid($uuid, $skip, $take): \OpenAPI\Client\Model\Application[]
```

List application deployments

List application deployments by using the app uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$skip = 0; // int | Number of records to skip.
$take = 10; // int | Number of records to take.

try {
    $result = $apiInstance->listDeploymentsByAppUuid($uuid, $skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->listDeploymentsByAppUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **skip** | **int**| Number of records to skip. | [optional] [default to 0] |
| **take** | **int**| Number of records to take. | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\Application[]**](../Model/Application.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
