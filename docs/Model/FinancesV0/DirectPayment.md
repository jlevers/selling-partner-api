## DirectPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**direct_payment_type** | **string** | The type of payment.<br><br>Possible values:<br><br>* StoredValueCardRevenue - The amount that is deducted from the seller's account because the seller received money through a stored value card.<br><br>* StoredValueCardRefund - The amount that Amazon returns to the seller if the order that is bought using a stored value card is refunded.<br><br>* PrivateLabelCreditCardRevenue - The amount that is deducted from the seller's account because the seller received money through a private label credit card offered by Amazon.<br><br>* PrivateLabelCreditCardRefund - The amount that Amazon returns to the seller if the order that is bought using a private label credit card offered by Amazon is refunded.<br><br>* CollectOnDeliveryRevenue - The COD amount that the seller collected directly from the buyer.<br><br>* CollectOnDeliveryRefund - The amount that Amazon refunds to the buyer if an order paid for by COD is refunded. | [optional]
**direct_payment_amount** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
