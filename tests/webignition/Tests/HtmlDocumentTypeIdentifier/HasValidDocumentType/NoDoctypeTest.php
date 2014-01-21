<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasValidDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

class NoDoctypeTest extends BaseTest {
    
    public function testDocumentWithNoDoctypeHasNoValidDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype.html'));
        $this->assertFalse($this->getIdentifier()->hasValidDocumentType());
    } 
    
    public function testNoDocumentHasNoValidDoctype() {
        $this->assertFalse($this->getIdentifier()->hasValidDocumentType());
    }
    
    public function testDocumentWithNoDoctypeWithDefaultDoctypeInMarkupHasNoValidDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype-with-default-doctype-in-markup.html'));
        $this->assertFalse($this->getIdentifier()->hasValidDocumentType());        
    }
}