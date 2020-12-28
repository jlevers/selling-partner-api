# RentalTransactionEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**rental_event_type** | **string** | The type of rental event.  Possible values:  * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.  * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.  * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.  * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.  * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.  * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.  * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item. | [optional] 
**extension_length** | **int** | The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events. | [optional] 
**posted_date** | [**\Evers\SellingPartnerApi\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**rental_charge_list** | [**\Evers\SellingPartnerApi\Model\ChargeComponentList**](ChargeComponentList.md) | A list of charges associated with the rental event. | [optional] 
**rental_fee_list** | [**\Evers\SellingPartnerApi\Model\FeeComponentList**](FeeComponentList.md) | A list of fees associated with the rental event. | [optional] 
**marketplace_name** | **string** | The name of the marketplace. | [optional] 
**rental_initial_value** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The amount of money the customer originally paid to rent the item. This value is only returned for RentalChargeFailureReimbursement and RentalLostItemReimbursement events. | [optional] 
**rental_reimbursement** | [**\Evers\SellingPartnerApi\Model\Currency**](Currency.md) | The amount of money Amazon sends the seller to compensate for a lost item or a failed charge. This value is only returned for RentalChargeFailureReimbursement and RentalLostItemReimbursement events. | [optional] 
**rental_tax_withheld_list** | [**\Evers\SellingPartnerApi\Model\TaxWithheldComponentList**](TaxWithheldComponentList.md) | A list of taxes withheld information for a rental item. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


