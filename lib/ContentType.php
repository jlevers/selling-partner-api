<?php

namespace SellingPartnerApi;

use ReflectionClass;

/*******************************/
/** Report/Feed content types **/
/*******************************/

class ContentType
{
    public const CSV = 'text/csv';
    public const JSON = 'application/json';
    public const PDF = 'application/pdf';
    public const PLAIN = 'text/plain';
    public const TAB = 'text/tab-separated-values';
    public const XLSX = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    public const XML = 'text/xml';

    public static function getContentTypes(): array
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }
}
