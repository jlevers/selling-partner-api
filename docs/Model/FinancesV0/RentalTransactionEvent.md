## RentalTransactionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**rental_event_type** | **string** | The type of rental event.<br><br>Possible values:<br><br>* RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.<br><br>* RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.<br><br>* RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.<br><br>* RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.<br><br>* RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.<br><br>* RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.<br><br>* RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item. | [optional]
**extension_length** | **int** | The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events. | [optional]
**posted_date** | **string** | A date string in ISO 8601 format. | [optional]
**rental_charge_list** | [**\SellingPartnerApi\Model\FinancesV0\ChargeComponent[]**](ChargeComponent.md) | A list of charge information on the seller's account. | [optional]
**rental_fee_list** | [**\SellingPartnerApi\Model\FinancesV0\FeeComponent[]**](FeeComponent.md) | A list of fee component information. | [optional]
**marketplace_name** | **string** | The name of the marketplace. | [optional]
**rental_initial_value** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**rental_reimbursement** | [**\SellingPartnerApi\Model\FinancesV0\Currency**](Currency.md) |  | [optional]
**rental_tax_withheld_list** | [**\SellingPartnerApi\Model\FinancesV0\TaxWithheldComponent[]**](TaxWithheldComponent.md) | A list of information about taxes withheld. | [optional]

[[FinancesV0 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
