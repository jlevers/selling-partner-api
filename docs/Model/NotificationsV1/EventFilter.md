## EventFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregation_settings** | [**\SellingPartnerApi\Model\NotificationsV1\AggregationSettings**](AggregationSettings.md) |  | [optional]
**marketplace_ids** | **string[]** | A list of marketplace identifiers to subscribe to (e.g. ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list. | [optional]
**order_change_types** | [**\SellingPartnerApi\Model\NotificationsV1\OrderChangeTypeEnum[]**](OrderChangeTypeEnum.md) | A list of order change types to subscribe to (e.g. BuyerRequestedChange). To receive notifications of all change types, do not provide this list. | [optional]
**event_filter_type** | **string** | An eventFilterType value that is supported by the specific notificationType. This is used by the subscription service to determine the type of event filter. Refer to the section of the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide) that describes the specific notificationType to determine if an eventFilterType is supported. |

[[NotificationsV1 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
