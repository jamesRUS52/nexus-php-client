# NexusClient\SecurityManagementRolesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create**](SecurityManagementRolesApi.md#create) | **POST** /v1/security/roles | Create role
[**delete**](SecurityManagementRolesApi.md#delete) | **DELETE** /v1/security/roles/{id} | Delete role
[**getRole**](SecurityManagementRolesApi.md#getRole) | **GET** /v1/security/roles/{id} | Get role
[**getRoles**](SecurityManagementRolesApi.md#getRoles) | **GET** /v1/security/roles | List roles
[**update1**](SecurityManagementRolesApi.md#update1) | **PUT** /v1/security/roles/{id} | Update role


# **create**
> \NexusClient\Model\RoleXOResponse create($body)

Create role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SecurityManagementRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RoleXORequest(); // \NexusClient\Model\RoleXORequest | A role configuration

try {
    $result = $apiInstance->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRolesApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RoleXORequest**](../Model/RoleXORequest.md)| A role configuration |

### Return type

[**\NexusClient\Model\RoleXOResponse**](../Model/RoleXOResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($id)

Delete role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SecurityManagementRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the role to delete

try {
    $apiInstance->delete($id);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRolesApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the role to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRole**
> \NexusClient\Model\RoleXOResponse getRole($id, $source)

Get role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SecurityManagementRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the role to get
$source = "default"; // string | The id of the user source to filter the roles by. Available sources can be fetched using the 'User Sources' endpoint.

try {
    $result = $apiInstance->getRole($id, $source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRolesApi->getRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the role to get |
 **source** | **string**| The id of the user source to filter the roles by. Available sources can be fetched using the &#39;User Sources&#39; endpoint. | [optional] [default to default]

### Return type

[**\NexusClient\Model\RoleXOResponse**](../Model/RoleXOResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \NexusClient\Model\RoleXOResponse[] getRoles($source)

List roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SecurityManagementRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$source = "source_example"; // string | The id of the user source to filter the roles by, if supplied. Otherwise roles from all user sources will be returned.

try {
    $result = $apiInstance->getRoles($source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRolesApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **string**| The id of the user source to filter the roles by, if supplied. Otherwise roles from all user sources will be returned. | [optional]

### Return type

[**\NexusClient\Model\RoleXOResponse[]**](../Model/RoleXOResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update1**
> update1($id, $body)

Update role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SecurityManagementRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the role to update
$body = new \NexusClient\Model\RoleXORequest(); // \NexusClient\Model\RoleXORequest | A role configuration

try {
    $apiInstance->update1($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRolesApi->update1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the role to update |
 **body** | [**\NexusClient\Model\RoleXORequest**](../Model/RoleXORequest.md)| A role configuration |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

