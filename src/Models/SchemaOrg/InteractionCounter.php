<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class InteractionCounter extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The WebSite or SoftwareApplication where the interactions took place.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite
     */
    protected $interactionService;

    /**
     * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
     *
     *
     * @var int|null
     */
    protected $userInteractionCount;

    /**
     * The Action representing the type of interaction. For up votes, +1s, etc. use <a class="localLink" href="https://schema.org/LikeAction">LikeAction</a>. For down votes use <a class="localLink" href="https://schema.org/DislikeAction">DislikeAction</a>. Otherwise, use the most specific Action.
     *
     *
     * @var Action
     */
    protected $interactionType;

    /**
     * @return \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite
     */
    public function getInteractionService()
    {
        return $this->interactionService;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\SoftwareApplication|\OpenActive\Models\SchemaOrg\WebSite $interactionService
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setInteractionService($interactionService)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\SoftwareApplication",
            "\OpenActive\Models\SchemaOrg\WebSite",
        );

        $interactionService = self::checkTypes($interactionService, $types);

        $this->interactionService = $interactionService;
    }

    /**
     * @return int|null
     */
    public function getUserInteractionCount()
    {
        return $this->userInteractionCount;
    }

    /**
     * @param int|null $userInteractionCount
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setUserInteractionCount($userInteractionCount)
    {
        $types = array(
            "int",
            "null",
        );

        $userInteractionCount = self::checkTypes($userInteractionCount, $types);

        $this->userInteractionCount = $userInteractionCount;
    }

    /**
     * @return Action
     */
    public function getInteractionType()
    {
        return $this->interactionType;
    }

    /**
     * @param Action $interactionType
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setInteractionType($interactionType)
    {
        $types = array(
            "Action",
        );

        $interactionType = self::checkTypes($interactionType, $types);

        $this->interactionType = $interactionType;
    }

}
