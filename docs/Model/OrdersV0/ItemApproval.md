## ItemApproval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence_id** | **int** | Sequence number of the item approval. Each ItemApproval gets its sequenceId automatically from a monotonic increasing function. |
**timestamp** | **string** | Timestamp when the ItemApproval was recorded by Amazon's internal order approvals system. In ISO 8601 date time format. |
**actor** | **string** | High level actors involved in the approval process. |
**approver** | **string** | Person or system that triggers the approval actions on behalf of the actor. | [optional]
**approval_action** | [**\SellingPartnerApi\Model\OrdersV0\ItemApprovalAction**](ItemApprovalAction.md) |  |
**approval_action_process_status** | **string** | Status of approval action. |
**approval_action_process_status_message** | **string** | Optional message to communicate optional additional context about the current status of the approval action. | [optional]

[[OrdersV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
