<?php

namespace JgeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Convocation
 */
class Convocation
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $coach;

    /**
     * @var int
     */
    private $categoryGroup;

    /**
     * @var ArrayCollection
     */
    private $players;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $gameTime;

    /**
     * @var string
     */
    private $meetingTime;

    /**
     * @var string
     */
    private $teamName;

    /**
     * @var string
     */
    private $gamePlace;

    /**
     * @var int
     */
    private $game;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coach
     *
     * @param integer $coach
     *
     * @return convocation
     */
    public function setCoach($coach)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return int
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set categoryGroup
     *
     * @param integer $categoryGroup
     *
     * @return convocation
     */
    public function setCategoryGroup($categoryGroup)
    {
        $this->categoryGroup = $categoryGroup;

        return $this;
    }

    /**
     * Get categoryGroup
     *
     * @return int
     */
    public function getCategoryGroup()
    {
        return $this->categoryGroup;
    }

    /**
     * Set players
     *
     * @param array $players
     *
     * @return convocation
     */
    public function setPlayers($players)
    {
        $this->players = $players;

        return $this;
    }

    /**
     * Get players
     *
     * @return arrayCollection
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return convocation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set gameTime
     *
     * @param string $gameTime
     *
     * @return convocation
     */
    public function setGameTime($gameTime)
    {
        $this->gameTime = $gameTime;

        return $this;
    }

    /**
     * Get gameTime
     *
     * @return string
     */
    public function getGameTime()
    {
        return $this->gameTime;
    }

    /**
     * Set meetingTime
     *
     * @param string $meetingTime
     *
     * @return convocation
     */
    public function setMeetingTime($meetingTime)
    {
        $this->meetingTime = $meetingTime;

        return $this;
    }

    /**
     * Get meetingTime
     *
     * @return string
     */
    public function getMeetingTime()
    {
        return $this->meetingTime;
    }

    /**
     * Set teamName
     *
     * @param string $teamName
     *
     * @return convocation
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set gamePlace
     *
     * @param string $gamePlace
     *
     * @return convocation
     */
    public function setGamePlace($gamePlace)
    {
        $this->gamePlace = $gamePlace;

        return $this;
    }

    /**
     * Get gamePlace
     *
     * @return string
     */
    public function getGamePlace()
    {
        return $this->gamePlace;
    }

    /**
     * Get game
     *
     * @return int
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * Set game
     *
     * @param int $game
     *
     * @return convocation
     */
    public function setGame($game)
    {
        $this->game = $game;

        return $this;
    }
}

