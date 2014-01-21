<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class OnDoctypeLineTest extends GetDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
    
    protected function getFixtureContent() {
        return '<?xml version="1.0" encoding="UTF-8"?>' . parent::getFixtureContent();
    }    
}