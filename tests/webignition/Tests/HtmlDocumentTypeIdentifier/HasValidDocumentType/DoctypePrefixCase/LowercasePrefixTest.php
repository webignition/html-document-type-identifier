<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\DoctypePrefixCase;

class LowercasePrefixTest extends DoctypePrefixCaseTest {
    
    protected function getDoctypePrefixReplacement() {
        return 'doctype';
    }
    
}