<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class VoteAction extends \OpenActive\Models\SchemaOrg\ChooseAction
{
    /**
     * A sub property of object. The candidate subject of this action.
     *
     *
     * @var Person
     */
    protected $candidate;

    /**
     * @return Person
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param Person $candidate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCandidate($candidate)
    {
        $types = array(
            "Person",
        );

        $candidate = self::checkTypes($candidate, $types);

        $this->candidate = $candidate;
    }

}
