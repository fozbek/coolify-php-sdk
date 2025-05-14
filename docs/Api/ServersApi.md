# CoolifyPHP\Client\ServersApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createServer()**](ServersApi.md#createServer) | **POST** /servers | Create |
| [**deleteServerByUuid()**](ServersApi.md#deleteServerByUuid) | **DELETE** /servers/{uuid} | Delete |
| [**getDomainsByServerUuid()**](ServersApi.md#getDomainsByServerUuid) | **GET** /servers/{uuid}/domains | Domains |
| [**getResourcesByServerUuid()**](ServersApi.md#getResourcesByServerUuid) | **GET** /servers/{uuid}/resources | Resources |
| [**getServerByUuid()**](ServersApi.md#getServerByUuid) | **GET** /servers/{uuid} | Get |
| [**listServers()**](ServersApi.md#listServers) | **GET** /servers | List |
| [**updateServerByUuid()**](ServersApi.md#updateServerByUuid) | **PATCH** /servers/{uuid} | Update |
| [**validateServerByUuid()**](ServersApi.md#validateServerByUuid) | **GET** /servers/{uuid}/validate | Validate |


## `createServer()`

```php
createServer($create_server_request): \CoolifyPHP\Client\Model\CreateServer201Response
```

Create

Create Server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_server_request = new \CoolifyPHP\Client\Model\CreateServerRequest(); // \CoolifyPHP\Client\Model\CreateServerRequest | Server created.

try {
    $result = $apiInstance->createServer($create_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->createServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_server_request** | [**\CoolifyPHP\Client\Model\CreateServerRequest**](../Model/CreateServerRequest.md)| Server created. | |

### Return type

[**\CoolifyPHP\Client\Model\CreateServer201Response**](../Model/CreateServer201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteServerByUuid()`

```php
deleteServerByUuid($uuid): \CoolifyPHP\Client\Model\DeleteServerByUuid200Response
```

Delete

Delete server by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the server.

try {
    $result = $apiInstance->deleteServerByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the server. | |

### Return type

[**\CoolifyPHP\Client\Model\DeleteServerByUuid200Response**](../Model/DeleteServerByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainsByServerUuid()`

```php
getDomainsByServerUuid($uuid): \CoolifyPHP\Client\Model\GetDomainsByServerUuid200ResponseInner[]
```

Domains

Get domains by server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Server's UUID

try {
    $result = $apiInstance->getDomainsByServerUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getDomainsByServerUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Server&#39;s UUID | |

### Return type

[**\CoolifyPHP\Client\Model\GetDomainsByServerUuid200ResponseInner[]**](../Model/GetDomainsByServerUuid200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResourcesByServerUuid()`

```php
getResourcesByServerUuid($uuid): \CoolifyPHP\Client\Model\GetResourcesByServerUuid200ResponseInner[]
```

Resources

Get resources by server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Server's UUID

try {
    $result = $apiInstance->getResourcesByServerUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getResourcesByServerUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Server&#39;s UUID | |

### Return type

[**\CoolifyPHP\Client\Model\GetResourcesByServerUuid200ResponseInner[]**](../Model/GetResourcesByServerUuid200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerByUuid()`

```php
getServerByUuid($uuid): \CoolifyPHP\Client\Model\Server
```

Get

Get server by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Server's UUID

try {
    $result = $apiInstance->getServerByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Server&#39;s UUID | |

### Return type

[**\CoolifyPHP\Client\Model\Server**](../Model/Server.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listServers()`

```php
listServers(): \CoolifyPHP\Client\Model\Server[]
```

List

List all servers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->listServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\Server[]**](../Model/Server.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateServerByUuid()`

```php
updateServerByUuid($uuid, $update_server_by_uuid_request): \CoolifyPHP\Client\Model\Server
```

Update

Update Server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Server UUID
$update_server_by_uuid_request = new \CoolifyPHP\Client\Model\UpdateServerByUuidRequest(); // \CoolifyPHP\Client\Model\UpdateServerByUuidRequest | Server updated.

try {
    $result = $apiInstance->updateServerByUuid($uuid, $update_server_by_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateServerByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Server UUID | |
| **update_server_by_uuid_request** | [**\CoolifyPHP\Client\Model\UpdateServerByUuidRequest**](../Model/UpdateServerByUuidRequest.md)| Server updated. | |

### Return type

[**\CoolifyPHP\Client\Model\Server**](../Model/Server.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateServerByUuid()`

```php
validateServerByUuid($uuid): \CoolifyPHP\Client\Model\ValidateServerByUuid201Response
```

Validate

Validate server by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Server UUID

try {
    $result = $apiInstance->validateServerByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->validateServerByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Server UUID | |

### Return type

[**\CoolifyPHP\Client\Model\ValidateServerByUuid201Response**](../Model/ValidateServerByUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
