# ApiPrivilegeRepositoryContentSelectorRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the privilege.  This value cannot be changed. | [optional] 
**description** | **string** |  | [optional] 
**actions** | **string[]** | A collection of actions to associate with the privilege, using BREAD syntax (browse,read,edit,add,delete,all) as well as &#39;run&#39; for script privileges. | [optional] 
**format** | **string** | The repository format (i.e &#39;nuget&#39;, &#39;npm&#39;) this privilege will grant access to (or * for all). | [optional] 
**repository** | **string** | The name of the repository this privilege will grant access to (or * for all). | [optional] 
**content_selector** | **string** | The name of a content selector that will be used to grant access to content via this privilege. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


