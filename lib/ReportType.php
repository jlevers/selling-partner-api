<?php

namespace SellingPartnerApi;

/*******************************************/
/* Report types and associated information */
/*******************************************/

class ReportType
{
    // Inventory reports
    public const GET_FLAT_FILE_OPEN_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_OPEN_LISTINGS_DATA'
    ];
    public const GET_MERCHANT_LISTINGS_ALL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_ALL_DATA'
    ];
    public const GET_MERCHANT_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA'
    ];
    public const GET_MERCHANT_LISTINGS_INACTIVE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_INACTIVE_DATA'
    ];
    public const GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT'
    ];
    public const GET_MERCHANT_LISTINGS_DATA_LITE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_LITE'
    ];
    public const GET_MERCHANT_LISTINGS_DATA_LITER = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DATA_LITER'
    ];
    public const GET_MERCHANT_CANCELLED_LISTINGS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_CANCELLED_LISTINGS_DATA'
    ];
    public const GET_MERCHANT_LISTINGS_DEFECT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MERCHANT_LISTINGS_DEFECT_DATA'
    ];
    public const GET_PAN_EU_OFFER_STATUS = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_PAN_EU_OFFER_STATUS'
    ];
    public const GET_MFN_PAN_EU_OFFER_STATUS = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_MFN_PAN_EU_OFFER_STATUS'
    ];
    public const GET_FLAT_FILE_GEO_OPPORTUNITIES = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_GEO_OPPORTUNITIES'
    ];
    public const GET_REFERRAL_FEE_PREVIEW_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_REFERRAL_FEE_PREVIEW_REPORT'
    ];


    // Order reports
    public const GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_SHIPPING'
    ];
    public const GET_ORDER_REPORT_DATA_INVOICING = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_INVOICING'
    ];
    public const GET_ORDER_REPORT_DATA_TAX = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_TAX'
    ];
    public const GET_ORDER_REPORT_DATA_SHIPPING = [
        'contentType' => ContentType::XML,
        'name' => 'GET_ORDER_REPORT_DATA_SHIPPING'
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_INVOICING'
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_SHIPPING'
    ];
    public const GET_FLAT_FILE_ORDER_REPORT_DATA_TAX = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ORDER_REPORT_DATA_TAX'
    ];


    // Order tracking reports
    public const GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL'
    ];
    public const GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL'
    ];
    public const GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_ARCHIVED_ORDERS_DATA_BY_ORDER_DATE'
    ];
    public const GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_GENERAL'
    ];
    public const GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_GENERAL'
    ];

    // Pending order reports
    public const GET_FLAT_FILE_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_PENDING_ORDERS_DATA'
    ];
    public const GET_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'GET_PENDING_ORDERS_DATA'
    ];
    public const GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA'
    ];


    // Returns reports
    public const GET_XML_RETURNS_DATA_BY_RETURN_DATE = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_RETURNS_DATA_BY_RETURN_DATE'
    ];
    public const GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_RETURNS_DATA_BY_RETURN_DATE'
    ];
    public const GET_XML_MFN_PRIME_RETURNS_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_MFN_PRIME_RETURNS_REPORT'
    ];
    public const GET_CSV_MFN_PRIME_RETURNS_REPORT = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_CSV_MFN_PRIME_RETURNS_REPORT'
    ];
    public const GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_MFN_SKU_RETURN_ATTRIBUTES_REPORT'
    ];
    public const GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_MFN_SKU_RETURN_ATTRIBUTES_REPORT'
    ];


    // Performance reports
    public const GET_SELLER_FEEDBACK_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_SELLER_FEEDBACK_DATA'
    ];
    public const GET_V1_SELLER_PERFORMANCE_REPORT = [
        'contentType' => ContentType::XML,
        'name' => 'GET_V1_SELLER_PERFORMANCE_REPORT'
    ];
    public const GET_V2_SELLER_PERFORMANCE_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_V2_SELLER_PERFORMANCE_REPORT'
    ];


    // Settlement reports
    public const GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE'
    ];
    public const GET_V2_SETTLEMENT_REPORT_DATA_XML = [
        'contentType' => ContentType::XML,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_XML'
    ];
    public const GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2 = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_V2_SETTLEMENT_REPORT_DATA_FLAT_FILE_V2'
    ];


    // FBA sales reports
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_GENERAL = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_GENERAL'
    ];
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_INVOICING'
    ];
    public const GET_AMAZON_FULFILLED_SHIPMENTS_DATA_TAX = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AMAZON_FULFILLED_SHIPMENTS_DATA_TAX'
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA'
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA'
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA'
    ];
    public const GET_REMOTE_FULFILLMENT_ELIGIBILITY = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_REMOTE_FULFILLMENT_ELIGIBILITY'
    ];

    // FBA inventory reports
    public const GET_AFN_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AFN_INVENTORY_DATA'
    ];
    public const GET_AFN_INVENTORY_DATA_BY_COUNTRY = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_AFN_INVENTORY_DATA_BY_COUNTRY'
    ];
    public const GET_LEDGER_SUMMARY_VIEW_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_LEDGER_SUMMARY_VIEW_DATA'
    ];
    public const GET_LEDGER_DETAIL_VIEW_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_LEDGER_DETAIL_VIEW_DATA'
    ];
    public const GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA'
    ];
    public const GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA'
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA'
    ];
    public const GET_RESERVED_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_RESERVED_INVENTORY_DATA'
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA'
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA'
    ];
    public const GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA'
    ];
    public const GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA'
    ];
    public const GET_FBA_MYI_ALL_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_MYI_ALL_INVENTORY_DATA'
    ];
    public const GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_RESTOCK_INVENTORY_RECOMMENDATIONS_REPORT'
    ];
    public const GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA'
    ];
    public const GET_STRANDED_INVENTORY_UI_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_STRANDED_INVENTORY_UI_DATA'
    ];
    public const GET_STRANDED_INVENTORY_LOADER_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_STRANDED_INVENTORY_LOADER_DATA'
    ];
    public const GET_FBA_INVENTORY_AGED_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_INVENTORY_AGED_DATA'
    ];
    public const GET_EXCESS_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EXCESS_INVENTORY_DATA'
    ];
    public const GET_FBA_STORAGE_FEE_CHARGES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_STORAGE_FEE_CHARGES_DATA'
    ];
    public const GET_PRODUCT_EXCHANGE_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_PRODUCT_EXCHANGE_DATA'
    ];


    // FBA payments reports
    public const GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA'
    ];
    public const GET_FBA_REIMBURSEMENTS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_REIMBURSEMENTS_DATA'
    ];
    public const GET_FBA_FULFILLMENT_LONGTERM_STORAGE_FEE_CHARGES_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_LONGTERM_STORAGE_FEE_CHARGES_DATA'
    ];


    // FBA customer concessions reports
    public const GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA'
    ];
    public const GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA'
    ];


    // FBA removals reports
    public const GET_FBA_RECOMMENDED_REMOVAL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_RECOMMENDED_REMOVAL_DATA'
    ];
    public const GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_REMOVAL_ORDER_DETAIL_DATA'
    ];
    public const GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_FULFILLMENT_REMOVAL_SHIPMENT_DETAIL_DATA'
    ];


    // FBA small and light reports
    public const GET_FBA_UNO_INVENTORY_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FBA_UNO_INVENTORY_DATA'
    ];


    // Tax reports
    public const GET_FLAT_FILE_SALES_TAX_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_FLAT_FILE_SALES_TAX_DATA'
    ];
    public const SC_VAT_TAX_REPORT = [
        'contentType' => ContentType::CSV,
        'name' => 'SC_VAT_TAX_REPORT'
    ];
    public const GET_VAT_TRANSACTION_DATA = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_VAT_TRANSACTION_DATA'
    ];
    public const GET_GST_MTR_B2B_CUSTOM = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_GST_MTR_B2B_CUSTOM'
    ];
    public const GET_GST_MTR_B2C_CUSTOM = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_GST_MTR_B2C_CUSTOM'
    ];



    // Browse tree report
    public const GET_XML_BROWSE_TREE_DATA = [
        'contentType' => ContentType::XML,
        'name' => 'GET_XML_BROWSE_TREE_DATA'
    ];


    // Easy ship reports
    public const GET_EASYSHIP_DOCUMENTS = [
        'contentType' => ContentType::PDF,
        'name' => 'GET_EASYSHIP_DOCUMENTS'
    ];
    public const GET_EASYSHIP_PICKEDUP = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EASYSHIP_PICKEDUP'
    ];
    public const GET_EASYSHIP_WAITING_FOR_PICKUP = [
        'contentType' => ContentType::TAB,
        'name' => 'GET_EASYSHIP_WAITING_FOR_PICKUP'
    ];


    // Amazon business reports
    public const RFQD_BULK_DOWNLOAD = [
        'contentType' => ContentType::XLSX,
        'name' => 'RFQD_BULK_DOWNLOAD'
    ];
    public const FEE_DISCOUNTS_REPORT = [
        'contentType' => ContentType::XLSX,
        'name' => 'FEE_DISCOUNTS_REPORT'
    ];


    // Amazon pay report
    public const GET_FLAT_FILE_OFFAMAZONPAYMENTS_SANDBOX_SETTLEMENT_DATA = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_FLAT_FILE_OFFAMAZONPAYMENTS_SANDBOX_SETTLEMENT_DATA'
    ];


    // B2B product opportunities reports
    public const GET_B2B_PRODUCT_OPPORTUNITIES_RECOMMENDED_FOR_YOU = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_B2B_PRODUCT_OPPORTUNITIES_RECOMMENDED_FOR_YOU'
    ];
    public const GET_B2B_PRODUCT_OPPORTUNITIES_NOT_YET_ON_AMAZON = [
        'contentType' => ContentType::CSV,
        'name' => 'GET_B2B_PRODUCT_OPPORTUNITIES_NOT_YET_ON_AMAZON'
    ];

    // Internal: the report type to use for feed upload result documents
    public const __FEED_RESULT_REPORT = [
        'contentType' => ContentType::TAB,
        'name' => '__FEED_RESULT_REPORT'
    ];
}