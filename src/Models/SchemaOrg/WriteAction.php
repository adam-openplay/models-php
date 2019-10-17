<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class WriteAction extends \OpenActive\Models\SchemaOrg\CreateAction
{
    /**
     * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="https://schema.org/availableLanguage">availableLanguage</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language|string
     */
    protected $inLanguage;

    /**
     * A sub property of instrument. The language used on this action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Language
     */
    protected $language;

    /**
     * @return \OpenActive\Models\SchemaOrg\Language|string
     */
    public function getInLanguage()
    {
        return $this->inLanguage;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language|string $inLanguage
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setInLanguage($inLanguage)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
            "string",
        );

        $inLanguage = self::checkTypes($inLanguage, $types);

        $this->inLanguage = $inLanguage;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Language $language
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLanguage($language)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Language",
        );

        $language = self::checkTypes($language, $types);

        $this->language = $language;
    }

}
