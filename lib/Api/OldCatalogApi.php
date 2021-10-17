<?php

namespace SellingPartnerApi\Api;

final class OldCatalogApi extends CatalogItemsV0Api {
  public function __construct(...$args)
  {
    parent::__construct(...$args);
    echo "The OldCatalogApi class is deprecated. Please use the CatalogItemsV0Api class instead.\n";
  }
}