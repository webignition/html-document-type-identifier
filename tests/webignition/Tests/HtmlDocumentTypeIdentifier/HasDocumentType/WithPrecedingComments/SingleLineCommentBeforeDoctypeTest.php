<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType\HasDocumentTypeTest;

class MultilineCommentBeforeDoctype extends HasDocumentTypeTest {    
    
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