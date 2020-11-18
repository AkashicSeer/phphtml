<?php


namespace App\Html;

/**
 * Class ButtonTag: creates a button element
 * @package App\Html
 */
class ButtonTag
{

    /**
     * @param string $buttonText : text, image, a string whatever you want as the button
     * @param array $attributes :ButtonTagAttributes key => value array
     * @return string <button>Text<button/>
     */
    public static function getButtonTag(string $buttonText, array $attributes = array()): string
    {
        $element = 'button';
        $html = HtmlElement::getOpenTag($element, $attributes);
        $html .= $buttonText . HtmlElement::getClosingTag($element);
        return $html;

    }
}