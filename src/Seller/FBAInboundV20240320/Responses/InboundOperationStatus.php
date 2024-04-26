<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\OperationProblem;

final class InboundOperationStatus extends Response
{
    protected static array $complexArrayTypes = ['operationProblems' => [OperationProblem::class]];

    /**
     * @param  string  $operation  The name of the operation that was executed in the asynchronous API call.
     * @param  string  $operationId  The operation Id returned by the asynchronous API call.
     * @param  OperationProblem[]  $operationProblems  The problems in the processing of the asynchronous operation.
     * @param  string  $operationStatus  The status of an operation.
     */
    public function __construct(
        public readonly string $operation,
        public readonly string $operationId,
        public readonly array $operationProblems,
        public readonly string $operationStatus,
    ) {
    }
}
