<?php

namespace Jasara\AmznSPA\DataTransferObjects\Schemas\Reports;

use Illuminate\Support\Collection;

class ReportScheduleListSchema extends Collection
{
    public function offsetGet($key): ReportScheduleSchema
    {
        return parent::offsetGet($key);
    }
}
