<?php
namespace Html;

/**
 * Description of FormHtmlAttributes : this class lists form specific attributes
 * Forms also have HtmlEnums_GlobalHtmlAttributes global attributes 
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 * Date Created : Apr 18, 2016 2:52:26 AM
 * @copyright sogizmo.com
 * @author akashic seer <akashicseer@gmail.com>
 * This extends GlobalHtmlAttributes because form tags can also accept
 * the global attributes but no the other way around. It is for convenience in form classes
 */
class FormTagAttributes extends GlobalHtmlAttributes
{
    const ACCEPT_CHARSET = 'accept-charset';
    const ACTION_ATTRIBUTE = 'action';
    const AUTOCOMPLETE = 'autocomplete';
    const ENCTYPE_ATTRIBUTE = 'enctype';
    const METHOD_ATTRIBUTE = 'method';
    const NAME_ATTRIBUTE = 'name';
    const NON_VALIDATE = 'nonvalidate';
    const TARGET_ATTRIBUTE = 'target';
}
