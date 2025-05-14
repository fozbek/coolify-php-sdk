# CoolifyPHP\Client\ApplicationsApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDockercomposeApplication()**](ApplicationsApi.md#createDockercomposeApplication) | **POST** /applications/dockercompose | Create (Docker Compose) |
| [**createDockerfileApplication()**](ApplicationsApi.md#createDockerfileApplication) | **POST** /applications/dockerfile | Create (Dockerfile) |
| [**createDockerimageApplication()**](ApplicationsApi.md#createDockerimageApplication) | **POST** /applications/dockerimage | Create (Docker Image) |
| [**createEnvByApplicationUuid()**](ApplicationsApi.md#createEnvByApplicationUuid) | **POST** /applications/{uuid}/envs | Create Env |
| [**createPrivateDeployKeyApplication()**](ApplicationsApi.md#createPrivateDeployKeyApplication) | **POST** /applications/private-deploy-key | Create (Private - Deploy Key) |
| [**createPrivateGithubAppApplication()**](ApplicationsApi.md#createPrivateGithubAppApplication) | **POST** /applications/private-github-app | Create (Private - GH App) |
| [**createPublicApplication()**](ApplicationsApi.md#createPublicApplication) | **POST** /applications/public | Create (Public) |
| [**deleteApplicationByUuid()**](ApplicationsApi.md#deleteApplicationByUuid) | **DELETE** /applications/{uuid} | Delete |
| [**deleteEnvByApplicationUuid()**](ApplicationsApi.md#deleteEnvByApplicationUuid) | **DELETE** /applications/{uuid}/envs/{env_uuid} | Delete Env |
| [**getApplicationByUuid()**](ApplicationsApi.md#getApplicationByUuid) | **GET** /applications/{uuid} | Get |
| [**getApplicationLogsByUuid()**](ApplicationsApi.md#getApplicationLogsByUuid) | **GET** /applications/{uuid}/logs | Get application logs. |
| [**listApplications()**](ApplicationsApi.md#listApplications) | **GET** /applications | List |
| [**listEnvsByApplicationUuid()**](ApplicationsApi.md#listEnvsByApplicationUuid) | **GET** /applications/{uuid}/envs | List Envs |
| [**restartApplicationByUuid()**](ApplicationsApi.md#restartApplicationByUuid) | **GET** /applications/{uuid}/restart | Restart |
| [**startApplicationByUuid()**](ApplicationsApi.md#startApplicationByUuid) | **GET** /applications/{uuid}/start | Start |
| [**stopApplicationByUuid()**](ApplicationsApi.md#stopApplicationByUuid) | **GET** /applications/{uuid}/stop | Stop |
| [**updateApplicationByUuid()**](ApplicationsApi.md#updateApplicationByUuid) | **PATCH** /applications/{uuid} | Update |
| [**updateEnvByApplicationUuid()**](ApplicationsApi.md#updateEnvByApplicationUuid) | **PATCH** /applications/{uuid}/envs | Update Env |
| [**updateEnvsByApplicationUuid()**](ApplicationsApi.md#updateEnvsByApplicationUuid) | **PATCH** /applications/{uuid}/envs/bulk | Update Envs (Bulk) |


## `createDockercomposeApplication()`

```php
createDockercomposeApplication($create_dockercompose_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Docker Compose)

Create new application based on a docker-compose file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_dockercompose_application_request = new \CoolifyPHP\Client\Model\CreateDockercomposeApplicationRequest(); // \CoolifyPHP\Client\Model\CreateDockercomposeApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createDockercomposeApplication($create_dockercompose_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createDockercomposeApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_dockercompose_application_request** | [**\CoolifyPHP\Client\Model\CreateDockercomposeApplicationRequest**](../Model/CreateDockercomposeApplicationRequest.md)| Application object that needs to be created. | |

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

## `createDockerfileApplication()`

```php
createDockerfileApplication($create_dockerfile_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Dockerfile)

Create new application based on a simple Dockerfile.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_dockerfile_application_request = new \CoolifyPHP\Client\Model\CreateDockerfileApplicationRequest(); // \CoolifyPHP\Client\Model\CreateDockerfileApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createDockerfileApplication($create_dockerfile_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createDockerfileApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_dockerfile_application_request** | [**\CoolifyPHP\Client\Model\CreateDockerfileApplicationRequest**](../Model/CreateDockerfileApplicationRequest.md)| Application object that needs to be created. | |

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

## `createDockerimageApplication()`

```php
createDockerimageApplication($create_dockerimage_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Docker Image)

Create new application based on a prebuilt docker image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_dockerimage_application_request = new \CoolifyPHP\Client\Model\CreateDockerimageApplicationRequest(); // \CoolifyPHP\Client\Model\CreateDockerimageApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createDockerimageApplication($create_dockerimage_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createDockerimageApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_dockerimage_application_request** | [**\CoolifyPHP\Client\Model\CreateDockerimageApplicationRequest**](../Model/CreateDockerimageApplicationRequest.md)| Application object that needs to be created. | |

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

## `createEnvByApplicationUuid()`

```php
createEnvByApplicationUuid($uuid, $create_env_by_application_uuid_request): \CoolifyPHP\Client\Model\CreateEnvByApplicationUuid201Response
```

Create Env

Create env by application UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$create_env_by_application_uuid_request = new \CoolifyPHP\Client\Model\CreateEnvByApplicationUuidRequest(); // \CoolifyPHP\Client\Model\CreateEnvByApplicationUuidRequest | Env created.

try {
    $result = $apiInstance->createEnvByApplicationUuid($uuid, $create_env_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createEnvByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **create_env_by_application_uuid_request** | [**\CoolifyPHP\Client\Model\CreateEnvByApplicationUuidRequest**](../Model/CreateEnvByApplicationUuidRequest.md)| Env created. | |

### Return type

[**\CoolifyPHP\Client\Model\CreateEnvByApplicationUuid201Response**](../Model/CreateEnvByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPrivateDeployKeyApplication()`

```php
createPrivateDeployKeyApplication($create_private_deploy_key_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Private - Deploy Key)

Create new application based on a private repository through a Deploy Key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_private_deploy_key_application_request = new \CoolifyPHP\Client\Model\CreatePrivateDeployKeyApplicationRequest(); // \CoolifyPHP\Client\Model\CreatePrivateDeployKeyApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createPrivateDeployKeyApplication($create_private_deploy_key_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createPrivateDeployKeyApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_private_deploy_key_application_request** | [**\CoolifyPHP\Client\Model\CreatePrivateDeployKeyApplicationRequest**](../Model/CreatePrivateDeployKeyApplicationRequest.md)| Application object that needs to be created. | |

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

## `createPrivateGithubAppApplication()`

```php
createPrivateGithubAppApplication($create_private_github_app_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Private - GH App)

Create new application based on a private repository through a Github App.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_private_github_app_application_request = new \CoolifyPHP\Client\Model\CreatePrivateGithubAppApplicationRequest(); // \CoolifyPHP\Client\Model\CreatePrivateGithubAppApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createPrivateGithubAppApplication($create_private_github_app_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createPrivateGithubAppApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_private_github_app_application_request** | [**\CoolifyPHP\Client\Model\CreatePrivateGithubAppApplicationRequest**](../Model/CreatePrivateGithubAppApplicationRequest.md)| Application object that needs to be created. | |

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

## `createPublicApplication()`

```php
createPublicApplication($create_public_application_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Create (Public)

Create new application based on a public git repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_public_application_request = new \CoolifyPHP\Client\Model\CreatePublicApplicationRequest(); // \CoolifyPHP\Client\Model\CreatePublicApplicationRequest | Application object that needs to be created.

try {
    $result = $apiInstance->createPublicApplication($create_public_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->createPublicApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_public_application_request** | [**\CoolifyPHP\Client\Model\CreatePublicApplicationRequest**](../Model/CreatePublicApplicationRequest.md)| Application object that needs to be created. | |

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

## `deleteApplicationByUuid()`

```php
deleteApplicationByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks): \CoolifyPHP\Client\Model\DeleteApplicationByUuid200Response
```

Delete

Delete application by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$delete_configurations = true; // bool | Delete configurations.
$delete_volumes = true; // bool | Delete volumes.
$docker_cleanup = true; // bool | Run docker cleanup.
$delete_connected_networks = true; // bool | Delete connected networks.

try {
    $result = $apiInstance->deleteApplicationByUuid($uuid, $delete_configurations, $delete_volumes, $docker_cleanup, $delete_connected_networks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->deleteApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **delete_configurations** | **bool**| Delete configurations. | [optional] [default to true] |
| **delete_volumes** | **bool**| Delete volumes. | [optional] [default to true] |
| **docker_cleanup** | **bool**| Run docker cleanup. | [optional] [default to true] |
| **delete_connected_networks** | **bool**| Delete connected networks. | [optional] [default to true] |

### Return type

[**\CoolifyPHP\Client\Model\DeleteApplicationByUuid200Response**](../Model/DeleteApplicationByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvByApplicationUuid()`

```php
deleteEnvByApplicationUuid($uuid, $env_uuid): \CoolifyPHP\Client\Model\DeleteEnvByApplicationUuid200Response
```

Delete Env

Delete env by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$env_uuid = 'env_uuid_example'; // string | UUID of the environment variable.

try {
    $result = $apiInstance->deleteEnvByApplicationUuid($uuid, $env_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->deleteEnvByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **env_uuid** | **string**| UUID of the environment variable. | |

### Return type

[**\CoolifyPHP\Client\Model\DeleteEnvByApplicationUuid200Response**](../Model/DeleteEnvByApplicationUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationByUuid()`

```php
getApplicationByUuid($uuid): \CoolifyPHP\Client\Model\Application
```

Get

Get application by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.

try {
    $result = $apiInstance->getApplicationByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |

### Return type

[**\CoolifyPHP\Client\Model\Application**](../Model/Application.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationLogsByUuid()`

```php
getApplicationLogsByUuid($uuid, $lines): \CoolifyPHP\Client\Model\GetApplicationLogsByUuid200Response
```

Get application logs.

Get application logs by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$lines = 100; // int | Number of lines to show from the end of the logs.

try {
    $result = $apiInstance->getApplicationLogsByUuid($uuid, $lines);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationLogsByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **lines** | **int**| Number of lines to show from the end of the logs. | [optional] [default to 100] |

### Return type

[**\CoolifyPHP\Client\Model\GetApplicationLogsByUuid200Response**](../Model/GetApplicationLogsByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplications()`

```php
listApplications(): \CoolifyPHP\Client\Model\Application[]
```

List

List all applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listApplications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->listApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\Application[]**](../Model/Application.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvsByApplicationUuid()`

```php
listEnvsByApplicationUuid($uuid): \CoolifyPHP\Client\Model\EnvironmentVariable[]
```

List Envs

List all envs by application UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.

try {
    $result = $apiInstance->listEnvsByApplicationUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->listEnvsByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |

### Return type

[**\CoolifyPHP\Client\Model\EnvironmentVariable[]**](../Model/EnvironmentVariable.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartApplicationByUuid()`

```php
restartApplicationByUuid($uuid): \CoolifyPHP\Client\Model\RestartApplicationByUuid200Response
```

Restart

Restart application. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.

try {
    $result = $apiInstance->restartApplicationByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->restartApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |

### Return type

[**\CoolifyPHP\Client\Model\RestartApplicationByUuid200Response**](../Model/RestartApplicationByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startApplicationByUuid()`

```php
startApplicationByUuid($uuid, $force, $instant_deploy): \CoolifyPHP\Client\Model\StartApplicationByUuid200Response
```

Start

Start application. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$force = false; // bool | Force rebuild.
$instant_deploy = false; // bool | Instant deploy (skip queuing).

try {
    $result = $apiInstance->startApplicationByUuid($uuid, $force, $instant_deploy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->startApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **force** | **bool**| Force rebuild. | [optional] [default to false] |
| **instant_deploy** | **bool**| Instant deploy (skip queuing). | [optional] [default to false] |

### Return type

[**\CoolifyPHP\Client\Model\StartApplicationByUuid200Response**](../Model/StartApplicationByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopApplicationByUuid()`

```php
stopApplicationByUuid($uuid): \CoolifyPHP\Client\Model\StopApplicationByUuid200Response
```

Stop

Stop application. `Post` request is also accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.

try {
    $result = $apiInstance->stopApplicationByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->stopApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |

### Return type

[**\CoolifyPHP\Client\Model\StopApplicationByUuid200Response**](../Model/StopApplicationByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApplicationByUuid()`

```php
updateApplicationByUuid($uuid, $update_application_by_uuid_request): \CoolifyPHP\Client\Model\CreatePublicApplication201Response
```

Update

Update application by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$update_application_by_uuid_request = new \CoolifyPHP\Client\Model\UpdateApplicationByUuidRequest(); // \CoolifyPHP\Client\Model\UpdateApplicationByUuidRequest | Application updated.

try {
    $result = $apiInstance->updateApplicationByUuid($uuid, $update_application_by_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->updateApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **update_application_by_uuid_request** | [**\CoolifyPHP\Client\Model\UpdateApplicationByUuidRequest**](../Model/UpdateApplicationByUuidRequest.md)| Application updated. | |

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

## `updateEnvByApplicationUuid()`

```php
updateEnvByApplicationUuid($uuid, $update_env_by_application_uuid_request): \CoolifyPHP\Client\Model\UpdateEnvByApplicationUuid201Response
```

Update Env

Update env by application UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$update_env_by_application_uuid_request = new \CoolifyPHP\Client\Model\UpdateEnvByApplicationUuidRequest(); // \CoolifyPHP\Client\Model\UpdateEnvByApplicationUuidRequest | Env updated.

try {
    $result = $apiInstance->updateEnvByApplicationUuid($uuid, $update_env_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->updateEnvByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **update_env_by_application_uuid_request** | [**\CoolifyPHP\Client\Model\UpdateEnvByApplicationUuidRequest**](../Model/UpdateEnvByApplicationUuidRequest.md)| Env updated. | |

### Return type

[**\CoolifyPHP\Client\Model\UpdateEnvByApplicationUuid201Response**](../Model/UpdateEnvByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvsByApplicationUuid()`

```php
updateEnvsByApplicationUuid($uuid, $update_envs_by_application_uuid_request): \CoolifyPHP\Client\Model\UpdateEnvsByApplicationUuid201Response
```

Update Envs (Bulk)

Update multiple envs by application UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.
$update_envs_by_application_uuid_request = new \CoolifyPHP\Client\Model\UpdateEnvsByApplicationUuidRequest(); // \CoolifyPHP\Client\Model\UpdateEnvsByApplicationUuidRequest | Bulk envs updated.

try {
    $result = $apiInstance->updateEnvsByApplicationUuid($uuid, $update_envs_by_application_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->updateEnvsByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |
| **update_envs_by_application_uuid_request** | [**\CoolifyPHP\Client\Model\UpdateEnvsByApplicationUuidRequest**](../Model/UpdateEnvsByApplicationUuidRequest.md)| Bulk envs updated. | |

### Return type

[**\CoolifyPHP\Client\Model\UpdateEnvsByApplicationUuid201Response**](../Model/UpdateEnvsByApplicationUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
