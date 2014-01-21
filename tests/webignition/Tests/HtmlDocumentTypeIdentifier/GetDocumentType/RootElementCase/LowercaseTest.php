<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\RootElementCase;

class LowercaseTest extends RootElementCaseTest {   

    protected function getRootElementReplacement() {
        return 'html';
    }
    
}