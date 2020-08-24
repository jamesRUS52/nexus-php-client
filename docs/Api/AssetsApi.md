# Swagger\Client\AssetsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAsset**](AssetsApi.md#deleteAsset) | **DELETE** /v1/assets/{id} | Delete a single asset
[**getAssetById**](AssetsApi.md#getAssetById) | **GET** /v1/assets/{id} | Get a single asset
[**getAssets**](AssetsApi.md#getAssets) | **GET** /v1/assets | List assets


# **deleteAsset**
> deleteAsset($id)

Delete a single asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of the asset to delete

try {
    $apiInstance->deleteAsset($id);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the asset to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssetById**
> \Swagger\Client\Model\AssetXO getAssetById($id)

Get a single asset



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of the asset to get

try {
    $result = $apiInstance->getAssetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the asset to get |

### Return type

[**\Swagger\Client\Model\AssetXO**](../Model/AssetXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssets**
> \Swagger\Client\Model\PageAssetXO getAssets($repository, $continuation_token)

List assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository = "repository_example"; // string | Repository from which you would like to retrieve assets.
$continuation_token = "continuation_token_example"; // string | A token returned by a prior request. If present, the next page of results are returned

try {
    $result = $apiInstance->getAssets($repository, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository** | **string**| Repository from which you would like to retrieve assets. |
 **continuation_token** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]

### Return type

[**\Swagger\Client\Model\PageAssetXO**](../Model/PageAssetXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

