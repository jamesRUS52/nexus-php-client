# Swagger\Client\SecurityManagementAnonymousAccessApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**read**](SecurityManagementAnonymousAccessApi.md#read) | **GET** /v1/security/anonymous | Get Anonymous Access settings
[**update**](SecurityManagementAnonymousAccessApi.md#update) | **PUT** /v1/security/anonymous | Update Anonymous Access settings


# **read**
> \Swagger\Client\Model\AnonymousAccessSettingsXO read()

Get Anonymous Access settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementAnonymousAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->read();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementAnonymousAccessApi->read: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AnonymousAccessSettingsXO**](../Model/AnonymousAccessSettingsXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Swagger\Client\Model\AnonymousAccessSettingsXO update($body)

Update Anonymous Access settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementAnonymousAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AnonymousAccessSettingsXO(); // \Swagger\Client\Model\AnonymousAccessSettingsXO | 

try {
    $result = $apiInstance->update($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementAnonymousAccessApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AnonymousAccessSettingsXO**](../Model/AnonymousAccessSettingsXO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AnonymousAccessSettingsXO**](../Model/AnonymousAccessSettingsXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

