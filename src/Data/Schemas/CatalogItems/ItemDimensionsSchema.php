<?php

namespace Jasara\AmznSPA\Data\Schemas\CatalogItems;

use Spatie\DataTransferObject\DataTransferObject;

class ItemDimensionsSchema extends DataTransferObject
{
    public ?ItemLengthDimensionSchema $height;

    public ?ItemLengthDimensionSchema $length;

    public ?ItemLengthDimensionSchema $width;

    public ?ItemMassDimensionSchema $weight;
}
