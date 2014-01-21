<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\DoctypePrefixCase;

class UppercasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DOCTYPE';
    }
}