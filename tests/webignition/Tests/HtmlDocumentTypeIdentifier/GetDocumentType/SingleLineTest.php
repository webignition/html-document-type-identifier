<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType;

class SingleLineTest extends GetDocumentTypeTest {    
    
    protected function getUnderTestDoctypeCollection() {
        return $this->generator->getAllKnown();
    }
}