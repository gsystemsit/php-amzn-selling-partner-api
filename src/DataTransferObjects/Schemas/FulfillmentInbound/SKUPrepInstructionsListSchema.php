<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\FulfillmentInbound;

use Illuminate\Support\Collection;

class SKUPrepInstructionsListSchema extends Collection
{
    public function offsetGet($key): SKUPrepInstructionsSchema
    {
        return parent::offsetGet($key);
    }
}
