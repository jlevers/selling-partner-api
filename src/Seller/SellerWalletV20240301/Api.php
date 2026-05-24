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
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getAccount(string $accountId, string $marketplaceId): Response
    {
        $request = new GetAccount($accountId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function listAccountBalances(string $accountId, string $marketplaceId): Response
    {
        $request = new ListAccountBalances($accountId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $sourceCountryCode  Country code of the source transaction account in ISO 3166 format.
     * @param  string  $sourceCurrencyCode  Currency code of the source transaction country in ISO 4217 format.
     * @param  string  $destinationCountryCode  Country code of the destination transaction account in ISO 3166 format.
     * @param  string  $destinationCurrencyCode  Currency code of the destination transaction country in ISO 4217 format.
     * @param  float  $baseAmount  The base transaction amount without any markup fees.
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
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $nextPageToken  A token that you use to retrieve the next page of results. The response includes `nextPageToken` when the number of results exceeds 100. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextPageToken` is null. Note that this operation can return empty pages.
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
     * @param  TransactionInitiationRequest  $transactionInitiationRequest  Request body to initiate a transaction from a Seller Wallet bank account to another customer-defined bank account.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  string  $destAccountDigitalSignature  Digital signature for the destination bank account details. For more information, refer to [Third-Party Provider Signature Guidance](https://developer-docs.amazon.com/sp-api/docs/tpp-registration-signature-guidance).
     * @param  string  $amountDigitalSignature  Digital signature for the source currency transaction amount. Sign in the order of the request definitions. You can omit empty or optional fields. For more information, refer to [Third-Party Provider Signature Guidance](https://developer-docs.amazon.com/sp-api/docs/tpp-registration-signature-guidance).
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
     * @param  string  $transactionId  The ID of the Amazon Seller Wallet transaction.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     */
    public function getTransaction(string $transactionId, string $marketplaceId): Response
    {
        $request = new GetTransaction($transactionId, $marketplaceId);

        return $this->connector->send($request);
    }

    /**
     * @param  string  $accountId  The ID of the Amazon Seller Wallet account.
     * @param  string  $marketplaceId  The marketplace for which items are returned. The marketplace ID is the globally unique identifier of a marketplace. To find the ID for your marketplace, refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids).
     * @param  ?string  $nextPageToken  A token that you use to retrieve the next page of results. The response includes `nextPageToken` when the number of results exceeds the specified `pageSize` value. To get the next page of results, call the operation with this token and include the same arguments as the call that produced the token. To get a complete list, call this operation until `nextPageToken` is null. Note that this operation can return empty pages.
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
     * @param  TransferScheduleRequest  $transferScheduleRequest  Request body to initiate a scheduled transfer from a Seller Wallet bank account to another customer-defined bank account.
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
