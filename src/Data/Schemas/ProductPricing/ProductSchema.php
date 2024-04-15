<?php

namespace Jasara\AmznSPA\Data\Schemas\ProductPricing;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class ProductSchema extends DataTransferObject
{
    public IdentifierTypeSchema $identifiers;

    public ?array $attribute_sets;

    public ?array $relationships;

    public ?CompetitivePricingTypeSchema $competitive_pricing;

    public ?SalesRankListSchema $sales_rankings;

    #[CastWith(ArrayCaster::class, itemType: OfferSchema::class)]
    public ?OffersListSchema $offers;
}
