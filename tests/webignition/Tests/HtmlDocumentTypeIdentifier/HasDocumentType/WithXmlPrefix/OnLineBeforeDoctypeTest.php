<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

class OnLineBeforeDoctypeTest extends HasDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
    
    protected function getFixtureContent() {
        return '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . parent::getFixtureContent();
    }    
}