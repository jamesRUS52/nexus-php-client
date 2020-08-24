# Swagger\Client\SecurityManagementApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserSources**](SecurityManagementApi.md#getUserSources) | **GET** /v1/security/user-sources | Retrieve a list of the available user sources.


# **getUserSources**
> \Swagger\Client\Model\ApiUserSource[] getUserSources()

Retrieve a list of the available user sources.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserSources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityManagementApi->getUserSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiUserSource[]**](../Model/ApiUserSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

