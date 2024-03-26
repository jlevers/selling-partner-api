<?php

namespace SellingPartnerApi\Seller\MessagingV1\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateConfirmServiceDetailsRequest;
use SellingPartnerApi\Seller\MessagingV1\Responses\CreateConfirmServiceDetailsResponse;

/**
 * createConfirmServiceDetails
 */
class CreateConfirmServiceDetails extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  string  $amazonOrderId  An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateConfirmServiceDetailsRequest  $createConfirmServiceDetailsRequest  The request schema for the createConfirmServiceDetails operation.
     * @param  array  $marketplaceIds  A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function __construct(
        protected string $amazonOrderId,
        public CreateConfirmServiceDetailsRequest $createConfirmServiceDetailsRequest,
        protected array $marketplaceIds,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['marketplaceIds' => $this->marketplaceIds]);
    }

    public function resolveEndpoint(): string
    {
        return "/messaging/v1/orders/{$this->amazonOrderId}/messages/confirmServiceDetails";
    }

    public function createDtoFromResponse(Response $response): CreateConfirmServiceDetailsResponse
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201, 400, 403, 404, 413, 415, 429, 500, 503 => CreateConfirmServiceDetailsResponse::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createConfirmServiceDetailsRequest->toArray();
    }
}
