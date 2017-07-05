<?php

namespace JgeBundle\Entity;

/**
 * Game
 */
class Game
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $convocation;

    /**
     * @var string
     */
    private $competitionName;

    /**
     * @var string
     */
    private $competitionType;

    /**
     * @var bool
     */
    private $homeAwayGame;

    /**
     * @var string
     */
    private $opponent;

    /**
     * @var string
     */
    private $score;

    /**
     * @var string
     */
    private $comment;


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
     * Set convocation
     *
     * @param integer $convocation
     *
     * @return game
     */
    public function setConvocation($convocation)
    {
        $this->convocation = $convocation;

        return $this;
    }

    /**
     * Get convocation
     *
     * @return int
     */
    public function getConvocation()
    {
        return $this->convocation;
    }

    /**
     * Set competitionName
     *
     * @param string $competitionName
     *
     * @return game
     */
    public function setCompetitionName($competitionName)
    {
        $this->competitionName = $competitionName;

        return $this;
    }

    /**
     * Get competitionName
     *
     * @return string
     */
    public function getCompetitionName()
    {
        return $this->competitionName;
    }

    /**
     * Set competitionType
     *
     * @param string $competitionType
     *
     * @return game
     */
    public function setCompetitionType($competitionType)
    {
        $this->competitionType = $competitionType;

        return $this;
    }

    /**
     * Get competitionType
     *
     * @return string
     */
    public function getCompetitionType()
    {
        return $this->competitionType;
    }

    /**
     * Set homeAwayGame
     *
     * @param boolean $homeAwayGame
     *
     * @return game
     */
    public function setHomeAwayGame($homeAwayGame)
    {
        $this->homeAwayGame = $homeAwayGame;

        return $this;
    }

    /**
     * Get homeAwayGame
     *
     * @return bool
     */
    public function getHomeAwayGame()
    {
        return $this->homeAwayGame;
    }

    /**
     * Set opponent
     *
     * @param string $opponent
     *
     * @return game
     */
    public function setOpponent($opponent)
    {
        $this->opponent = $opponent;

        return $this;
    }

    /**
     * Get opponent
     *
     * @return string
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return game
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return game
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

