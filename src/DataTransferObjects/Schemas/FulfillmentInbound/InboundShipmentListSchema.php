<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\FulfillmentInbound;

use Illuminate\Support\Collection;

class InboundShipmentListSchema extends Collection
{
    public function offsetGet($key): InboundShipmentInfoSchema
    {
        return parent::offsetGet($key);
    }
}
