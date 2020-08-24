# Swagger\Client\SecurityManagementLDAPApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeOrder**](SecurityManagementLDAPApi.md#changeOrder) | **POST** /v1/security/ldap/change-order | Change LDAP server order
[**createLdapServer**](SecurityManagementLDAPApi.md#createLdapServer) | **POST** /v1/security/ldap | Create LDAP server
[**deleteLdapServer**](SecurityManagementLDAPApi.md#deleteLdapServer) | **DELETE** /v1/security/ldap/{name} | Delete LDAP server
[**getLdapServer**](SecurityManagementLDAPApi.md#getLdapServer) | **GET** /v1/security/ldap/{name} | Get LDAP server
[**getLdapServers**](SecurityManagementLDAPApi.md#getLdapServers) | **GET** /v1/security/ldap | List LDAP servers
[**updateLdapServer**](SecurityManagementLDAPApi.md#updateLdapServer) | **PUT** /v1/security/ldap/{name} | Update LDAP server


# **changeOrder**
> changeOrder($body)

Change LDAP server order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\string[]()); // string[] | Ordered list of LDAP server names

try {
    $apiInstance->changeOrder($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->changeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string[]**| Ordered list of LDAP server names | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLdapServer**
> createLdapServer($body)

Create LDAP server



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CreateLdapServerXo(); // \Swagger\Client\Model\CreateLdapServerXo | 

try {
    $apiInstance->createLdapServer($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->createLdapServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateLdapServerXo**](../Model/CreateLdapServerXo.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLdapServer**
> deleteLdapServer($name)

Delete LDAP server



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the LDAP server to delete

try {
    $apiInstance->deleteLdapServer($name);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->deleteLdapServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the LDAP server to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLdapServer**
> getLdapServer($name)

Get LDAP server



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the LDAP server to retrieve

try {
    $apiInstance->getLdapServer($name);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->getLdapServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the LDAP server to retrieve |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLdapServers**
> getLdapServers()

List LDAP servers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->getLdapServers();
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->getLdapServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLdapServer**
> updateLdapServer($name, $body)

Update LDAP server



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementLDAPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the LDAP server to update
$body = new \Swagger\Client\Model\UpdateLdapServerXo(); // \Swagger\Client\Model\UpdateLdapServerXo | Updated values of LDAP server

try {
    $apiInstance->updateLdapServer($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementLDAPApi->updateLdapServer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the LDAP server to update |
 **body** | [**\Swagger\Client\Model\UpdateLdapServerXo**](../Model/UpdateLdapServerXo.md)| Updated values of LDAP server | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

