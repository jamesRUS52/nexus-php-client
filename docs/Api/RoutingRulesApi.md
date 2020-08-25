# NexusClient\RoutingRulesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRoutingRule**](RoutingRulesApi.md#createRoutingRule) | **POST** /v1/routing-rules | Create a single routing rule
[**deleteRoutingRule**](RoutingRulesApi.md#deleteRoutingRule) | **DELETE** /v1/routing-rules/{name} | Delete a single routing rule
[**getRoutingRule**](RoutingRulesApi.md#getRoutingRule) | **GET** /v1/routing-rules/{name} | Get a single routing rule
[**getRoutingRules**](RoutingRulesApi.md#getRoutingRules) | **GET** /v1/routing-rules | List routing rules
[**updateRoutingRule**](RoutingRulesApi.md#updateRoutingRule) | **PUT** /v1/routing-rules/{name} | Update a single routing rule


# **createRoutingRule**
> createRoutingRule($body)

Create a single routing rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\RoutingRuleXO(); // \NexusClient\Model\RoutingRuleXO | A routing rule configuration

try {
    $apiInstance->createRoutingRule($body);
} catch (Exception $e) {
    echo 'Exception when calling RoutingRulesApi->createRoutingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\RoutingRuleXO**](../Model/RoutingRuleXO.md)| A routing rule configuration |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingRule**
> deleteRoutingRule($name)

Delete a single routing rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the routing rule to delete

try {
    $apiInstance->deleteRoutingRule($name);
} catch (Exception $e) {
    echo 'Exception when calling RoutingRulesApi->deleteRoutingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the routing rule to delete |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingRule**
> \NexusClient\Model\RoutingRuleXO getRoutingRule($name)

Get a single routing rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the routing rule to get

try {
    $result = $apiInstance->getRoutingRule($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingRulesApi->getRoutingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the routing rule to get |

### Return type

[**\NexusClient\Model\RoutingRuleXO**](../Model/RoutingRuleXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingRules**
> \NexusClient\Model\RoutingRuleXO[] getRoutingRules()

List routing rules



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRoutingRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingRulesApi->getRoutingRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\RoutingRuleXO[]**](../Model/RoutingRuleXO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoutingRule**
> updateRoutingRule($name, $body)

Update a single routing rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\RoutingRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The name of the routing rule to update
$body = new \NexusClient\Model\RoutingRuleXO(); // \NexusClient\Model\RoutingRuleXO | A routing rule configuration

try {
    $apiInstance->updateRoutingRule($name, $body);
} catch (Exception $e) {
    echo 'Exception when calling RoutingRulesApi->updateRoutingRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name of the routing rule to update |
 **body** | [**\NexusClient\Model\RoutingRuleXO**](../Model/RoutingRuleXO.md)| A routing rule configuration |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

