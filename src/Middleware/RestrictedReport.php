<?php

declare(strict_types=1);

namespace SellingPartnerApi\Middleware;

use InvalidArgumentException;
use Saloon\Contracts\RequestMiddleware;
use Saloon\Http\PendingRequest;
use SellingPartnerApi\Enums\Endpoint;

class RestrictedReport implements RequestMiddleware
{
    public function __invoke(PendingRequest $pendingRequest)
    {
        $reports = json_decode(file_get_contents(RESOURCE_DIR.'/reports.json'), true);
        $reportType = $pendingRequest->query()->get('reportType');

        if (! isset($reports[$reportType])) {
            throw new InvalidArgumentException("Report type '{$reportType}' is not supported");
        }

        $connector = $pendingRequest->getConnector();
        if (
            $reports[$reportType]['restricted']
            && ! Endpoint::isSandbox($connector->endpoint)
        ) {
            $rdtMiddleware = new RestrictedDataToken(
                $pendingRequest->getRequest()->resolveEndpoint(),
                $pendingRequest->getMethod()->value,
                []
            );
            $rdtMiddleware($pendingRequest);
        }

        // The reportType key is not part of the actual API request. We added it to make it
        // possible to automate the report RDT retrieval process.
        $pendingRequest->query()->remove('reportType');
    }
}
