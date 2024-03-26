<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportDetailInput extends BaseDto
{
    protected static array $attributeMap = [
        'partneredSmallParcelData' => 'PartneredSmallParcelData',
        'nonPartneredSmallParcelData' => 'NonPartneredSmallParcelData',
        'partneredLtlData' => 'PartneredLtlData',
        'nonPartneredLtlData' => 'NonPartneredLtlData',
    ];

    /**
     * @param  ?PartneredSmallParcelDataInput  $partneredSmallParcelData  Information that is required by an Amazon-partnered carrier to ship a Small Parcel inbound shipment.
     * @param  ?NonPartneredSmallParcelDataInput  $nonPartneredSmallParcelData  Information that you provide to Amazon about a Small Parcel shipment shipped by a carrier that has not partnered with Amazon.
     * @param  ?PartneredLtlDataInput  $partneredLtlData  Information that is required by an Amazon-partnered carrier to ship a Less Than Truckload/Full Truckload (LTL/FTL) inbound shipment.
     * @param  ?NonPartneredLtlDataInput  $nonPartneredLtlData  Information that you provide to Amazon about a Less Than Truckload/Full Truckload (LTL/FTL) shipment by a carrier that has not partnered with Amazon.
     */
    public function __construct(
        public readonly ?PartneredSmallParcelDataInput $partneredSmallParcelData = null,
        public readonly ?NonPartneredSmallParcelDataInput $nonPartneredSmallParcelData = null,
        public readonly ?PartneredLtlDataInput $partneredLtlData = null,
        public readonly ?NonPartneredLtlDataInput $nonPartneredLtlData = null,
    ) {
    }
}
