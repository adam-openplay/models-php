<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Zoo extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Zoo";
    }

}
