<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\DoctypePrefixCase;

class MixedCasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DocTYpe';
    }
    
}