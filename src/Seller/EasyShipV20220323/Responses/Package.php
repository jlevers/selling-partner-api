<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\Dimensions;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\InvoiceData;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\Item;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\ScheduledPackageId;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\TimeSlot;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\TrackingDetails;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\Weight;

final class Package extends BaseResponse
{
    protected static array $complexArrayTypes = ['packageItems' => [Item::class]];

    /**
     * @param  ScheduledPackageId  $scheduledPackageId  Identifies the scheduled package to be updated.
     * @param  Dimensions  $packageDimensions  The dimensions of the scheduled package.
     * @param  Weight  $packageWeight  The weight of the scheduled package
     * @param  TimeSlot  $packageTimeSlot  A time window to hand over an Easy Ship package to Amazon Logistics.
     * @param  Item[]|null  $packageItems  A list of items contained in the package.
     * @param  ?string  $packageIdentifier  Optional seller-created identifier that is printed on the shipping label to help the seller identify the package.
     * @param  ?InvoiceData  $invoice  Invoice number and date.
     * @param  ?string  $packageStatus  The status of the package.
     * @param  ?TrackingDetails  $trackingDetails  Representation of tracking metadata.
     */
    public function __construct(
        public readonly ScheduledPackageId $scheduledPackageId,
        public readonly Dimensions $packageDimensions,
        public readonly Weight $packageWeight,
        public readonly TimeSlot $packageTimeSlot,
        public readonly ?array $packageItems = null,
        public readonly ?string $packageIdentifier = null,
        public readonly ?InvoiceData $invoice = null,
        public readonly ?string $packageStatus = null,
        public readonly ?TrackingDetails $trackingDetails = null,
    ) {
    }
}
