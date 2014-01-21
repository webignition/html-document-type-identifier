<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\RootElementCase;

class UppercaseTest extends RootElementCaseTest {   
      
    protected function getRootElementReplacement() {
        return 'HTML';
    }
    
}