# CoolifyPHP\Client\PrivateKeysApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPrivateKey()**](PrivateKeysApi.md#createPrivateKey) | **POST** /security/keys | Create |
| [**deletePrivateKeyByUuid()**](PrivateKeysApi.md#deletePrivateKeyByUuid) | **DELETE** /security/keys/{uuid} | Delete |
| [**getPrivateKeyByUuid()**](PrivateKeysApi.md#getPrivateKeyByUuid) | **GET** /security/keys/{uuid} | Get |
| [**listPrivateKeys()**](PrivateKeysApi.md#listPrivateKeys) | **GET** /security/keys | List |
| [**updatePrivateKey()**](PrivateKeysApi.md#updatePrivateKey) | **PATCH** /security/keys | Update |


## `createPrivateKey()`

```php
createPrivateKey($create_private_key_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create

Create a new private key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\PrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_private_key_request = new \CoolifyPHP\Client\Model\CreatePrivateKeyRequest(); // \CoolifyPHP\Client\Model\CreatePrivateKeyRequest

try {
    $result = $apiInstance->createPrivateKey($create_private_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateKeysApi->createPrivateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_private_key_request** | [**\CoolifyPHP\Client\Model\CreatePrivateKeyRequest**](../Model/CreatePrivateKeyRequest.md)|  | |

### Return type

[**\CoolifyPHP\Client\Model\CreatePublicApplication201Response**](../Model/CreatePublicApplication201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePrivateKeyByUuid()`

```php
deletePrivateKeyByUuid($uuid): \CoolifyPHP\Client\Model\DeletePrivateKeyByUuid200Response
```

Delete

Delete a private key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\PrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Private Key UUID

try {
    $result = $apiInstance->deletePrivateKeyByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateKeysApi->deletePrivateKeyByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Private Key UUID | |

### Return type

[**\CoolifyPHP\Client\Model\DeletePrivateKeyByUuid200Response**](../Model/DeletePrivateKeyByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrivateKeyByUuid()`

```php
getPrivateKeyByUuid($uuid): \CoolifyPHP\Client\Model\PrivateKey
```

Get

Get key by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\PrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Private Key UUID

try {
    $result = $apiInstance->getPrivateKeyByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateKeysApi->getPrivateKeyByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Private Key UUID | |

### Return type

[**\CoolifyPHP\Client\Model\PrivateKey**](../Model/PrivateKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPrivateKeys()`

```php
listPrivateKeys(): \CoolifyPHP\Client\Model\PrivateKey[]
```

List

List all private keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\PrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listPrivateKeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateKeysApi->listPrivateKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\PrivateKey[]**](../Model/PrivateKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrivateKey()`

```php
updatePrivateKey($update_private_key_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Update

Update a private key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\PrivateKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_private_key_request = new \CoolifyPHP\Client\Model\UpdatePrivateKeyRequest(); // \CoolifyPHP\Client\Model\UpdatePrivateKeyRequest

try {
    $result = $apiInstance->updatePrivateKey($update_private_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrivateKeysApi->updatePrivateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_private_key_request** | [**\CoolifyPHP\Client\Model\UpdatePrivateKeyRequest**](../Model/UpdatePrivateKeyRequest.md)|  | |

### Return type

[**\CoolifyPHP\Client\Model\CreatePublicApplication201Response**](../Model/CreatePublicApplication201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
