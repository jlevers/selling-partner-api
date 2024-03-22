<?php

namespace SellingPartnerApi\Generator\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Generator;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use SellingPartnerApi\SellingPartnerApi;

class BaseResourceGenerator extends Generator
{
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $classType = new ClassType('BaseResource');
        $classType
            ->addMethod('__construct')
            ->addPromotedParameter('connector')
            ->setType(SellingPartnerApi::class)
            ->setProtected();

        $classFile = new PhpFile();
        $namespace = $this->config->baseResourceNamespace ?? $this->config->namespace;
        $classFile->addNamespace($namespace)
            ->addUse(SellingPartnerApi::class)
            ->add($classType);

        return $classFile;
    }
}
