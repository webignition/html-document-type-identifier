<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

class MultilineCommentBeforeDoctype extends HasValidDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
    
    protected function getFixtureContent() {
        return '<!--[if IE ]><![endif]-->' . "\n" . parent::getFixtureContent();
    }    
}