# RawProxyRepositoryApiRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A unique identifier for this repository | 
**online** | **bool** | Whether this repository accepts incoming requests | 
**storage** | [**\NexusClient\Model\StorageAttributes**](StorageAttributes.md) |  | 
**cleanup** | [**\NexusClient\Model\CleanupPolicyAttributes**](CleanupPolicyAttributes.md) |  | [optional] 
**proxy** | [**\NexusClient\Model\ProxyAttributes**](ProxyAttributes.md) |  | 
**negative_cache** | [**\NexusClient\Model\NegativeCacheAttributes**](NegativeCacheAttributes.md) |  | 
**http_client** | [**\NexusClient\Model\HttpClientAttributes**](HttpClientAttributes.md) |  | 
**routing_rule** | **string** |  | [optional] 
**raw** | [**\NexusClient\Model\RawAttributes**](RawAttributes.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


