<?php

namespace App\Html;
/**
 * @author  akashic seer <akashicseer@gmail.com>
 * created Mar 7, 2014 12:14:22 PM
 * Description of OptionTag :
 */
class OptionTag
{

    /**
     * @param string $optionText : the text for the option
     * @param array $attributes : A key value associative array of attributes
     *                            such as class, id, selected, checked etc
     *
     * @return string '<option>$optionText</option>'
     */
    public static function getOptionElement(string $optionText, array $attributes = array())
    {
        $element = 'option';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $optionText . HtmlElement::getClosingTag($element);
        return $html;
    }

}

