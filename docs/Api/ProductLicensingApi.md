# NexusClient\ProductLicensingApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLicenseStatus**](ProductLicensingApi.md#getLicenseStatus) | **GET** /v1/system/license | Get the current license status.
[**removeLicense**](ProductLicensingApi.md#removeLicense) | **DELETE** /v1/system/license | Uninstall license if present.
[**setLicense**](ProductLicensingApi.md#setLicense) | **POST** /v1/system/license | Upload a new license file.


# **getLicenseStatus**
> \NexusClient\Model\ApiLicenseDetailsXO getLicenseStatus()

Get the current license status.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ProductLicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLicenseStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductLicensingApi->getLicenseStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\ApiLicenseDetailsXO**](../Model/ApiLicenseDetailsXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLicense**
> removeLicense()

Uninstall license if present.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ProductLicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->removeLicense();
} catch (Exception $e) {
    echo 'Exception when calling ProductLicensingApi->removeLicense: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setLicense**
> \NexusClient\Model\ApiLicenseDetailsXO setLicense($body)

Upload a new license file.

Server must be restarted to take effect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ProductLicensingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\InputStream(); // \NexusClient\Model\InputStream | 

try {
    $result = $apiInstance->setLicense($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductLicensingApi->setLicense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\InputStream**](../Model/InputStream.md)|  | [optional]

### Return type

[**\NexusClient\Model\ApiLicenseDetailsXO**](../Model/ApiLicenseDetailsXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

