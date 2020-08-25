# NexusClient\BlobStoreApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBlobStore**](BlobStoreApi.md#createBlobStore) | **POST** /v1/blobstores/s3 | Create an S3 blob store
[**createFileBlobStore**](BlobStoreApi.md#createFileBlobStore) | **POST** /v1/blobstores/file | Create a file blob store
[**deleteBlobStore**](BlobStoreApi.md#deleteBlobStore) | **DELETE** /v1/blobstores/{name} | Delete a blob store by name
[**getBlobStore**](BlobStoreApi.md#getBlobStore) | **GET** /v1/blobstores/s3/{name} | Fetch a S3 blob store configuration
[**getFileBlobStoreConfiguration**](BlobStoreApi.md#getFileBlobStoreConfiguration) | **GET** /v1/blobstores/file/{name} | Get a file blob store configuration by name
[**listBlobStores**](BlobStoreApi.md#listBlobStores) | **GET** /v1/blobstores | List the blob stores
[**quotaStatus**](BlobStoreApi.md#quotaStatus) | **GET** /v1/blobstores/{name}/quota-status | Get quota status for a given blob store
[**updateBlobStore**](BlobStoreApi.md#updateBlobStore) | **PUT** /v1/blobstores/s3/{name} | Update an S3 blob store configuration
[**updateFileBlobStore**](BlobStoreApi.md#updateFileBlobStore) | **PUT** /v1/blobstores/file/{name} | Update a file blob store configuration by name


# **createBlobStore**
> createBlobStore($body)

Create an S3 blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\S3BlobStoreApiModel(); // \NexusClient\Model\S3BlobStoreApiModel | 

try {
    $apiInstance->createBlobStore($body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->createBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\S3BlobStoreApiModel**](../Model/S3BlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFileBlobStore**
> createFileBlobStore($body)

Create a file blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\FileBlobStoreApiCreateRequest(); // \NexusClient\Model\FileBlobStoreApiCreateRequest | 

try {
    $apiInstance->createFileBlobStore($body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->createFileBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\FileBlobStoreApiCreateRequest**](../Model/FileBlobStoreApiCreateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBlobStore**
> deleteBlobStore($name)

Delete a blob store by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the blob store to delete

try {
    $apiInstance->deleteBlobStore($name);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->deleteBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the blob store to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBlobStore**
> getBlobStore($name)

Fetch a S3 blob store configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store configuration to fetch

try {
    $apiInstance->getBlobStore($name);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->getBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store configuration to fetch |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileBlobStoreConfiguration**
> \NexusClient\Model\FileBlobStoreApiModel getFileBlobStoreConfiguration($name)

Get a file blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the file blob store to read

try {
    $result = $apiInstance->getFileBlobStoreConfiguration($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->getFileBlobStoreConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the file blob store to read |

### Return type

[**\NexusClient\Model\FileBlobStoreApiModel**](../Model/FileBlobStoreApiModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBlobStores**
> \NexusClient\Model\GenericBlobStoreApiResponse[] listBlobStores()

List the blob stores



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listBlobStores();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->listBlobStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\GenericBlobStoreApiResponse[]**](../Model/GenericBlobStoreApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotaStatus**
> \NexusClient\Model\BlobStoreQuotaResultXO quotaStatus($name)

Get quota status for a given blob store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 

try {
    $result = $apiInstance->quotaStatus($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->quotaStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |

### Return type

[**\NexusClient\Model\BlobStoreQuotaResultXO**](../Model/BlobStoreQuotaResultXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBlobStore**
> updateBlobStore($name, $body)

Update an S3 blob store configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the blob store to update
$body = new \NexusClient\Model\S3BlobStoreApiModel(); // \NexusClient\Model\S3BlobStoreApiModel | 

try {
    $apiInstance->updateBlobStore($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->updateBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the blob store to update |
 **body** | [**\NexusClient\Model\S3BlobStoreApiModel**](../Model/S3BlobStoreApiModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileBlobStore**
> updateFileBlobStore($name, $body)

Update a file blob store configuration by name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\BlobStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the file blob store to update
$body = new \NexusClient\Model\FileBlobStoreApiUpdateRequest(); // \NexusClient\Model\FileBlobStoreApiUpdateRequest | 

try {
    $apiInstance->updateFileBlobStore($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling BlobStoreApi->updateFileBlobStore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the file blob store to update |
 **body** | [**\NexusClient\Model\FileBlobStoreApiUpdateRequest**](../Model/FileBlobStoreApiUpdateRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

