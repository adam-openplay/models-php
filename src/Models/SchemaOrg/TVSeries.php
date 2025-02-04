<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TVSeries extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TVSeries";
    }

    public static function fieldList() {
        $fields = [
            "actors" => "actors",
            "containsSeason" => "containsSeason",
            "numberOfSeasons" => "numberOfSeasons",
            "trailer" => "trailer",
            "episodes" => "episodes",
            "numberOfEpisodes" => "numberOfEpisodes",
            "countryOfOrigin" => "countryOfOrigin",
            "director" => "director",
            "productionCompany" => "productionCompany",
            "seasons" => "seasons",
            "season" => "season",
            "actor" => "actor",
            "episode" => "episode",
            "directors" => "directors",
            "musicBy" => "musicBy",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actors;

    /**
     * A season that is part of the media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $containsSeason;

    /**
     * The number of seasons in this series.
     *
     *
     * @var int|null
     */
    protected $numberOfSeasons;

    /**
     * The trailer of a movie or tv/radio series, season, episode, etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\VideoObject|string
     */
    protected $trailer;

    /**
     * An episode of a TV/radio series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode|string
     */
    protected $episodes;

    /**
     * The number of episodes in this season or series.
     *
     *
     * @var int|null
     */
    protected $numberOfEpisodes;

    /**
     * The country of origin of something, including products as well as creative  works such as movie and TV content.
     * 
     * In the case of TV and movie, this would be the country of the principle offices of the production company or individual responsible for the movie. For other kinds of [[CreativeWork]] it is difficult to provide fully general guidance, and properties such as [[contentLocation]] and [[locationCreated]] may be more applicable.
     * 
     * In the case of products, the country of origin of the product. The exact interpretation of this may vary by context and product type, and cannot be fully enumerated here.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Country|string
     */
    protected $countryOfOrigin;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $director;

    /**
     * The production company or studio responsible for the item e.g. series, video game, episode etc.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|string
     */
    protected $productionCompany;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $seasons;

    /**
     * A season in a media series.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    protected $season;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $actor;

    /**
     * An episode of a tv, radio or game media within a series or season.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Episode|string
     */
    protected $episode;

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|string
     */
    protected $directors;

    /**
     * The composer of the soundtrack.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    protected $musicBy;

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActors($actors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actors = self::checkTypes($actors, $types);

        $this->actors = $actors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getContainsSeason()
    {
        return $this->containsSeason;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $containsSeason
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setContainsSeason($containsSeason)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $containsSeason = self::checkTypes($containsSeason, $types);

        $this->containsSeason = $containsSeason;
    }

    /**
     * @return int|null
     */
    public function getNumberOfSeasons()
    {
        return $this->numberOfSeasons;
    }

    /**
     * @param int|null $numberOfSeasons
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfSeasons($numberOfSeasons)
    {
        $types = [
            "int",
            "null",
        ];

        $numberOfSeasons = self::checkTypes($numberOfSeasons, $types);

        $this->numberOfSeasons = $numberOfSeasons;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\VideoObject|string
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\VideoObject|string $trailer
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTrailer($trailer)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\VideoObject",
            "string",
        ];

        $trailer = self::checkTypes($trailer, $types);

        $this->trailer = $trailer;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode|string
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode|string $episodes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisodes($episodes)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
            "string",
        ];

        $episodes = self::checkTypes($episodes, $types);

        $this->episodes = $episodes;
    }

    /**
     * @return int|null
     */
    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    /**
     * @param int|null $numberOfEpisodes
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNumberOfEpisodes($numberOfEpisodes)
    {
        $types = [
            "int",
            "null",
        ];

        $numberOfEpisodes = self::checkTypes($numberOfEpisodes, $types);

        $this->numberOfEpisodes = $numberOfEpisodes;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Country|string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Country|string $countryOfOrigin
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Country",
            "string",
        ];

        $countryOfOrigin = self::checkTypes($countryOfOrigin, $types);

        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $director
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirector($director)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $director = self::checkTypes($director, $types);

        $this->director = $director;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|string
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|string $productionCompany
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setProductionCompany($productionCompany)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Organization",
            "string",
        ];

        $productionCompany = self::checkTypes($productionCompany, $types);

        $this->productionCompany = $productionCompany;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $seasons
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeasons($seasons)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $seasons = self::checkTypes($seasons, $types);

        $this->seasons = $seasons;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\CreativeWorkSeason|string $season
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSeason($season)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\CreativeWorkSeason",
            "string",
        ];

        $season = self::checkTypes($season, $types);

        $this->season = $season;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $actor
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setActor($actor)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $actor = self::checkTypes($actor, $types);

        $this->actor = $actor;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Episode|string
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Episode|string $episode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEpisode($episode)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Episode",
            "string",
        ];

        $episode = self::checkTypes($episode, $types);

        $this->episode = $episode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|string
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|string $directors
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDirectors($directors)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "string",
        ];

        $directors = self::checkTypes($directors, $types);

        $this->directors = $directors;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Person|\OpenActive\Models\SchemaOrg\MusicGroup|string $musicBy
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMusicBy($musicBy)
    {
        $types = [
            "\OpenActive\Models\SchemaOrg\Person",
            "\OpenActive\Models\SchemaOrg\MusicGroup",
            "string",
        ];

        $musicBy = self::checkTypes($musicBy, $types);

        $this->musicBy = $musicBy;
    }

}
