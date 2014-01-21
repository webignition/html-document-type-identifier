<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\DoctypePrefixCase;

class UppercasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DOCTYPE';
    }
}