<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\RootElementCase;

class UppercaseTest extends RootElementCaseTest {   
      
    protected function getRootElementReplacement() {
        return 'HTML';
    }
    
}