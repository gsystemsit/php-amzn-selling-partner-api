<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\FulfillmentInbound;

use Illuminate\Support\Collection;

class InvalidASINListSchema extends Collection
{
    public function offsetGet($key): InvalidASINSchema
    {
        return parent::offsetGet($key);
    }
}
