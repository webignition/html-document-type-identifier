<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier;

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;
use webignition\HtmlDocumentType\Generator;

class GetDocumentType extends BaseTest {
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
        
        $generator = new Generator();
        
        var_dump($generator->getAllKnown());
        exit();
        
    }       

//    
//    
//    public function testNoDoctype() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('no-doctype.html'));
//        $this->assertEquals('', $identifier->getDocumentTypeString());
//    }    
//    
//    
//    public function testWithNoDocument() {
//        $identifier = new HtmlDocumentTypeIdentifier();
//        $this->assertEquals('', $identifier->getDocumentTypeString());        
//    }
//    
//    
//    public function testWithBlankLinesBeforeDoctypeDeclaration() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('blank-lines-before-doctype.html'));
//        $this->assertEquals('<!DOCTYPE html>', $identifier->getDocumentTypeString());        
//    }
//    
//    public function testXhtmlWithXmlPrefix() {
//        $identifier = new HtmlDocumentTypeIdentifier();      
//        $identifier->setHtml($this->getFixture('xhtml10transitional-with-xml-prefix.html'));        
//        
//        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">', $identifier->getDocumentTypeString());            
//    }
//
//    
//    public function testHtml5WithPrecedingComment() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html5-with-preceding-comment.html'));        
//        $this->assertEquals('<!DOCTYPE html>', $identifier->getDocumentTypeString());
//    }  
//    
//      
//    
//    public function testHtml40TransitionalLackingUri() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html40transitional-lacking-uri.html'));        
//        $this->assertEquals('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">', $identifier->getDocumentTypeString());
//    }      
}