# NexusClient\EmailApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEmailConfiguration**](EmailApi.md#deleteEmailConfiguration) | **DELETE** /v1/email | Disable and clear the email configuration
[**getEmailConfiguration**](EmailApi.md#getEmailConfiguration) | **GET** /v1/email | Retrieve the current email configuration
[**setEmailConfiguration**](EmailApi.md#setEmailConfiguration) | **PUT** /v1/email | Set the current email configuration
[**testEmailConfiguration**](EmailApi.md#testEmailConfiguration) | **POST** /v1/email/verify | Send a test email to the email address provided in the request body


# **deleteEmailConfiguration**
> deleteEmailConfiguration()

Disable and clear the email configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteEmailConfiguration();
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmailConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **getEmailConfiguration**
> \NexusClient\Model\ApiEmailConfiguration getEmailConfiguration()

Retrieve the current email configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEmailConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NexusClient\Model\ApiEmailConfiguration**](../Model/ApiEmailConfiguration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setEmailConfiguration**
> setEmailConfiguration($body)

Set the current email configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \NexusClient\Model\ApiEmailConfiguration(); // \NexusClient\Model\ApiEmailConfiguration | 

try {
    $apiInstance->setEmailConfiguration($body);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->setEmailConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\NexusClient\Model\ApiEmailConfiguration**](../Model/ApiEmailConfiguration.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testEmailConfiguration**
> \NexusClient\Model\ApiEmailValidation testEmailConfiguration($body)

Send a test email to the email address provided in the request body



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NexusClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | An email address to send a test email to

try {
    $result = $apiInstance->testEmailConfiguration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->testEmailConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| An email address to send a test email to |

### Return type

[**\NexusClient\Model\ApiEmailValidation**](../Model/ApiEmailValidation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

