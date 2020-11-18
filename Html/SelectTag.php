<?php

namespace App\Html;
/**
 * @author  akashic seer <akashicseer@gmail.com>
 * created Mar 7, 2014 12:42:29 PM
 * Description of SelectTag :
 */
class SelectTag
{
    /**
     * @param string $optionsString : the options for the list as a html string
     * @param array $attributes :  key value associative array of attributes ed
     * @return string
     */
    public static function getSelectTag(string $optionsString, array $attributes): string
    {
        $element = 'select';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $optionsString . HtmlElement::getClosingTag($element);
        return $html;
    }

}

