<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\DoctypePrefixCase;

class MixedCasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DocTYpe';
    }
    
}