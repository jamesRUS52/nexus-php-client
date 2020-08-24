# Swagger\Client\SecurityCertificatesApi

All URIs are relative to *https://localhost/service/rest/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCertificate**](SecurityCertificatesApi.md#addCertificate) | **POST** /v1/security/ssl/truststore | Add a certificate to the trust store.
[**getTrustStoreCertificates**](SecurityCertificatesApi.md#getTrustStoreCertificates) | **GET** /v1/security/ssl/truststore | Retrieve a list of certificates added to the trust store.
[**removeCertificate**](SecurityCertificatesApi.md#removeCertificate) | **DELETE** /v1/security/ssl/truststore/{id} | Remove a certificate in the trust store.
[**retrieveCertificate**](SecurityCertificatesApi.md#retrieveCertificate) | **GET** /v1/security/ssl | Helper method to retrieve certificate details from a remote system.


# **addCertificate**
> \Swagger\Client\Model\ApiCertificate addCertificate($body)

Add a certificate to the trust store.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "body_example"; // string | The certificate to add encoded in PEM format

try {
    $result = $apiInstance->addCertificate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityCertificatesApi->addCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| The certificate to add encoded in PEM format | [optional]

### Return type

[**\Swagger\Client\Model\ApiCertificate**](../Model/ApiCertificate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrustStoreCertificates**
> \Swagger\Client\Model\ApiCertificate[] getTrustStoreCertificates()

Retrieve a list of certificates added to the trust store.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getTrustStoreCertificates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityCertificatesApi->getTrustStoreCertificates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiCertificate[]**](../Model/ApiCertificate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeCertificate**
> removeCertificate($id)

Remove a certificate in the trust store.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the certificate that should be removed.

try {
    $apiInstance->removeCertificate($id);
} catch (Exception $e) {
    echo 'Exception when calling SecurityCertificatesApi->removeCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the certificate that should be removed. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCertificate**
> \Swagger\Client\Model\ApiCertificate retrieveCertificate($host, $port, $protocol_hint)

Helper method to retrieve certificate details from a remote system.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SecurityCertificatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$host = "host_example"; // string | The remote system's host name
$port = 443; // int | The port on the remote system to connect to
$protocol_hint = "protocol_hint_example"; // string | An optional hint of the protocol to try for the connection

try {
    $result = $apiInstance->retrieveCertificate($host, $port, $protocol_hint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityCertificatesApi->retrieveCertificate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **host** | **string**| The remote system&#39;s host name |
 **port** | **int**| The port on the remote system to connect to | [optional] [default to 443]
 **protocol_hint** | **string**| An optional hint of the protocol to try for the connection | [optional]

### Return type

[**\Swagger\Client\Model\ApiCertificate**](../Model/ApiCertificate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

