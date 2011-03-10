<?php

namespace Timerime\TimelineBundle\Entity;

/**
 * Timerime\TimelineBundle\Entity\TimelineItem
 */
class TimelineItem
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $timelineId
     */
    private $timelineId;

    /**
     * @var string $authorId
     */
    private $authorId;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var string $startdate
     */
    private $startdate;

    /**
     * @var string $enddate
     */
    private $enddate;

    /**
     * @var Timerime\TimelineBundle\Entity\Timeline
     */
    private $timeline;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get timelineId
     *
     * @return integer $timelineId
     */
    public function getTimelineId()
    {
        return $this->timelineId;
    }

    /**
     * Set authorId
     *
     * @param string $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * Get authorId
     *
     * @return string $authorId
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set startdate
     *
     * @param string $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * Get startdate
     *
     * @return string $startdate
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param string $enddate
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    }

    /**
     * Get enddate
     *
     * @return string $enddate
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set timeline
     *
     * @param Timerime\TimelineBundle\Entity\Timeline $timeline
     */
    public function setTimeline(\Timerime\TimelineBundle\Entity\Timeline $timeline)
    {
        $this->timeline = $timeline;
    }

    /**
     * Get timeline
     *
     * @return Timerime\TimelineBundle\Entity\Timeline $timeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }
}