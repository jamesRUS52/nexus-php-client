# NexusClient\RepositoryManagementApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRepository**](RepositoryManagementApi.md#createRepository) | **POST** /v1/repositories/maven/group | Create Maven group repository
[**createRepository1**](RepositoryManagementApi.md#createRepository1) | **POST** /v1/repositories/maven/hosted | Create Maven hosted repository
[**createRepository10**](RepositoryManagementApi.md#createRepository10) | **POST** /v1/repositories/nuget/proxy | Create NuGet proxy repository
[**createRepository11**](RepositoryManagementApi.md#createRepository11) | **POST** /v1/repositories/npm/group | Create npm group repository
[**createRepository12**](RepositoryManagementApi.md#createRepository12) | **POST** /v1/repositories/npm/hosted | Create npm hosted repository
[**createRepository13**](RepositoryManagementApi.md#createRepository13) | **POST** /v1/repositories/npm/proxy | Create npm proxy repository
[**createRepository14**](RepositoryManagementApi.md#createRepository14) | **POST** /v1/repositories/rubygems/group | Create RubyGems group repository
[**createRepository15**](RepositoryManagementApi.md#createRepository15) | **POST** /v1/repositories/rubygems/hosted | Create RubyGems hosted repository
[**createRepository16**](RepositoryManagementApi.md#createRepository16) | **POST** /v1/repositories/rubygems/proxy | Create RubyGems proxy repository
[**createRepository17**](RepositoryManagementApi.md#createRepository17) | **POST** /v1/repositories/apt/hosted | Create APT hosted repository
[**createRepository18**](RepositoryManagementApi.md#createRepository18) | **POST** /v1/repositories/apt/proxy | Create APT proxy repository
[**createRepository19**](RepositoryManagementApi.md#createRepository19) | **POST** /v1/repositories/cocoapods/proxy | Create Cocoapods proxy repository
[**createRepository2**](RepositoryManagementApi.md#createRepository2) | **POST** /v1/repositories/maven/proxy | Create Maven proxy repository
[**createRepository20**](RepositoryManagementApi.md#createRepository20) | **POST** /v1/repositories/go/group | Create a Go group repository
[**createRepository21**](RepositoryManagementApi.md#createRepository21) | **POST** /v1/repositories/go/proxy | Create a Go proxy repository
[**createRepository22**](RepositoryManagementApi.md#createRepository22) | **POST** /v1/repositories/pypi/group | Create PyPI group repository
[**createRepository23**](RepositoryManagementApi.md#createRepository23) | **POST** /v1/repositories/pypi/hosted | Create PyPI hosted repository
[**createRepository24**](RepositoryManagementApi.md#createRepository24) | **POST** /v1/repositories/pypi/proxy | Create PyPI proxy repository
[**createRepository25**](RepositoryManagementApi.md#createRepository25) | **POST** /v1/repositories/conan/proxy | Create Conan proxy repository
[**createRepository26**](RepositoryManagementApi.md#createRepository26) | **POST** /v1/repositories/p2/proxy | Create p2 proxy repository
[**createRepository27**](RepositoryManagementApi.md#createRepository27) | **POST** /v1/repositories/r/group | Create R group repository
[**createRepository28**](RepositoryManagementApi.md#createRepository28) | **POST** /v1/repositories/r/hosted | Create R hosted repository
[**createRepository29**](RepositoryManagementApi.md#createRepository29) | **POST** /v1/repositories/r/proxy | Create R proxy repository
[**createRepository3**](RepositoryManagementApi.md#createRepository3) | **POST** /v1/repositories/raw/group | Create raw group repository
[**createRepository30**](RepositoryManagementApi.md#createRepository30) | **POST** /v1/repositories/bower/group | Create Bower group repository
[**createRepository31**](RepositoryManagementApi.md#createRepository31) | **POST** /v1/repositories/bower/hosted | Create Bower hosted repository
[**createRepository32**](RepositoryManagementApi.md#createRepository32) | **POST** /v1/repositories/bower/proxy | Create Bower proxy repository
[**createRepository33**](RepositoryManagementApi.md#createRepository33) | **POST** /v1/repositories/docker/group | Create Docker group repository
[**createRepository34**](RepositoryManagementApi.md#createRepository34) | **POST** /v1/repositories/docker/hosted | Create Docker hosted repository
[**createRepository35**](RepositoryManagementApi.md#createRepository35) | **POST** /v1/repositories/docker/proxy | Create Docker proxy repository
[**createRepository36**](RepositoryManagementApi.md#createRepository36) | **POST** /v1/repositories/gitlfs/hosted | Create Git LFS hosted repository
[**createRepository37**](RepositoryManagementApi.md#createRepository37) | **POST** /v1/repositories/yum/group | Create Yum group repository
[**createRepository38**](RepositoryManagementApi.md#createRepository38) | **POST** /v1/repositories/yum/hosted | Create Yum hosted repository
[**createRepository39**](RepositoryManagementApi.md#createRepository39) | **POST** /v1/repositories/yum/proxy | Create Yum proxy repository
[**createRepository4**](RepositoryManagementApi.md#createRepository4) | **POST** /v1/repositories/raw/hosted | Create raw hosted repository
[**createRepository5**](RepositoryManagementApi.md#createRepository5) | **POST** /v1/repositories/raw/proxy | Create raw proxy repository
[**createRepository6**](RepositoryManagementApi.md#createRepository6) | **POST** /v1/repositories/helm/hosted | Create Helm hosted repository
[**createRepository7**](RepositoryManagementApi.md#createRepository7) | **POST** /v1/repositories/helm/proxy | Create Helm proxy repository
[**createRepository8**](RepositoryManagementApi.md#createRepository8) | **POST** /v1/repositories/nuget/group | Create NuGet group repository
[**createRepository9**](RepositoryManagementApi.md#createRepository9) | **POST** /v1/repositories/nuget/hosted | Create NuGet hosted repository
[**deleteRepository**](RepositoryManagementApi.md#deleteRepository) | **DELETE** /v1/repositories/{repositoryName} | Delete repository of any format
[**disableRepositoryHealthCheck**](RepositoryManagementApi.md#disableRepositoryHealthCheck) | **DELETE** /v1/repositories/{repositoryName}/health-check | Disable repository health check. Proxy repositories only.
[**enableRepositoryHealthCheck**](RepositoryManagementApi.md#enableRepositoryHealthCheck) | **POST** /v1/repositories/{repositoryName}/health-check | Enable repository health check. Proxy repositories only.
[**getRepositories**](RepositoryManagementApi.md#getRepositories) | **GET** /v1/repositorySettings | List repositories
[**invalidateCache**](RepositoryManagementApi.md#invalidateCache) | **POST** /v1/repositories/{repositoryName}/invalidate-cache | Invalidate repository cache. Proxy or group repositories only.
[**rebuildIndex**](RepositoryManagementApi.md#rebuildIndex) | **POST** /v1/repositories/{repositoryName}/rebuild-index | Schedule a &#39;Repair - Rebuild repository search&#39; Task. Hosted or proxy repositories only.
[**updateRepository**](RepositoryManagementApi.md#updateRepository) | **PUT** /v1/repositories/maven/group/{repositoryName} | Update Maven group repository
[**updateRepository1**](RepositoryManagementApi.md#updateRepository1) | **PUT** /v1/repositories/maven/hosted/{repositoryName} | Update Maven hosted repository
[**updateRepository10**](RepositoryManagementApi.md#updateRepository10) | **PUT** /v1/repositories/nuget/proxy/{repositoryName} | Update NuGet proxy repository
[**updateRepository11**](RepositoryManagementApi.md#updateRepository11) | **PUT** /v1/repositories/npm/group/{repositoryName} | Update npm group repository
[**updateRepository12**](RepositoryManagementApi.md#updateRepository12) | **PUT** /v1/repositories/npm/hosted/{repositoryName} | Update npm hosted repository
[**updateRepository13**](RepositoryManagementApi.md#updateRepository13) | **PUT** /v1/repositories/npm/proxy/{repositoryName} | Update npm proxy repository
[**updateRepository14**](RepositoryManagementApi.md#updateRepository14) | **PUT** /v1/repositories/rubygems/group/{repositoryName} | Update RubyGems group repository
[**updateRepository15**](RepositoryManagementApi.md#updateRepository15) | **PUT** /v1/repositories/rubygems/hosted/{repositoryName} | Update RubyGems hosted repository
[**updateRepository16**](RepositoryManagementApi.md#updateRepository16) | **PUT** /v1/repositories/rubygems/proxy/{repositoryName} | Update RubyGems proxy repository
[**updateRepository17**](RepositoryManagementApi.md#updateRepository17) | **PUT** /v1/repositories/apt/hosted/{repositoryName} | Update APT hosted repository
[**updateRepository18**](RepositoryManagementApi.md#updateRepository18) | **PUT** /v1/repositories/apt/proxy/{repositoryName} | Update APT proxy repository
[**updateRepository19**](RepositoryManagementApi.md#updateRepository19) | **PUT** /v1/repositories/cocoapods/proxy/{repositoryName} | Update Cocoapods proxy repository
[**updateRepository2**](RepositoryManagementApi.md#updateRepository2) | **PUT** /v1/repositories/maven/proxy/{repositoryName} | Update Maven proxy repository
[**updateRepository20**](RepositoryManagementApi.md#updateRepository20) | **PUT** /v1/repositories/go/group/{repositoryName} | Update a Go group repository
[**updateRepository21**](RepositoryManagementApi.md#updateRepository21) | **PUT** /v1/repositories/go/proxy/{repositoryName} | Update a Go proxy repository
[**updateRepository22**](RepositoryManagementApi.md#updateRepository22) | **PUT** /v1/repositories/pypi/group/{repositoryName} | Update PyPI group repository
[**updateRepository23**](RepositoryManagementApi.md#updateRepository23) | **PUT** /v1/repositories/pypi/hosted/{repositoryName} | Update PyPI hosted repository
[**updateRepository24**](RepositoryManagementApi.md#updateRepository24) | **PUT** /v1/repositories/pypi/proxy/{repositoryName} | Update PyPI proxy repository
[**updateRepository25**](RepositoryManagementApi.md#updateRepository25) | **PUT** /v1/repositories/conan/proxy/{repositoryName} | Update Conan proxy repository
[**updateRepository26**](RepositoryManagementApi.md#updateRepository26) | **PUT** /v1/repositories/p2/proxy/{repositoryName} | Update p2 proxy repository
[**updateRepository27**](RepositoryManagementApi.md#updateRepository27) | **PUT** /v1/repositories/r/group/{repositoryName} | Update R group repository
[**updateRepository28**](RepositoryManagementApi.md#updateRepository28) | **PUT** /v1/repositories/r/hosted/{repositoryName} | Update R hosted repository
[**updateRepository29**](RepositoryManagementApi.md#updateRepository29) | **PUT** /v1/repositories/r/proxy/{repositoryName} | Update R proxy repository
[**updateRepository3**](RepositoryManagementApi.md#updateRepository3) | **PUT** /v1/repositories/raw/group/{repositoryName} | Update raw group repository
[**updateRepository30**](RepositoryManagementApi.md#updateRepository30) | **PUT** /v1/repositories/bower/group/{repositoryName} | Update Bower group repository
[**updateRepository31**](RepositoryManagementApi.md#updateRepository31) | **PUT** /v1/repositories/bower/hosted/{repositoryName} | Update Bower hosted repository
[**updateRepository32**](RepositoryManagementApi.md#updateRepository32) | **PUT** /v1/repositories/bower/proxy/{repositoryName} | Update Bower proxy repository
[**updateRepository33**](RepositoryManagementApi.md#updateRepository33) | **PUT** /v1/repositories/docker/group/{repositoryName} | Update Docker group repository
[**updateRepository34**](RepositoryManagementApi.md#updateRepository34) | **PUT** /v1/repositories/docker/hosted/{repositoryName} | Update Docker hosted repository
[**updateRepository35**](RepositoryManagementApi.md#updateRepository35) | **PUT** /v1/repositories/docker/proxy/{repositoryName} | Update Docker group repository
[**updateRepository36**](RepositoryManagementApi.md#updateRepository36) | **PUT** /v1/repositories/gitlfs/hosted/{repositoryName} | Update Git LFS hosted repository
[**updateRepository37**](RepositoryManagementApi.md#updateRepository37) | **PUT** /v1/repositories/yum/group/{repositoryName} | Update Yum group repository
[**updateRepository38**](RepositoryManagementApi.md#updateRepository38) | **PUT** /v1/repositories/yum/hosted/{repositoryName} | Update Yum hosted repository
[**updateRepository39**](RepositoryManagementApi.md#updateRepository39) | **PUT** /v1/repositories/yum/proxy/{repositoryName} | Update Yum proxy repository
[**updateRepository4**](RepositoryManagementApi.md#updateRepository4) | **PUT** /v1/repositories/raw/hosted/{repositoryName} | Update raw hosted repository
[**updateRepository5**](RepositoryManagementApi.md#updateRepository5) | **PUT** /v1/repositories/raw/proxy/{repositoryName} | Update raw proxy repository
[**updateRepository6**](RepositoryManagementApi.md#updateRepository6) | **PUT** /v1/repositories/helm/hosted/{repositoryName} | Update Helm hosted repository
[**updateRepository7**](RepositoryManagementApi.md#updateRepository7) | **PUT** /v1/repositories/helm/proxy/{repositoryName} | Update Helm proxy repository
[**updateRepository8**](RepositoryManagementApi.md#updateRepository8) | **PUT** /v1/repositories/nuget/group/{repositoryName} | Update NuGet group repository
[**updateRepository9**](RepositoryManagementApi.md#updateRepository9) | **PUT** /v1/repositories/nuget/hosted/{repositoryName} | Update NuGet hosted repository


# **createRepository**
> createRepository($body)

Create Maven group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\MavenGroupRepositoryApiRequest(); // \NexusClient\Model\MavenGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\MavenGroupRepositoryApiRequest**](../Model/MavenGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository1**
> createRepository1($body)

Create Maven hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\MavenHostedRepositoryApiRequest(); // \NexusClient\Model\MavenHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository1($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\MavenHostedRepositoryApiRequest**](../Model/MavenHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository10**
> createRepository10($body)

Create NuGet proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NugetProxyRepositoryApiRequest(); // \NexusClient\Model\NugetProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository10($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NugetProxyRepositoryApiRequest**](../Model/NugetProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository11**
> createRepository11($body)

Create npm group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NpmGroupRepositoryApiRequest(); // \NexusClient\Model\NpmGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository11($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NpmGroupRepositoryApiRequest**](../Model/NpmGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository12**
> createRepository12($body)

Create npm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NpmHostedRepositoryApiRequest(); // \NexusClient\Model\NpmHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository12($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NpmHostedRepositoryApiRequest**](../Model/NpmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository13**
> createRepository13($body)

Create npm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NpmProxyRepositoryApiRequest(); // \NexusClient\Model\NpmProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository13($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NpmProxyRepositoryApiRequest**](../Model/NpmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository14**
> createRepository14($body)

Create RubyGems group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RubyGemsGroupRepositoryApiRequest(); // \NexusClient\Model\RubyGemsGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository14($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RubyGemsGroupRepositoryApiRequest**](../Model/RubyGemsGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository15**
> createRepository15($body)

Create RubyGems hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RubyGemsHostedRepositoryApiRequest(); // \NexusClient\Model\RubyGemsHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository15($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RubyGemsHostedRepositoryApiRequest**](../Model/RubyGemsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository16**
> createRepository16($body)

Create RubyGems proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RubyGemsProxyRepositoryApiRequest(); // \NexusClient\Model\RubyGemsProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository16($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RubyGemsProxyRepositoryApiRequest**](../Model/RubyGemsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository17**
> createRepository17($body)

Create APT hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\AptHostedRepositoryApiRequest(); // \NexusClient\Model\AptHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository17($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\AptHostedRepositoryApiRequest**](../Model/AptHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository18**
> createRepository18($body)

Create APT proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\AptProxyRepositoryApiRequest(); // \NexusClient\Model\AptProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository18($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\AptProxyRepositoryApiRequest**](../Model/AptProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository19**
> createRepository19($body)

Create Cocoapods proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\CocoapodsProxyRepositoryApiRequest(); // \NexusClient\Model\CocoapodsProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository19($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\CocoapodsProxyRepositoryApiRequest**](../Model/CocoapodsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository2**
> createRepository2($body)

Create Maven proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\MavenProxyRepositoryApiRequest(); // \NexusClient\Model\MavenProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository2($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\MavenProxyRepositoryApiRequest**](../Model/MavenProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository20**
> createRepository20($body)

Create a Go group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\GolangGroupRepositoryApiRequest(); // \NexusClient\Model\GolangGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository20($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\GolangGroupRepositoryApiRequest**](../Model/GolangGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository21**
> createRepository21($body)

Create a Go proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\GolangProxyRepositoryApiRequest(); // \NexusClient\Model\GolangProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository21($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\GolangProxyRepositoryApiRequest**](../Model/GolangProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository22**
> createRepository22($body)

Create PyPI group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\PypiGroupRepositoryApiRequest(); // \NexusClient\Model\PypiGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository22($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\PypiGroupRepositoryApiRequest**](../Model/PypiGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository23**
> createRepository23($body)

Create PyPI hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\PypiHostedRepositoryApiRequest(); // \NexusClient\Model\PypiHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository23($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\PypiHostedRepositoryApiRequest**](../Model/PypiHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository24**
> createRepository24($body)

Create PyPI proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\PypiProxyRepositoryApiRequest(); // \NexusClient\Model\PypiProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository24($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\PypiProxyRepositoryApiRequest**](../Model/PypiProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository25**
> createRepository25($body)

Create Conan proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\ConanProxyRepositoryApiRequest(); // \NexusClient\Model\ConanProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository25($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\ConanProxyRepositoryApiRequest**](../Model/ConanProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository26**
> createRepository26($body)

Create p2 proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\P2ProxyRepositoryApiRequest(); // \NexusClient\Model\P2ProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository26($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository26: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\P2ProxyRepositoryApiRequest**](../Model/P2ProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository27**
> createRepository27($body)

Create R group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RGroupRepositoryApiRequest(); // \NexusClient\Model\RGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository27($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository27: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RGroupRepositoryApiRequest**](../Model/RGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository28**
> createRepository28($body)

Create R hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RHostedRepositoryApiRequest(); // \NexusClient\Model\RHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository28($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RHostedRepositoryApiRequest**](../Model/RHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository29**
> createRepository29($body)

Create R proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RProxyRepositoryApiRequest(); // \NexusClient\Model\RProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository29($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RProxyRepositoryApiRequest**](../Model/RProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository3**
> createRepository3($body)

Create raw group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RawGroupRepositoryApiRequest(); // \NexusClient\Model\RawGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository3($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RawGroupRepositoryApiRequest**](../Model/RawGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository30**
> createRepository30($body)

Create Bower group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\BowerGroupRepositoryApiRequest(); // \NexusClient\Model\BowerGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository30($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository30: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\BowerGroupRepositoryApiRequest**](../Model/BowerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository31**
> createRepository31($body)

Create Bower hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\BowerHostedRepositoryApiRequest(); // \NexusClient\Model\BowerHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository31($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository31: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\BowerHostedRepositoryApiRequest**](../Model/BowerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository32**
> createRepository32($body)

Create Bower proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\BowerProxyRepositoryApiRequest(); // \NexusClient\Model\BowerProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository32($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository32: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\BowerProxyRepositoryApiRequest**](../Model/BowerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository33**
> createRepository33($body)

Create Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\DockerGroupRepositoryApiRequest(); // \NexusClient\Model\DockerGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository33($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository33: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\DockerGroupRepositoryApiRequest**](../Model/DockerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository34**
> createRepository34($body)

Create Docker hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\DockerHostedRepositoryApiRequest(); // \NexusClient\Model\DockerHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository34($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\DockerHostedRepositoryApiRequest**](../Model/DockerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository35**
> createRepository35($body)

Create Docker proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\DockerProxyRepositoryApiRequest(); // \NexusClient\Model\DockerProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository35($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\DockerProxyRepositoryApiRequest**](../Model/DockerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository36**
> createRepository36($body)

Create Git LFS hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\GitLfsHostedRepositoryApiRequest(); // \NexusClient\Model\GitLfsHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository36($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository36: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\GitLfsHostedRepositoryApiRequest**](../Model/GitLfsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository37**
> createRepository37($body)

Create Yum group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\YumGroupRepositoryApiRequest(); // \NexusClient\Model\YumGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository37($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository37: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\YumGroupRepositoryApiRequest**](../Model/YumGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository38**
> createRepository38($body)

Create Yum hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\YumHostedRepositoryApiRequest(); // \NexusClient\Model\YumHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository38($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\YumHostedRepositoryApiRequest**](../Model/YumHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository39**
> createRepository39($body)

Create Yum proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\YumProxyRepositoryApiRequest(); // \NexusClient\Model\YumProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository39($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\YumProxyRepositoryApiRequest**](../Model/YumProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository4**
> createRepository4($body)

Create raw hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RawHostedRepositoryApiRequest(); // \NexusClient\Model\RawHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository4($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RawHostedRepositoryApiRequest**](../Model/RawHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository5**
> createRepository5($body)

Create raw proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RawProxyRepositoryApiRequest(); // \NexusClient\Model\RawProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository5($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RawProxyRepositoryApiRequest**](../Model/RawProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository6**
> createRepository6($body)

Create Helm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\HelmHostedRepositoryApiRequest(); // \NexusClient\Model\HelmHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository6($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\HelmHostedRepositoryApiRequest**](../Model/HelmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository7**
> createRepository7($body)

Create Helm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\HelmProxyRepositoryApiRequest(); // \NexusClient\Model\HelmProxyRepositoryApiRequest | 

try {
    $apiInstance->createRepository7($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\HelmProxyRepositoryApiRequest**](../Model/HelmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository8**
> createRepository8($body)

Create NuGet group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NugetGroupRepositoryApiRequest(); // \NexusClient\Model\NugetGroupRepositoryApiRequest | 

try {
    $apiInstance->createRepository8($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NugetGroupRepositoryApiRequest**](../Model/NugetGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRepository9**
> createRepository9($body)

Create NuGet hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\NugetHostedRepositoryApiRequest(); // \NexusClient\Model\NugetHostedRepositoryApiRequest | 

try {
    $apiInstance->createRepository9($body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->createRepository9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\NugetHostedRepositoryApiRequest**](../Model/NugetHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRepository**
> deleteRepository($repository_name)

Delete repository of any format



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to delete

try {
    $apiInstance->deleteRepository($repository_name);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->deleteRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disableRepositoryHealthCheck**
> disableRepositoryHealthCheck($repository_name)

Disable repository health check. Proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to disable Repository Health Check for

try {
    $apiInstance->disableRepositoryHealthCheck($repository_name);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->disableRepositoryHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to disable Repository Health Check for |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enableRepositoryHealthCheck**
> enableRepositoryHealthCheck($repository_name)

Enable repository health check. Proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to enable Repository Health Check for

try {
    $apiInstance->enableRepositoryHealthCheck($repository_name);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->enableRepositoryHealthCheck: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to enable Repository Health Check for |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRepositories**
> \NexusClient\Model\AbstractApiRepository[] getRepositories()

List repositories



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRepositories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->getRepositories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\AbstractApiRepository[]**](../Model/AbstractApiRepository.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invalidateCache**
> invalidateCache($repository_name)

Invalidate repository cache. Proxy or group repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to invalidate cache

try {
    $apiInstance->invalidateCache($repository_name);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->invalidateCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to invalidate cache |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rebuildIndex**
> rebuildIndex($repository_name)

Schedule a 'Repair - Rebuild repository search' Task. Hosted or proxy repositories only.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to rebuild index

try {
    $apiInstance->rebuildIndex($repository_name);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->rebuildIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to rebuild index |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository**
> updateRepository($repository_name, $body)

Update Maven group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\MavenGroupRepositoryApiRequest(); // \NexusClient\Model\MavenGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\MavenGroupRepositoryApiRequest**](../Model/MavenGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository1**
> updateRepository1($repository_name, $body)

Update Maven hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\MavenHostedRepositoryApiRequest(); // \NexusClient\Model\MavenHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository1($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\MavenHostedRepositoryApiRequest**](../Model/MavenHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository10**
> updateRepository10($repository_name, $body)

Update NuGet proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NugetProxyRepositoryApiRequest(); // \NexusClient\Model\NugetProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository10($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository10: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NugetProxyRepositoryApiRequest**](../Model/NugetProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository11**
> updateRepository11($repository_name, $body)

Update npm group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NpmGroupRepositoryApiRequest(); // \NexusClient\Model\NpmGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository11($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository11: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NpmGroupRepositoryApiRequest**](../Model/NpmGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository12**
> updateRepository12($repository_name, $body)

Update npm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NpmHostedRepositoryApiRequest(); // \NexusClient\Model\NpmHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository12($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository12: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NpmHostedRepositoryApiRequest**](../Model/NpmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository13**
> updateRepository13($repository_name, $body)

Update npm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NpmProxyRepositoryApiRequest(); // \NexusClient\Model\NpmProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository13($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository13: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NpmProxyRepositoryApiRequest**](../Model/NpmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository14**
> updateRepository14($repository_name, $body)

Update RubyGems group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RubyGemsGroupRepositoryApiRequest(); // \NexusClient\Model\RubyGemsGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository14($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository14: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RubyGemsGroupRepositoryApiRequest**](../Model/RubyGemsGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository15**
> updateRepository15($repository_name, $body)

Update RubyGems hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RubyGemsHostedRepositoryApiRequest(); // \NexusClient\Model\RubyGemsHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository15($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository15: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RubyGemsHostedRepositoryApiRequest**](../Model/RubyGemsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository16**
> updateRepository16($repository_name, $body)

Update RubyGems proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RubyGemsProxyRepositoryApiRequest(); // \NexusClient\Model\RubyGemsProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository16($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository16: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RubyGemsProxyRepositoryApiRequest**](../Model/RubyGemsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository17**
> updateRepository17($repository_name, $body)

Update APT hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\AptHostedRepositoryApiRequest(); // \NexusClient\Model\AptHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository17($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository17: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\AptHostedRepositoryApiRequest**](../Model/AptHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository18**
> updateRepository18($repository_name, $body)

Update APT proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\AptProxyRepositoryApiRequest(); // \NexusClient\Model\AptProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository18($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository18: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\AptProxyRepositoryApiRequest**](../Model/AptProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository19**
> updateRepository19($repository_name, $body)

Update Cocoapods proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\CocoapodsProxyRepositoryApiRequest(); // \NexusClient\Model\CocoapodsProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository19($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\CocoapodsProxyRepositoryApiRequest**](../Model/CocoapodsProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository2**
> updateRepository2($repository_name, $body)

Update Maven proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\MavenProxyRepositoryApiRequest(); // \NexusClient\Model\MavenProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository2($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\MavenProxyRepositoryApiRequest**](../Model/MavenProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository20**
> updateRepository20($repository_name, $body)

Update a Go group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\GolangGroupRepositoryApiRequest(); // \NexusClient\Model\GolangGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository20($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\GolangGroupRepositoryApiRequest**](../Model/GolangGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository21**
> updateRepository21($repository_name, $body)

Update a Go proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\GolangProxyRepositoryApiRequest(); // \NexusClient\Model\GolangProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository21($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository21: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\GolangProxyRepositoryApiRequest**](../Model/GolangProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository22**
> updateRepository22($repository_name, $body)

Update PyPI group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\PypiGroupRepositoryApiRequest(); // \NexusClient\Model\PypiGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository22($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository22: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\PypiGroupRepositoryApiRequest**](../Model/PypiGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository23**
> updateRepository23($repository_name, $body)

Update PyPI hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\PypiHostedRepositoryApiRequest(); // \NexusClient\Model\PypiHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository23($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository23: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\PypiHostedRepositoryApiRequest**](../Model/PypiHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository24**
> updateRepository24($repository_name, $body)

Update PyPI proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\PypiProxyRepositoryApiRequest(); // \NexusClient\Model\PypiProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository24($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository24: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\PypiProxyRepositoryApiRequest**](../Model/PypiProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository25**
> updateRepository25($repository_name, $body)

Update Conan proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\ConanProxyRepositoryApiRequest(); // \NexusClient\Model\ConanProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository25($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository25: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\ConanProxyRepositoryApiRequest**](../Model/ConanProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository26**
> updateRepository26($repository_name, $body)

Update p2 proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\P2ProxyRepositoryApiRequest(); // \NexusClient\Model\P2ProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository26($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository26: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\P2ProxyRepositoryApiRequest**](../Model/P2ProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository27**
> updateRepository27($repository_name, $body)

Update R group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RGroupRepositoryApiRequest(); // \NexusClient\Model\RGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository27($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository27: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RGroupRepositoryApiRequest**](../Model/RGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository28**
> updateRepository28($repository_name, $body)

Update R hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RHostedRepositoryApiRequest(); // \NexusClient\Model\RHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository28($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RHostedRepositoryApiRequest**](../Model/RHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository29**
> updateRepository29($repository_name, $body)

Update R proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RProxyRepositoryApiRequest(); // \NexusClient\Model\RProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository29($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RProxyRepositoryApiRequest**](../Model/RProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository3**
> updateRepository3($repository_name, $body)

Update raw group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RawGroupRepositoryApiRequest(); // \NexusClient\Model\RawGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository3($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RawGroupRepositoryApiRequest**](../Model/RawGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository30**
> updateRepository30($repository_name, $body)

Update Bower group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\BowerGroupRepositoryApiRequest(); // \NexusClient\Model\BowerGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository30($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository30: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\BowerGroupRepositoryApiRequest**](../Model/BowerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository31**
> updateRepository31($repository_name, $body)

Update Bower hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\BowerHostedRepositoryApiRequest(); // \NexusClient\Model\BowerHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository31($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository31: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\BowerHostedRepositoryApiRequest**](../Model/BowerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository32**
> updateRepository32($repository_name, $body)

Update Bower proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\BowerProxyRepositoryApiRequest(); // \NexusClient\Model\BowerProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository32($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository32: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\BowerProxyRepositoryApiRequest**](../Model/BowerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository33**
> updateRepository33($repository_name, $body)

Update Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\DockerGroupRepositoryApiRequest(); // \NexusClient\Model\DockerGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository33($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository33: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\DockerGroupRepositoryApiRequest**](../Model/DockerGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository34**
> updateRepository34($repository_name, $body)

Update Docker hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\DockerHostedRepositoryApiRequest(); // \NexusClient\Model\DockerHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository34($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository34: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\DockerHostedRepositoryApiRequest**](../Model/DockerHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository35**
> updateRepository35($repository_name, $body)

Update Docker group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\DockerProxyRepositoryApiRequest(); // \NexusClient\Model\DockerProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository35($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository35: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\DockerProxyRepositoryApiRequest**](../Model/DockerProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository36**
> updateRepository36($repository_name, $body)

Update Git LFS hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\GitLfsHostedRepositoryApiRequest(); // \NexusClient\Model\GitLfsHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository36($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository36: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\GitLfsHostedRepositoryApiRequest**](../Model/GitLfsHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository37**
> updateRepository37($repository_name, $body)

Update Yum group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\YumGroupRepositoryApiRequest(); // \NexusClient\Model\YumGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository37($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository37: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\YumGroupRepositoryApiRequest**](../Model/YumGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository38**
> updateRepository38($repository_name, $body)

Update Yum hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\YumHostedRepositoryApiRequest(); // \NexusClient\Model\YumHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository38($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository38: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\YumHostedRepositoryApiRequest**](../Model/YumHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository39**
> updateRepository39($repository_name, $body)

Update Yum proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\YumProxyRepositoryApiRequest(); // \NexusClient\Model\YumProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository39($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository39: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\YumProxyRepositoryApiRequest**](../Model/YumProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository4**
> updateRepository4($repository_name, $body)

Update raw hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RawHostedRepositoryApiRequest(); // \NexusClient\Model\RawHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository4($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RawHostedRepositoryApiRequest**](../Model/RawHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository5**
> updateRepository5($repository_name, $body)

Update raw proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\RawProxyRepositoryApiRequest(); // \NexusClient\Model\RawProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository5($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository5: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\RawProxyRepositoryApiRequest**](../Model/RawProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository6**
> updateRepository6($repository_name, $body)

Update Helm hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\HelmHostedRepositoryApiRequest(); // \NexusClient\Model\HelmHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository6($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\HelmHostedRepositoryApiRequest**](../Model/HelmHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository7**
> updateRepository7($repository_name, $body)

Update Helm proxy repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\HelmProxyRepositoryApiRequest(); // \NexusClient\Model\HelmProxyRepositoryApiRequest | 

try {
    $apiInstance->updateRepository7($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\HelmProxyRepositoryApiRequest**](../Model/HelmProxyRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository8**
> updateRepository8($repository_name, $body)

Update NuGet group repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NugetGroupRepositoryApiRequest(); // \NexusClient\Model\NugetGroupRepositoryApiRequest | 

try {
    $apiInstance->updateRepository8($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository8: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NugetGroupRepositoryApiRequest**](../Model/NugetGroupRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRepository9**
> updateRepository9($repository_name, $body)

Update NuGet hosted repository



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RepositoryManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repository_name = "repository_name_example"; // string | Name of the repository to update
$body = new \NexusClient\Model\NugetHostedRepositoryApiRequest(); // \NexusClient\Model\NugetHostedRepositoryApiRequest | 

try {
    $apiInstance->updateRepository9($repository_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RepositoryManagementApi->updateRepository9: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repository_name** | **string**| Name of the repository to update |
 **body** | [**\NexusClient\Model\NugetHostedRepositoryApiRequest**](../Model/NugetHostedRepositoryApiRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

