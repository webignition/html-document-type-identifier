<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\DoctypePrefixCase;

class LowercasePrefixTest extends DoctypePrefixCaseTest {
    
    protected function getDoctypePrefixReplacement() {
        return 'doctype';
    }
    
}