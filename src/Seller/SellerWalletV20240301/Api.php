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
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function listAccounts(string $marketplaceId): Response
    {
        $request = new ListAccounts($marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     */
    public function getAccount(string $accountId): Response
    {
        $request = new GetAccount($accountId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     */
    public function listAccountBalances(string $accountId): Response
    {
        $request = new ListAccountBalances($accountId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sourceCountryCode  Country code of the source transaction account in ISO 3166 format.
     * @param  string  $sourceCurrencyCode  Currency code of the source transaction country in ISO 4217 format.
     * @param  string  $destinationCountryCode  Country code of the destination transaction account in ISO 3166 format.
     * @param  string  $destinationCurrencyCode  Currency code of the destination transaction country in ISO 4217 format.
     * @param  float  $baseAmount  The base transaction amount without any markup fees.
     */
    public function getTransferPreview(
        string $sourceCountryCode,
        string $sourceCurrencyCode,
        string $destinationCountryCode,
        string $destinationCurrencyCode,
        float $baseAmount,
    ): Response {
        $request = new GetTransferPreview($sourceCountryCode, $sourceCurrencyCode, $destinationCountryCode, $destinationCurrencyCode, $baseAmount);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  ?string  $nextPageToken  A token that you use to retrieve the next page of results. The response includes `nextPageToken` when the number of results exceeds 100. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextPageToken` is null. Note that this operation can return empty pages.
     */
    public function listAccountTransactions(string $accountId, ?string $nextPageToken = null): Response
    {
        $request = new ListAccountTransactions($accountId, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  TransactionInitiationRequest  $transactionInitiationRequest  Request body to initiate a transaction from a Seller Wallet bank account to another customer-defined bank account.
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function createTransaction(
        TransactionInitiationRequest $transactionInitiationRequest,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new CreateTransaction($transactionInitiationRequest, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transactionId  The ID of the Amazon Seller Wallet transaction.
     */
    public function getTransaction(string $transactionId): Response
    {
        $request = new GetTransaction($transactionId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  ?string  $nextPageToken  A token that you use to retrieve the next page of results. The response includes `nextPageToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextPageToken` is null. Note that this operation can return empty pages.
     */
    public function listTransferSchedules(string $accountId, ?string $nextPageToken = null): Response
    {
        $request = new ListTransferSchedules($accountId, $nextPageToken);

        return $this->connector->send($request);
    }

    /**
     * @param  TransferSchedule  $transferSchedule  Transfer schedule details and historical details related to it.
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function updateTransferSchedule(
        TransferSchedule $transferSchedule,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new UpdateTransferSchedule($transferSchedule, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  TransferScheduleRequest  $transferScheduleRequest  Request body to initiate a scheduled transfer from a Seller Wallet bank account to another customer-defined bank account.
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details.
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount.
     */
    public function createTransferSchedule(
        TransferScheduleRequest $transferScheduleRequest,
        string $destAccountDigitalSignature,
        string $amountDigitalSignature,
    ): Response {
        $request = new CreateTransferSchedule($transferScheduleRequest, $destAccountDigitalSignature, $amountDigitalSignature);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transferScheduleId  The schedule ID of the Amazon Seller Wallet transfer.
     */
    public function getTransferSchedule(string $transferScheduleId): Response
    {
        $request = new GetTransferSchedule($transferScheduleId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $transferScheduleId  A unique reference ID for a scheduled transfer.
     */
    public function deleteScheduleTransaction(string $transferScheduleId): Response
    {
        $request = new DeleteScheduleTransaction($transferScheduleId);

        return $this->connector->send($request);
    }
}
