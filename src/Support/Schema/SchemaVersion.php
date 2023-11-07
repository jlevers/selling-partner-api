<?php declare(strict_types=1);

namespace SellingPartnerApi\Support\Schema;

class SchemaVersion
{
    public function __construct(
        public string $url,
        public string $version,
        public bool $latest = false,
        public bool $deprecated = false,
        public string|null $selector = null,
    ) {
    }

    /**
     * Get the filename for this schema version.
     *
     * @return string
     */
    public function filename(): string
    {
        return "v{$this->version}.json";
    }
}
