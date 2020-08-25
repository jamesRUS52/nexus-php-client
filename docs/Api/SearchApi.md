# NexusClient\SearchApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **GET** /v1/search | Search components
[**searchAndDownloadAssets**](SearchApi.md#searchAndDownloadAssets) | **GET** /v1/search/assets/download | Search and download asset
[**searchAssets**](SearchApi.md#searchAssets) | **GET** /v1/search/assets | Search assets


# **search**
> \NexusClient\Model\PageComponentXO search($continuation_token, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture)

Search components



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = "continuation_token_example"; // string | A token returned by a prior request. If present, the next page of results are returned
$sort = "sort_example"; // string | The field to sort the results against, if left empty, a sort based on match weight will be used.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$prerelease = "prerelease_example"; // string | Prerelease version flag
$conan_base_version = "conan_base_version_example"; // string | baseVersion
$conan_channel = "conan_channel_example"; // string | channel
$docker_image_name = "docker_image_name_example"; // string | Docker image name
$docker_image_tag = "docker_image_tag_example"; // string | Docker image tag
$docker_layer_id = "docker_layer_id_example"; // string | Docker layer ID
$docker_content_digest = "docker_content_digest_example"; // string | Docker content digest
$maven_group_id = "maven_group_id_example"; // string | Maven groupId
$maven_artifact_id = "maven_artifact_id_example"; // string | Maven artifactId
$maven_base_version = "maven_base_version_example"; // string | Maven base version
$maven_extension = "maven_extension_example"; // string | Maven extension of component's asset
$maven_classifier = "maven_classifier_example"; // string | Maven classifier of component's asset
$npm_scope = "npm_scope_example"; // string | npm scope
$nuget_id = "nuget_id_example"; // string | NuGet id
$nuget_tags = "nuget_tags_example"; // string | NuGet tags
$p2_plugin_name = "p2_plugin_name_example"; // string | p2 plugin name
$pypi_classifiers = "pypi_classifiers_example"; // string | PyPI classifiers
$pypi_description = "pypi_description_example"; // string | PyPI description
$pypi_keywords = "pypi_keywords_example"; // string | PyPI keywords
$pypi_summary = "pypi_summary_example"; // string | PyPI summary
$rubygems_description = "rubygems_description_example"; // string | RubyGems description
$rubygems_platform = "rubygems_platform_example"; // string | RubyGems platform
$rubygems_summary = "rubygems_summary_example"; // string | RubyGems summary
$yum_architecture = "yum_architecture_example"; // string | Yum architecture

try {
    $result = $apiInstance->search($continuation_token, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]
 **sort** | **string**| The field to sort the results against, if left empty, a sort based on match weight will be used. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **conan_base_version** | **string**| baseVersion | [optional]
 **conan_channel** | **string**| channel | [optional]
 **docker_image_name** | **string**| Docker image name | [optional]
 **docker_image_tag** | **string**| Docker image tag | [optional]
 **docker_layer_id** | **string**| Docker layer ID | [optional]
 **docker_content_digest** | **string**| Docker content digest | [optional]
 **maven_group_id** | **string**| Maven groupId | [optional]
 **maven_artifact_id** | **string**| Maven artifactId | [optional]
 **maven_base_version** | **string**| Maven base version | [optional]
 **maven_extension** | **string**| Maven extension of component&#39;s asset | [optional]
 **maven_classifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npm_scope** | **string**| npm scope | [optional]
 **nuget_id** | **string**| NuGet id | [optional]
 **nuget_tags** | **string**| NuGet tags | [optional]
 **p2_plugin_name** | **string**| p2 plugin name | [optional]
 **pypi_classifiers** | **string**| PyPI classifiers | [optional]
 **pypi_description** | **string**| PyPI description | [optional]
 **pypi_keywords** | **string**| PyPI keywords | [optional]
 **pypi_summary** | **string**| PyPI summary | [optional]
 **rubygems_description** | **string**| RubyGems description | [optional]
 **rubygems_platform** | **string**| RubyGems platform | [optional]
 **rubygems_summary** | **string**| RubyGems summary | [optional]
 **yum_architecture** | **string**| Yum architecture | [optional]

### Return type

[**\NexusClient\Model\PageComponentXO**](../Model/PageComponentXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAndDownloadAssets**
> searchAndDownloadAssets($sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture)

Search and download asset

Returns a 302 Found with location header field set to download URL. Unless a sort parameter is supplied, the search must return a single asset to receive download URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = "sort_example"; // string | The field to sort the results against, if left empty and more than 1 result is returned, the request will fail.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$prerelease = "prerelease_example"; // string | Prerelease version flag
$conan_base_version = "conan_base_version_example"; // string | baseVersion
$conan_channel = "conan_channel_example"; // string | channel
$docker_image_name = "docker_image_name_example"; // string | Docker image name
$docker_image_tag = "docker_image_tag_example"; // string | Docker image tag
$docker_layer_id = "docker_layer_id_example"; // string | Docker layer ID
$docker_content_digest = "docker_content_digest_example"; // string | Docker content digest
$maven_group_id = "maven_group_id_example"; // string | Maven groupId
$maven_artifact_id = "maven_artifact_id_example"; // string | Maven artifactId
$maven_base_version = "maven_base_version_example"; // string | Maven base version
$maven_extension = "maven_extension_example"; // string | Maven extension of component's asset
$maven_classifier = "maven_classifier_example"; // string | Maven classifier of component's asset
$npm_scope = "npm_scope_example"; // string | npm scope
$nuget_id = "nuget_id_example"; // string | NuGet id
$nuget_tags = "nuget_tags_example"; // string | NuGet tags
$p2_plugin_name = "p2_plugin_name_example"; // string | p2 plugin name
$pypi_classifiers = "pypi_classifiers_example"; // string | PyPI classifiers
$pypi_description = "pypi_description_example"; // string | PyPI description
$pypi_keywords = "pypi_keywords_example"; // string | PyPI keywords
$pypi_summary = "pypi_summary_example"; // string | PyPI summary
$rubygems_description = "rubygems_description_example"; // string | RubyGems description
$rubygems_platform = "rubygems_platform_example"; // string | RubyGems platform
$rubygems_summary = "rubygems_summary_example"; // string | RubyGems summary
$yum_architecture = "yum_architecture_example"; // string | Yum architecture

try {
    $apiInstance->searchAndDownloadAssets($sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchAndDownloadAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| The field to sort the results against, if left empty and more than 1 result is returned, the request will fail. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **conan_base_version** | **string**| baseVersion | [optional]
 **conan_channel** | **string**| channel | [optional]
 **docker_image_name** | **string**| Docker image name | [optional]
 **docker_image_tag** | **string**| Docker image tag | [optional]
 **docker_layer_id** | **string**| Docker layer ID | [optional]
 **docker_content_digest** | **string**| Docker content digest | [optional]
 **maven_group_id** | **string**| Maven groupId | [optional]
 **maven_artifact_id** | **string**| Maven artifactId | [optional]
 **maven_base_version** | **string**| Maven base version | [optional]
 **maven_extension** | **string**| Maven extension of component&#39;s asset | [optional]
 **maven_classifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npm_scope** | **string**| npm scope | [optional]
 **nuget_id** | **string**| NuGet id | [optional]
 **nuget_tags** | **string**| NuGet tags | [optional]
 **p2_plugin_name** | **string**| p2 plugin name | [optional]
 **pypi_classifiers** | **string**| PyPI classifiers | [optional]
 **pypi_description** | **string**| PyPI description | [optional]
 **pypi_keywords** | **string**| PyPI keywords | [optional]
 **pypi_summary** | **string**| PyPI summary | [optional]
 **rubygems_description** | **string**| RubyGems description | [optional]
 **rubygems_platform** | **string**| RubyGems platform | [optional]
 **rubygems_summary** | **string**| RubyGems summary | [optional]
 **yum_architecture** | **string**| Yum architecture | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAssets**
> \NexusClient\Model\PageAssetXO searchAssets($continuation_token, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture)

Search assets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = "continuation_token_example"; // string | A token returned by a prior request. If present, the next page of results are returned
$sort = "sort_example"; // string | The field to sort the results against, if left empty, a sort based on match weight will be used.
$direction = "direction_example"; // string | The direction to sort records in, defaults to ascending ('asc') for all sort fields, except version, which defaults to descending ('desc')
$timeout = 56; // int | How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used.
$q = "q_example"; // string | Query by keyword
$repository = "repository_example"; // string | Repository name
$format = "format_example"; // string | Query by format
$group = "group_example"; // string | Component group
$name = "name_example"; // string | Component name
$version = "version_example"; // string | Component version
$md5 = "md5_example"; // string | Specific MD5 hash of component's asset
$sha1 = "sha1_example"; // string | Specific SHA-1 hash of component's asset
$sha256 = "sha256_example"; // string | Specific SHA-256 hash of component's asset
$sha512 = "sha512_example"; // string | Specific SHA-512 hash of component's asset
$prerelease = "prerelease_example"; // string | Prerelease version flag
$conan_base_version = "conan_base_version_example"; // string | baseVersion
$conan_channel = "conan_channel_example"; // string | channel
$docker_image_name = "docker_image_name_example"; // string | Docker image name
$docker_image_tag = "docker_image_tag_example"; // string | Docker image tag
$docker_layer_id = "docker_layer_id_example"; // string | Docker layer ID
$docker_content_digest = "docker_content_digest_example"; // string | Docker content digest
$maven_group_id = "maven_group_id_example"; // string | Maven groupId
$maven_artifact_id = "maven_artifact_id_example"; // string | Maven artifactId
$maven_base_version = "maven_base_version_example"; // string | Maven base version
$maven_extension = "maven_extension_example"; // string | Maven extension of component's asset
$maven_classifier = "maven_classifier_example"; // string | Maven classifier of component's asset
$npm_scope = "npm_scope_example"; // string | npm scope
$nuget_id = "nuget_id_example"; // string | NuGet id
$nuget_tags = "nuget_tags_example"; // string | NuGet tags
$p2_plugin_name = "p2_plugin_name_example"; // string | p2 plugin name
$pypi_classifiers = "pypi_classifiers_example"; // string | PyPI classifiers
$pypi_description = "pypi_description_example"; // string | PyPI description
$pypi_keywords = "pypi_keywords_example"; // string | PyPI keywords
$pypi_summary = "pypi_summary_example"; // string | PyPI summary
$rubygems_description = "rubygems_description_example"; // string | RubyGems description
$rubygems_platform = "rubygems_platform_example"; // string | RubyGems platform
$rubygems_summary = "rubygems_summary_example"; // string | RubyGems summary
$yum_architecture = "yum_architecture_example"; // string | Yum architecture

try {
    $result = $apiInstance->searchAssets($continuation_token, $sort, $direction, $timeout, $q, $repository, $format, $group, $name, $version, $md5, $sha1, $sha256, $sha512, $prerelease, $conan_base_version, $conan_channel, $docker_image_name, $docker_image_tag, $docker_layer_id, $docker_content_digest, $maven_group_id, $maven_artifact_id, $maven_base_version, $maven_extension, $maven_classifier, $npm_scope, $nuget_id, $nuget_tags, $p2_plugin_name, $pypi_classifiers, $pypi_description, $pypi_keywords, $pypi_summary, $rubygems_description, $rubygems_platform, $rubygems_summary, $yum_architecture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **continuation_token** | **string**| A token returned by a prior request. If present, the next page of results are returned | [optional]
 **sort** | **string**| The field to sort the results against, if left empty, a sort based on match weight will be used. | [optional]
 **direction** | **string**| The direction to sort records in, defaults to ascending (&#39;asc&#39;) for all sort fields, except version, which defaults to descending (&#39;desc&#39;) | [optional]
 **timeout** | **int**| How long to wait for search results in seconds. If this value is not provided, the system default timeout will be used. | [optional]
 **q** | **string**| Query by keyword | [optional]
 **repository** | **string**| Repository name | [optional]
 **format** | **string**| Query by format | [optional]
 **group** | **string**| Component group | [optional]
 **name** | **string**| Component name | [optional]
 **version** | **string**| Component version | [optional]
 **md5** | **string**| Specific MD5 hash of component&#39;s asset | [optional]
 **sha1** | **string**| Specific SHA-1 hash of component&#39;s asset | [optional]
 **sha256** | **string**| Specific SHA-256 hash of component&#39;s asset | [optional]
 **sha512** | **string**| Specific SHA-512 hash of component&#39;s asset | [optional]
 **prerelease** | **string**| Prerelease version flag | [optional]
 **conan_base_version** | **string**| baseVersion | [optional]
 **conan_channel** | **string**| channel | [optional]
 **docker_image_name** | **string**| Docker image name | [optional]
 **docker_image_tag** | **string**| Docker image tag | [optional]
 **docker_layer_id** | **string**| Docker layer ID | [optional]
 **docker_content_digest** | **string**| Docker content digest | [optional]
 **maven_group_id** | **string**| Maven groupId | [optional]
 **maven_artifact_id** | **string**| Maven artifactId | [optional]
 **maven_base_version** | **string**| Maven base version | [optional]
 **maven_extension** | **string**| Maven extension of component&#39;s asset | [optional]
 **maven_classifier** | **string**| Maven classifier of component&#39;s asset | [optional]
 **npm_scope** | **string**| npm scope | [optional]
 **nuget_id** | **string**| NuGet id | [optional]
 **nuget_tags** | **string**| NuGet tags | [optional]
 **p2_plugin_name** | **string**| p2 plugin name | [optional]
 **pypi_classifiers** | **string**| PyPI classifiers | [optional]
 **pypi_description** | **string**| PyPI description | [optional]
 **pypi_keywords** | **string**| PyPI keywords | [optional]
 **pypi_summary** | **string**| PyPI summary | [optional]
 **rubygems_description** | **string**| RubyGems description | [optional]
 **rubygems_platform** | **string**| RubyGems platform | [optional]
 **rubygems_summary** | **string**| RubyGems summary | [optional]
 **yum_architecture** | **string**| Yum architecture | [optional]

### Return type

[**\NexusClient\Model\PageAssetXO**](../Model/PageAssetXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

