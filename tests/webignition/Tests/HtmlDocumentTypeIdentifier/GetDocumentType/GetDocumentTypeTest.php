<?php

namespace webignition\Tests\HtmlDocumentTypeIdentifier\GetDocumentType;

use webignition\Tests\HtmlDocumentTypeIdentifier\BaseTest;

use webignition\HtmlDocumentTypeIdentifier\HtmlDocumentTypeIdentifier;
use webignition\HtmlDocumentType\Generator;

abstract class GetDocumentTypeTest extends BaseTest {
    
    protected $generator;
    protected $identifier;
    protected $expectedDoctype;
    
    public function setUp() {
        $this->setTestFixturePath(__CLASS__, $this->getName());
        
        $this->generator = new Generator();
        $expectedDoctypeCollection = $this->getKeyNormalisedDoctypeCollection($this->generator->getAllKnown());
        $underTestDoctypeCollection = $this->getKeyNormalisedDoctypeCollection($this->getUnderTestDoctypeCollection());
        
        $dataKey = $this->getDataKey();
        
        $this->expectedDoctype = $expectedDoctypeCollection[$dataKey];
        $this->identifier = new HtmlDocumentTypeIdentifier();        
        $this->identifier->setHtml($this->generateFixtureFromTemplate($dataKey, $underTestDoctypeCollection[$dataKey]));      
    }
    
    abstract protected function getUnderTestDoctypeCollection();    
    
    private function generateFixtureFromTemplate($key, $doctypeString) {
        $key = preg_replace('/-alternative[0-9]?/', '', str_replace(array(
            '-legacy-compat'
        ), '', $key));
        
        return str_replace('{{DOCTYPE}}', $doctypeString, $this->getFixture('Templates/'.$key . '.html'));       
    }
   
    
    public function testHtml_2() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }    
    
    public function testHtml_2_Alternative() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    } 
    
    public function testHtml_32() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_32_Alternative1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_32_Alternative2() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_4_Strict() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
   
    public function testHtml_4_Transitional() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_4_Frameset() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_401_Strict() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function tsetHtml_401_Transitional() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_401_Frameset() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_5() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_5_Legacy_Compat() {
        $this->assertEquals('<!DOCTYPE html>', $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_1_Strict() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }        
    
    public function testXhtml_1_Transitional() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_1_Frameset() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }
    
    public function testXhtml_Basic_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Basic_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Print_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Mobile_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Mobile_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Mobile_12() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Rdfa_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Rdfa_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    } 
    
    public function testXhtml_Aria_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testXhtml_Aria_1_Alternative() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }      
    
    public function testHtml_Aria_401() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_Rdfa_401_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   

    public function testHtml_rdfa_401_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_Rdfalite_401_11() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }   
    
    public function testHtml_Iso15445_1() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }     

    public function testHtml_Iso15445_1_Alternative() {        
        $this->assertEquals($this->expectedDoctype, $this->identifier->getDocumentTypeString());
    }  
}