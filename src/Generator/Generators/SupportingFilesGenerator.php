<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Enums\SupportingFile;
use Crescat\SaloonSdkGenerator\Generators\SupportingFilesGenerator as SDKGenerator;

class SupportingFilesGenerator extends SDKGenerator
{
    public static array $overrides = [
        SupportingFile::CONTRACT->value => [],
        SupportingFile::EXCEPTION->value => [],
        SupportingFile::TRAIT->value => ['Deserializes'],
    ];
}
