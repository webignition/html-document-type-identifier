<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

class NoDoctypeTest extends BaseTest {
    
    public function testDocumentWithNoDoctypeHasNoDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype.html'));
        $this->assertFalse($this->getIdentifier()->hasDocumentType());
    } 
    
    public function testNoDocumentHasNoDoctype() {
        $this->assertFalse($this->getIdentifier()->hasDocumentType());
    }
    
    public function testDocumentWithNoDoctypeWithDefaultDoctypeInMarkupHasNoDoctype() {
        $this->getIdentifier()->setHtml($this->getFixture('no-doctype-with-default-doctype-in-markup.html'));
        $this->assertFalse($this->getIdentifier()->hasDocumentType());        
    }
}