<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\CatalogItems;

use Illuminate\Support\Collection;

class ItemSalesRankListSchema extends Collection
{
    public function offsetGet($key): ItemSalesRankSchema
    {
        return parent::offsetGet($key);
    }
}
