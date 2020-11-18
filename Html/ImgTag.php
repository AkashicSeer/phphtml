<?php

namespace App\Html;
/**
 * @author akashic seer <akashicseer@gmail.com>
 * created Mar 7, 2014 1:30:52 PM
 * Description of ImgTag : creates an image tag.
 */
class ImgTag
{

    /**
     *
     * @param array $attributes : A key value associative array of attributes where the key must be
     *
     *                                HtmlInputAttributes::SRC_ATTRIBUTE is a Required key or else you
     *                                get back an empty string
     *
     * @return string: an image element <img>
     */
    public static function getImgTag(array $attributes)
    {
        $html = '';
        if (!empty($attributes[ImgTagAttributes::SRC_ATTRIBUTE])) {
            $html = HtmlElement::getSelfClosingTag('img', $attributes);
        }
        return $html;
    }

}
