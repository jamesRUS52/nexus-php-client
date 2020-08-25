# NexusClient\ReadOnlyApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forceRelease**](ReadOnlyApi.md#forceRelease) | **POST** /v1/read-only/force-release | Forcibly release read-only
[**freeze**](ReadOnlyApi.md#freeze) | **POST** /v1/read-only/freeze | Enable read-only
[**get**](ReadOnlyApi.md#get) | **GET** /v1/read-only | Get read-only state
[**release**](ReadOnlyApi.md#release) | **POST** /v1/read-only/release | Release read-only


# **forceRelease**
> forceRelease()

Forcibly release read-only

Forcibly release read-only status, including System initiated tasks. Warning: may result in data loss.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ReadOnlyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->forceRelease();
} catch (Exception $e) {
    echo 'Exception when calling ReadOnlyApi->forceRelease: ', $e->getMessage(), PHP_EOL;
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

# **freeze**
> freeze()

Enable read-only



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ReadOnlyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->freeze();
} catch (Exception $e) {
    echo 'Exception when calling ReadOnlyApi->freeze: ', $e->getMessage(), PHP_EOL;
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

# **get**
> \NexusClient\Model\ReadOnlyState get()

Get read-only state



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ReadOnlyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReadOnlyApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\ReadOnlyState**](../Model/ReadOnlyState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **release**
> release()

Release read-only

Release administrator initiated read-only status. Will not release read-only caused by system tasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\ReadOnlyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->release();
} catch (Exception $e) {
    echo 'Exception when calling ReadOnlyApi->release: ', $e->getMessage(), PHP_EOL;
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

