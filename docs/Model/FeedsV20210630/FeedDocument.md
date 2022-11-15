## FeedDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**feed_document_id** | **string** | The identifier for the feed document. This identifier is unique only in combination with a seller ID. |
**url** | **string** | A presigned URL for the feed document. If `compressionAlgorithm` is not returned, you can download the feed directly from this URL. This URL expires after 5 minutes. |
**compression_algorithm** | **string** | If the feed document contents have been compressed, the compression algorithm used is returned in this property and you must decompress the feed when you download. Otherwise, you can download the feed directly. Refer to [Step 7. Download the feed processing report](https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-use-case-guide#step-7-download-the-feed-processing-report) in the use case guide, where sample code is provided. | [optional]

[[FeedsV20210630 Models]](../) [[API list]](../../Api) [[README]](../../../README.md)
