<?php

namespace App\Html;

/**
 * @copyright akashic seer <akashicseer@gmail.com>
 * created Mar 20, 2014 11:56:15 AM
 * Description of FieldsetTag : Wraps a legend element inside a fieldset element
 *                              https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
 */
class FieldsetTag
{
    /**
     * @param string $legendStr : the legend input label etc string, this must be built and
     *                            passed to this method first.
     * @param array $attributes : attributes for the fieldset tag/container
     * @return string
     */
    public static function getFieldsetTag(string $legendStr,
                                              array $attributes = array()): string
    {
        $element = 'fieldset';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $legendStr .  HtmlElement::getClosingTag($element);
        return $html;
    }

}
