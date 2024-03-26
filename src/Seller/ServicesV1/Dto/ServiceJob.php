<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceJob extends BaseDto
{
    protected static array $complexArrayTypes = [
        'preferredAppointmentTimes' => [AppointmentTime::class],
        'appointments' => [Appointment::class],
        'associatedItems' => [AssociatedItem::class],
    ];

    /**
     * @param  ?DateTime  $createTime  The date and time of the creation of the job in ISO 8601 format.
     * @param  ?string  $serviceJobId  Amazon identifier for the service job.
     * @param  ?string  $serviceJobStatus  The status of the service job.
     * @param  ?ScopeOfWork  $scopeOfWork  The scope of work for the order.
     * @param  ?Seller  $seller  Information about the seller of the service job.
     * @param  ?ServiceJobProvider  $serviceJobProvider  Information about the service job provider.
     * @param  AppointmentTime[]|null  $preferredAppointmentTimes  A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     * @param  Appointment[]|null  $appointments  A list of appointments.
     * @param  ?string  $serviceOrderId  The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     * @param  ?string  $marketplaceId  The marketplace identifier.
     * @param  ?string  $storeId  The Amazon-defined identifier for the region scope.
     * @param  ?Buyer  $buyer  Information about the buyer.
     * @param  AssociatedItem[]|null  $associatedItems  A list of items associated with the service job.
     * @param  ?ServiceLocation  $serviceLocation  Information about the location of the service job.
     */
    public function __construct(
        public readonly ?\DateTime $createTime = null,
        public readonly ?string $serviceJobId = null,
        public readonly ?string $serviceJobStatus = null,
        public readonly ?ScopeOfWork $scopeOfWork = null,
        public readonly ?Seller $seller = null,
        public readonly ?ServiceJobProvider $serviceJobProvider = null,
        public readonly ?array $preferredAppointmentTimes = null,
        public readonly ?array $appointments = null,
        public readonly ?string $serviceOrderId = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $storeId = null,
        public readonly ?Buyer $buyer = null,
        public readonly ?array $associatedItems = null,
        public readonly ?ServiceLocation $serviceLocation = null,
    ) {
    }
}
