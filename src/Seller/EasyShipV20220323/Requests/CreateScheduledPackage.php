<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\EasyShipV20220323\Dto\CreateScheduledPackageRequest;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\ErrorList;
use SellingPartnerApi\Seller\EasyShipV20220323\Responses\Package;

/**
 * createScheduledPackage
 */
class CreateScheduledPackage extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateScheduledPackageRequest  $createScheduledPackageRequest  The request schema for the `createScheduledPackage` operation.
     */
    public function __construct(
        public CreateScheduledPackageRequest $createScheduledPackageRequest,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/easyShip/2022-03-23/package';
    }

    public function createDtoFromResponse(Response $response): Package|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => Package::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createScheduledPackageRequest->toArray();
    }
}
