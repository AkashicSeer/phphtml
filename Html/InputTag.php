<?php

namespace App\Html;
/**
 * @author akashic seer <akashicseer@gmail.com>
 * created Mar 6, 2014 10:55:38 PM
 * Description of InputTag : this creates an input element
 */
class InputTag
{
    /**
     * @param array $attributes : A key value associative array of attributes where the key must be
     *                               InputTagAttributes::TYPE_ATTRIBUTE and value is the value
     *                               The input type must be supplied and must be one of the
     *                               MiscEnums_HtmlInputTypes only
     *
     * @return string '<input type ="xxx" >'
     */
    public static function getInputTag(array $attributes):string
    {
        $html = '';
        if (!empty ($attributes[InputTagAttributes::TYPE_ATTRIBUTE])) {
            $html = HtmlElement::getSelfClosingTag('input', $attributes);
        }
        return $html;
    }

}

