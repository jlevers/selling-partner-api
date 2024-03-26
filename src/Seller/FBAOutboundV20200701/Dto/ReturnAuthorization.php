<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReturnAuthorization extends BaseDto
{
    protected static array $attributeMap = ['rmaPageUrl' => 'rmaPageURL'];

    /**
     * @param  string  $returnAuthorizationId  An identifier for the return authorization. This identifier associates return items with the return authorization used to return them.
     * @param  string  $fulfillmentCenterId  An identifier for the Amazon fulfillment center that the return items should be sent to.
     * @param  Address  $returnToAddress  A physical address.
     * @param  string  $amazonRmaId  The return merchandise authorization (RMA) that Amazon needs to process the return.
     * @param  string  $rmaPageUrl  A URL for a web page that contains the return authorization barcode and the mailing label. This does not include pre-paid shipping.
     */
    public function __construct(
        public readonly string $returnAuthorizationId,
        public readonly string $fulfillmentCenterId,
        public readonly Address $returnToAddress,
        public readonly string $amazonRmaId,
        public readonly string $rmaPageUrl,
    ) {
    }
}
