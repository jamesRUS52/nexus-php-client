# NexusClient\FormatsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get1**](FormatsApi.md#get1) | **GET** /v1/formats/{format}/upload-specs | Get upload field requirements for the desired format
[**get2**](FormatsApi.md#get2) | **GET** /v1/formats/upload-specs | Get upload field requirements for each supported format


# **get1**
> \NexusClient\Model\UploadDefinitionXO get1($format)

Get upload field requirements for the desired format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\FormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = "format_example"; // string | The desired repository format

try {
    $result = $apiInstance->get1($format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormatsApi->get1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| The desired repository format |

### Return type

[**\NexusClient\Model\UploadDefinitionXO**](../Model/UploadDefinitionXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get2**
> \NexusClient\Model\UploadDefinitionXO[] get2()

Get upload field requirements for each supported format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\FormatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->get2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormatsApi->get2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\UploadDefinitionXO[]**](../Model/UploadDefinitionXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

