## RegulatedOrderVerificationStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\SellingPartnerApi\Model\OrdersV0\VerificationStatus**](VerificationStatus.md) |  |
**requires_merchant_action** | **bool** | When true, the regulated information provided in the order requires a review by the merchant. |
**valid_rejection_reasons** | [**\SellingPartnerApi\Model\OrdersV0\RejectionReason[]**](RejectionReason.md) | A list of valid rejection reasons that may be used to reject the order's regulated information. |
**rejection_reason** | [**\SellingPartnerApi\Model\OrdersV0\RejectionReason**](RejectionReason.md) |  | [optional]
**review_date** | **string** | The date the order was reviewed. In ISO 8601 date time format. | [optional]
**external_reviewer_id** | **string** | The identifier for the order's regulated information reviewer. | [optional]

[[OrdersV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
