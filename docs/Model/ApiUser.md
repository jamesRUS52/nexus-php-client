# ApiUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | The userid which is required for login. This value cannot be changed. | [optional] 
**first_name** | **string** | The first name of the user. | [optional] 
**last_name** | **string** | The last name of the user. | [optional] 
**email_address** | **string** | The email address associated with the user. | [optional] 
**source** | **string** | The user source which is the origin of this user. This value cannot be changed. | [optional] 
**status** | **string** | The user&#39;s status, e.g. active or disabled. | 
**read_only** | **bool** | Indicates whether the user&#39;s properties could be modified by the Nexus Repository Manager. When false only roles are considered during update. | [optional] 
**roles** | **string[]** | The roles which the user has been assigned within Nexus. | [optional] 
**external_roles** | **string[]** | The roles which the user has been assigned in an external source, e.g. LDAP group. These cannot be changed within the Nexus Repository Manager. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


