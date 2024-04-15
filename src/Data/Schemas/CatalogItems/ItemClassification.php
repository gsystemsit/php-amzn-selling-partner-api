<?php

namespace Jasara\AmznSPA\Data\Schemas\CatalogItems;

enum ItemClassification: string
{
    case BASE_PRODUCT = 'BASE_PRODUCT';
    case OTHER = 'OTHER';
    case PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    case VARIATION_PARENT = 'VARIATION_PARENT';
}
