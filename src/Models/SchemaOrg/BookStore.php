<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class BookStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:BookStore";
    }

}
