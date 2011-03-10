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
}