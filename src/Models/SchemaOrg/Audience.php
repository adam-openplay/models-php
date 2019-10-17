<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Audience extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
     *
     *
     * @var string
     */
    protected $audienceType;

    /**
     * The geographic area associated with the audience.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    protected $geographicArea;

    /**
     * @return string
     */
    public function getAudienceType()
    {
        return $this->audienceType;
    }

    /**
     * @param string $audienceType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setAudienceType($audienceType)
    {
        $types = array(
            "string",
        );

        $audienceType = self::checkTypes($audienceType, $types);

        $this->audienceType = $audienceType;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\AdministrativeArea
     */
    public function getGeographicArea()
    {
        return $this->geographicArea;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\AdministrativeArea $geographicArea
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setGeographicArea($geographicArea)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\AdministrativeArea",
        );

        $geographicArea = self::checkTypes($geographicArea, $types);

        $this->geographicArea = $geographicArea;
    }

}
