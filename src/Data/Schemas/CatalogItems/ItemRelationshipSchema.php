<?php

namespace Jasara\AmznSPA\Data\Schemas\CatalogItems;

use Jasara\AmznSPA\Data\Casts\BackedEnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class ItemRelationshipSchema extends DataTransferObject
{
    public ?array $child_asins;

    public ?array $parent_asins;

    public ?ItemVariationThemeSchema $variation_theme;

    #[CastWith(BackedEnumCaster::class)]
    public ItemRelationshipType $type;
}
