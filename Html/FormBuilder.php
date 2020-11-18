<?php

/**
 *  @author akashic seer <akashicseer@gmail.com>
 */
namespace App\Html;

/**
 * Class FormBuilder : The most absolute basic form creating class you will ever see.
 * Add each element in the form to a div, span label group etc.
 * @package App\Html
 */
class FormBuilder
{

    private $formStr;

    /**
     * FormBuilder constructor.
     * @param array $attributes : attributes for the actual form itself
     */
    public function __construct( array $attributes)
    {
        $this->formStr = HtmlElement::getOpenTag('form', $attributes);
    }

    /**
     * This strictly adds the content to a div container with attributes you supply
     * @param string $elementString
     * @param array $attributes
     */
    public function addWithDivContainer(string $elementString,
                                        array $attributes = array())
    {
        $this->formStr .= $this->getContainerOpenTag($attributes);
        $this->formStr .= $elementString;
        $this->formStr .= $this->getContainerClosingTag();

    }

    /**
     * @param string $elementString
     * @param string $container : specify the container type, span, div, label etc.
     * @param array $containerAttr
     */
    public function addWithContainer(string $elementString, string $container,
                                     array $containerAttr = array())
    {
        $this->formStr .= HtmlElement::getOpenTag($container, $containerAttr);
        $this->formStr .= $elementString;
        $this->formStr .= HtmlElement::getClosingTag($container);
    }

    /**
     * for when you just want to add content without any form of container
     * @param string $elementString
     */
    public function addWithoutContainer(string $elementString)
    {
        $this->formStr .= $elementString;
    }

    /**
     * Call the other methods to build the form and this one to get the HTML
     * @return string
     */
    public function getForm()
    {
        return $this->formStr . HtmlElement::getClosingTag('form');
    }

    private function getContainerOpenTag(array $attributes)
    {
        return HtmlElement::getOpenTag('div', $attributes);
    }

    private function getContainerClosingTag()
    {
        return HtmlElement::getClosingTag('div');
    }
}