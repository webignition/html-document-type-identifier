<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class SingleLineTest extends GetDocumentTypeTest {    
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
}