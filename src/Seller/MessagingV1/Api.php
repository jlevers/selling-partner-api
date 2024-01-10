<?php

namespace SellingPartnerApi\Seller\MessagingV1;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateAmazonMotorsRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateConfirmCustomizationDetailsRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateConfirmDeliveryDetailsRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateConfirmOrderDetailsRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateConfirmServiceDetailsRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateDigitalAccessKeyRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateLegalDisclosureRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateUnexpectedProblemRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\CreateWarrantyRequest;
use SellingPartnerApi\Seller\MessagingV1\Dto\InvoiceRequest;
use SellingPartnerApi\Seller\MessagingV1\Requests\ConfirmCustomizationDetails;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateAmazonMotors;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateConfirmDeliveryDetails;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateConfirmOrderDetails;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateConfirmServiceDetails;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateDigitalAccessKey;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateLegalDisclosure;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateNegativeFeedbackRemoval;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateUnexpectedProblem;
use SellingPartnerApi\Seller\MessagingV1\Requests\CreateWarranty;
use SellingPartnerApi\Seller\MessagingV1\Requests\GetAttributes;
use SellingPartnerApi\Seller\MessagingV1\Requests\GetMessagingActionsForOrder;
use SellingPartnerApi\Seller\MessagingV1\Requests\SendInvoice;

class Api extends BaseResource
{
    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which you want a list of available message types.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function getMessagingActionsForOrder(string $amazonOrderId, array $marketplaceIds): Response
    {
        return $this->connector->send(new GetMessagingActionsForOrder($amazonOrderId, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateConfirmCustomizationDetailsRequest  $createConfirmCustomizationDetailsRequest The request schema for the confirmCustomizationDetails operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function confirmCustomizationDetails(
        string $amazonOrderId,
        CreateConfirmCustomizationDetailsRequest $createConfirmCustomizationDetailsRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new ConfirmCustomizationDetails($amazonOrderId, $createConfirmCustomizationDetailsRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateConfirmDeliveryDetailsRequest  $createConfirmDeliveryDetailsRequest The request schema for the createConfirmDeliveryDetails operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createConfirmDeliveryDetails(
        string $amazonOrderId,
        CreateConfirmDeliveryDetailsRequest $createConfirmDeliveryDetailsRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateConfirmDeliveryDetails($amazonOrderId, $createConfirmDeliveryDetailsRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateLegalDisclosureRequest  $createLegalDisclosureRequest The request schema for the createLegalDisclosure operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createLegalDisclosure(
        string $amazonOrderId,
        CreateLegalDisclosureRequest $createLegalDisclosureRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateLegalDisclosure($amazonOrderId, $createLegalDisclosureRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createNegativeFeedbackRemoval(string $amazonOrderId, array $marketplaceIds): Response
    {
        return $this->connector->send(new CreateNegativeFeedbackRemoval($amazonOrderId, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateConfirmOrderDetailsRequest  $createConfirmOrderDetailsRequest The request schema for the createConfirmOrderDetails operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createConfirmOrderDetails(
        string $amazonOrderId,
        CreateConfirmOrderDetailsRequest $createConfirmOrderDetailsRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateConfirmOrderDetails($amazonOrderId, $createConfirmOrderDetailsRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateConfirmServiceDetailsRequest  $createConfirmServiceDetailsRequest The request schema for the createConfirmServiceDetails operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createConfirmServiceDetails(
        string $amazonOrderId,
        CreateConfirmServiceDetailsRequest $createConfirmServiceDetailsRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateConfirmServiceDetails($amazonOrderId, $createConfirmServiceDetailsRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateAmazonMotorsRequest  $createAmazonMotorsRequest The request schema for the createAmazonMotors operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createAmazonMotors(
        string $amazonOrderId,
        CreateAmazonMotorsRequest $createAmazonMotorsRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateAmazonMotors($amazonOrderId, $createAmazonMotorsRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateWarrantyRequest  $createWarrantyRequest The request schema for the createWarranty operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createWarranty(
        string $amazonOrderId,
        CreateWarrantyRequest $createWarrantyRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateWarranty($amazonOrderId, $createWarrantyRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function getAttributes(string $amazonOrderId, array $marketplaceIds): Response
    {
        return $this->connector->send(new GetAttributes($amazonOrderId, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateDigitalAccessKeyRequest  $createDigitalAccessKeyRequest The request schema for the createDigitalAccessKey operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createDigitalAccessKey(
        string $amazonOrderId,
        CreateDigitalAccessKeyRequest $createDigitalAccessKeyRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateDigitalAccessKey($amazonOrderId, $createDigitalAccessKeyRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  CreateUnexpectedProblemRequest  $createUnexpectedProblemRequest The request schema for the createUnexpectedProblem operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function createUnexpectedProblem(
        string $amazonOrderId,
        CreateUnexpectedProblemRequest $createUnexpectedProblemRequest,
        array $marketplaceIds,
    ): Response {
        return $this->connector->send(new CreateUnexpectedProblem($amazonOrderId, $createUnexpectedProblemRequest, $marketplaceIds));
    }

    /**
     * @param  string  $amazonOrderId An Amazon order identifier. This specifies the order for which a message is sent.
     * @param  InvoiceRequest  $invoiceRequest The request schema for the sendInvoice operation.
     * @param  array  $marketplaceIds A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.
     */
    public function sendInvoice(string $amazonOrderId, InvoiceRequest $invoiceRequest, array $marketplaceIds): Response
    {
        return $this->connector->send(new SendInvoice($amazonOrderId, $invoiceRequest, $marketplaceIds));
    }
}
