<?php

namespace SellingPartnerApi\Seller\SellerWalletV20240301;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransactionInitiationRequest;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransferSchedule;
use SellingPartnerApi\Seller\SellerWalletV20240301\Dto\TransferScheduleRequest;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\CreateTransaction;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\CreateTransferSchedule;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\DeleteScheduleTransaction;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\GetAccount;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\GetTransaction;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\GetTransferPreview;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\GetTransferSchedule;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\ListAccountBalances;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\ListAccounts;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\ListAccountTransactions;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\ListTransferSchedules;
use SellingPartnerApi\Seller\SellerWalletV20240301\Requests\UpdateTransferSchedule;

class Api extends BaseResource
{
    /**
     * @param  string  $marketplaceId  A marketplace identifier. Specifies the marketplace for which items are returned.
     */
    public function listAccounts(string $marketplaceId): Response
    {
        $request = new ListAccounts($marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  ID of the Amazon SW account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getAccount(string $accountId, string $marketplaceId): Response
    {
        $request = new GetAccount($accountId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  ID of the Amazon SW account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function listAccountBalances(string $accountId, string $marketplaceId): Response
    {
        $request = new ListAccountBalances($accountId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sourceCountryCode  Represents 2 character country code of source transaction account in ISO 3166 standard format.
     * @param  string  $sourceCurrencyCode  Represents 3 letter currency code in ISO 4217 standard format of the source transaction country.
     * @param  string  $destinationCountryCode  Represents 2 character country code of destination transaction account in ISO 3166 standard format.
     * @param  string  $destinationCurrencyCode  Represents 3 letter currency code in ISO 4217 standard format of the destination transaction country.
     * @param  float  $baseAmount  Represents the base transaction amount without any markup fees, rates that will be used to get the transfer preview.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getTransferPreview(
        string $sourceCountryCode,
        string $sourceCurrencyCode,
        string $destinationCountryCode,
        string $destinationCurrencyCode,
        float $baseAmount,
        string $marketplaceId,
    ): Response {
        $request = new GetTransferPreview($sourceCountryCode, $sourceCurrencyCode, $destinationCountryCode, $destinationCurrencyCode, $baseAmount, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  ID of the Amazon SW account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $nextPageToken  Pagination token to retrieve a specific page of results.
     */
    public function listAccountTransactions(
        string $accountId,
        string $marketplaceId,
        ?string $nextPageToken = null,
    ): Response {
        $request = new ListAccountTransactions($accountId, $marketplaceId, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  TransactionInitiationRequest  $transactionInitiationRequest  Request body to initiate a transaction from a SW bank account to another customer defined bank account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function createTransaction(
        TransactionInitiationRequest $transactionInitiationRequest,
        string $marketplaceId,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new CreateTransaction($transactionInitiationRequest, $marketplaceId, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transactionId  ID of the Amazon SW transaction
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getTransaction(string $transactionId, string $marketplaceId): Response
    {
        $request = new GetTransaction($transactionId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  ID of the Amazon SW account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $nextPageToken  Pagination token to retrieve a specific page of results.
     */
    public function listTransferSchedules(
        string $accountId,
        string $marketplaceId,
        ?string $nextPageToken = null,
    ): Response {
        $request = new ListTransferSchedules($accountId, $marketplaceId, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  TransferSchedule  $transferSchedule  Transfer schedule details and related historical details.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function updateTransferSchedule(
        TransferSchedule $transferSchedule,
        string $marketplaceId,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new UpdateTransferSchedule($transferSchedule, $marketplaceId, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  TransferScheduleRequest  $transferScheduleRequest  Request body to initiate a scheduled transfer from a SW bank account to another customer defined bank account
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function createTransferSchedule(
        TransferScheduleRequest $transferScheduleRequest,
        string $marketplaceId,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new CreateTransferSchedule($transferScheduleRequest, $marketplaceId, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transferScheduleId  The schedule ID of the Amazon Seller Wallet transfer.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getTransferSchedule(string $transferScheduleId, string $marketplaceId): Response
    {
        $request = new GetTransferSchedule($transferScheduleId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transferScheduleId  A unique reference ID for a scheduled transfer.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function deleteScheduleTransaction(string $transferScheduleId, string $marketplaceId): Response
    {
        $request = new DeleteScheduleTransaction($transferScheduleId, $marketplaceId);

        return $this->connector->send($request);
    }
}
