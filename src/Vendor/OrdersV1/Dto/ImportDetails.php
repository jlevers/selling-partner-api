<?php

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ImportDetails extends BaseDto
{
    /**
     * @param  ?string  $methodOfPayment  If the recipient requests, contains the shipment method of payment. This is for import PO's only.
     * @param  ?string  $internationalCommercialTerms  Incoterms (International Commercial Terms) are used to divide transaction costs and responsibilities between buyer and seller and reflect state-of-the-art transportation practices. This is for import purchase orders only.
     * @param  ?string  $portOfDelivery  The port where goods on an import purchase order must be delivered by the vendor. This should only be specified when the internationalCommercialTerms is FOB.
     * @param  ?string  $importContainers  Types and numbers of container(s) for import purchase orders. Can be a comma-separated list if the shipment has multiple containers. HC signifies a high-capacity container. Free-text field, limited to 64 characters. The format will be a comma-delimited list containing values of the type: $NUMBER_OF_CONTAINERS_OF_THIS_TYPE-$CONTAINER_TYPE. The list of values for the container type is: 40'(40-foot container), 40'HC (40-foot high-capacity container), 45', 45'HC, 30', 30'HC, 20', 20'HC.
     * @param  ?string  $shippingInstructions  Special instructions regarding the shipment. This field is for import purchase orders.
     */
    public function __construct(
        public readonly ?string $methodOfPayment = null,
        public readonly ?string $internationalCommercialTerms = null,
        public readonly ?string $portOfDelivery = null,
        public readonly ?string $importContainers = null,
        public readonly ?string $shippingInstructions = null,
    ) {
    }
}
