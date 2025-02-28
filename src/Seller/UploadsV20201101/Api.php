<?php

namespace SellingPartnerApi\Seller\UploadsV20201101;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\UploadsV20201101\Requests\CreateUploadDestinationForResource;

class Api extends BaseResource
{
    /**
     * @param  string  $resource  The upload destination for your resource. For example, if you create an upload destination for the `createLegalDisclosure` operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you create an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/2020-11-01/uploadDestinations/aplus/2020-11-01/contentDocuments`.
     * @param  array  $marketplaceIds  The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $contentMd5  An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit.
     * @param  ?string  $contentType  The content type of the file you upload.
     */
    public function createUploadDestinationForResource(
        string $resource,
        array $marketplaceIds,
        string $contentMd5,
        ?string $contentType = null,
    ): Response {
        $request = new CreateUploadDestinationForResource($resource, $marketplaceIds, $contentMd5, $contentType);

        return $this->connector->send($request);
    }
}
