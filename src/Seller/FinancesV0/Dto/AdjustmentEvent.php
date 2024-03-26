<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AdjustmentEvent extends BaseDto
{
    protected static array $attributeMap = [
        'adjustmentType' => 'AdjustmentType',
        'postedDate' => 'PostedDate',
        'adjustmentAmount' => 'AdjustmentAmount',
        'adjustmentItemList' => 'AdjustmentItemList',
    ];

    protected static array $complexArrayTypes = ['adjustmentItemList' => [AdjustmentItem::class]];

    /**
     * @param  ?string  $adjustmentType  The type of adjustment.
     *
     * Possible values:
     *
     * * FBAInventoryReimbursement - An FBA inventory reimbursement to a seller's account. This occurs if a seller's inventory is damaged.
     *
     * * ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller's account is held back.
     *
     * * PostageBilling - The amount paid by a seller for shipping labels.
     *
     * * PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.
     *
     * * LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller's account for a package that we lost or damaged.
     *
     * * CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller's account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.
     *
     * * ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller's account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.
     *
     * * SellerRewards - An award credited to a seller's account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace.
     * @param  ?DateTime  $postedDate
     * @param  ?Currency  $adjustmentAmount  A currency type and amount.
     * @param  AdjustmentItem[]|null  $adjustmentItemList  A list of information about items in an adjustment to the seller's account.
     */
    public function __construct(
        public readonly ?string $adjustmentType = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?Currency $adjustmentAmount = null,
        public readonly ?array $adjustmentItemList = null,
    ) {
    }
}
