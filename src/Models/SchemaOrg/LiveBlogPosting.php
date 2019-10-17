<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class LiveBlogPosting extends \OpenActive\Models\SchemaOrg\BlogPosting
{
    /**
     * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
     *
     *
     * @var DateTime|null
     */
    protected $coverageStartTime;

    /**
     * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
     *
     *
     * @var DateTime|null
     */
    protected $coverageEndTime;

    /**
     * An update to the LiveBlog.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\BlogPosting
     */
    protected $liveBlogUpdate;

    /**
     * @return DateTime|null
     */
    public function getCoverageStartTime()
    {
        return $this->coverageStartTime;
    }

    /**
     * @param DateTime|null $coverageStartTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCoverageStartTime($coverageStartTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $coverageStartTime = self::checkTypes($coverageStartTime, $types);

        $this->coverageStartTime = $coverageStartTime;
    }

    /**
     * @return DateTime|null
     */
    public function getCoverageEndTime()
    {
        return $this->coverageEndTime;
    }

    /**
     * @param DateTime|null $coverageEndTime
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCoverageEndTime($coverageEndTime)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $coverageEndTime = self::checkTypes($coverageEndTime, $types);

        $this->coverageEndTime = $coverageEndTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\BlogPosting
     */
    public function getLiveBlogUpdate()
    {
        return $this->liveBlogUpdate;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\BlogPosting $liveBlogUpdate
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setLiveBlogUpdate($liveBlogUpdate)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\BlogPosting",
        );

        $liveBlogUpdate = self::checkTypes($liveBlogUpdate, $types);

        $this->liveBlogUpdate = $liveBlogUpdate;
    }

}
