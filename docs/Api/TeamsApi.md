# CoolifyPHP\Client\TeamsApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCurrentTeam()**](TeamsApi.md#getCurrentTeam) | **GET** /teams/current | Authenticated Team |
| [**getCurrentTeamMembers()**](TeamsApi.md#getCurrentTeamMembers) | **GET** /teams/current/members | Authenticated Team Members |
| [**getMembersByTeamId()**](TeamsApi.md#getMembersByTeamId) | **GET** /teams/{id}/members | Members |
| [**getTeamById()**](TeamsApi.md#getTeamById) | **GET** /teams/{id} | Get |
| [**listTeams()**](TeamsApi.md#listTeams) | **GET** /teams | List |


## `getCurrentTeam()`

```php
getCurrentTeam(): \CoolifyPHP\Client\Model\Team
```

Authenticated Team

Get currently authenticated team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentTeam();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getCurrentTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentTeamMembers()`

```php
getCurrentTeamMembers(): \CoolifyPHP\Client\Model\User[]
```

Authenticated Team Members

Get currently authenticated team members.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentTeamMembers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getCurrentTeamMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembersByTeamId()`

```php
getMembersByTeamId($id): \CoolifyPHP\Client\Model\User[]
```

Members

Get members by TeamId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Team ID

try {
    $result = $apiInstance->getMembersByTeamId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getMembersByTeamId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Team ID | |

### Return type

[**\CoolifyPHP\Client\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamById()`

```php
getTeamById($id): \CoolifyPHP\Client\Model\Team
```

Get

Get team by TeamId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Team ID

try {
    $result = $apiInstance->getTeamById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Team ID | |

### Return type

[**\CoolifyPHP\Client\Model\Team**](../Model/Team.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeams()`

```php
listTeams(): \CoolifyPHP\Client\Model\Team[]
```

List

Get all teams.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->listTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\Team[]**](../Model/Team.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
