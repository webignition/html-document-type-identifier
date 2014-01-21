<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\DoctypePrefixCase;

class LowercasePrefixTest extends DoctypePrefixCaseTest {
    
    protected function getDoctypePrefixReplacement() {
        return 'doctype';
    }
    
}