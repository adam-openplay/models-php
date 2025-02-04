<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class QuantitativeValue extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:QuantitativeValue";
    }

    public static function fieldList() {
        $fields = [
            "minValue" => "minValue",
            "unitText" => "unitText",
            "value" => "value",
            "unitCode" => "unitCode",
            "maxValue" => "maxValue",
            "additionalProperty" => "additionalProperty",
            "valueReference" => "valueReference",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The lower value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $minValue;

    /**
     * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
     * <a href='unitCode'>unitCode</a>.
     *
     *
     * @var string
     */
    protected $unitText;

    /**
     * The value of the quantitative value or property value node.\n\n* For [[QuantitativeValue]] and [[MonetaryAmount]], the recommended type for values is 'Number'.\n* For [[PropertyValue]], it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.\n* Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.\n* Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
     *
     *
     * @var bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    protected $value;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
     *
     *
     * @var string
     */
    protected $unitCode;

    /**
     * The upper value of some characteristic or property.
     *
     *
     * @var Number|null
     */
    protected $maxValue;

    /**
     * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.\n\nNote: Publishers should be aware that applications designed to use specific schema.org properties (e.g. https://schema.org/width, https://schema.org/color, https://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
     * 
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    protected $additionalProperty;

    /**
     * A secondary value that provides additional information on the original value, e.g. a reference temperature or a type of measurement.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|null
     */
    protected $valueReference;

    /**
     * @return Number|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * @param Number|null $minValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMinValue($minValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $minValue = self::checkTypes($minValue, $types);

        $this->minValue = $minValue;
    }

    /**
     * @return string
     */
    public function getUnitText()
    {
        return $this->unitText;
    }

    /**
     * @param string $unitText
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitText($unitText)
    {
        $types = [
            "string",
        ];

        $unitText = self::checkTypes($unitText, $types);

        $this->unitText = $unitText;
    }

    /**
     * @return bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool|string|Number|\OpenActive\Models\SchemaOrg\StructuredValue|null $value
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValue($value)
    {
        $types = [
            "bool",
            "string",
            "Number",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "null",
        ];

        $value = self::checkTypes($value, $types);

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * @param string $unitCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUnitCode($unitCode)
    {
        $types = [
            "string",
        ];

        $unitCode = self::checkTypes($unitCode, $types);

        $this->unitCode = $unitCode;
    }

    /**
     * @return Number|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * @param Number|null $maxValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMaxValue($maxValue)
    {
        $types = [
            "Number",
            "null",
        ];

        $maxValue = self::checkTypes($maxValue, $types);

        $this->maxValue = $maxValue;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|string
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|string $additionalProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "string",
        ];

        $additionalProperty = self::checkTypes($additionalProperty, $types);

        $this->additionalProperty = $additionalProperty;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\PropertyValue|\OpenActive\Models\SchemaOrg\StructuredValue|\OpenActive\Enums\SchemaOrg\QualitativeValue|\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration|\OpenActive\Models\SchemaOrg\QuantitativeValue|string|\OpenActive\Models\SchemaOrg\DefinedTerm|\OpenActive\Models\SchemaOrg\Enumeration|null $valueReference
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setValueReference($valueReference)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\PropertyValue",
            "\OpenActive\Models\SchemaOrg\StructuredValue",
            "\OpenActive\Enums\SchemaOrg\QualitativeValue",
            "\OpenActive\Enums\SchemaOrg\MeasurementTypeEnumeration",
            "\OpenActive\Models\SchemaOrg\QuantitativeValue",
            "string",
            "\OpenActive\Models\SchemaOrg\DefinedTerm",
            "\OpenActive\Models\SchemaOrg\Enumeration",
            "null",
        ];

        $valueReference = self::checkTypes($valueReference, $types);

        $this->valueReference = $valueReference;
    }

}
