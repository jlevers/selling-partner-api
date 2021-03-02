## CreateWarrantyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\SellingPartnerApi\Model\Messaging\Attachment[]**](Attachment.md) | Attachments to include in the message to the buyer. If any text is included in the attachment, the text must be written in the buyer&#39;s language of preference, which can be retrieved from the GetAttributes operation. | [optional]
**coverage_start_date** | [**\DateTime**](\DateTime.md) | The start date of the warranty coverage to include in the message to the buyer. | [optional]
**coverage_end_date** | [**\DateTime**](\DateTime.md) | The end date of the warranty coverage to include in the message to the buyer. | [optional]

[[Messaging Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
