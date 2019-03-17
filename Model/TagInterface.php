<?php
/**
 * Created by PhpStorm.
 * User: inwebo
 * Date: 17/03/19
 * Time: 18:34
 */

namespace Inwebo\Bookmarks\Model;

interface TagInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return Tag
     */
    public function setName(string $name): Tag;
}