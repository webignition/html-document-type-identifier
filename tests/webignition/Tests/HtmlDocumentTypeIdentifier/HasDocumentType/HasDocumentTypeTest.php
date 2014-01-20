<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\HasDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;
use webignition\HtmlDocumentType\Generator;

abstract class HasDocumentTypeTest extends BaseTest {
    
    private $generator;
    private $identifier;
        
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
        
        $this->generator = new Generator();
        $underTestDoctypeCollection = $this->getKeyNormalisedDoctypeCollection($this->getUnderTestDoctypeCollection());
        
        $dataKey = $this->getDataKey();

        $this->identifier = new HtmlDocumentTypeIdentifier();        
        $this->identifier->setHtml($this->generateFixtureFromTemplate($dataKey, $underTestDoctypeCollection[$dataKey]));      
    }
    
    /**
     * 
     * @return \webignition\HtmlDocumentType\Generator
     */
    protected function getGenerator() {
        return $this->generator;
    }
    
    /**
     * 
     * @return \webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier
     */
    protected function getIdentifier() {
        return $this->identifier;
    }
    
    abstract protected function getUnderTestDoctypeCollection();    
    

    public function testHtml_2() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }    
    
    public function testHtml_2_Alternative() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    } 
    
    public function testHtml_32() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_32_Alternative1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_32_Alternative2() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_4_Strict() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
   
    public function testHtml_4_Transitional() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_4_Frameset() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_401_Strict() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function tsetHtml_401_Transitional() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_401_Frameset() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_5() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_5_Legacy_Compat() {
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_1_Strict() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }        
    
    public function testXhtml_1_Transitional() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_1_Frameset() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }
    
    public function testXhtml_Basic_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Basic_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Print_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Mobile_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Mobile_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Mobile_12() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Rdfa_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Rdfa_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    } 
    
    public function testXhtml_Aria_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testXhtml_Aria_1_Alternative() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }      
    
    public function testHtml_Aria_401() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_Rdfa_401_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   

    public function testHtml_rdfa_401_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_Rdfalite_401_11() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }   
    
    public function testHtml_Iso15445_1() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }     

    public function testHtml_Iso15445_1_Alternative() {        
        $this->assertTrue($this->getIdentifier()->hasDocumentType());
    }      
    
    
//    public function testHtml_2() { 
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }   
//    
//    public function testHtml_32() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }
//    
//    public function testHtml_4_Strict() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testHtml_4_Transitional() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testHtml_4_Frameset() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testHtml_401_Strict() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }
//  
//    public function testHtml_401_Transitional() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testHtml_401_Frameset() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//  
//    public function testHtml_5() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    } 
//    
//    public function testXhtml_1_Strict() {        
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }     
//    
//    public function testXhtml_1_Transitional() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }       
//    
//    public function testXhtml_1_Frameset() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }
//    
//    public function testXhtml_1_Basic() {        
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testXhtml_11() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());      
//    }     
//    
//    public function testXhtml_11_Basic() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }          
//
//    public function testXhtmlrdfa_1() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }    
//    
//    public function testXhtmlrdfa_11() {
//        $this->assertTrue($this->getIdentifier()->hasDocumentType());
//    }     
    
    
//    public function testHtml401Strict() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html-401-strict.html'));
//        $this->assertTrue($identifier->hasDocumentType());
//        
////        $identifier->setHtml($this->getFixture('html401strict-single-line-doctype.html'));
////        $this->assertTrue($identifier->hasDocumentType());        
////        
////        $identifier->setHtml($this->getFixture('html401strict-lowercase.html'));
////        $this->assertTrue($identifier->hasDocumentType());         
//    }
  
//    public function testHtml401Transitional() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html401transitional.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//        
//        $identifier->setHtml($this->getFixture('html401transitional-lowercase.html'));        
//        $this->assertTrue($identifier->hasDocumentType());         
//    }    
//    
//    public function testHtml401Frameset() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html401frameset.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }     
//    
//    public function testXhtml10Strict() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml10strict.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }     
//    
//    public function testXhtml10Transitional() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml10transitional.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }       
//    
//    public function testXhtml10Frameset() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml10frameset.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }
//    
//    public function testXhtml11() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml11.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }     
//    
//    public function testXhtml11Basic() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml11basic.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }      
//    
//    public function testHtml5() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html5.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//        
//        $identifier->setHtml($this->getFixture('html5-lowercase.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//        
//        $identifier->setHtml($this->getFixture('html5-mixedcase.html'));        
//        $this->assertTrue($identifier->hasDocumentType());
//        
//        $identifier->setHtml($this->getFixture('html5-with-utf8-bom.html'));        
//        $this->assertTrue($identifier->hasDocumentType());         
//    }      
//    
//    public function testHtml2() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html2.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }       
//    
//    public function testHtml32() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html32.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }     
//    
//    
//    public function testXml10Basic() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml10basic.html'));        
//        $this->assertTrue($identifier->hasDocumentType()); 
//    }
//    
//    
//    public function testNoDoctype() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('no-doctype.html'));                
//        $this->assertFalse($identifier->hasDocumentType()); 
//    }    
//    
//    public function testWithNoDocument() {
//        $identifier = new HtmlDocumentTypeIdentifier();
//        $this->assertFalse($identifier->hasDocumentType()); 
//    }   
//    
//    public function testWithBlankLinesBeforeDoctypeDeclaration() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('blank-lines-before-doctype.html'));
//        $this->assertTrue($identifier->hasDocumentType());
//    }    
//    
//    public function testXhtmlWithXmlPrefix() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtml10transitional-with-xml-prefix.html'));
//        
//        $this->assertTrue($identifier->hasDocumentType());
//    }  
//    
//    public function testXhtmlRfda() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('xhtmlrdfa.html'));
//        
//        $this->assertTrue($identifier->hasDocumentType());
//    }      
//    
//    public function testHtml5WithPrecedingComment() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html5-with-preceding-comment.html'));        
//        $this->assertTrue($identifier->hasDocumentType());
//    }  
//    
//    public function testHtml40Strict() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html40strict.html'));        
//        $this->assertTrue($identifier->hasDocumentType());
//    }
//  
//    public function testHtml40Transitional() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html40transitional.html'));        
//        $this->assertTrue($identifier->hasDocumentType());
//    }    
//    
//    public function testHtml40Frameset() {
//        $identifier = new HtmlDocumentTypeIdentifier();        
//        $identifier->setHtml($this->getFixture('html40frameset.html'));        
//        $this->assertTrue($identifier->hasDocumentType());
//    }     
}