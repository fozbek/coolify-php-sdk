# CoolifyPHP\Client\ProjectsApi

All URIs are relative to https://app.coolify.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProject()**](ProjectsApi.md#createProject) | **POST** /projects | Create |
| [**deleteProjectByUuid()**](ProjectsApi.md#deleteProjectByUuid) | **DELETE** /projects/{uuid} | Delete |
| [**getEnvironmentByNameOrUuid()**](ProjectsApi.md#getEnvironmentByNameOrUuid) | **GET** /projects/{uuid}/{environment_name_or_uuid} | Environment |
| [**getProjectByUuid()**](ProjectsApi.md#getProjectByUuid) | **GET** /projects/{uuid} | Get |
| [**listProjects()**](ProjectsApi.md#listProjects) | **GET** /projects | List |
| [**updateProjectByUuid()**](ProjectsApi.md#updateProjectByUuid) | **PATCH** /projects/{uuid} | Update |


## `createProject()`

```php
createProject($create_project_request): \CoolifyPHP\Client\Model\CreateProject201Response
```

Create

Create Project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_project_request = new \CoolifyPHP\Client\Model\CreateProjectRequest(); // \CoolifyPHP\Client\Model\CreateProjectRequest | Project created.

try {
    $result = $apiInstance->createProject($create_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_project_request** | [**\CoolifyPHP\Client\Model\CreateProjectRequest**](../Model/CreateProjectRequest.md)| Project created. | |

### Return type

[**\CoolifyPHP\Client\Model\CreateProject201Response**](../Model/CreateProject201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProjectByUuid()`

```php
deleteProjectByUuid($uuid): \CoolifyPHP\Client\Model\DeleteProjectByUuid200Response
```

Delete

Delete project by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the application.

try {
    $result = $apiInstance->deleteProjectByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProjectByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the application. | |

### Return type

[**\CoolifyPHP\Client\Model\DeleteProjectByUuid200Response**](../Model/DeleteProjectByUuid200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentByNameOrUuid()`

```php
getEnvironmentByNameOrUuid($uuid, $environment_name_or_uuid): \CoolifyPHP\Client\Model\Environment
```

Environment

Get environment by name or UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Project UUID
$environment_name_or_uuid = 'environment_name_or_uuid_example'; // string | Environment name or UUID

try {
    $result = $apiInstance->getEnvironmentByNameOrUuid($uuid, $environment_name_or_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getEnvironmentByNameOrUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Project UUID | |
| **environment_name_or_uuid** | **string**| Environment name or UUID | |

### Return type

[**\CoolifyPHP\Client\Model\Environment**](../Model/Environment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectByUuid()`

```php
getProjectByUuid($uuid): \CoolifyPHP\Client\Model\Project
```

Get

Get project by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Project UUID

try {
    $result = $apiInstance->getProjectByUuid($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Project UUID | |

### Return type

[**\CoolifyPHP\Client\Model\Project**](../Model/Project.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjects()`

```php
listProjects(): \CoolifyPHP\Client\Model\Project[]
```

List

List projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\CoolifyPHP\Client\Model\Project[]**](../Model/Project.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProjectByUuid()`

```php
updateProjectByUuid($uuid, $create_project_request): \CoolifyPHP\Client\Model\UpdateProjectByUuid201Response
```

Update

Update Project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = CoolifyPHP\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CoolifyPHP\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the project.
$create_project_request = new \CoolifyPHP\Client\Model\CreateProjectRequest(); // \CoolifyPHP\Client\Model\CreateProjectRequest | Project updated.

try {
    $result = $apiInstance->updateProjectByUuid($uuid, $create_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProjectByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the project. | |
| **create_project_request** | [**\CoolifyPHP\Client\Model\CreateProjectRequest**](../Model/CreateProjectRequest.md)| Project updated. | |

### Return type

[**\CoolifyPHP\Client\Model\UpdateProjectByUuid201Response**](../Model/UpdateProjectByUuid201Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
