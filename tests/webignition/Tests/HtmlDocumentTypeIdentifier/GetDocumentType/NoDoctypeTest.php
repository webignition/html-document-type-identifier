<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

class NoDoctypeTest extends BaseTest {
    
    public function testDocumentWithNoDoctypeHasEmptyDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype.html'));
        $this->assertEquals('', $this->getIdentifier()->getDocumentTypeString());
    } 
    
    public function testNoDocumentHasEmptyDoctype() {
        $this->assertEquals('', $this->getIdentifier()->getDocumentTypeString());
    }
    
    public function testDocumentWithNoDoctypeWithDefaultDoctypeInMarkupHasEmptyDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype-with-default-doctype-in-markup.html'));
        $this->assertEquals('', $this->getIdentifier()->getDocumentTypeString());        
    }
}