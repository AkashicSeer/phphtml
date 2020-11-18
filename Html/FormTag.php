<?php

namespace App\Html;

class FormTag
{

    /**
     * If you pass an empty array the following defaults will be used
     * accept-charset="UTF-8" action="#" name="default-form" id="default-form" enctype="multipart/form-data"
     * if you fail to supply a value for any of those keys those values will be used
     * @param array $attributes
     * @return string
     */
    public static function getFormOpenTag(array $attributes): string
    {
        $acceptCharset = FormTagAttributes::ACCEPT_CHARSET;
        $action = FormTagAttributes::ACTION_ATTRIBUTE;
        $encType = FormTagAttributes::ENCTYPE_ATTRIBUTE;
        $encTypeDefault = FormEncTypes::MULTIPART;
        $id = FormTagAttributes::ID_ATTRIBUTE;
        $name = FormTagAttributes::NAME_ATTRIBUTE;
        $idNameDefault = 'default-form';

        //if there is no value for accept-charset add it this is very important
        if (empty($attributes[$acceptCharset])) {
            $attributes[$acceptCharset] = 'UTF-8';
        }

        //if there is no action use # to self process
        if (empty($attributes[$action])) {
            $attributes[$action] = '#';
        }

        //if there is no value for name add the default
        if (empty($attributes[$name])) {
            $attributes[$name] = $idNameDefault;
        } else {
            //if there was a value for name set $idNameDefault to the value
            $idNameDefault = $attributes[$name];
        }

        //if there is no value for id then add one
        if (empty($attributes[$id])) {
            $attributes[$id] = $idNameDefault;
        }

        //if there is no value for enctype then add one
        if (empty($attributes[$encType])) {
            $attributes[$encType] = $encTypeDefault;
        }
        return HtmlElement::getOpenTag('form', $attributes);

    }

    public static function getFormCloseTag()
    {
        return HtmlElement::getClosingTag('form');
    }

}