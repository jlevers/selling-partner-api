<?php

namespace SellingPartnerApi\Generator;

use Crescat\SaloonSdkGenerator\Enums\SupportingFile;
use Crescat\SaloonSdkGenerator\FileHandlers\BasicFileHandler;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

class FileHandler extends BasicFileHandler
{
    public function baseResponsePath(PhpFile $file): string
    {
        return $this->baseOutputPath($file);
    }

    public function baseRequestPath(PhpFile $file): string
    {
        return $this->baseOutputPath($file);
    }

    public function baseDtoPath(PhpFile $file): string
    {
        return $this->baseOutputPath($file);
    }

    public function baseResourcePath(PhpFile $file): string
    {
        return $this->baseOutputPath($file);
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

    public function supportingFilePath(SupportingFile $type, PhpFile $file): string
    {
        return $this->baseOutputPath($file, $type->value);
    }

    protected function baseOutputPath(PhpFile $file, ?string $subPath = ''): string
    {
        if ($subPath && $subPath[0] !== '/') {
            $subPath = "/$subPath";
        }

        $className = Arr::first($file->getClasses())->getName();
        $path = GENERATED_DIR."$subPath/$className.php";
        $filePath = Str::of($path)->replace('\\', '/')->replace('//', '/')->toString();

        return $filePath;
    }
}
