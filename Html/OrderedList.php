<?php

/**
 *  @author akashic seer <akashicseer@gmail.com>
 */
namespace App\Html;


class OrderedList
{

    /**
     * @param string $elements : string of <li> list elements
     * @param array $attributes : array of attributes for the ordered list tag
     * @return string : The $elements enclosed in an <ol> element list
     */
    public static function getOrderedList(string $elements, array $attributes = array())
    {
        $tag = 'ol';
        $string = HtmlElement::getOpenTag($tag, $attributes);
        $string .= $elements;
        $string .= HtmlElement::getClosingTag($tag);
        return $string;
    }
}