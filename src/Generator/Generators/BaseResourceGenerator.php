<?php

declare(strict_types=1);

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Generators\BaseResourceGenerator as SDKGenerator;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use SellingPartnerApi\SellingPartnerApi;

class BaseResourceGenerator extends SDKGenerator
{
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $classType = new ClassType(static::$baseClsName);
        $classType
            ->addMethod('__construct')
            ->addPromotedParameter('connector')
            ->setType(SellingPartnerApi::class)
            ->setProtected();

        $classFile = new PhpFile;
        $classFile->setStrictTypes()
            ->addNamespace(PACKAGE_NAMESPACE)
            ->addUse(SellingPartnerApi::class)
            ->add($classType);

        return $classFile;
    }
}
