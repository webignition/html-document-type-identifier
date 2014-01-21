<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

class BlankLinesBeforeDoctypeTest extends HasValidDocumentTypeTest {    
    
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