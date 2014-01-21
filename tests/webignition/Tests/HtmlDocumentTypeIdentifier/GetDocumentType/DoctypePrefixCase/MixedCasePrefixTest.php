<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\DoctypePrefixCase;

class MixedCasePrefixTest extends DoctypePrefixCaseTest {   
    
    protected function getDoctypePrefixReplacement() {
        return 'DocTYpe';
    }
    
}