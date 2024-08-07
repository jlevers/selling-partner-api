<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\RequestGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\ReportsV20210630\Dto\CreateReportScheduleSpecification;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\CreateReportScheduleResponse;
use SellingPartnerApi\Seller\ReportsV20210630\Responses\ErrorList;

/**
 * createReportSchedule
 */
class CreateReportSchedule extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param  CreateReportScheduleSpecification  $createReportScheduleSpecification  Information required to create the report schedule.
     */
    public function __construct(
        public CreateReportScheduleSpecification $createReportScheduleSpecification,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/reports/2021-06-30/schedules';
    }

    public function createDtoFromResponse(Response $response): CreateReportScheduleResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            201 => CreateReportScheduleResponse::class,
            400, 401, 403, 404, 415, 429, 500, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json());
    }

    public function defaultBody(): array
    {
        return $this->createReportScheduleSpecification->toArray();
    }
}
