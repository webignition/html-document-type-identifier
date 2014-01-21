<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\RootElementCase;

class MixedCaseTest extends RootElementCaseTest {   
    
    protected function getRootElementReplacement() {
        return 'hTMl';
    }
    
}