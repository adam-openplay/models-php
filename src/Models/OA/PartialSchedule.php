<?php

namespace OpenActive\Models\OA;

/**
 * This type is derived from [Schedule](https://pending.schema.org/Schedule), which means that any of this type's properties within schema.org may also be used. Note however the properties on this page must be used in preference if a relevant property is available.
 *
 */
class PartialSchedule extends \OpenActive\Models\OA\Schedule
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "PartialSchedule";
    }

}
