<?php

namespace SellingPartnerApi\Generator;

use Crescat\SaloonSdkGenerator\FileHandlers\BasicFileHandler;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

class FileHandler extends BasicFileHandler
{
    public function baseResourcePath(PhpFile $file): string
    {
        return GENERATED_DIR.'/BaseResource.php';
    }

    public function connectorPath(PhpFile $file): string
    {
        return '';
    }

    public function requestPath(PhpFile $file): string
    {
        $components = [
            $this->config->outputDir,
            str_replace($this->config->namespace, '', Arr::first($file->getNamespaces())->getName()),
            Arr::first($file->getClasses())->getName(),
        ];
        $path = implode('/', $components).'.php';

        $filePath = Str::of($path)->replace('\\', '/')->replace('//', '/')->toString();

        return $filePath;
    }
}
