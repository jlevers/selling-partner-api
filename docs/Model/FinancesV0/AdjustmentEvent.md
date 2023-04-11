## AdjustmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_type** | **string** | The type of adjustment.<br><br>Possible values:<br><br>* FBAInventoryReimbursement - An FBA inventory reimbursement to a seller's account. This occurs if a seller's inventory is damaged.<br><br>* ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller's account is held back.<br><br>* PostageBilling - The amount paid by a seller for shipping labels.<br><br>* PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.<br><br>* LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller's account for a package that we lost or damaged.<br><br>* CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller's account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.<br><br>* ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller's account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.<br><br>* SellerRewards - An award credited to a seller's account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**adjustment_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**adjustment_item_list** | [**\SellingPartnerApi\Model\FinancesV0\AdjustmentItem[]**](AdjustmentItem.md) | A list of information about items in an adjustment to the seller's account. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
