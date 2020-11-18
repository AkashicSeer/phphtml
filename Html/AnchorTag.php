<?php


namespace App\Html;

/**
 * Class AnchorTag : creates HTML Anchor tag also known as a link
 * @package App\Html
 */
class AnchorTag
{

    public static function getAnchorTag(string $text, array $attributes = array()): string
    {
        $element = 'a';
        $string = HtmlElement::getOpenTag($element, $attributes);
        $string .= $text;
        $string .= HtmlElement::getClosingTag($element);
        return  $string;
    }
}