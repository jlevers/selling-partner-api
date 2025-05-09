<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellerWalletV20240301\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\SellerWalletV20240301\Responses\ErrorList;
use SellingPartnerApi\Seller\SellerWalletV20240301\Responses\TransferSchedule;

/**
 * getTransferSchedule
 */
class GetTransferSchedule extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $transferScheduleId  The schedule ID of the Amazon Seller Wallet transfer.
     */
    public function __construct(
        protected string $transferScheduleId,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/finances/transfers/wallet/2024-03-01/transferSchedules/{$this->transferScheduleId}";
    }

    public function createDtoFromResponse(Response $response): TransferSchedule|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransferSchedule::class,
            400, 403, 404, 408, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }
}
