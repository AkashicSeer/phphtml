<?php

namespace Html;
/**
 * @author  akashic seer <akashicseer@gmail.com>
 * created Apr 23, 2014 8:28:43 PM
 * Description of TextareaTag :
 */
class TextareaTag
{
    /**
     * @param string $textAreaText
     * @param array $attributes
     * @return string
     */
    public static function getTextareaElement(string $textAreaText, array $attributes = array()): string
    {
        $element = 'textarea';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $textAreaText . HtmlElement::getClosingTag($element);
        return $html;
    }
}

