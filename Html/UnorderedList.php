<?php
/**
 *  @author akashic seer <akashicseer@gmail.com>
 */

namespace App\Html;


class UnorderedList
{
    public static function getUnorderedList(string $elements, array $attributes = array())
    {
        $tag = 'ul';
        $string = HtmlElement::getOpenTag($tag, $attributes);
        $string .= $elements;
        $string .= HtmlElement::getClosingTag($tag);
        return $string;
    }
}