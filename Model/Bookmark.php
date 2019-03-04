<?php

namespace Inwebo\Bookmarks\Model;

class Bookmark
{
    /** @var string */
    protected $title;
    /** @var \Traversable|null */
    protected $tags;
    /** @var string|null */
    protected $content;
    /** @var \DateTime */
    protected $date;

    /**
     * @return null|string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Bookmark
     */
    public function setTitle(string $title): Bookmark
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return null|\Traversable
     */
    public function getTags(): ?\Traversable
    {
        return $this->tags;
    }

    /**
     * @param null|\Traversable $tags
     *
     * @return Bookmark
     */
    public function setTags(?\Traversable $tags): Bookmark
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param Tag $tag
     *
     * @return Bookmark
     */
    public function addTag(Tag $tag): Bookmark
    {
        if(!$this->tags->contains($tag)) {
            $this->tags->attach($tag);
        }

        return $this;
    }

    /**
     * @param Tag $tag
     *
     * @return Bookmark
     */
    public function removeTag(Tag $tag): Bookmark
    {
        if($this->tags->contains($tag)) {
            $this->tags->detach($tag);
        }

        return $this;
    }

    /**
     * @return null|string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param null|string $content
     *
     * @return Bookmark
     */
    public function setContent(?string $content): Bookmark
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return Bookmark
     */
    protected function setDate(\DateTime $date): Bookmark
    {
        $this->date = $date;

        return $this;
    }

    public function __construct()
    {
        $this->setDate(new \DateTime());
        $this->tags = new \SplObjectStorage();
    }
}