<?php
/**
 * SecurityCertificatesApi
 * PHP version 5
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nexus Repository Manager REST API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.26.1-02
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NexusClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use NexusClient\ApiException;
use NexusClient\Configuration;
use NexusClient\HeaderSelector;
use NexusClient\ObjectSerializer;

/**
 * SecurityCertificatesApi Class Doc Comment
 *
 * @category Class
 * @package  NexusClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SecurityCertificatesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation addCertificate
     *
     * Add a certificate to the trust store.
     *
     * @param  string $body The certificate to add encoded in PEM format (optional)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NexusClient\Model\ApiCertificate
     */
    public function addCertificate($body = null)
    {
        list($response) = $this->addCertificateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation addCertificateWithHttpInfo
     *
     * Add a certificate to the trust store.
     *
     * @param  string $body The certificate to add encoded in PEM format (optional)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NexusClient\Model\ApiCertificate, HTTP status code, HTTP response headers (array of strings)
     */
    public function addCertificateWithHttpInfo($body = null)
    {
        $returnType = '\NexusClient\Model\ApiCertificate';
        $request = $this->addCertificateRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NexusClient\Model\ApiCertificate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addCertificateAsync
     *
     * Add a certificate to the trust store.
     *
     * @param  string $body The certificate to add encoded in PEM format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addCertificateAsync($body = null)
    {
        return $this->addCertificateAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addCertificateAsyncWithHttpInfo
     *
     * Add a certificate to the trust store.
     *
     * @param  string $body The certificate to add encoded in PEM format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addCertificateAsyncWithHttpInfo($body = null)
    {
        $returnType = '\NexusClient\Model\ApiCertificate';
        $request = $this->addCertificateRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addCertificate'
     *
     * @param  string $body The certificate to add encoded in PEM format (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addCertificateRequest($body = null)
    {

        $resourcePath = '/v1/security/ssl/truststore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getTrustStoreCertificates
     *
     * Retrieve a list of certificates added to the trust store.
     *
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NexusClient\Model\ApiCertificate[]
     */
    public function getTrustStoreCertificates()
    {
        list($response) = $this->getTrustStoreCertificatesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getTrustStoreCertificatesWithHttpInfo
     *
     * Retrieve a list of certificates added to the trust store.
     *
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NexusClient\Model\ApiCertificate[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getTrustStoreCertificatesWithHttpInfo()
    {
        $returnType = '\NexusClient\Model\ApiCertificate[]';
        $request = $this->getTrustStoreCertificatesRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NexusClient\Model\ApiCertificate[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTrustStoreCertificatesAsync
     *
     * Retrieve a list of certificates added to the trust store.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrustStoreCertificatesAsync()
    {
        return $this->getTrustStoreCertificatesAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrustStoreCertificatesAsyncWithHttpInfo
     *
     * Retrieve a list of certificates added to the trust store.
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTrustStoreCertificatesAsyncWithHttpInfo()
    {
        $returnType = '\NexusClient\Model\ApiCertificate[]';
        $request = $this->getTrustStoreCertificatesRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTrustStoreCertificates'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTrustStoreCertificatesRequest()
    {

        $resourcePath = '/v1/security/ssl/truststore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation removeCertificate
     *
     * Remove a certificate in the trust store.
     *
     * @param  string $id The id of the certificate that should be removed. (required)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeCertificate($id)
    {
        $this->removeCertificateWithHttpInfo($id);
    }

    /**
     * Operation removeCertificateWithHttpInfo
     *
     * Remove a certificate in the trust store.
     *
     * @param  string $id The id of the certificate that should be removed. (required)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeCertificateWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->removeCertificateRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation removeCertificateAsync
     *
     * Remove a certificate in the trust store.
     *
     * @param  string $id The id of the certificate that should be removed. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeCertificateAsync($id)
    {
        return $this->removeCertificateAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeCertificateAsyncWithHttpInfo
     *
     * Remove a certificate in the trust store.
     *
     * @param  string $id The id of the certificate that should be removed. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeCertificateAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->removeCertificateRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'removeCertificate'
     *
     * @param  string $id The id of the certificate that should be removed. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function removeCertificateRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling removeCertificate'
            );
        }

        $resourcePath = '/v1/security/ssl/truststore/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation retrieveCertificate
     *
     * Helper method to retrieve certificate details from a remote system.
     *
     * @param  string $host The remote system&#39;s host name (required)
     * @param  int $port The port on the remote system to connect to (optional, default to 443)
     * @param  string $protocol_hint An optional hint of the protocol to try for the connection (optional)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NexusClient\Model\ApiCertificate
     */
    public function retrieveCertificate($host, $port = '443', $protocol_hint = null)
    {
        list($response) = $this->retrieveCertificateWithHttpInfo($host, $port, $protocol_hint);
        return $response;
    }

    /**
     * Operation retrieveCertificateWithHttpInfo
     *
     * Helper method to retrieve certificate details from a remote system.
     *
     * @param  string $host The remote system&#39;s host name (required)
     * @param  int $port The port on the remote system to connect to (optional, default to 443)
     * @param  string $protocol_hint An optional hint of the protocol to try for the connection (optional)
     *
     * @throws \NexusClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NexusClient\Model\ApiCertificate, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveCertificateWithHttpInfo($host, $port = '443', $protocol_hint = null)
    {
        $returnType = '\NexusClient\Model\ApiCertificate';
        $request = $this->retrieveCertificateRequest($host, $port, $protocol_hint);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\NexusClient\Model\ApiCertificate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveCertificateAsync
     *
     * Helper method to retrieve certificate details from a remote system.
     *
     * @param  string $host The remote system&#39;s host name (required)
     * @param  int $port The port on the remote system to connect to (optional, default to 443)
     * @param  string $protocol_hint An optional hint of the protocol to try for the connection (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveCertificateAsync($host, $port = '443', $protocol_hint = null)
    {
        return $this->retrieveCertificateAsyncWithHttpInfo($host, $port, $protocol_hint)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveCertificateAsyncWithHttpInfo
     *
     * Helper method to retrieve certificate details from a remote system.
     *
     * @param  string $host The remote system&#39;s host name (required)
     * @param  int $port The port on the remote system to connect to (optional, default to 443)
     * @param  string $protocol_hint An optional hint of the protocol to try for the connection (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveCertificateAsyncWithHttpInfo($host, $port = '443', $protocol_hint = null)
    {
        $returnType = '\NexusClient\Model\ApiCertificate';
        $request = $this->retrieveCertificateRequest($host, $port, $protocol_hint);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'retrieveCertificate'
     *
     * @param  string $host The remote system&#39;s host name (required)
     * @param  int $port The port on the remote system to connect to (optional, default to 443)
     * @param  string $protocol_hint An optional hint of the protocol to try for the connection (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveCertificateRequest($host, $port = '443', $protocol_hint = null)
    {
        // verify the required parameter 'host' is set
        if ($host === null || (is_array($host) && count($host) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $host when calling retrieveCertificate'
            );
        }

        $resourcePath = '/v1/security/ssl';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($host !== null) {
            $queryParams['host'] = ObjectSerializer::toQueryValue($host);
        }
        // query params
        if ($port !== null) {
            $queryParams['port'] = ObjectSerializer::toQueryValue($port);
        }
        // query params
        if ($protocol_hint !== null) {
            $queryParams['protocolHint'] = ObjectSerializer::toQueryValue($protocol_hint);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
