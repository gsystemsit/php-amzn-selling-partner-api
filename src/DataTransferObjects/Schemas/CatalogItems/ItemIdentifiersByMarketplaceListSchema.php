<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\CatalogItems;

use Illuminate\Support\Collection;

class ItemIdentifiersByMarketplaceListSchema extends Collection
{
    public function offsetGet($key): ItemIdentifiersByMarketplaceSchema
    {
        return parent::offsetGet($key);
    }
}
