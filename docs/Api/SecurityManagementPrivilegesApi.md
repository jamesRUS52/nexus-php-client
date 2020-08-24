# Swagger\Client\SecurityManagementPrivilegesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPrivilege**](SecurityManagementPrivilegesApi.md#createPrivilege) | **POST** /v1/security/privileges/wildcard | Create a wildcard type privilege.
[**createPrivilege1**](SecurityManagementPrivilegesApi.md#createPrivilege1) | **POST** /v1/security/privileges/application | Create an application type privilege.
[**createPrivilege2**](SecurityManagementPrivilegesApi.md#createPrivilege2) | **POST** /v1/security/privileges/repository-content-selector | Create a repository content selector type privilege.
[**createPrivilege3**](SecurityManagementPrivilegesApi.md#createPrivilege3) | **POST** /v1/security/privileges/repository-admin | Create a repository admin type privilege.
[**createPrivilege4**](SecurityManagementPrivilegesApi.md#createPrivilege4) | **POST** /v1/security/privileges/repository-view | Create a repository view type privilege.
[**createPrivilege5**](SecurityManagementPrivilegesApi.md#createPrivilege5) | **POST** /v1/security/privileges/script | Create a script type privilege.
[**deletePrivilege**](SecurityManagementPrivilegesApi.md#deletePrivilege) | **DELETE** /v1/security/privileges/{privilegeId} | Delete a privilege by id.
[**getPrivilege**](SecurityManagementPrivilegesApi.md#getPrivilege) | **GET** /v1/security/privileges/{privilegeId} | Retrieve a privilege by id.
[**getPrivileges**](SecurityManagementPrivilegesApi.md#getPrivileges) | **GET** /v1/security/privileges | Retrieve a list of privileges.
[**updatePrivilege**](SecurityManagementPrivilegesApi.md#updatePrivilege) | **PUT** /v1/security/privileges/wildcard/{privilegeId} | Update a wildcard type privilege.
[**updatePrivilege1**](SecurityManagementPrivilegesApi.md#updatePrivilege1) | **PUT** /v1/security/privileges/application/{privilegeId} | Update an application type privilege.
[**updatePrivilege2**](SecurityManagementPrivilegesApi.md#updatePrivilege2) | **PUT** /v1/security/privileges/repository-view/{privilegeId} | Update a repository view type privilege.
[**updatePrivilege3**](SecurityManagementPrivilegesApi.md#updatePrivilege3) | **PUT** /v1/security/privileges/repository-content-selector/{privilegeId} | Update a repository content selector type privilege.
[**updatePrivilege4**](SecurityManagementPrivilegesApi.md#updatePrivilege4) | **PUT** /v1/security/privileges/repository-admin/{privilegeId} | Update a repository admin type privilege.
[**updatePrivilege5**](SecurityManagementPrivilegesApi.md#updatePrivilege5) | **PUT** /v1/security/privileges/script/{privilegeId} | Update a script type privilege.


# **createPrivilege**
> createPrivilege($body)

Create a wildcard type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeWildcardRequest(); // \Swagger\Client\Model\ApiPrivilegeWildcardRequest | The privilege to create.

try {
    $apiInstance->createPrivilege($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeWildcardRequest**](../Model/ApiPrivilegeWildcardRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege1**
> createPrivilege1($body)

Create an application type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeApplicationRequest(); // \Swagger\Client\Model\ApiPrivilegeApplicationRequest | The privilege to create.

try {
    $apiInstance->createPrivilege1($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeApplicationRequest**](../Model/ApiPrivilegeApplicationRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege2**
> createPrivilege2($body)

Create a repository content selector type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest | The privilege to create.

try {
    $apiInstance->createPrivilege2($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest**](../Model/ApiPrivilegeRepositoryContentSelectorRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege3**
> createPrivilege3($body)

Create a repository admin type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest | The privilege to create.

try {
    $apiInstance->createPrivilege3($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest**](../Model/ApiPrivilegeRepositoryAdminRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege4**
> createPrivilege4($body)

Create a repository view type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest | The privilege to create.

try {
    $apiInstance->createPrivilege4($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest**](../Model/ApiPrivilegeRepositoryViewRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPrivilege5**
> createPrivilege5($body)

Create a script type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ApiPrivilegeScriptRequest(); // \Swagger\Client\Model\ApiPrivilegeScriptRequest | The privilege to create.

try {
    $apiInstance->createPrivilege5($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->createPrivilege5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApiPrivilegeScriptRequest**](../Model/ApiPrivilegeScriptRequest.md)| The privilege to create. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePrivilege**
> deletePrivilege($privilege_id)

Delete a privilege by id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to delete.

try {
    $apiInstance->deletePrivilege($privilege_id);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->deletePrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivilege**
> \Swagger\Client\Model\ApiPrivilege getPrivilege($privilege_id)

Retrieve a privilege by id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to retrieve.

try {
    $result = $apiInstance->getPrivilege($privilege_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->getPrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to retrieve. |

### Return type

[**\Swagger\Client\Model\ApiPrivilege**](../Model/ApiPrivilege.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPrivileges**
> \Swagger\Client\Model\ApiPrivilege[] getPrivileges()

Retrieve a list of privileges.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPrivileges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->getPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiPrivilege[]**](../Model/ApiPrivilege.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege**
> updatePrivilege($privilege_id, $body)

Update a wildcard type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeWildcardRequest(); // \Swagger\Client\Model\ApiPrivilegeWildcardRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeWildcardRequest**](../Model/ApiPrivilegeWildcardRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege1**
> updatePrivilege1($privilege_id, $body)

Update an application type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeApplicationRequest(); // \Swagger\Client\Model\ApiPrivilegeApplicationRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege1($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeApplicationRequest**](../Model/ApiPrivilegeApplicationRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege2**
> updatePrivilege2($privilege_id, $body)

Update a repository view type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege2($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryViewRequest**](../Model/ApiPrivilegeRepositoryViewRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege3**
> updatePrivilege3($privilege_id, $body)

Update a repository content selector type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege3($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryContentSelectorRequest**](../Model/ApiPrivilegeRepositoryContentSelectorRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege4**
> updatePrivilege4($privilege_id, $body)

Update a repository admin type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest(); // \Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege4($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeRepositoryAdminRequest**](../Model/ApiPrivilegeRepositoryAdminRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePrivilege5**
> updatePrivilege5($privilege_id, $body)

Update a script type privilege.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementPrivilegesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$privilege_id = "privilege_id_example"; // string | The id of the privilege to update.
$body = new \Swagger\Client\Model\ApiPrivilegeScriptRequest(); // \Swagger\Client\Model\ApiPrivilegeScriptRequest | The privilege to update.

try {
    $apiInstance->updatePrivilege5($privilege_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementPrivilegesApi->updatePrivilege5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **privilege_id** | **string**| The id of the privilege to update. |
 **body** | [**\Swagger\Client\Model\ApiPrivilegeScriptRequest**](../Model/ApiPrivilegeScriptRequest.md)| The privilege to update. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

