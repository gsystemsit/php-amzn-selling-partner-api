<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\CatalogItems\v20220401;

use Illuminate\Support\Collection;

class ItemVendorDetailsByMarketplaceListSchema extends Collection
{
    public function offsetGet($key): ItemVendorDetailsByMarketplaceSchema
    {
        return parent::offsetGet($key);
    }
}
