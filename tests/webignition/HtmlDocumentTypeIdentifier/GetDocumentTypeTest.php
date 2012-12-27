<?php

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;

class GetDocumentTypeTest extends BaseTest {
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
    }       
    
    public function testHtml401Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401strict.html'));        
        $this->assertEquals('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">', $identifier->getDocumentTypeString());
    }
  
    public function testHtml401Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401transitional.html'));        
        $this->assertEquals('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">', $identifier->getDocumentTypeString());
    }    
    
    public function testHtml401Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html401frameset.html'));        
        $this->assertEquals('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">', $identifier->getDocumentTypeString());
    }     
    
    public function testXhtml10Strict() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10strict.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">', $identifier->getDocumentTypeString());
    }     
    
    public function testXhtml10Transitional() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10transitional.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">', $identifier->getDocumentTypeString());
    }       
    
    public function testXhtml10Frameset() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10frameset.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">', $identifier->getDocumentTypeString());
    }
    
    public function testXhtml11() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">', $identifier->getDocumentTypeString());
    }     
    
    public function testXhtml11Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml11basic.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">', $identifier->getDocumentTypeString());
    }      
    
    public function testHtml5() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html5.html'));        
        $this->assertEquals('<!DOCTYPE html>', $identifier->getDocumentTypeString());
    }      
    
    public function testHtml2() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html2.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN" "">', $identifier->getDocumentTypeString());
    }       
    
    public function testHtml32() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('html32.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN" "">', $identifier->getDocumentTypeString());
    }     
    
    
    public function testXml10Basic() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('xhtml10basic.html'));        
        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">', $identifier->getDocumentTypeString());
    }
    
    
    public function testNoDoctype() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('no-doctype.html'));
        $this->assertEquals('', $identifier->getDocumentTypeString());
    }    
    
    
    public function testWithNoDocument() {
        $identifier = new HtmlDocumentTypeIdentifier();
        $this->assertEquals('', $identifier->getDocumentTypeString());        
    }
    
    
    public function testWithBlankLinesBeforeDoctypeDeclaration() {
        $identifier = new HtmlDocumentTypeIdentifier();        
        $identifier->setHtml($this->getFixture('blank-lines-before-doctype.html'));
        $this->assertEquals('<!DOCTYPE html>', $identifier->getDocumentTypeString());        
    }
}