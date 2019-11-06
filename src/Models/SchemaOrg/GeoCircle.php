<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class GeoCircle extends \OpenActive\Models\SchemaOrg\GeoShape
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:GeoCircle";
    }

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
     *
     *
     * @var decimal|\OpenActive\Models\SchemaOrg\Distance|string|null
     */
    protected $geoRadius;

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
     *
     *
     * @var GeoCoordinates
     */
    protected $geoMidpoint;

    /**
     * @return decimal|\OpenActive\Models\SchemaOrg\Distance|string|null
     */
    public function getGeoRadius()
    {
        return $this->geoRadius;
    }

    /**
     * @param decimal|\OpenActive\Models\SchemaOrg\Distance|string|null $geoRadius
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoRadius($geoRadius)
    {
        $types = array(
            "decimal",
            "\OpenActive\Models\SchemaOrg\Distance",
            "string",
            "null",
        );

        $geoRadius = self::checkTypes($geoRadius, $types);

        $this->geoRadius = $geoRadius;
    }

    /**
     * @return GeoCoordinates
     */
    public function getGeoMidpoint()
    {
        return $this->geoMidpoint;
    }

    /**
     * @param GeoCoordinates $geoMidpoint
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setGeoMidpoint($geoMidpoint)
    {
        $types = array(
            "GeoCoordinates",
        );

        $geoMidpoint = self::checkTypes($geoMidpoint, $types);

        $this->geoMidpoint = $geoMidpoint;
    }

}
