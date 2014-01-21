<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

class OnLineBeforeDoctypeTest extends HasValidDocumentTypeTest {    
    
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