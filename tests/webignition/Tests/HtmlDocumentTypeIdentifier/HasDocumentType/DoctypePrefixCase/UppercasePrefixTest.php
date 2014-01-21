<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\DoctypePrefixCase;

class UppercasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DOCTYPE';
    }
}