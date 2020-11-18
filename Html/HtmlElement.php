<?php

namespace App\Html;
/**
 * Description of HtmlElement : this class creates HTML elements
 * Date Created : Apr 20, 2016 1:05:54 AM
 * @author akashic seer <akashicseer@gmail.com>
 */
class HtmlElement
{
    /**
     *
     * @param string $element : element type to create ie form, div, span input
     * @param array $attributes
     * @return string
     */
    public static function getOpenTag(string $element, array $attributes): string
    {
        return self::getOpenTagHtml($element, $attributes) . '>';
    }

    public static function getSelfClosingTag(string $element, array $attributes)
    {
        return self::getOpenTagHtml($element, $attributes) . '/>';
    }

    private static function isAutoClosing($element)
    {
        //these are the only elements that self close
        $elements = array(
            'area',
            'base',
            'br',
            'col',
            'embed',
            'hr',
            'img',
            'input',
            'link',
            'meta',
            'param',
            'source',
            'track',
            'wbr'
        );
        return array_key_exists($element, $elements);
    }

    private static function getOpenTagHtml(string $element, array $attributesArray)
    {
        $returnStr = '<' . $element . ' ';
        $booleans = array(
            'async',
            'autofocus',
            'autoplay',
            'checked',
            'contenteditable',
            'controls',
            'default',
            'defer',
            'disabled',
            'formNoValidate',
            'frameborder',
            'hidden',
            'ismap',
            'itemscope',
            'loop',
            'multiple',
            'muted',
            'nomodule',
            'novalidate',
            'open',
            'readonly',
            'required',
            'reversed',
            'scoped',
            'selected',
            'typemustmatch'
        );
        if (is_array($attributesArray)) {
            foreach ($attributesArray as $attribute => $value) {

                if (!empty($value)) {
                    //if the attribute is in the array above just add it no quotes

                    if (in_array($attribute, $booleans)) {
                        $returnStr .= $attribute . ' ';
                    } else {
                        $returnStr .= $attribute . '="' . $value . '" ';
                    }
                }
            }
        }
        return $returnStr;
    }

    public static function getClosingTag($element)
    {
        return '</' . $element . '>';
    }

}
