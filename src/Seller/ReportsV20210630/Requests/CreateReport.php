<?php

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\CreateReportSpecification;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\CreateReportResponse;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;

/**
 * createReport
 */
class CreateReport extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateReportSpecification  $createReportSpecification  Information required to create the report.
     */
    public function __construct(
        public CreateReportSpecification $createReportSpecification,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/reports/2021-06-30/reports';
    }

    public function createDtoFromResponse(Response $response): CreateReportResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            202 => CreateReportResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }

    public function defaultBody(): array
    {
        return $this->createReportSpecification->toArray();
    }
}
