<?php

/**
 *  @author akashic seer <akashicseer@gmail.com>
 */

namespace Html;


class ListTag
{
    public static function getListItem(string $text, array $attributes = array())
    {
        $tag = 'li';
        $string = HtmlElement::getOpenTag($tag, $attributes);
        $string .= $text;
        $string .= HtmlElement::getClosingTag($tag);
        return $string;
    }
}