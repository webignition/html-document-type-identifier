<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier;

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;

class HasDocumentTypeTest extends BaseTest {
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
    }       
    
    public function testHtml401Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401strict.html'));
        $this->assertTrue($identifier->hasDocumentType());
        
        $identifier->setHtml($this->getFixture('html401strict-single-line-doctype.html'));
        $this->assertTrue($identifier->hasDocumentType());        
        
        $identifier->setHtml($this->getFixture('html401strict-lowercase.html'));
        $this->assertTrue($identifier->hasDocumentType());         
    }
  
    public function testHtml401Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401transitional.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
        
        $identifier->setHtml($this->getFixture('html401transitional-lowercase.html'));        
        $this->assertTrue($identifier->hasDocumentType());         
    }    
    
    public function testHtml401Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401frameset.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }     
    
    public function testXhtml10Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10strict.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }     
    
    public function testXhtml10Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10transitional.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }       
    
    public function testXhtml10Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10frameset.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }
    
    public function testXhtml11() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }     
    
    public function testXhtml11Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11basic.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }      
    
    public function testHtml5() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html5.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
        
        $identifier->setHtml($this->getFixture('html5-lowercase.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
        
        $identifier->setHtml($this->getFixture('html5-mixedcase.html'));        
        $this->assertTrue($identifier->hasDocumentType());
        
        $identifier->setHtml($this->getFixture('html5-with-utf8-bom.html'));        
        $this->assertTrue($identifier->hasDocumentType());         
    }      
    
    public function testHtml2() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html2.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }       
    
    public function testHtml32() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html32.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }     
    
    
    public function testXml10Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10basic.html'));        
        $this->assertTrue($identifier->hasDocumentType()); 
    }
    
    
    public function testNoDoctype() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('no-doctype.html'));                
        $this->assertFalse($identifier->hasDocumentType()); 
    }    
    
    public function testWithNoDocument() {
        $identifier = new HtmlDocumentTypeIdentifier();
        $this->assertFalse($identifier->hasDocumentType()); 
    }   
    
    public function testWithBlankLinesBeforeDoctypeDeclaration() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('blank-lines-before-doctype.html'));
        $this->assertTrue($identifier->hasDocumentType());
    }    
    
    public function testXhtmlWithXmlPrefix() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10transitional-with-xml-prefix.html'));
        
        $this->assertTrue($identifier->hasDocumentType());
    }  
    
    public function testXhtmlRfda() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtmlrdfa.html'));
        
        $this->assertTrue($identifier->hasDocumentType());
    }    
}