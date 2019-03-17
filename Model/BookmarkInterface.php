<?php

namespace Inwebo\Bookmarks\Model;

interface BookmarkInterface
{
    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     *
     * @return Bookmark
     */
    public function setTitle(string $title): Bookmark;

    /**
     * @return null|\Traversable
     */
    public function getTags(): ?\Traversable;

    /**
     * @param null|\Traversable $tags
     *
     * @return Bookmark
     */
    public function setTags(?\Traversable $tags): Bookmark;

    /**
     * @param Tag $tag
     *
     * @return Bookmark
     */
    public function addTag(Tag $tag): Bookmark;

    /**
     * @param Tag $tag
     *
     * @return Bookmark
     */
    public function removeTag(Tag $tag): Bookmark;

    /**
     * @return null|string
     */
    public function getContent(): ?string;

    /**
     * @param null|string $content
     *
     * @return Bookmark
     */
    public function setContent(?string $content): Bookmark;

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime;
}