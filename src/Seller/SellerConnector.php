<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller;

use Exception;
use SellingPartnerApi\SellingPartnerApi;

class SellerConnector extends SellingPartnerApi
{
    public function amazonWarehousingAndDistributionV20240509(): AmazonWarehousingAndDistributionV20240509\Api
    {
        return new AmazonWarehousingAndDistributionV20240509\Api($this);
    }

    public function appIntegrationsV20240401(): AppIntegrationsV20240401\Api
    {
        return new AppIntegrationsV20240401\Api($this);
    }

    public function applicationManagementV20231130(): ApplicationManagementV20231130\Api
    {
        return new ApplicationManagementV20231130\Api($this);
    }

    public function aPlusContentV20201101(): APlusContentV20201101\Api
    {
        return new APlusContentV20201101\Api($this);
    }

    public function authorizationV1()
    {
        throw new Exception('The Authorization API is deprecated!');
    }

    public function catalogItemsV20220401(): CatalogItemsV20220401\Api
    {
        return new CatalogItemsV20220401\Api($this);
    }

    public function catalogItemsV20201201(): CatalogItemsV20201201\Api
    {
        return new CatalogItemsV20201201\Api($this);
    }

    public function catalogItemsV0(): CatalogItemsV0\Api
    {
        return new CatalogItemsV0\Api($this);
    }

    public function dataKioskV20231115(): DataKioskV20231115\Api
    {
        return new DataKioskV20231115\Api($this);
    }

    public function easyShipV20220323(): EasyShipV20220323\Api
    {
        return new EasyShipV20220323\Api($this);
    }

    public function fbaInboundV20240320(): FBAInboundV20240320\Api
    {
        return new FBAInboundV20240320\Api($this);
    }

    public function fbaInboundV0(): FBAInboundV0\Api
    {
        return new FBAInboundV0\Api($this);
    }

    public function fbaInboundEligibilityV1(): FBAInboundEligibilityV1\Api
    {
        return new FBAInboundEligibilityV1\Api($this);
    }

    public function fbaInventoryV1(): FBAInventoryV1\Api
    {
        return new FBAInventoryV1\Api($this);
    }

    public function fbaOutboundV20200701(): FBAOutboundV20200701\Api
    {
        return new FBAOutboundV20200701\Api($this);
    }

    public function fbaSmallAndLightV1()
    {
        throw new Exception('The FBA Small and Light API is deprecated!');
    }

    public function feedsV20210630(): FeedsV20210630\Api
    {
        return new FeedsV20210630\Api($this);
    }

    public function financesV20240619(): FinancesV20240619\Api
    {
        return new FinancesV20240619\Api($this);
    }

    public function financesV0(): FinancesV0\Api
    {
        return new FinancesV0\Api($this);
    }

    public function invoicesV20240619(): InvoicesV20240619\Api
    {
        return new InvoicesV20240619\Api($this);
    }

    public function listingsItemsV20210801(): ListingsItemsV20210801\Api
    {
        return new ListingsItemsV20210801\Api($this);
    }

    public function listingsItemsV20200901(): ListingsItemsV20200901\Api
    {
        return new ListingsItemsV20200901\Api($this);
    }

    public function listingsRestrictionsV20210801(): ListingsRestrictionsV20210801\Api
    {
        return new ListingsRestrictionsV20210801\Api($this);
    }

    public function merchantFulfillmentV0(): MerchantFulfillmentV0\Api
    {
        return new MerchantFulfillmentV0\Api($this);
    }

    public function messagingV1(): MessagingV1\Api
    {
        return new MessagingV1\Api($this);
    }

    public function notificationsV1(): NotificationsV1\Api
    {
        return new NotificationsV1\Api($this);
    }

    public function ordersV0(): OrdersV0\Api
    {
        return new OrdersV0\Api($this);
    }

    public function productFeesV0(): ProductFeesV0\Api
    {
        return new ProductFeesV0\Api($this);
    }

    public function productPricingV20220501(): ProductPricingV20220501\Api
    {
        return new ProductPricingV20220501\Api($this);
    }

    public function productPricingV0(): ProductPricingV0\Api
    {
        return new ProductPricingV0\Api($this);
    }

    public function productTypeDefinitionsV20200901(): ProductTypeDefinitionsV20200901\Api
    {
        return new ProductTypeDefinitionsV20200901\Api($this);
    }

    public function replenishmentV20221107(): ReplenishmentV20221107\Api
    {
        return new ReplenishmentV20221107\Api($this);
    }

    public function reportsV20210630(): ReportsV20210630\Api
    {
        return new ReportsV20210630\Api($this);
    }

    public function salesV1(): SalesV1\Api
    {
        return new SalesV1\Api($this);
    }

    public function sellersV1(): SellersV1\Api
    {
        return new SellersV1\Api($this);
    }

    public function servicesV1(): ServicesV1\Api
    {
        return new ServicesV1\Api($this);
    }

    public function shipmentInvoicingV0(): ShipmentInvoicingV0\Api
    {
        return new ShipmentInvoicingV0\Api($this);
    }

    public function shippingV2(): ShippingV2\Api
    {
        return new ShippingV2\Api($this);
    }

    public function shippingV1(): ShippingV1\Api
    {
        return new ShippingV1\Api($this);
    }

    public function solicitationsV1(): SolicitationsV1\Api
    {
        return new SolicitationsV1\Api($this);
    }

    public function supplySourcesV20200701(): SupplySourcesV20200701\Api
    {
        return new SupplySourcesV20200701\Api($this);
    }

    public function tokensV20210301(): TokensV20210301\Api
    {
        return new TokensV20210301\Api($this);
    }

    public function transfersV20240601(): TransfersV20240601\Api
    {
        return new TransfersV20240601\Api($this);
    }

    public function uploadsV20201101(): UploadsV20201101\Api
    {
        return new UploadsV20201101\Api($this);
    }
}
