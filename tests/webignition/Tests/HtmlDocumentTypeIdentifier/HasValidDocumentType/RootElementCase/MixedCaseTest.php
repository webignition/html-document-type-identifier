<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\RootElementCase;

class MixedCaseTest extends RootElementCaseTest {   
    
    protected function getRootElementReplacement() {
        return 'hTMl';
    }
    
}