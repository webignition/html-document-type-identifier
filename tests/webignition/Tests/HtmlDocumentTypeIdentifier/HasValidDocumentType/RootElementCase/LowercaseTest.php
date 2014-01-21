<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\RootElementCase;

class LowercaseTest extends RootElementCaseTest {   

    protected function getRootElementReplacement() {
        return 'html';
    }
    
}