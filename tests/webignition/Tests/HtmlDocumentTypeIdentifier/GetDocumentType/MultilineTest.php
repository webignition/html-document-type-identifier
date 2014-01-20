<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType;

class MultiLineTest extends GetDocumentTypeTest {    
    
    protected function getUnderTestDoctypeCollection() {
        return $this->generator->multiline()->getAllKnown();
    } 

}