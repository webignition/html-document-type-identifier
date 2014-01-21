<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType\GetDocumentTypeTest;

class SingleLineCommentBeforeDoctypeTest extends GetDocumentTypeTest {    
    
    public function setUp() {
        parent::setUp();
    }
    
    protected function getUnderTestDoctypeCollection() {
        return $this->getGenerator()->getAllKnown();
    }
    
    protected function getFixtureContent() {
        return "<!--[if IE ]>\nFoo\nBar!<![endif]-->" . "\n" . parent::getFixtureContent();                
    }    
}