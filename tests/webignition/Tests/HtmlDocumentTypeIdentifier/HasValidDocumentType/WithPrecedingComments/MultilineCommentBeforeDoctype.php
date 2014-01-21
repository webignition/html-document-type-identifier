<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\WithXmlPrefix;

use webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType\HasValidDocumentTypeTest;

class SingleLineCommentBeforeDoctypeTest extends HasValidDocumentTypeTest {    
    
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