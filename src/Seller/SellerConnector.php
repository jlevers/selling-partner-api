<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller;

use SellingPartnerApi\SellingPartnerApi;

class SellerConnector extends SellingPartnerApi
{
    public function authorization(): AuthorizationV1\Api
    {
        return $this->authorizationV1();
    }

    public function catalogItems(): CatalogItemsV20220401\Api
    {
        return $this->catalogItemsV20220401();
    }

    public function easyShip(): EasyShipV20220323\Api
    {
        return $this->easyShipV20220323();
    }

    public function fbaInboundEligibility(): FBAInboundEligibilityV1\Api
    {
        return $this->fbaInboundEligibilityV1();
    }

    public function fbaInventory(): FBAInventoryV1\Api
    {
        return $this->fbaInventoryV1();
    }

    public function fbaSmallAndLight(): FBASmallAndLightV1\Api
    {
        return $this->fbaSmallAndLightV1();
    }

    public function feeds(): FeedsV20210630\Api
    {
        return $this->feedsV20210630();
    }

    public function listingsItems(): ListingsItemsV20210801\Api
    {
        return $this->listingsItemsV20210801();
    }

    public function orders(): OrdersV0\Api
    {
        return $this->ordersV0();
    }

    public function replenishment(): ReplenishmentV20221107\Api
    {
        return $this->replenishmentV20221107();
    }

    public function reports(): ReportsV20210630\Api
    {
        return $this->reportsV20210630();
    }

    public function sales(): SalesV1\Api
    {
        return $this->salesV1();
    }

    public function sellers(): SellersV1\Api
    {
        return $this->sellersV1();
    }

    public function shipmentInvoicing(): ShipmentInvoicingV0\Api
    {
        return $this->shipmentInvoicingV0();
    }

    public function shipping(): ShippingV2\Api
    {
        return $this->shippingV2();
    }

    public function tokens(): TokensV20210301\Api
    {
        return $this->tokensV20210301();
    }

    public function uploads(): UploadsV20201101\Api
    {
        return $this->uploadsV20201101();
    }

    public function authorizationV1(): AuthorizationV1\Api
    {
        return new AuthorizationV1\Api($this);
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

    public function easyShipV20220323(): EasyShipV20220323\Api
    {
        return new EasyShipV20220323\Api($this);
    }

    public function fbaInboundEligibilityV1(): FBAInboundEligibilityV1\Api
    {
        return new FBAInboundEligibilityV1\Api($this);
    }

    public function fbaInventoryV1(): FBAInventoryV1\Api
    {
        return new FBAInventoryV1\Api($this);
    }

    public function fbaSmallAndLightV1(): FBASmallAndLightV1\Api
    {
        return new FBASmallAndLightV1\Api($this);
    }

    public function feedsV20210630(): FeedsV20210630\Api
    {
        return new FeedsV20210630\Api($this);
    }

    public function listingsItemsV20210801(): ListingsItemsV20210801\Api
    {
        return new ListingsItemsV20210801\Api($this);
    }

    public function listingsItemsV20200901(): ListingsItemsV20200901\Api
    {
        return new ListingsItemsV20200901\Api($this);
    }

    public function ordersV0(): OrdersV0\Api
    {
        return new OrdersV0\Api($this);
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

    public function tokensV20210301(): TokensV20210301\Api
    {
        return new TokensV20210301\Api($this);
    }

    public function uploadsV20201101(): UploadsV20201101\Api
    {
        return new UploadsV20201101\Api($this);
    }
}
