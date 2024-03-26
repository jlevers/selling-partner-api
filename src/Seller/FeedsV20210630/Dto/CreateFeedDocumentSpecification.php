<?php

namespace SellingPartnerApi\Seller\FeedsV20210630\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateFeedDocumentSpecification extends BaseDto
{
    /**
     * @param  string  $contentType  The content type of the feed.
     */
    public function __construct(
        public readonly string $contentType,
    ) {
    }
}
