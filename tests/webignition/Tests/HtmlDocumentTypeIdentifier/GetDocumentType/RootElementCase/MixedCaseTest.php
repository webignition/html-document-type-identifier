<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\RootElementCase;

class MixedCaseTest extends RootElementCaseTest {   
    
    protected function getRootElementReplacement() {
        return 'hTMl';
    }
    
}