<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderRegulatedInfo extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'regulatedInformation' => 'RegulatedInformation',
        'requiresDosageLabel' => 'RequiresDosageLabel',
        'regulatedOrderVerificationStatus' => 'RegulatedOrderVerificationStatus',
    ];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  RegulatedInformation  $regulatedInformation  The regulated information collected during purchase and used to verify the order.
     * @param  bool  $requiresDosageLabel  When true, the order requires attaching a dosage information label when shipped.
     * @param  RegulatedOrderVerificationStatus  $regulatedOrderVerificationStatus  The verification status of the order along with associated approval or rejection metadata.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly RegulatedInformation $regulatedInformation,
        public readonly bool $requiresDosageLabel,
        public readonly RegulatedOrderVerificationStatus $regulatedOrderVerificationStatus,
    ) {
    }
}
