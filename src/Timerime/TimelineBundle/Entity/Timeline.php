<?php

namespace Timerime\TimelineBundle\Entity;

/**
 * Timerime\TimelineBundle\Entity\Timeline
 */
class Timeline
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var Timerime\TimelineBundle\Entity\TimelineItem
     */
    private $timeline_item;

    /**
     * @var Timerime\TimelineBundle\Entity\User
     */
    private $author;

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
     * Add timeline_item
     *
     * @param Timerime\TimelineBundle\Entity\TimelineItem $timelineItem
     */
    public function addTimelineItem(\Timerime\TimelineBundle\Entity\TimelineItem $timelineItem)
    {
        $this->timeline_item[] = $timelineItem;
    }

    /**
     * Get timeline_item
     *
     * @return Doctrine\Common\Collections\Collection $timelineItem
     */
    public function getTimelineItem()
    {
        return $this->timeline_item;
    }

    /**
     * Set author
     *
     * @param Timerime\TimelineBundle\Entity\User $author
     */
    public function setAuthor(\Timerime\TimelineBundle\Entity\User $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return Timerime\TimelineBundle\Entity\User $author
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @var Timerime\TimelineBundle\Entity\TimelineItem
     */
    private $timeline_items;

    /**
     * Add timeline_items
     *
     * @param Timerime\TimelineBundle\Entity\TimelineItem $timelineItems
     */
    public function addTimelineItems(\Timerime\TimelineBundle\Entity\TimelineItem $timelineItems)
    {
        $this->timeline_items[] = $timelineItems;
    }

    /**
     * Get timeline_items
     *
     * @return Doctrine\Common\Collections\Collection $timelineItems
     */
    public function getTimelineItems()
    {
        return $this->timeline_items;
    }
}