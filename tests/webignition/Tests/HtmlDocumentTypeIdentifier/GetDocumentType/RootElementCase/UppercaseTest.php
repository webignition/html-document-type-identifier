<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\RootElementCase;

class UppercaseTest extends RootElementCaseTest {   
      
    protected function getRootElementReplacement() {
        return 'HTML';
    }
    
}