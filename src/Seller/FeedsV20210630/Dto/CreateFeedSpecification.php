<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFeedSpecification extends BaseDto
{
    protected static array $complexArrayTypes = ['marketplaceIds' => [string::class]];

    /**
     * @param  string  $feedType The feed type.
     * @param  string[]  $marketplaceIds A list of identifiers for marketplaces that you want the feed to be applied to.
     * @param  string  $inputFeedDocumentId The document identifier returned by the createFeedDocument operation. Upload the feed document contents before calling the createFeed operation.
     * @param  FeedOptions  $feedOptions Additional options to control the feed. These vary by feed type.
     */
    public function __construct(
        public readonly string $feedType,
        public readonly array $marketplaceIds,
        public readonly string $inputFeedDocumentId,
        public readonly ?FeedOptions $feedOptions = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
