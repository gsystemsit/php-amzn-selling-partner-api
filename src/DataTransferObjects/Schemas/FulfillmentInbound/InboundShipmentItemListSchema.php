<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\FulfillmentInbound;

use Illuminate\Support\Collection;

class InboundShipmentItemListSchema extends Collection
{
    public function offsetGet($key): InboundShipmentItemSchema
    {
        return parent::offsetGet($key);
    }
}
