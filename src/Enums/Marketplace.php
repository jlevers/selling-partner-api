<?php

declare(strict_types=1);

namespace SellingPartnerApi\Enums;

use InvalidArgumentException;
use SellingPartnerApi\Traits\EnumTrait;

enum Marketplace: string
{
    use EnumTrait;

    // North America
    case BR = 'A2Q3Y263D00KWC';
    case CA = 'A2EUQ1WTGCTBG2';
    case MX = 'A1AM78C64UM0Y8';
    case US = 'ATVPDKIKX0DER';

    // Europe
    case AE = 'A2VIGQ35RCS4UG';
    case BE = 'AMEN7PMS3EDWL';
    case DE = 'A1PA6795UKMFR9';
    case EG = 'ARBP9OOSHTCHU';
    case ES = 'A1RKKUPIHCS9HS';
    case FR = 'A13V1IB3VIYZZH';
    case GB = 'A1F83G8C2ARO7P';
    case IN = 'A21TJRUUN4KGV';
    case IT = 'APJ6JRA9NG5V4';
    case NL = 'A1805IZSGTT6HS';
    case PL = 'A1C3SOZRARQ6R3';
    case SA = 'A17E79C6D8DWNP';
    case SE = 'A2NODRKZP88ZB9';
    case TR = 'A33AVAJ2PDY3EV';
    case ZA = 'AE08WJ6YKNBMC';

    // Far East
    case AU = 'A39IBJ37TRP1C6';
    case JP = 'A1VC38T7YXB528';
    case SG = 'A19VAU5U5O7RUS';

    public static function fromCountryCode(string $countryCode): Marketplace
    {
        $_countryCode = strtoupper($countryCode);
        $constantStr = self::class.'::'.$_countryCode;
        if (defined($constantStr)) {
            return constant($constantStr);
        }

        throw new InvalidArgumentException('Unknown country code: '.$countryCode);
    }

    public static function toRegion(self $marketplace): Region
    {
        return match ($marketplace) {
            Marketplace::BR, Marketplace::CA, Marketplace::MX, Marketplace::US => Region::NA,

            Marketplace::AE, Marketplace::BE, Marketplace::DE, Marketplace::EG, Marketplace::ES, Marketplace::FR,
            Marketplace::GB, Marketplace::IN, Marketplace::IT, Marketplace::NL, Marketplace::PL, Marketplace::SA,
            Marketplace::SE, Marketplace::TR, Marketplace::ZA => Region::EU,

            Marketplace::AU, Marketplace::JP, Marketplace::SG => Region::FE,
        };
    }
}
