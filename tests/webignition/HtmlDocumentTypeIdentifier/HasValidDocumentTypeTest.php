<?php

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;

class HasValidDocumentTypeTest extends BaseTest {
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
    }       
    
    public function testHtml401Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401strict.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }
  
    public function testHtml401Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401transitional.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }    
    
    public function testHtml401Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401frameset.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }     
    
    public function testXhtml10Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10strict.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }     
    
    public function testXhtml10Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10transitional.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }       
    
    public function testXhtml10Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10frameset.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }
    
    public function testXhtml11() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }     
    
    public function testXhtml11Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11basic.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }      
    
    public function testHtml5() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html5.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }      
    
    public function testHtml2() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html2.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }       
    
    public function testHtml32() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html32.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    }    
    
    public function testXhml10Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10basic.html'));        
        $this->assertTrue($identifier->hasValidDocumentType());
    } 
    
    public function testInvalidXhtml10Xhtml11Mixup() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('invalid-xhtml10-xhtml11-mixup.html'));        
        $this->assertFalse($identifier->hasValidDocumentType());        
    }
}