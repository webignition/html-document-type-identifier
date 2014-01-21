<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class MultilineCommentBeforeDoctype extends GetDocumentTypeTest {    
    
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