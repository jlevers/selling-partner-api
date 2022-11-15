## CreateScheduledPackagesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scheduled_packages** | [**\SellingPartnerApi\Model\EasyShipV20220323\Package[]**](Package.md) | A list of packages. Refer to the `Package` object. | [optional]
**rejected_orders** | [**\SellingPartnerApi\Model\EasyShipV20220323\RejectedOrder[]**](RejectedOrder.md) | A list of orders we couldn't scheduled on your behalf. Each element contains the reason and details on the error. | [optional]
**printable_documents_url** | **string** | A pre-signed URL for the zip document containing the shipping labels and the documents enabled for your marketplace. | [optional]

[[EasyShipV20220323 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
