<?php
namespace Html;
use Html\GlobalHtmlAttributes;
$linkText = 'Hello World';
$attributes = array(
     GlobalHtmlAttributes::ID_ATTRIBUTE => 'anyIdYouWant',
    GlobalHtmlAttributes::class => 'aClassName'
);

$linkHtml = AnchorTag::getAnchorTag($linkText, $attributes);

