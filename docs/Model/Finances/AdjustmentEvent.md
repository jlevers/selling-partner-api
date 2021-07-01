## AdjustmentEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustment_type** | **string** | The type of adjustment.

Possible values:

* FBAInventoryReimbursement - An FBA inventory reimbursement to a seller&#39;s account. This occurs if a seller&#39;s inventory is damaged.

* ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller&#39;s account is held back.

* PostageBilling - The amount paid by a seller for shipping labels.

* PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.

* LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller&#39;s account for a package that we lost or damaged.

* CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller&#39;s account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.

* ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller&#39;s account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.

* SellerRewards - An award credited to a seller&#39;s account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace. | [optional]
**posted_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**adjustment_amount** | [**\SellingPartnerApi\Model\Finances\Currency**](Currency.md) |  | [optional]
**adjustment_item_list** | [**\SellingPartnerApi\Model\Finances\AdjustmentItem[]**](AdjustmentItem.md) | A list of information about items in an adjustment to the seller&#39;s account. | [optional]

[[Finances Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
