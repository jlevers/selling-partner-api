<?php

namespace SellingPartnerApi;

/*******************************************/
/* Report types and associated information */
/*******************************************/

class ReportType
{
    // Brand Analytics reports
    public const GET_BRAND_ANALYTICS_MARKET_BASKET_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_BRAND_ANALYTICS_MARKET_BASKET_REPORT',
        'restricted' => false,
    ];
    public const GET_BRAND_ANALYTICS_SEARCH_TERMS_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_BRAND_ANALYTICS_SEARCH_TERMS_REPORT',
        'restricted' => false,
    ];


    // Vendor Retail Analytics reports
    public const GET_VENDOR_SALES_DIAGNOSTIC_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_VENDOR_SALES_DIAGNOSTIC_REPORT',
        'restricted' => false,
    ];
    public const GET_VENDOR_INVENTORY_HEALTH_AND_PLANNING_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_VENDOR_INVENTORY_HEALTH_AND_PLANNING_REPORT',
        'restricted' => false,
    ];
    public const GET_VENDOR_DEMAND_FORECAST_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_VENDOR_DEMAND_FORECAST_REPORT',
        'restricted' => false,
    ];


    // Inventory reports
    public const GET_FLAT_FILE_OPEN_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_OPEN_LISTINGS_DATA',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_ALL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_ALL_DATA',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_INACTIVE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_INACTIVE_DATA',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_DATA_LITE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_LITE',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_DATA_LITER = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_LITER',
        'restricted' => false,
    ];
    public const GET_MERCHANT_CANCELLED_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_CANCELLED_LISTINGS_DATA',
        'restricted' => false,
    ];
    public const GET_MERCHANTS_LISTINGS_FYP_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANTS_LISTINGS_FYP_REPORT',
        'restricted' => false,
    ];
    public const GET_MERCHANT_LISTINGS_DEFECT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DEFECT_DATA',
        'restricted' => false,
    ];
    public const GET_PAN_EU_OFFER_STATUS = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_PAN_EU_OFFER_STATUS',
        'restricted' => false,
    ];
    public const GET_MFN_PAN_EU_OFFER_STATUS = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MFN_PAN_EU_OFFER_STATUS',
        'restricted' => false,
    ];
    public const GET_FLAT_FILE_GEO_OPPORTUNITIES = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_GEO_OPPORTUNITIES',
        'restricted' => false,
    ];
    public const GET_REFERRAL_FEE_PREVIEW_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_REFERRAL_FEE_PREVIEW_REPORT',
        'restricted' => false,
    ];


    // Order reports
    public const GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING',
        'restricted' => true,
    ];
    public const GET_ORDER_REPORT_DATA_INVOICING = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_INVOICING',
        'restricted' => true,
    ];
    public const GET_ORDER_REPORT_DATA_TAX = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_TAX',
        'restricted' => true,
    ];
    public const GET_ORDER_REPORT_DATA_SHIPPING = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_SHIPPING',
        'restricted' => true,
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING',
        'restricted' => true,
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING',
        'restricted' => true,
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_TAX = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_TAX',
        'restricted' => true,
    ];


    // Order tracking reports
    public const GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'restricted' => false,
    ];
    public const GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        'restricted' => false,
    ];
    public const GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE',
        'restricted' => false,
    ];
    public const GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL',
        'restricted' => false,
    ];
    public const GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL',
        'restricted' => false,
    ];

    // Pending order reports
    public const GET_FLAT_FILE_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_PENDING_ORDERS_DATA',
        'restricted' => false,
    ];
    public const GET_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'GET_PENDING_ORDERS_DATA',
        'restricted' => false,
    ];
    public const GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA',
        'restricted' => false,
    ];


    // Returns reports
    public const GET_XML_RETURNS_DATA_BY_RETURN_DATE = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_RETURNS_DATA_BY_RETURN_DATE',
        'restricted' => false,
    ];
    public const GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE',
        'restricted' => false,
    ];
    public const GET_XML_MFN_PRIME_RETURNS_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_MFN_PRIME_RETURNS_REPORT',
        'restricted' => false,
    ];
    public const GET_CSV_MFN_PRIME_RETURNS_REPORT = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_CSV_MFN_PRIME_RETURNS_REPORT',
        'restricted' => false,
    ];
    public const GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT',
        'restricted' => false,
    ];
    public const GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT',
        'restricted' => false,
    ];


    // Performance reports
    public const GET_SELLER_FEEDBACK_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_SELLER_FEEDBACK_DATA',
        'restricted' => false,
    ];
    public const GET_V1_SELLER_PERFORMANCE_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_V1_SELLER_PERFORMANCE_REPORT',
        'restricted' => false,
    ];
    public const GET_V2_SELLER_PERFORMANCE_REPORT = [
        'contentType' => ContentType::JSON,
        'name' => 'GET_V2_SELLER_PERFORMANCE_REPORT',
        'restricted' => false,
    ];


    // Settlement reports
    public const GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE',
        'restricted' => false,
    ];
    public const GET_V2_SETTLEMENT_REPORT_DATA_XML = [
        'contentType' => ContentType::XML,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_XML',
        'restricted' => false,
    ];
    public const GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2 = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2'
    ];


    // FBA sales reports
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_GENERAL',
        'restricted' => false,
    ];
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING',
        'restricted' => true,
    ];
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_TAX = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_TAX',
        'restricted' => true,
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA',
        'restricted' => false,
    ];
    public const GET_REMOTE_FULFILLMENT_ELIGIBILITY = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_REMOTE_FULFILLMENT_ELIGIBILITY',
        'restricted' => false,
    ];

    // FBA inventory reports
    public const GET_AFN_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AFN_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_AFN_INVENTORY_DATA_BY_COUNTRY = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AFN_INVENTORY_DATA_BY_COUNTRY',
        'restricted' => false,
    ];
    public const GET_LEDGER_SUMMARY_VIEW_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_LEDGER_SUMMARY_VIEW_DATA',
        'restricted' => false,
    ];
    public const GET_LEDGER_DETAIL_VIEW_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_LEDGER_DETAIL_VIEW_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA',
        'restricted' => false,
    ];
    public const GET_RESERVED_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_RESERVED_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_MYI_ALL_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_MYI_ALL_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA',
        'restricted' => false,
    ];
    public const GET_STRANDED_INVENTORY_UI_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_STRANDED_INVENTORY_UI_DATA',
        'restricted' => false,
    ];
    public const GET_STRANDED_INVENTORY_LOADER_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_STRANDED_INVENTORY_LOADER_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_INVENTORY_AGED_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_INVENTORY_AGED_DATA',
        'restricted' => false,
    ];
    public const GET_EXCESS_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EXCESS_INVENTORY_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_STORAGE_FEE_CHARGES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_STORAGE_FEE_CHARGES_DATA',
        'restricted' => false,
    ];
    public const GET_PRODUCT_EXCHANGE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_PRODUCT_EXCHANGE_DATA',
        'restricted' => false,
    ];


    // FBA payments reports
    public const GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_REIMBURSEMENTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_REIMBURSEMENTS_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_LONGTERM_STORAGE_FEE_CHARGES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_LONGTERM_STORAGE_FEE_CHARGES_DATA',
        'restricted' => false,
    ];


    // FBA customer concessions reports
    public const GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA',
        'restricted' => false,
    ];


    // FBA removals reports
    public const GET_FBA_RECOMMENDED_REMOVAL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_RECOMMENDED_REMOVAL_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA',
        'restricted' => false,
    ];
    public const GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA',
        'restricted' => false,
    ];


    // FBA small and light reports
    public const GET_FBA_UNO_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_UNO_INVENTORY_DATA',
        'restricted' => false,
    ];


    // Tax reports
    public const GET_FLAT_FILE_SALES_TAX_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_SALES_TAX_DATA',
        'restricted' => false,
    ];
    public const SC_VAT_TAX_REPORT = [
        'contentType' => ContentType::CSV,
        'name' => 'SC_VAT_TAX_REPORT',
        'restricted' => true,
    ];
    public const GET_VAT_TRANSACTION_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_VAT_TRANSACTION_DATA',
        'restricted' => true,
    ];
    public const GET_GST_MTR_B2B_CUSTOM = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_GST_MTR_B2B_CUSTOM',
        'restricted' => true,
    ];
    public const GET_GST_MTR_B2C_CUSTOM = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_GST_MTR_B2C_CUSTOM',
        'restricted' => false,
    ];



    // Browse tree report
    public const GET_XML_BROWSE_TREE_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_BROWSE_TREE_DATA',
        'restricted' => false,
    ];


    // Easy ship reports
    public const GET_EASYSHIP_DOCUMENTS = [
        'contentType' => ContentType::PDF,
        'name' => 'GET_EASYSHIP_DOCUMENTS',
        'restricted' => true,
    ];
    public const GET_EASYSHIP_PICKEDUP = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EASYSHIP_PICKEDUP',
        'restricted' => false,
    ];
    public const GET_EASYSHIP_WAITING_FOR_PICKUP = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EASYSHIP_WAITING_FOR_PICKUP',
        'restricted' => false,
    ];


    // Amazon business reports
    public const RFQD_BULK_DOWNLOAD = [
        'contentType' => ContentType::XLSX,
        'name' => 'RFQD_BULK_DOWNLOAD',
        'restricted' => false,
    ];
    public const FEE_DISCOUNTS_REPORT = [
        'contentType' => ContentType::XLSX,
        'name' => 'FEE_DISCOUNTS_REPORT',
        'restricted' => false,
    ];


    // Amazon pay report
    public const GET_FLAT_FILE_OFFAMAZONPAYMENTS_SANDBOX_SETTLEMENT_DATA = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_FLAT_FILE_OFFAMAZONPAYMENTS_SANDBOX_SETTLEMENT_DATA',
        'restricted' => false,
    ];


    // B2B product opportunities reports
    public const GET_B2B_PRODUCT_OPPORTUNITIES_RECOMMENDED_FOR_YOU = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_B2B_PRODUCT_OPPORTUNITIES_RECOMMENDED_FOR_YOU',
        'restricted' => false,
    ];
    public const GET_B2B_PRODUCT_OPPORTUNITIES_NOT_YET_ON_AMAZON = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_B2B_PRODUCT_OPPORTUNITIES_NOT_YET_ON_AMAZON',
        'restricted' => false,
    ];

    // DEPRECATED
    // Internal: the report type to use for feed upload result documents
    public const __FEED_RESULT_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => '__FEED_RESULT_REPORT',
        'restricted' => false,
    ];
}