# Swagger\Client\ComponentsApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteComponent**](ComponentsApi.md#deleteComponent) | **DELETE** /v1/components/{id} | Delete a single component
[**getComponentById**](ComponentsApi.md#getComponentById) | **GET** /v1/components/{id} | Get a single component
[**getComponents**](ComponentsApi.md#getComponents) | **GET** /v1/components | List components
[**uploadComponent**](ComponentsApi.md#uploadComponent) | **POST** /v1/components | Upload a single component


# **deleteComponent**
> deleteComponent($id)

Delete a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the component to delete

try {
    $apiInstance->deleteComponent($id);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->deleteComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the component to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponentById**
> \Swagger\Client\Model\ComponentXO getComponentById($id)

Get a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | ID of the component to retrieve

try {
    $result = $apiInstance->getComponentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getComponentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the component to retrieve |

### Return type

[**\Swagger\Client\Model\ComponentXO**](../Model/ComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComponents**
> \Swagger\Client\Model\PageComponentXO getComponents($repository, $continuation_token)

List components



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository = "repository_example"; // string | Repository from which you would like to retrieve components
$continuation_token = "continuation_token_example"; // string | A token returned by a prior request. If present, the next page of results are returned

try {
    $result = $apiInstance->getComponents($repository, $continuation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getComponents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository** | **string**| Repository from which you would like to retrieve components |
 **continuation_token** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]

### Return type

[**\Swagger\Client\Model\PageComponentXO**](../Model/PageComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadComponent**
> uploadComponent($repository, $yum_directory, $yum_asset, $yum_asset_filename, $docker_asset, $r_asset, $r_asset_path_id, $pypi_asset, $apt_asset, $rubygems_asset, $npm_asset, $nuget_asset, $helm_asset, $raw_directory, $raw_asset1, $raw_asset1_filename, $raw_asset2, $raw_asset2_filename, $raw_asset3, $raw_asset3_filename, $maven2_group_id, $maven2_artifact_id, $maven2_version, $maven2_generate_pom, $maven2_packaging, $maven2_asset1, $maven2_asset1_classifier, $maven2_asset1_extension, $maven2_asset2, $maven2_asset2_classifier, $maven2_asset2_extension, $maven2_asset3, $maven2_asset3_classifier, $maven2_asset3_extension)

Upload a single component



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository = "repository_example"; // string | Name of the repository to which you would like to upload the component
$yum_directory = "yum_directory_example"; // string | yum Directory
$yum_asset = "/path/to/file.txt"; // \SplFileObject | yum Asset
$yum_asset_filename = "yum_asset_filename_example"; // string | yum Asset  Filename
$docker_asset = "/path/to/file.txt"; // \SplFileObject | docker Asset
$r_asset = "/path/to/file.txt"; // \SplFileObject | r Asset
$r_asset_path_id = "r_asset_path_id_example"; // string | r Asset  Package Path
$pypi_asset = "/path/to/file.txt"; // \SplFileObject | pypi Asset
$apt_asset = "/path/to/file.txt"; // \SplFileObject | apt Asset
$rubygems_asset = "/path/to/file.txt"; // \SplFileObject | rubygems Asset
$npm_asset = "/path/to/file.txt"; // \SplFileObject | npm Asset
$nuget_asset = "/path/to/file.txt"; // \SplFileObject | nuget Asset
$helm_asset = "/path/to/file.txt"; // \SplFileObject | helm Asset
$raw_directory = "raw_directory_example"; // string | raw Directory
$raw_asset1 = "/path/to/file.txt"; // \SplFileObject | raw Asset 1
$raw_asset1_filename = "raw_asset1_filename_example"; // string | raw Asset 1 Filename
$raw_asset2 = "/path/to/file.txt"; // \SplFileObject | raw Asset 2
$raw_asset2_filename = "raw_asset2_filename_example"; // string | raw Asset 2 Filename
$raw_asset3 = "/path/to/file.txt"; // \SplFileObject | raw Asset 3
$raw_asset3_filename = "raw_asset3_filename_example"; // string | raw Asset 3 Filename
$maven2_group_id = "maven2_group_id_example"; // string | maven2 Group ID
$maven2_artifact_id = "maven2_artifact_id_example"; // string | maven2 Artifact ID
$maven2_version = "maven2_version_example"; // string | maven2 Version
$maven2_generate_pom = true; // bool | maven2 Generate a POM file with these coordinates
$maven2_packaging = "maven2_packaging_example"; // string | maven2 Packaging
$maven2_asset1 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 1
$maven2_asset1_classifier = "maven2_asset1_classifier_example"; // string | maven2 Asset 1 Classifier
$maven2_asset1_extension = "maven2_asset1_extension_example"; // string | maven2 Asset 1 Extension
$maven2_asset2 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 2
$maven2_asset2_classifier = "maven2_asset2_classifier_example"; // string | maven2 Asset 2 Classifier
$maven2_asset2_extension = "maven2_asset2_extension_example"; // string | maven2 Asset 2 Extension
$maven2_asset3 = "/path/to/file.txt"; // \SplFileObject | maven2 Asset 3
$maven2_asset3_classifier = "maven2_asset3_classifier_example"; // string | maven2 Asset 3 Classifier
$maven2_asset3_extension = "maven2_asset3_extension_example"; // string | maven2 Asset 3 Extension

try {
    $apiInstance->uploadComponent($repository, $yum_directory, $yum_asset, $yum_asset_filename, $docker_asset, $r_asset, $r_asset_path_id, $pypi_asset, $apt_asset, $rubygems_asset, $npm_asset, $nuget_asset, $helm_asset, $raw_directory, $raw_asset1, $raw_asset1_filename, $raw_asset2, $raw_asset2_filename, $raw_asset3, $raw_asset3_filename, $maven2_group_id, $maven2_artifact_id, $maven2_version, $maven2_generate_pom, $maven2_packaging, $maven2_asset1, $maven2_asset1_classifier, $maven2_asset1_extension, $maven2_asset2, $maven2_asset2_classifier, $maven2_asset2_extension, $maven2_asset3, $maven2_asset3_classifier, $maven2_asset3_extension);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->uploadComponent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository** | **string**| Name of the repository to which you would like to upload the component |
 **yum_directory** | **string**| yum Directory | [optional]
 **yum_asset** | **\SplFileObject**| yum Asset | [optional]
 **yum_asset_filename** | **string**| yum Asset  Filename | [optional]
 **docker_asset** | **\SplFileObject**| docker Asset | [optional]
 **r_asset** | **\SplFileObject**| r Asset | [optional]
 **r_asset_path_id** | **string**| r Asset  Package Path | [optional]
 **pypi_asset** | **\SplFileObject**| pypi Asset | [optional]
 **apt_asset** | **\SplFileObject**| apt Asset | [optional]
 **rubygems_asset** | **\SplFileObject**| rubygems Asset | [optional]
 **npm_asset** | **\SplFileObject**| npm Asset | [optional]
 **nuget_asset** | **\SplFileObject**| nuget Asset | [optional]
 **helm_asset** | **\SplFileObject**| helm Asset | [optional]
 **raw_directory** | **string**| raw Directory | [optional]
 **raw_asset1** | **\SplFileObject**| raw Asset 1 | [optional]
 **raw_asset1_filename** | **string**| raw Asset 1 Filename | [optional]
 **raw_asset2** | **\SplFileObject**| raw Asset 2 | [optional]
 **raw_asset2_filename** | **string**| raw Asset 2 Filename | [optional]
 **raw_asset3** | **\SplFileObject**| raw Asset 3 | [optional]
 **raw_asset3_filename** | **string**| raw Asset 3 Filename | [optional]
 **maven2_group_id** | **string**| maven2 Group ID | [optional]
 **maven2_artifact_id** | **string**| maven2 Artifact ID | [optional]
 **maven2_version** | **string**| maven2 Version | [optional]
 **maven2_generate_pom** | **bool**| maven2 Generate a POM file with these coordinates | [optional]
 **maven2_packaging** | **string**| maven2 Packaging | [optional]
 **maven2_asset1** | **\SplFileObject**| maven2 Asset 1 | [optional]
 **maven2_asset1_classifier** | **string**| maven2 Asset 1 Classifier | [optional]
 **maven2_asset1_extension** | **string**| maven2 Asset 1 Extension | [optional]
 **maven2_asset2** | **\SplFileObject**| maven2 Asset 2 | [optional]
 **maven2_asset2_classifier** | **string**| maven2 Asset 2 Classifier | [optional]
 **maven2_asset2_extension** | **string**| maven2 Asset 2 Extension | [optional]
 **maven2_asset3** | **\SplFileObject**| maven2 Asset 3 | [optional]
 **maven2_asset3_classifier** | **string**| maven2 Asset 3 Classifier | [optional]
 **maven2_asset3_extension** | **string**| maven2 Asset 3 Extension | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

