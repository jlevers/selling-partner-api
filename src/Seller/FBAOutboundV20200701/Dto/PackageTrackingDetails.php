<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class PackageTrackingDetails extends Dto
{
    protected static array $attributeMap = ['carrierUrl' => 'carrierURL'];

    protected static array $complexArrayTypes = ['trackingEvents' => TrackingEvent::class];

    /**
     * @param  int  $packageNumber  The package identifier.
     * @param  ?string  $trackingNumber  The tracking number for the package.
     * @param  ?string  $customerTrackingLink  Link on swiship.com that allows customers to track the package.
     * @param  ?string  $carrierCode  The name of the carrier.
     * @param  ?string  $carrierPhoneNumber  The phone number of the carrier.
     * @param  ?string  $carrierUrl  The URL of the carrier's website.
     * @param  ?\DateTimeInterface  $shipDate  Date timestamp
     * @param  ?\DateTimeInterface  $estimatedArrivalDate  Date timestamp
     * @param  ?TrackingAddress  $shipToAddress  Address information for tracking the package.
     * @param  ?string  $currentStatus  The current delivery status of the package.
     * @param  ?string  $currentStatusDescription  Description corresponding to the `CurrentStatus` value.
     * @param  ?string  $signedForBy  The name of the person who signed for the package.
     * @param  ?string  $additionalLocationInfo  Additional location information.
     * @param  TrackingEvent[]|null  $trackingEvents  An array of tracking event information.
     */
    public function __construct(
        public readonly int $packageNumber,
        public readonly ?string $trackingNumber = null,
        public readonly ?string $customerTrackingLink = null,
        public readonly ?string $carrierCode = null,
        public readonly ?string $carrierPhoneNumber = null,
        public readonly ?string $carrierUrl = null,
        public readonly ?\DateTimeInterface $shipDate = null,
        public readonly ?\DateTimeInterface $estimatedArrivalDate = null,
        public readonly ?TrackingAddress $shipToAddress = null,
        public readonly ?string $currentStatus = null,
        public readonly ?string $currentStatusDescription = null,
        public readonly ?string $signedForBy = null,
        public readonly ?string $additionalLocationInfo = null,
        public readonly ?array $trackingEvents = null,
    ) {}
}
