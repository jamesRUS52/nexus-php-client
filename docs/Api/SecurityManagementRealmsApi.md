# Swagger\Client\SecurityManagementRealmsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActiveRealms**](SecurityManagementRealmsApi.md#getActiveRealms) | **GET** /v1/security/realms/active | List the active realm IDs in order
[**getRealms**](SecurityManagementRealmsApi.md#getRealms) | **GET** /v1/security/realms/available | List the available realms
[**setActiveRealms**](SecurityManagementRealmsApi.md#setActiveRealms) | **PUT** /v1/security/realms/active | Set the active security realms in the order they should be used


# **getActiveRealms**
> string[] getActiveRealms()

List the active realm IDs in order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementRealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getActiveRealms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRealmsApi->getActiveRealms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRealms**
> \Swagger\Client\Model\RealmApiXO[] getRealms()

List the available realms



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementRealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRealms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRealmsApi->getRealms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RealmApiXO[]**](../Model/RealmApiXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setActiveRealms**
> setActiveRealms($body)

Set the active security realms in the order they should be used



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementRealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\string[]()); // string[] | The realm IDs

try {
    $apiInstance->setActiveRealms($body);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementRealmsApi->setActiveRealms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string[]**| The realm IDs | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

