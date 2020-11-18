<?php

namespace App\Html;
/**
 * @author  akashic seer <akashicseer@gmail.com>
 * created Mar 20, 2014 11:26:20 AM
 * Description of LegendTag : creates a legend
 */
class LegendTag
{
    /**
     * @param string $legendText
     * @param array $attributes : A key value associative array of attributes where the key must be
     *                            HtmlInputAttributes::TYPE_ATTRIBUTE
     * @return string
     */
    public static function getLegendElement(string $legendText,
                                            array $attributes = array()): string
    {
        $element = 'legend';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $legendText;
        $html .= HtmlElement::getClosingTag($element);

        return $html;
    }

}
