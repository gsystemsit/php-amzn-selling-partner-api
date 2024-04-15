<?php

namespace Jasara\AmznSPA\Data\Schemas\ProductPricing;

use Spatie\DataTransferObject\DataTransferObject;

class AsinIdentifierSchema extends DataTransferObject
{
    public string $marketplace_id;

    public string $asin;
}
