<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Bridge extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Bridge";
    }

}
