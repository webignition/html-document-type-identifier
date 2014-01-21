<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\RootElementCase;

class LowercaseTest extends RootElementCaseTest {   

    protected function getRootElementReplacement() {
        return 'html';
    }
    
}