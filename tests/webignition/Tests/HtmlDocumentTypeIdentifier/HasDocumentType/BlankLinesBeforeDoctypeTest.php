<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

class BlankLinesBeforeDoctypeTest extends HasDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
    
    protected function getFixtureContent() {
        return "\n\n\n" . parent::getFixtureContent();
    }    
}