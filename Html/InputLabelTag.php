<?php

namespace Html;
/**
 * @author akashic seer <akashicseer@gmail.com>
 * created Mar 7, 2014 12:18:15 PM
 * Description of InputLabelTag : creates input and label for it for forms. you must create the input element first
 *                              : and supply text for the label
 */
class InputLabelTag
{

    /**
     * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
     * @param string $labelText : Required, the text for the label
     * @param string $inputElementStr : Required, the input html
     * @param string $labelPosition : accepts either "right", "left" or 'wrap" default is "right"
     *                            controls where the label will be shown compared to the input element
     *                             left will put the $inputElementStr above the label,
     *                              right will place $inputElementStr below the label,
     *                             wrap will wrap the input in a label the recommended way
     * @param array $attributes : A key value associative array of attributes where the key must be
     *                               MiscEnums_HtmlInputAttributes these are the attributes
     *                            for the label tag such as id or class etc. pass for in if the value for
     *                            labelPosition is not wrap
     * @return string: Returns the input elements from $inputElementStr either wrapped in a label element
     *                 or above or below ,aka left or right
     */
    public static function getLabelForInput(string $labelText,
                                            string $inputElementStr,
                                            string $labelPosition = 'wrap',
                                            array $attributes = array()): string
    {
        $element = 'label';
        $html = '';
        //put the input element outside the label
        if ($labelPosition === 'left') {
            $html .= $inputElementStr;
        }

        $html .= HtmlElement::getOpenTag($element, $attributes);
        $html .= $labelText;
        $labelClose = HtmlElement::getClosingTag($element);

        if ($labelPosition === 'wrap') {
            $html .= $inputElementStr . $labelClose;
        } else if ($labelPosition === 'right') {
            $html .= $labelClose . $inputElementStr;
        } else {
            $html .= $labelClose;
        }
        return $html;
    }

}
