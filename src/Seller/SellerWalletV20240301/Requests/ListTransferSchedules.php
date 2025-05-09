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
use SellingPartnerApi\Seller\SellerWalletV20240301\Responses\TransferScheduleListing;

/**
 * listTransferSchedules
 */
class ListTransferSchedules extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  ?string  $nextPageToken  A token that you use to retrieve the next page of results. The response includes `nextPageToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextPageToken` is null. Note that this operation can return empty pages.
     */
    public function __construct(
        protected string $accountId,
        protected ?string $nextPageToken = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/finances/transfers/wallet/2024-03-01/transferSchedules';
    }

    public function createDtoFromResponse(Response $response): TransferScheduleListing|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => TransferScheduleListing::class,
            400, 403, 404, 408, 413, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultQuery(): array
    {
        return array_filter(['accountId' => $this->accountId, 'nextPageToken' => $this->nextPageToken]);
    }
}
