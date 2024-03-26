<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BuyerTaxInformation extends BaseDto
{
    protected static array $attributeMap = [
        'buyerLegalCompanyName' => 'BuyerLegalCompanyName',
        'buyerBusinessAddress' => 'BuyerBusinessAddress',
        'buyerTaxRegistrationId' => 'BuyerTaxRegistrationId',
        'buyerTaxOffice' => 'BuyerTaxOffice',
    ];

    /**
     * @param  ?string  $buyerLegalCompanyName  Business buyer's company legal name.
     * @param  ?string  $buyerBusinessAddress  Business buyer's address.
     * @param  ?string  $buyerTaxRegistrationId  Business buyer's tax registration ID.
     * @param  ?string  $buyerTaxOffice  Business buyer's tax office.
     */
    public function __construct(
        public readonly ?string $buyerLegalCompanyName = null,
        public readonly ?string $buyerBusinessAddress = null,
        public readonly ?string $buyerTaxRegistrationId = null,
        public readonly ?string $buyerTaxOffice = null,
    ) {
    }
}
